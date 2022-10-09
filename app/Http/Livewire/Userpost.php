<?php

namespace App\Http\Livewire;

use App\Models\Articles;
use Livewire\Component;
use Livewire\WithPagination;

class Userpost extends Component
{
    use WithPagination;
    public $search;
    public function render()
    {
        $query = Articles::query();
        $articles = [];

        if ($this->search !== null) {
            $query->when($this->search !== null, function ($q) {
                $q->where('title',  'like', '%' . strtolower($this->search) . '%');
            });
        }
        $articles = $query->orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->paginate(6);
        return view('livewire.userpost', compact('articles'));
    }
}
