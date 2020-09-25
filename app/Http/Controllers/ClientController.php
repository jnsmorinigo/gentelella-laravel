<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index()
    {
        $client = new Client();
        $clients = $client->where('user_id', Auth::user()->id)->get();

        return view('client', compact('clients'));
    }
}
