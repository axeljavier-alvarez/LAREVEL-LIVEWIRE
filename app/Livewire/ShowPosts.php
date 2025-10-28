<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class ShowPosts extends Component
{

    public $titulo;

    /*
    public function mount($title){
        $this->titulo = $title;
    } */

    public function render()
    {
        $posts = Post::all();
        return view('livewire.show-posts', compact('posts'));
    }
}
