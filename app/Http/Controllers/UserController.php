<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use DB;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('pages/user',[
            'active' => 'user',
            'user' => $user,
        ]);
    }

    public function edit(User $user)
    {
        return view(
            'pages/form',
            [
                'active' => 'user',
                'user' => $user,
                'url' => 'user.update',
            ]
        );
    }

    public function update(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'nama'         => 'required',
            'email'       => [
                                'required', 
                            ],
            'no_telpon'       => 'required|numeric',
            'alamat'       => 'required',
            'tempat_vaksin'       => 'required',
            'status'       => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('user')
                ->withErrors($validator)
                ->withInput();
        }

        
        $user->user_nama = $request->input('nama');
        $user->user_email = $request->input('email');
        $user->user_notelp = $request->input('no_telpon');
        $user->user_alamat = $request->input('alamat');
        $user->user_tempat_vaksin = $request->input('tempat_vaksin');
        $user->user_status = $request->input('status');
        $user->save();
        
        return redirect()
            ->route('user')
            ->with('message', 'Data berhasil diedit');
    }

    public function destroy(User $user)
    {
        $user->forceDelete();

        return redirect()
            ->route('user')
            ->with('message', 'Data berhasil dihapus');
    }
}

