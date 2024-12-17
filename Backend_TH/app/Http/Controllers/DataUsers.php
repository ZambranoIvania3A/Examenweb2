<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataUsers extends Controller
{
    public function obtenerusuarios()
    {
        $users = User::all();
        return response()->json($users);
    }
}
