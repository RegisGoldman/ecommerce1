<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function Contact(){
        return view('pages.contact');
    }


    public function ContactForm(Request $request){

        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['message'] = $request->message;
        DB::table('contact')->insert($data);
        $notification=array(
                'messege'=>'Votre message a été envoyé avec succès',
                'alert-type'=>'success'
                );
                return Redirect()->back()->with($notification); 
    }

    public function AllMessage(){
        $message =	DB::table('contact')->get();
        return view('admin.contact.all_message',compact('message'));
        }

    public function MessageDelete($id){

        DB::table('contact')->where('id',$id)->delete();
        $notification=array(
                'messege'=>'Message supprimé avec succès',
                'alert-type'=>'success'
                );
                return Redirect()->back()->with($notification);
    }

    public function ViewMessage($id){

        $contact = DB::table('contact')->where('contact.id',$id)->get();
                return view('admin.contact.view_message',compact('contact'));
    }

}
