<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ListPost extends Component
{
    public $updateStateId = 0; 
    public $body = 0;

    protected $listeners = [
        'postCreated'=> '$refresh'//fungsi untuk auto refresh setelah memasukan catatan
    ];
    public function render()
    {
        return view('livewire.list-post',[
            'posts'=> Post::latest()->get()
        ]);
    }

    public function showUpdateForm($postId)#update dengan id memunculkan catatan yang belum di update di form
    {
        $post = Post::find($postId);
        $this->body = $post->body;
        $this->updateStateId = $postId;
    }
    public function update($postId) //fungsi mengedit dah melakukan penyimpan 
    {
        $post = Post::find($postId);
        $post->body = $this->body;
        $post->save();
        $this->updateStateId = 0;
    }
    public function delete($postId)//fungsi untuk hapus catatan
    {
        $post = Post::find($postId);
        $post->delete();
    }
}
