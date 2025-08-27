<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DummyUserController extends Controller
{
    public function insert()
    {
        DB::table('users')->insert([
            'name' => 'ダミーユーザー',
            'email' => 'dummy@example.com',
            'password' => bcrypt('password123'),
        ]);
        return response()->json(['result' => 'OK']);
    }
}
