<?php

namespace App\Http\Controllers;

use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function show()
    {
        $user = auth()->user();
        return view('profiles.show', compact(['user']));
    }

    public function update(Request $request)
    {
        $data = $request->all();
        if (request('avatar')) {
            $data['avatar'] = request('avatar')->store('avatars');
        }
        me()->update($data);

        return redirect()
            ->route('profile.show')
            ->with('message', 'Votre profil a été mis a jour');
    }

    public function password()
    {
        $user = auth()->user();
        return view('profiles.password', compact(['user']));
    }

    public function passUpdate(Request $request)
    {
        $request->validate([
            'oldpassword' => [new MatchOldPassword],
            'password' => ['required', 'min:4'],
            'password-confirmation' => ['same:password'],
        ]);

        $user = User::find(auth()->id());
        $user->update([
            'password' => $request->password
        ]);

        return redirect()
            ->route('profile.password')
            ->with('message', 'Votre mot de passe a été changé avec succès');
    }
}
