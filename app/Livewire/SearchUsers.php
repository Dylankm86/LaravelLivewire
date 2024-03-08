<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchUsers extends Component
{
    public $search = '';

    public function render()
    {
        $users = User::where('name', 'like', '%' . $this->search . '%')->get();

        return view('livewire.search-users', [
            'users' => $users,
        ]);
    }

    public function submit()
    {
        // This method doesn't need to do anything. It's just here to cause Livewire to refresh the component when the form is submitted.
    }
}
