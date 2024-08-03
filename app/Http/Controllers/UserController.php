<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user_profile', compact('users'));
    }

    public function editUser($id)
    {
        $user = User::find($id);

        return view('edit_user', compact('user'));
    }


    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'foto_user' => 'image|mimes:jpeg,png,jpg|max:2048',
            'password' => 'confirmed'
        ]);

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->no_hp = $request->no_hp;
        $user->nip = $request->nip;


        if ($request->hasFile('foto_user')) {

            if ($user->foto_user) {
                Storage::delete('public/foto_user/' . $user->foto_user);
            }


            $filename = $user->id . '_' . Str::slug($user->name) . '.' . $request->file('foto_user')->getClientOriginalExtension();
            $request->file('foto_user')->storeAs('public/foto_user', $filename);
            $user->foto_user = $filename;
        }


        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect('/user_profile')->with('successEditUser', 'Perubahan Berhasil Disimpan.');
    }


    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/')->with('successDeleteUser', 'Pengguna Berhasil Dihapus.');
    }


    public function search(Request $request)
    {
        $search = $request->search;

        $users = User::where('name', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->orWhere('no_hp', 'like', '%' . $search . '%')
            ->get();

        return view('user_profile', compact('users'));
    }

    public function aboutApp()
    {
        return view('tentang');
    }
}
