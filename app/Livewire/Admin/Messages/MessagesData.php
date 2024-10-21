<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class MessagesData extends Component
{
    use WithPagination;

    public $search;
    protected $queryString = ['search'=>['except'=>'']];
    protected $listeners = ['refreshData'=>'$refresh'];
        

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $messages = Message::where('name', 'like', '%'.$this->search.'%')->orWhere('email', 'like', '%'.$this->search.'%')->paginate(5);
        
        return view('admin.messages.messages-data' , compact('messages'));
    }
}
