<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

<<<<<<< HEAD

=======
>>>>>>> 9d11af938eec3fd39e6b40ea7b3504843705655f
class PostList extends Component
{
    public function render()
    {
<<<<<<< HEAD
        return view('livewire.post.post-list', [
            'posts' => Post::all()
        ]);
=======
        return view('livewire.post.post-list',[
        'posts' => Post::all()
    ]);
>>>>>>> 9d11af938eec3fd39e6b40ea7b3504843705655f
    }
}
