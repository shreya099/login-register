<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\banner;
use App\about;
use App\category;
use App\dish;
use App\cart;
use Validator,Redirect,Response;
use DB;
use Session;
use Auth;
use App\Dishorder;
use App\Dishitem;
use App\User;
use Mail;
use Illuminate\Support\Str;



class FrontController extends Controller
{
    //
    public function index()
    { $i=1;
    	$d=banner::all();
    	$d1=about::all();
    	$d2=category::all();
    	
    
    	
    	return view('front.index',compact('d','d1','d2','i'));
    }
      public function showdish($id)
    { $d=category::find($id);
    	$d1=DB::table('dishes')->where('categorie_id', '=', $d->id)->get();
    	
    
    if($d1){
    	return view('front.shop',compact('d1'));
    }
    
    }
    public function showall()
    {
    	// $d=banner::all();
    	// $d1=about::all();
     $d2=category::all();
    	
    
    	
    	return view('front.show_all',compact('d2'));
    }
    public function showdetail($id)
    {
        $d=dish::find($id);
        $d1=DB::table('add_imgs')->where('dish_id', '=', $d->id)->get();
         if($d1){
        return view('front.detail',compact('d1','d'));
    }

        
    }
   
    public function addtocart(Request $a)
    {
      
       $session_id = Session::getId();
        // print_r($session_id);
        // die;
        // echo '<pre>';
        // print_r($a->all());
          if(Auth::check())
        {
            $useremail = Auth::user()->email;
            $item = Cart::where('user_email',$useremail)->get();

       
        $data = new Cart;
        $data->user_email = $useremail;
        $data->dish_id = $a->dish_id;
        $data->dish_name = $a->dish_name;
        $data->dish_price = $a->dish_price;
        $data->dish_img = $a->dish_img;
        $data->dish_size = $a->dish_size;
        $data->dish_quantity = $a->dish_quantity;
        $data->session_id = $session_id;

        $data->save();


        if($data)
        {
            return redirect('cart');
        }
        }
       else
        {
        $data = new Cart;
        $data->dish_id = $a->dish_id;
        $data->dish_name = $a->dish_name;
        $data->dish_price = $a->dish_price;
        $data->dish_img = $a->dish_img;
        $data->dish_size = $a->dish_size;
        $data->dish_quantity = $a->dish_quantity;
        $data->session_id = $session_id;

        $data->save();


        if($data)
        {
            return redirect('cart');
        }
      }
     
        
    }
    // public function search(Request $r)
    // {
    //     $d=Dish::where([
    //         ['dish_name','!=',NULL],
    //         [function ($query) use ($r){
    //             if(($term=$r->term))
    //             {
    //                 $query->orWhere('dish_name','LIKE','%' .$term. '%')->get();
    //             }
    //             print_r($r);
    //         }


    //         ]



    //     ])
    //     ->orderBy("id","desc")
    //     ->paginate(9);
    //     // return view('front.master',compact('d'))
    //     // ->with('i',(request()->input('page',1)-1) * 5);
    // }

    public function cart()

    { 
        if(Auth::check())
        {
            
             $useremail=Auth::user()->email;
             
              $d1=cart::where('user_email',$useremail)->get();
              // if(cart::where('user_email','')){
              //    $session_id=Session::getId();
              //    cart::where('session_id',$session_id)->update(['user_email'=>$useremail]);
              //    $d1=cart::where('user_email',$useremail)->get();
                
              // }


        }
        else{
        $session_id=Session::getId();
        $d1=cart::where('session_id',$session_id)->get();
       
           }
     $d2=category::all();
        return view('front.cart',compact('d1','d2'));
}
    public function checkout()
    {
        # code...
        $useremail=Auth::user()->email;
          $d1=cart::where('user_email',$useremail)->get();
        return view('front.checkout',compact('d1'));
    }

    public function update_q($id,$qty)
    {
         DB::table('carts')->where('id',$id)->increment('dish_quantity',$qty);
         return redirect()->back();
    }
   
  public function placeorder(Request $r)
  {
   $d=new Dishorder;
   $d->user_id=$r->user_id;
    $d->user_email=$r->email;
     $d->name=$r->name;
      $d->address=$r->address;
       $d->city=$r->city;
        $d->country=$r->country;
         $d->phone_no=$r->phone;
          $d->pin_code=$r->pin;
           $d->payment_method=$r->payment_method;
            $d->grand_total=$r->grand_total;
            $d->order_id=Str::random(10);
            $d->save();
            $order_id=DB::getPdo()->lastInsertId();
            //print_r($order_id);
           $dish_item=cart::where('user_email',$d->user_email)->get();
           foreach ($dish_item as $dish_i) {
             # code...
            $d1=new Dishitem;
            $d1->order_id=$order_id;
            $d1->user_id=$d->user_id;
             $d1->user_email=$dish_i->user_email;
            $d1->dish_name=$dish_i->dish_name;
            $d1->dish_img=$dish_i->dish_img;
            $d1->dish_quantity=$dish_i->dish_quantity;
            $d1->dish_price=$dish_i->dish_price;
            $d1->save();


           }
           if($d['payment_method']=='cod')
           {
            
            $user = User::where('email',$r->email)->first(); 
            // print_r($r->email);
            // die;
            $to = $r->email;
            $id=$d->id;
             $corder = Dishorder::all();
            $corderd = Dishitem::all();
             
            $subject = 'User Order Successful';
            $message = "Your Order Is Successful In PnInfosys Course Program \n\n"; 
           
            
            Mail::send('front.order_email', ['msg' => $message,'corder' => $corder,'corderd' => $corderd,'id' => $id, 'user' => $user] , function($message) use ($to){ 
                $message->to($to, 'User')->subject('User Order');  
            });
            return redirect('thanks');
           }
           elseif($d['payment_method']=='paytm')
           {  
            $amount=$r->grand_total;
            $order_id= $d->order_id;
            // echo $amount;
            // echo $order_id;
            $data_for_request = $this->handlePaytmRequest( $order_id, $amount );
        // print_r($data_for_request);
        // die;


        $paytm_txn_url = 'https://securegw-stage.paytm.in/theia/processTransaction';
        $paramList = $data_for_request['paramList'];
        $checkSum = $data_for_request['checkSum'];

        return view( 'paytm-merchant-form', compact( 'paytm_txn_url', 'paramList', 'checkSum' ) );
       }


           }

             
  public function handlePaytmRequest( $order_id, $amount ) {
            // Load all functions of encdec_paytm.php and config-paytm.php
            $this->getAllEncdecFunc();
            $this->getConfigPaytmSettings();

            $checkSum = "";
            $paramList = array();

            // Create an array having all required parameters for creating checksum.
            $paramList["MID"] = 'GdYWgF55673718547892';
            $paramList["ORDER_ID"] = $order_id;
            $paramList["CUST_ID"] = $order_id;
            $paramList["INDUSTRY_TYPE_ID"] = 'Retail';
            $paramList["CHANNEL_ID"] = 'WEB';
            $paramList["TXN_AMOUNT"] = $amount;
            $paramList["WEBSITE"] = 'WEBSTAGING';
            $paramList["CALLBACK_URL"] = url( '/paytm-callback' );
            $paytm_merchant_key = 'ocSWDx4cs5FNrXBg';

        //Here checksum string will return by getChecksumFromArray() function.
        $checkSum = getChecksumFromArray( $paramList, $paytm_merchant_key );

        return array(
            'checkSum' => $checkSum,
            'paramList' => $paramList
        );
    }
    public function paytmCallback( Request $request ) {
            //return $request;
        $order_id = $request['ORDERID'];

        if ( 'TXN_SUCCESS' === $request['STATUS'] ) {
            $transaction_id = $request['TXNID'];
            $order = Dishorder::where( 'order_id', $order_id )->first();
            $order->payment_status = 'complete';
            $order->transaction_id = $transaction_id;
            $order->save();
             $useremail=Auth::user()->email;
            cart::where('user_email',$useremail)->delete();
            return view('front.order_complete');
           } 
           else if( 'TXN_FAILURE' === $request['STATUS'] ){
            return view( 'payment-failed' );
        }
}

           public function thanks()
           {
            $useremail=Auth::user()->email;
            cart::where('user_email',$useremail)->delete();
            $d=Dishorder::where('user_email',$useremail)->get();
            return view('front.thanks',compact('d'));
           }  
           public function my()
         {    $useremail=Auth::user()->email;
            $d1=Dishorder::where('user_email',$useremail)->get();
            return view('front.my',compact('d1'));
           }
             public function yourorder($id)
           { $useremail=Auth::user()->email;
             $d1=Dishitem::where('user_email',$useremail)->get();
             $d2=Dishorder::where('user_email',$useremail)->where('user_id',$id)->get();
            return view('front.yourorder',compact('d1','d2'));
           }

public function search_item(Request $a)
  {
    // print_r($a->all());
     $master = category::all();
    $dish = dish::where('dish_name', 'like' , '%' . $a->input('quary') .'%')->get(); 
    return view('front.search',compact('dish','master'));
    
  }



//
           public function getAllEncdecFunc(){


function encrypt_e($input, $ky) {
    $key   = html_entity_decode($ky);
    $iv = "@@@@&&&&####$$$$";
    $data = openssl_encrypt ( $input , "AES-128-CBC" , $key, 0, $iv );
    return $data;
}
function decrypt_e($crypt, $ky) {
    $key   = html_entity_decode($ky);
    $iv = "@@@@&&&&####$$$$";
    $data = openssl_decrypt ( $crypt , "AES-128-CBC" , $key, 0, $iv );
    return $data;
}
function generateSalt_e($length) {
    $random = "";
    srand((double) microtime() * 1000000);
    $data = "AbcDE123IJKLMN67QRSTUVWXYZ";
    $data .= "aBCdefghijklmn123opq45rs67tuv89wxyz";
    $data .= "0FGH45OP89";
    for ($i = 0; $i < $length; $i++) {
        $random .= substr($data, (rand() % (strlen($data))), 1);
    }
    return $random;
}
function checkString_e($value) {
    if ($value == 'null')
        $value = '';
    return $value;
}
function getChecksumFromArray($arrayList, $key, $sort=1) {
    if ($sort != 0) {
        ksort($arrayList);
    }
    $str = getArray2Str($arrayList);
    $salt = generateSalt_e(4);
    $finalString = $str . "|" . $salt;
    $hash = hash("sha256", $finalString);
    $hashString = $hash . $salt;
    $checksum = encrypt_e($hashString, $key);
    return $checksum;
}
function getChecksumFromString($str, $key) {
    
    $salt = generateSalt_e(4);
    $finalString = $str . "|" . $salt;
    $hash = hash("sha256", $finalString);
    $hashString = $hash . $salt;
    $checksum = encrypt_e($hashString, $key);
    return $checksum;
}
function verifychecksum_e($arrayList, $key, $checksumvalue) {
    $arrayList = removeCheckSumParam($arrayList);
    ksort($arrayList);
    $str = getArray2StrForVerify($arrayList);
    $paytm_hash = decrypt_e($checksumvalue, $key);
    $salt = substr($paytm_hash, -4);
    $finalString = $str . "|" . $salt;
    $website_hash = hash("sha256", $finalString);
    $website_hash .= $salt;
    $validFlag = "FALSE";
    if ($website_hash == $paytm_hash) {
        $validFlag = "TRUE";
    } else {
        $validFlag = "FALSE";
    }
    return $validFlag;
}
function verifychecksum_eFromStr($str, $key, $checksumvalue) {
    $paytm_hash = decrypt_e($checksumvalue, $key);
    $salt = substr($paytm_hash, -4);
    $finalString = $str . "|" . $salt;
    $website_hash = hash("sha256", $finalString);
    $website_hash .= $salt;
    $validFlag = "FALSE";
    if ($website_hash == $paytm_hash) {
        $validFlag = "TRUE";
    } else {
        $validFlag = "FALSE";
    }
    return $validFlag;
}
function getArray2Str($arrayList) {
    $findme   = 'REFUND';
    $findmepipe = '|';
    $paramStr = "";
    $flag = 1;  
    foreach ($arrayList as $key => $value) {
        $pos = strpos($value, $findme);
        $pospipe = strpos($value, $findmepipe);
        if ($pos !== false || $pospipe !== false) 
        {
            continue;
        }
        
        if ($flag) {
            $paramStr .= checkString_e($value);
            $flag = 0;
        } else {
            $paramStr .= "|" . checkString_e($value);
        }
    }
    return $paramStr;
}
function getArray2StrForVerify($arrayList) {
    $paramStr = "";
    $flag = 1;
    foreach ($arrayList as $key => $value) {
        if ($flag) {
            $paramStr .= checkString_e($value);
            $flag = 0;
        } else {
            $paramStr .= "|" . checkString_e($value);
        }
    }
    return $paramStr;
}
function redirect2PG($paramList, $key) {
    $hashString = getchecksumFromArray($paramList);
    $checksum = encrypt_e($hashString, $key);
}
function removeCheckSumParam($arrayList) {
    if (isset($arrayList["CHECKSUMHASH"])) {
        unset($arrayList["CHECKSUMHASH"]);
    }
    return $arrayList;
}
function getTxnStatus($requestParamList) {
    return callAPI(PAYTM_STATUS_QUERY_URL, $requestParamList);
}
function getTxnStatusNew($requestParamList) {
    return callNewAPI(PAYTM_STATUS_QUERY_NEW_URL, $requestParamList);
}
function initiateTxnRefund($requestParamList) {
    $CHECKSUM = getRefundChecksumFromArray($requestParamList,PAYTM_MERCHANT_KEY,0);
    $requestParamList["CHECKSUM"] = $CHECKSUM;
    return callAPI(PAYTM_REFUND_URL, $requestParamList);
}
function callAPI($apiURL, $requestParamList) {
    $jsonResponse = "";
    $responseParamList = array();
    $JsonData =json_encode($requestParamList);
    $postData = 'JsonData='.urlencode($JsonData);
    $ch = curl_init($apiURL);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);                                                                  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                         
    'Content-Type: application/json', 
    'Content-Length: ' . strlen($postData))                                                                       
    );  
    $jsonResponse = curl_exec($ch);   
    $responseParamList = json_decode($jsonResponse,true);
    return $responseParamList;
}
function callNewAPI($apiURL, $requestParamList) {
    $jsonResponse = "";
    $responseParamList = array();
    $JsonData =json_encode($requestParamList);
    $postData = 'JsonData='.urlencode($JsonData);
    $ch = curl_init($apiURL);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);                                                                  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                         
    'Content-Type: application/json', 
    'Content-Length: ' . strlen($postData))                                                                       
    );  
    $jsonResponse = curl_exec($ch);   
    $responseParamList = json_decode($jsonResponse,true);
    return $responseParamList;
}
function getRefundChecksumFromArray($arrayList, $key, $sort=1) {
    if ($sort != 0) {
        ksort($arrayList);
    }
    $str = getRefundArray2Str($arrayList);
    $salt = generateSalt_e(4);
    $finalString = $str . "|" . $salt;
    $hash = hash("sha256", $finalString);
    $hashString = $hash . $salt;
    $checksum = encrypt_e($hashString, $key);
    return $checksum;
}
function getRefundArray2Str($arrayList) {   
    $findmepipe = '|';
    $paramStr = "";
    $flag = 1;  
    foreach ($arrayList as $key => $value) {        
        $pospipe = strpos($value, $findmepipe);
        if ($pospipe !== false) 
        {
            continue;
        }
        
        if ($flag) {
            $paramStr .= checkString_e($value);
            $flag = 0;
        } else {
            $paramStr .= "|" . checkString_e($value);
        }
    }
    return $paramStr;
}
function callRefundAPI($refundApiURL, $requestParamList) {
    $jsonResponse = "";
    $responseParamList = array();
    $JsonData =json_encode($requestParamList);
    $postData = 'JsonData='.urlencode($JsonData);
    $ch = curl_init($apiURL);   
    curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_URL, $refundApiURL);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    $headers = array();
    $headers[] = 'Content-Type: application/json';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);  
    $jsonResponse = curl_exec($ch);   
    $responseParamList = json_decode($jsonResponse,true);
    return $responseParamList;
}

    }

    function getConfigPaytmSettings(){

        define('PAYTM_ENVIRONMENT', 'PROD'); // PROD
        define('PAYTM_MERCHANT_KEY', 'EBPwh5dj_XmW1L7%'); //Change this constant's value with Merchant key received from Paytm.
        define('PAYTM_MERCHANT_MID', 'EbtGYn83534967686723'); //Change this constant's value with MID (Merchant ID) received from Paytm.
        define('PAYTM_MERCHANT_WEBSITE', 'DEFAULT'); //Change this constant's value with Website name received from Paytm.
        $PAYTM_STATUS_QUERY_NEW_URL='https://securegw-stage.paytm.in/order/status';
        $PAYTM_TXN_URL='https://securegw-stage.paytm.in/order/process';
        if (PAYTM_ENVIRONMENT == 'PROD') {
        $PAYTM_STATUS_QUERY_NEW_URL='https://securegw.paytm.in/merchant-status/getTxnStatus';
        $PAYTM_TXN_URL='https://securegw.paytm.in/theia/processTransaction';
    }
        define('PAYTM_REFUND_URL', '');
        define('PAYTM_STATUS_QUERY_URL', $PAYTM_STATUS_QUERY_NEW_URL);
        define('PAYTM_STATUS_QUERY_NEW_URL', $PAYTM_STATUS_QUERY_NEW_URL);
        define('PAYTM_TXN_URL', $PAYTM_TXN_URL);
    }




}
