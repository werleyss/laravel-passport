<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $query = http_build_query([
        'client_id'     => '2',
        'redirect_uri'  => 'http://localhost:9999/callback',
        'response_type' => 'code',
        'scope'         => ''
    ]);

    return redirect("http://localhost:8000/oauth/authorize?$query");
});

Route::get('callback', function (Request $request){
    $code = $request->get('code');

    $http = new \GuzzleHttp\Client();

    $response = $http->post('http//localhost:8000/oauth/token', [
        'form_params'   => [
            'client_id'         => '2',
            'client_secret'     => 'tkAo4kWWyMrf5qM8EfQLV2p5xDiJoMcI0yIU71NR',
            'redirect_uri'      => 'http://localhost:9999/callback',
            'code'              => $code,
            'grant_type'        => 'authorization_code'
        ]
    ]);
});
