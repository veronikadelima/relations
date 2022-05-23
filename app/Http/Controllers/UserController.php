<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $r) {
        $users = User::all();
        return $users;
    }

    public function findOne(Request $r) {
        $user = User::find($r->id);
        return $user;
    }

    public function add(Request $r) {
        $user = $r->only('name', 'email', 'password');
        $newUser = User::create($user);
        return $newUser;
    }
}