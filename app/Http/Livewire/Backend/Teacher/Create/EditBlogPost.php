<?php

namespace App\Http\Livewire\Backend\Teacher\Create;

use App\Models\frontend\Post;
use App\Models\PostDraft;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class EditBlogPost extends Component
{
  use WithFileUploads;

  # query String
  protected $queryString = ['postId'];
  public $postId;

  /**
   * Mount function
   */
  public function mount()
  {
    $postInfo = Post::find($this->postId);
    $this->title = $postInfo->title;
    $this->shortDescription = $postInfo->short_desc;
    $this->blogText = $postInfo->text;
  }

  # public variables
  public $blogText, $title, $photo, $shortDescription, $url;

   /**
   * Save blog image
   */
  public function saveBlogImage()
  {
    // dd($this->photo);
    $image = $this->photo;
    $imageName = $image->getClientOriginalName();
    $imageNewName = $imageName.time().'.'.$image->extension();
    $photo = Image::make($image)->fit(512);
    Storage::disk('google')->put('1A5_dQhGmLgG1x_LwaFSzpqTJj2IKdDBX/'.$imageNewName, (string) $photo->encode());
    $this->url = Storage::disk('google')->url('1A5_dQhGmLgG1x_LwaFSzpqTJj2IKdDBX/'.$imageNewName);
  }

  /**
   * Check for ckeditor
   */
  public function ckEditor()
  {
    $this->validate([
      'blogText' => 'required',
      'title' => 'required|unique:posts,title|max:100',
      'photo' => 'required|image|max:2048',
      'shortDescription' => 'required|max:300'
    ], [
      'title.unique' => 'Already, this blog has been posted. Please see the Forum page',
      'photo.image' => "You have to enter an image. Another file type won't be accepted",
      'shortDescription.max' => "Short description shouldn't more than 300 characters"
    ]);
    $post = Post::find($this->postId);
    $post->title = $this->title;
    $post->slug = Str::slug($this->title);
    $this->saveBlogImage();
    $post->cover_image = $this->url;
    $post->short_desc = $this->shortDescription;
    $post->text = $this->blogText;
    $post->action = 'in-process';
    $post->update();
    session()->flash('postSaved', 'Post has been saved successfuly. It is in process, will be published in short.');
    $this->dispatchBrowserEvent('redirectToDashboard');
  }

  /**
   * Save as draft
   */
  public function saveDraft()
  {
    # check exist
    $draftExist = PostDraft::where('title', $this->title)->first();
    if ($draftExist) {
      return $this->addError('alreadyExist', "Already this blog has been saved in draft. Please check your 'Drafted Blog' page");
    }
    $this->validate([
      'title' => 'required|max:100',
      'shortDescription' => 'max:300',
    ], [
      'shortDescription.max' => "Short description shouldn't be more than 300 characters"
    ]);
    $post = new PostDraft();
    $post->username = Auth::user()->username;
    $post->title = $this->title;
    $post->slug = Str::slug($this->title);
    $post->short_desc = $this->shortDescription;
    $post->text = $this->blogText;
    $post->save();
    Post::find($this->postId)->delete();
    session()->flash('postDrafted', 'Post has been drafted successfuly. You can edit and publish it easily');
    $this->dispatchBrowserEvent('redirectToDashboard');
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.teacher.create.edit-blog-post');
  }
}
