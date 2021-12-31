<?php

namespace App\Http\Livewire\Superadmin\Create;

use App\Models\PostDraft;
use Livewire\Component;

class DraftedBlogPost extends Component
{
    public function render()
    {
        return view('livewire.superadmin.create.drafted-blog-post', [
          'posts' => PostDraft::orderBy('id', 'DESC')->get()
        ]);
    }
}
