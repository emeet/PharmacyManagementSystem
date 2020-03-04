<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
class PharmacistRegisterController extends Controller
{
    public function registers(Request $request)
    {
        $this->validate($request,[
            'name' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'password' => 'required', 'string', 'min:6', 'confirmed',
        ]);

        $user = new User;

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();


        $user
            ->roles()
            ->attach(Role::where('name', 'pharmacist')->first());
        return redirect('/manage');
    }
}
