<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Rules\ValidPassword;

class UpdatePasswordController extends Controller
{
    //

    public function index()
    {
        return view('updatePassword');
    }

    public function changePass(Request $request)
    {
        $request->validate([
            'oldpass' => ['required', new ValidPassword],
            'newpass' => 'required|min:6',
            'newpassconfirm' => 'required|same:newpass'
        ]);

        $user = User::find(Auth::user()->id);
        $user->password = Hash::make($request->newpass);
        $user->save();



        return redirect()->route('userProfile.index')->with('success', 'Password Change Successful');

    }
}
