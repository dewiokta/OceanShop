<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    public function edit(){
        return view('edit');
    }

    public function update(Request $request){

        DB::table('users')->where('id',$request->id)->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            // 'password' => $request->get('password'),
            'alamat' => $request->get('alamat'),
            'no_telp' => $request->get('no_telp')
        ]);
        return view('edit'); 
    }
}
