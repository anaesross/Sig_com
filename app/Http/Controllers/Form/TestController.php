<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    public function listAllUsers()
    {
        $users = User::all();
//        dd($users);
        return view ('listAlluser',[
            'users' => $users
        ]);

    }
    public function listUser(User $user)
    {
//       dd($user);
        return view ('listUser',[
            'user'=>$user            
        ]);

    }
}
