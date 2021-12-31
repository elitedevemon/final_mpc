<?php

namespace App\Http\Controllers\adminpanel\create;

use App\Http\Controllers\Controller;
use App\Models\frontend\Post;
use App\Models\PostDraft;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class BlogPost extends Controller
{
  public function index()
  {
    return view('superadmin.pages.create.blog-post');
  }
  public function save(Request $request)
  {
    if ($request->save) {
      $request->validate([
        'title' => 'required|min:15|max:300',
        'short_desc' => 'required|min: 150|max:350',
        'edited_text' => 'required'
      ]);
      $slug = Str::slug($request->title);
      $image = $request->file('cover_photo');
      $imageName = $image->getClientOriginalName();
      $imageNewName = $imageName.time().'.'.$image->extension();
      $image_resize = Image::make($image->getRealPath());
      $image_resize->resize(500, 150);
      $image_resize->save(public_path('images/post_images/'. $imageNewName));
      $post = new Post();
      $post->title = $request->title;
      $post->slug = $slug;
      $post->cover_image = $imageNewName;
      $post->short_desc = $request->short_desc;
      $post->text = $request->edited_text;
      $post->save();
      // $id = $post->id;
      return back()->with('succ_message', 'Post has been created successfuly');
    }elseif ($request->draft) {
      $request->validate([
        'title' => 'required|min:15|max:300',
        'short_desc' => 'required|min: 150|max:350',
      ]);
      $slug = Str::slug($request->title);
      $image = $request->file('cover_photo');
      $imageName = $image->getClientOriginalName();
      $imageNewName = $imageName.time().'.'.$image->extension();
      $image_resize = Image::make($image->getRealPath());
      $image_resize->resize(500, 150);
      $image_resize->save(public_path('images/post_images/'. $imageNewName));
      $post = new PostDraft();
      $post->title = $request->title;
      $post->slug = $slug;
      $post->cover_image = $imageNewName;
      $post->short_desc = $request->short_desc;
      $post->text = $request->edited_text;
      $post->save();
      // $id = $post->id;
      return back()->with('succ_message', 'Post has been drafted successfuly');
    }
  }

  /**
   * Drafted post view
   */
  public function drafted()
  {
    return view('superadmin.pages.create.drafted-blog-post');
  }

  public function draftedView($language, $slug)
  {
    $post = PostDraft::where('slug', $slug)->first();
    return view('superadmin.pages.create.selected-draft-post', compact('post'));
  }

  public function saveDraftPost(Request $request, $language, $slug)
  {
    if ($request->save) {
      $request->validate([
        'title' => 'required|min:15|max:300',
        'short_desc' => 'required|min: 150|max:350',
        'edited_text' => 'required'
      ]);
      $title_slug = Str::slug($request->title);
      $image = $request->file('cover_photo');
      $imageName = $image->getClientOriginalName();
      $imageNewName = $imageName.time().'.'.$image->extension();
      $image_resize = Image::make($image->getRealPath());
      $image_resize->resize(500, 150);
      $image_resize->save(public_path('images/post_images/'. $imageNewName));
      $post = new Post();
      $post->title = $request->title;
      $post->slug = $title_slug;
      $post->cover_image = $imageNewName;
      $post->short_desc = $request->short_desc;
      $post->text = $request->edited_text;
      $post->save();
      PostDraft::where('slug', $slug)->delete();
      // $id = $post->id;
      return redirect()->route('create.blog.post', app()->getLocale())->with('succ_message', 'Post has been saved successfuly');
    }elseif ($request->draft) {
      $request->validate([
        'title' => 'required|min:15|max:300',
        'short_desc' => 'required|min: 150|max:350',
      ]);
      $image = $request->file('cover_photo');
      $imageName = $image->getClientOriginalName();
      $imageNewName = $imageName.time().'.'.$image->extension();
      $image_resize = Image::make($image->getRealPath());
      $image_resize->resize(500, 150);
      $image_resize->save(public_path('images/post_images/'. $imageNewName));
      $post = PostDraft::where('slug', $slug)->first();
      $post->title = $request->title;
      $post->cover_image = $imageNewName;
      $post->short_desc = $request->short_desc;
      $post->text = $request->edited_text;
      $post->save();
      // $id = $post->id;
      return back()->with('succ_message', 'Post has been drafted successfuly');
    }
  }
}
