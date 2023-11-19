<?php

namespace App\Http\Controllers;

use App\Models\msuser;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function viewregister() {
        return view("/register");
    }

    function createuser(Request $request) {
        $request->validate([
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        User::create($data);
        return redirect('login');
    }

    function viewprofile($id) {
        $data = User::where('id', $id)->get();
        // return $data;
        return view('profile')->with('data', $data);
    }

    function getbackprofile(Request $request) {  
        $ret_email = $request->cookie('cookie_email');
        $data = User::where('email', $ret_email)->get();

        $value = [];
        foreach ($data as $jsonString) {
            $decodedData = json_decode($jsonString, true);
            $value[] = [
                'id' => $decodedData['id'],
            ];
        }

        foreach ($value as $data) {
            $id = $data['id'];
        }
        
        return redirect('/profile/' . $id);
    }
    
    function editprofile(Request $request, $id){
        $resource = User::findOrFail($id);
        $resource->update($request->all());

        return redirect('/profile/' . Auth::id());
    }

    function viewlogin() {
        return view('login');
    }

    function checklogin(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            $data = User::where('email', $request->email)->get();
            $value = [];
            foreach ($data as $jsonString) {
                $decodedData = json_decode($jsonString, true);
                $value[] = [
                    'id' => $decodedData['id'],
                ];
            }

            foreach ($value as $data) {
                $id = $data['id'];
            }
            Cookie::queue('cookie_email', $infologin['email'], 60);
            return redirect('/profile/' . Auth::id());
        } else {
            return $infologin;
        }
        
    }

    function logout() {
        Auth::logout();
        Cookie::queue(Cookie::forget('cookie_email'));
        return redirect('/login');
    }

    function viewhome() {
        return view('/home');
    }


}
