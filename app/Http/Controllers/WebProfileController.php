<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Alert;
use App\Models\Subscribe;
use Illuminate\Support\Facades\Validator;

class WebProfileController extends Controller
{
    public function index ()
    {
        return view('themes.profile.spa.spa');

    }

    public function post_subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:subscribes',
        ]);
        if ($validator->fails()) {

            Alert::warning('Trimakasih', 'Email Anda telah terdaftar!');

            return redirect()->back();

        }

        $data['email'] = $request->email;
        $save = Subscribe::create($data);

        if($save){
            Alert::success('OK', 'Subscribe Success!');
        }else{
            Alert::error('Subscribe Error', 'Opps...!');
        }

        return redirect()->back();

    }

    public function post_message (Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'name' => 'required',
            'message' => 'required'
        ]);
        if ($validator->fails()) {

            Alert::warning('Trimakasih', 'Ada isian yang belum diisi!');

            return redirect()->back();

        }

        $data['email']= $request->email;
        $data['website'] = $request->website;
        $data['message'] = $request->message;
        $data['name'] = $request->name;

        $save =  Contact::create($data);

        if($save){
            Alert::success('Trimakasih', 'Pesan Terkirim!');
        }else{
            Alert::error('Pengiriman Pesan Gagal', 'Opps...!');
        }
        return redirect()->back();

    }
}
