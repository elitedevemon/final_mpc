<?php

namespace App\Http\Livewire\Backend\Teacher\Create;

use App\Models\frontend\Post;
use App\Models\PostDraft;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class BlogPost extends Component
{
  use WithFileUploads;

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
      'title' => 'required|unique:posts,title',
      'photo' => 'required|image|max:2048',
      'shortDescription' => 'required'
    ], [
      'title.unique' => 'Already, this blog has been posted. Please see the Forum page',
      'photo.image' => "You have to enter an image. Another file type won't be accepted"
    ]);
    $post = new Post();
    $post->username = Auth::user()->username;
    $post->title = $this->title;
    $post->slug = Str::slug($this->title);
    $this->saveBlogImage();
    $post->cover_image = $this->url;
    $post->short_desc = $this->shortDescription;
    $post->text = $this->blogText;
    $post->save();
    session()->flash('postSaved', 'Post has been saved successfuly. It is in process, will be published in short.');
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
      'title' => 'required',
    ]);
    $post = new PostDraft();
    $post->username = Auth::user()->username;
    $post->title = $this->title;
    $post->slug = Str::slug($this->title);
    $this->saveBlogImage();
    $post->cover_image = $this->url;
    $post->short_desc = $this->shortDescription;
    $post->text = $this->blogText;
    $post->save();
    session()->flash('postDrafted', 'Post has been drafted successfuly. You can edit and publish it easily');
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.teacher.create.blog-post');
  }
}
