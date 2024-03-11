<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function addtocart(Request $request)
    {
        if($request->user_id == ""){
            return response()->json(["status"=>0,"message"=>trans('messages.user_required')],400);
        }
        if($request->product_id == ""){
            return response()->json(["status"=>0,"message"=>trans('messages.product_required')],400);
        }
        if($request->vendor_id == ""){
            return response()->json(["status"=>0,"message"=>trans('messages.vendor_required')],400);
        }
        if($request->product_name == ""){
            return response()->json(["status"=>0,"message"=>trans('messages.product_name_required')],400);
        }
        if($request->qty == ""){
            return response()->json(["status"=>0,"message"=>trans('messages.qty_required')],400);
        }
        if($request->price == ""){
            return response()->json(["status"=>0,"message"=>trans('messages.price_required')],400);
        }
        $data=Cart::where('user_id',$request->user_id)->get();
        if(count($data) == 0) {
            $dataval=array('user_id'=>$request->user_id,'product_id'=>$request->product_id,'vendor_id'=>$request->vendor_id,'product_name'=>$request->product_name,'image'=>$request->image,'qty'=>$request->qty,'price'=>$request->price,'variation'=>$request->variation,'attribute'=>$request->attribute,'tax'=>$request->tax,'shipping_cost'=>$request->shipping_cost);
            $cartdata=Cart::create($dataval);
            if($cartdata){
                return response()->json(['status'=>1,'message'=>trans('messages.successfull')],200);
            }else{
                return response()->json(['status'=>0,'message'=>trans('messages.fail')],200);
            }
        } else {
            $checkcart=Cart::where('user_id',$request->user_id)->first();
            if (@$checkcart->vendor_id != $request->vendor_id && @$checkcart->user_id == $request->user_id) {
                return response()->json(["status"=>0,"message"=>trans('messages.clear_cart_note')],400);
            } else {
                $dataval=array('user_id'=>$request->user_id,'product_id'=>$request->product_id,'vendor_id'=>$request->vendor_id,'product_name'=>$request->product_name,'image'=>$request->image,'qty'=>$request->qty,'price'=>$request->price,'variation'=>$request->variation,'attribute'=>$request->attribute,'tax'=>$request->tax,'shipping_cost'=>$request->shipping_cost);
                $cartdata=Cart::create($dataval);
                if($cartdata){
                    return response()->json(['status'=>1,'message'=>trans('messages.successfull')],200);
                }else{
                    return response()->json(['status'=>0,'message'=>trans('messages.fail')],200);
                }
            }
        }
    }
    public function getcart(Request $request)
    {
        if($request->user_id == ""){
            return response()->json(["status"=>0,"message"=>trans('messages.user_required')],400);
        }
        $data=Cart::select('id','product_id','product_name','qty','price','variation','attribute',\DB::raw("CONCAT('".url('/storage/app/public/images/products/')."/', image) AS image_url"))
        ->where('user_id', $request->user_id)
        ->orderBy('id', 'DESC')
        ->get();
        if($data){
            return response()->json(['status'=>1,'message'=>trans('messages.successfull'),'data'=>$data],200);
        }else{
            return response()->json(['status'=>0,'message'=>trans('messages.fail')],200);
        }
    }
    public function deleteproduct(Request $request)
    {
        if($request->user_id == ""){
            return response()->json(["status"=>0,"message"=>trans('messages.user_required')],400);
        }
        if($request->cart_id == ""){
            return response()->json(["status"=>0,"message"=>trans('messages.user_required')],400);
        }
        $data=Cart::where('user_id',$request->user_id)->where('id',$request->cart_id)->delete();
        if($data){
            return response()->json(['status'=>1,'message'=>trans('messages.successfull')],200);
        }else{
            return response()->json(['status'=>0,'message'=>trans('messages.fail')],200);
        }
    }
    public function qtyupdate(Request $request)
    {
        if($request->cart_id == ""){
            return response()->json(["status"=>0,"message"=>trans('messages.cart_id_required')],400);
        }
        if($request->qty == ""){
            return response()->json(["status"=>0,"message"=>trans('messages.qty_required')],400);
        }
        $updatedata=array('qty'=>$request->qty);
        $data=Cart::find($request->cart_id)->update($updatedata);
        if($data){
            return response()->json(['status'=>1,'message'=>trans('messages.successfull')],200);
        }else{
            return response()->json(['status'=>0,'message'=>trans('messages.fail')],200);
        }
    }
}
