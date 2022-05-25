<?php

namespace App\Http\Controllers;

use App\Models\Address;
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
        return $user->address;
    }

    public function add(Request $r) {
        $datas = $r->only(['name', 'email', 'password']);
        $newUser = User::create($datas);
        return $newUser;
    }

}