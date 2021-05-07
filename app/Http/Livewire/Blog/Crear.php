<?php

namespace App\Http\Livewire\Blog;

use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Crear extends Component
{
    use WithFileUploads;
    public $title,$text,$photo;
    public function render()
    {
        return view('livewire.blog.crear');
    }

    public function guardar()
    {
        $this->validate([
            'title'=>'required',
            'text'=>'required',
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        $path=$this->photo->store('public/blogs');

        $blog=new Blog();
        $blog->title=$this->title;
        $blog->text=$this->text;
        $blog->photo=$path;
        $blog->user_id=Auth::id();
        $blog->save();
        $this->limpiar();
        $this->emit('actualizarBlog');
    }
    public function limpiar()
    {
        $this->title='';
        $this->text='';
        $this->photo='';
    }
}
