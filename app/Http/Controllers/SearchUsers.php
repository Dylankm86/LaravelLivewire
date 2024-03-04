<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchUsers extends Controller
{
    public $search = '';
 
    public function render()
    {
        return view('livewire.search-users', [
            'users' => User::where('name', $this->search)->get(),
        ]);
    }

}
