<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function userTable()
    {
        $user = User::paginate(10);
        return view('admin.usertable');
    }
}
