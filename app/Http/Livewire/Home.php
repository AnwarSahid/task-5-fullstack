<?php

namespace App\Http\Livewire;

use App\Models\Articles;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
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
        $articles = $query->orderBy('created_at', 'desc')->paginate(15);
        return view('livewire.home', compact('articles'));
    }
}
