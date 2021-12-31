<?php

namespace App\Http\Livewire\Superadmin\Create;

use Livewire\Component;

class SelectedDraftPost extends Component
{
  public $title, $cover_photo, $short_desc, $edited_text, $slug;

  public function mount($post)
  {
    $this->title = $post->title;
    $this->slug = $post->slug;
    $this->cover_photo = $post->cover_image;
    $this->short_desc = $post->short_desc;
    $this->edited_text = $post->text;
  }

  public function render()
  {
    return view('livewire.superadmin.create.selected-draft-post');
  }
}
