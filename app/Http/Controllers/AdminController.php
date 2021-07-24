<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\JwtHelper;
use Illuminate\Support\Facades\Hash;
use DB;
class AdminController extends Controller
{
    public function index()
    {
        return view('pages/auth/login');
    }
    
    public function dashboard()
    {
        return view('pages/home-admin',[
            'active' => 'home-admin'
        ]);
    }

    public function loginAdmin(Request $request)
    {

        $user = DB::table('tb_admin')
                ->where('admin_username', '=', $request->username)
                ->first();
        
        if (!$user) {
            return back()->with("message", "Username Salah");
        }
        if (!Hash::check($request->password, $user->admin_password)) {
            return back()->with("message", "Password Salah");
        }

        $token = JwtHelper::BuatToken([$user->admin_nama,$user->admin_username,$user->admin_id]);

        // masukan data login ke session
        $request->session()->put('admin_nama', $user->admin_nama);
        $request->session()->put('admin_username', $user->admin_username);
        $request->session()->put('admin_id', $user->admin_id);
        $request->session()->put('token', $token);
        // redirect ke halaman home
        return redirect('covid-admin/dashboard')->with("pesan", "Selamat Datang " . session('admin_nama'));
        
    }


    public function register()
    {
        return view('pages/auth/register');
    }

    public function registerAdmin(Request $request)
    {
        $nama = $request->name;
        $email = $request->username;
        $password = $request->password;
        $pwd = Hash::make($password);

        $cek = DB::table('tb_admin')->where('admin_username', '=', $email)->first();
        if ($cek != NULL) {
            return back()->with('message', 'Username Sudah Terdaftar');
        } else {
            $data = array(
                'admin_nama' => $nama,
                'admin_username' => $email,
                'admin_password' => $pwd,
            );
            DB::table('tb_admin')->insert($data);
            return redirect()
                ->route('/')
                ->with('pesan', 'Register Sukses');
        }
    }

    function logout(Request $request)
    {
        $request->session()->forget('admin_nama');
        $request->session()->forget('admin_username');
        $request->session()->forget('admin_level');
        $request->session()->forget('admin_id');
        $request->session()->forget('token');
        // redirect ke halaman home
        return redirect('covid-admin')->with("pesan", "Anda Sudah Logout");
    }
}
