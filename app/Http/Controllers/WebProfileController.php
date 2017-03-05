<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Alert;
use App\Models\Subscribe;

class WebProfileController extends Controller
{
    public function index ()
    {

      //  alert()->success('You have been logged in.', 'Happy Nice Day!');
        return view('themes.profile.master');

    }

    public function post_subscribe(Request $request)
    {
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
