<?php

namespace App\Http\Controllers\adminpanel\create;

use App\Http\Controllers\Controller;
use App\Models\frontend\Post;
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
      $post->cover_image = $imageNewName;
      $post->short_desc = $request->short_desc;
      $post->text = $request->edited_text;
      $post->save();
      // $id = $post->id;
      return back()->with('succ_message', 'Post has been created successfuly');
    }
  }
}
