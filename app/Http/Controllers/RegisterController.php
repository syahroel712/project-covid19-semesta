<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;

class RegisterController extends Controller
{
    public function registrasi(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'nama'         => 'required',
            'email'       => 'required|unique:tb_user,user_email',
            'no_telpon'       => 'required|numeric',
            'alamat'       => 'required',
            'tempat_vaksin'       => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()
                ->route('registrasi')
                ->withErrors($validator)
                ->withInput();
        }

        $user->user_nama = $request->input('nama');
        $user->user_email = $request->input('email');
        $user->user_notelp = $request->input('no_telpon');
        $user->user_alamat = $request->input('alamat');
        $user->user_tempat_vaksin = $request->input('tempat_vaksin');
        $user->user_status = 'hide';
        $user->save();

        return redirect()
            ->route('registrasi')
            ->with('message', 'Sukses');
    }
}
