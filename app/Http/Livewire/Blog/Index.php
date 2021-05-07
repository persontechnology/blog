<?php

namespace App\Http\Livewire\Blog;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners=['actualizarBlog'];

   
    public $search = '';
    public $page = 1;
    public $xPage=6;

    protected $queryString = [
       
        'search' => ['except' => ''],
        'page' => ['except' => 1],
        
    ];

    public function mount()
    {
        
    }
    public function render()
    {
        $blogs=Blog::where('title', 'like', '%'.$this->search.'%')->latest()->paginate($this->xPage);
        $data = array('blogs' => $blogs);
        return view('livewire.blog.index',$data);
    }
    public function actualizarBlog()
    {
        $this->mount();
    }
    public function limpiar()
    {
        $this->search='';
        $this->xPage=6;
        $this->page=1;
    }
}
