<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use Illuminate\Http\Request;

class MalekTestProjectController extends Controller
{
    public function index(){
        return view('malek.coinIndex', [
            'coins' => Coin::orderBy('current_price', 'desc')->get(),
        ]);
    }
}
