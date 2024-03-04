<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchUsers extends Controller
{

    public function render()
{
    $users = User::all();

    return view('livewire.my-view', ['users' => $users]);
}

}
