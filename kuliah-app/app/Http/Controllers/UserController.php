<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(string $id): View
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }

    public function index(): View
    {
        $user = User::latest()->paginate(5);
        return view('user.index', compact('user'));
    }

    public function create(): View
    {
        return view('user.create');
    }
}
