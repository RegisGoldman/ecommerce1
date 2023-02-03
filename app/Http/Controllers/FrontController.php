<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontController extends Controller
{
    public function StoreNewsletter (Request $request){
        $validateData = $request->validate([
            'email' => 'required|Unique:newsletters|max:100',
        ]);

        $data = array();
        $data['email'] = $request->email;
        DB::table('newsletters')->insert($data);
        $notification=array(
            'messege'=>'Merci pour votre abonnement',
            'alert-type'=>'success'
            );
        return Redirect()->back()->with($notification);
    }

    public function OrderTracking (Request $request){
        $code = $request->code;

        $track = DB::table('orders')->where('status_code',$code)->first();
        if ($track) {
            // echo "<pre>";
            // print_r($track);
            return view('pages.tracking',compact('track'));
        } else {
            $notification=array(
                'messege'=>'Tracking Number is invalid',
                'alert-type'=>'error'
                );
            return Redirect()->back()->with($notification);
        }
        
    }
}
