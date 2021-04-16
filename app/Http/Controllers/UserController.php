<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        //return $user->name; // JSON
        return view('posts.index')
            ->with('title', $user->name )
            ->with('posts', $user->posts );
            //  'title', 'posts' sú moje premenné, ktoré vkladám do šablóny
    }
}
