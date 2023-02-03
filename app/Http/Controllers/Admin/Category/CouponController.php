<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function Coupon(){
        $coupon = DB::table('coupons')->get();
        return view('admin.coupon.coupon',compact('coupon'));
    }

    public function StoreCoupon(Request $request){
        $data = array();
        $data['coupon'] = $request->coupon;
        $data['discount'] = $request->discount;
        DB::table('coupons')->insert($data);
        $notification=array(
            'messege'=>'Coupon inséré avec succès',
            'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);

    }

    public function DeleteCoupon($id){
        DB::table('coupons')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Coupon supprimé avec succès',
            'alert-type'=>'success'
                );
            return Redirect()->back()->with($notification);  

    }

    public function EditCoupon($id){

        $coupon = DB::table('coupons')->where('id',$id)->first();
        return view('admin.coupon.edit_coupon',compact('coupon'));
        
        }
        
        
        public function UpdateCoupon(Request $request, $id){
            $data = array();
            $data['coupon'] = $request->coupon;
            $data['discount'] = $request->discount;
            DB::table('coupons')->where('id',$id)->update($data);
            $notification=array(
                    'messege'=>'Coupon actualisé avec succès',
                    'alert-type'=>'success'
                    );
                    return Redirect()->route('admin.coupon')->with($notification); 
        
        }

        public function Newsletter(){
            $sub = DB::table('newsletters')->get();
            return view('admin.coupon.newsletter',compact('sub'));
        }

        public function DeleteSub($id){
            DB::table('newsletters')->where('id',$id)->delete();
            $notification=array(
                    'messege'=>'Abonné supprimé avec succès',
                    'alert-type'=>'success'
                        );
                    return Redirect()->back()->with($notification);
            }
        
}
