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
            'OldPassword' => ['required', new ValidPassword],
            'NewPassword' => 'required|min:6',
            'NewPasswordConfirmed' => 'required|same:NewPassword'
        ]);

        $user = User::find(Auth::user()->id);
        $user->password = Hash::make($request->NewPassword);
        $user->save();



        return redirect()->route('userProfile.index')->with('success', 'Password Change Successful');

    }
}
