<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home', [
            'active' => 'home'
        ]);
    }

    public function listStatistik()
    {

        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://apicovid19indonesia-v2.vercel.app/api/indonesia/provinsi');
        $response = $request->getBody()->getContents();
        
        $str=str_replace("\r\n","",$response);
        $array_response = json_decode($str, true);

        return view('pages.statistik', [
            'active' => 'statistik',
            'datacovid' => $array_response,
        ]);
    }

    public function listRumahSakit()
    {

        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://dekontaminasi.com/api/id/covid19/hospitals');
        $response = $request->getBody()->getContents();
        
        $str=str_replace("\r\n","",$response);
        $array_response = json_decode($str, true);

        return view('pages.rumah-sakit', [
            'active' => 'rumah-sakit',
            'rumahsakit' => $array_response,
        ]);
    }

    public function listRegistrasi()
    {
        $user = DB::table('tb_user')
                ->where('user_status', 'show')
                ->get();

        return view('pages.registrasi', [
            'active' => 'registrasi',
            'user' => $user,
        ]);
    }

}
