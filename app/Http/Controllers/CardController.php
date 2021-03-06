<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use App\Http\Controllers\Auth;
//use App\Http\Controllers\DateTime;
use App\Customer;
use DateTime;
use Illuminate\Support\Facades\Auth;
use App\Car;
use App\Order;
use Mail;
use PDF;
use App\Mail\sendMail;
use App\User;
class CardController extends Controller
{
    function index()
    {
       
        //return Car::all();
        $car = Car::all();
        return view('pages.card')->with('car', $car);
    }

    // public function store(Request $request)
    // {
    //     return $request;
    // 	$order_id = uniqid();
    // 	$order = new Order();
    // 	$order->order_id = $order_id;
    // 	$order->status = 'pending';
	//     $order->price = ( $request->price ) ? $request->price : '';
	//     $order->transaction_id = '';
	//     $order->save();
	//     $data_for_request = $this->handlePaytmRequest( $order_id, $order->price );
	//     $paytm_txn_url = 'https://securegw-stage.paytm.in/theia/processTransaction';
	//     $paramList = $data_for_request['paramList'];
	//     $checkSum = $data_for_request['checkSum'];
	//     return view( 'paytm-merchant-form', compact( 'paytm_txn_url', 'paramList', 'checkSum' ) );
    // }

    public function ShowCard(Request $request)
    {
        //$car = Car::all();
        if(($request['mydropdate']!=null && $request['drophour']!=null && $request['dropminute']!=null))
        {
            $format = "d_m_y";
            //$date1  = \DateTime::createFromFormat($format, $request['mydropdate']);
            //$date2  = \DateTime::createFromFormat($format, session('mydate'));
            //return $request['mydropdate'];
            $error='date can not be before pickup date';
            if($request['mydropdate']<session('mydate'))
            {
               
                return view('pages.dropofftime')->with('error', $error);
            }
            session(['mydropdate' => $request['mydropdate']]);
            session(['drophour' => $request['drophour']]);
            session(['dropminute' => $request['dropminute']]);
            //  $car = Car::where('city',session('start_city'))->paginate(1);
            // $car=Car::paginate(1);
            // $car=Car::where('city',session('start_city'));
            // $car=Car::where([['city',session('start_city')],
            //                 ['drop_date','<',$request['mydropdate']],
            //                 ])->get();
            $query=Car::all();
            
            $dayAfter = (new DateTime(session('mydate')))->format('d-m-Y');
            // return $dayAfter; 
            $car=Car::where('city',session('start_city'))->where(function($query)
                                                {    $query->whereDate('drop_date','<=',session('mydate'))
                                                    ->orWhere('drop_date',NULL);       
                                                    }   )
                                                    ->where(function($query){
                                                        $query->where('out_time_hour','<',session('start_hour'))
                                                        ->orWhere('out_time_hour',NULL);
                                                    })
                                                    ->get();

            // $car=Car::where('city',session('start_city'))->
            // $car=Car::where('city',session('start_city'))->where('drop_date','<=',session('mydate'))->orWhere('drop_date',NULL)->get();;
            // $car=Car::where('city',session('start_city'))->get();
            // foreach($car as $test)
            // {
            //     // if($test::where('drop_date','=',session('mydate'))){
            //     //     if($test::where('out_time_hour','>',session('start_hour'))){
            //     //         unset($car[$test]);
            //     //     }
            //     // }
            //     if($test['drop_date']==session('mydate')){
            //         if($test['out_time_hour']>(session('start_hour')+1)){
            //             unset($car[$test]);
            //         }
            //     }
            // }
            //    return $car; 
            // $car=Car::where('city',session('start_city'))->where(function($query)
            //                                    {    $query->where('drop_date','<',session('mydate'))
            //                                          ->orWhere('drop_date',NULL);       
            //                                          }   )
            //                                          ->get();
                    //return $car;
            
            return view('pages.card')->with('car', $car);
        }
        else {
            return view('pages.dropofftime');
        }
        
    }

    public function booking_details(Request $request)
    {
        // return 'hello';
        // $car_name=$request['car_name'];
       session(['car_name'=>$request['car_name']]); 
        session(['seat'=>$request['seat']]);
        session(['bag'=>$request['bag']]);
        session(['price'=>$request['price']]);
        session(['km_price'=>$request['km_price']]);
        
       
        return view('pages.bookdetails');

        // if (Auth::user()) {   // Check is user logged in
        //     $example= "example";
        //    // return $request;
        //     $order_id = uniqid();
        //     $order = new Order();
        //     $order->order_id = $order_id;
        //     $order->status = 'pending';
        //     // $order->price = ( $request->price ) ? $request->price : ''; 
        //     $datetime1 = strtotime(session('mydropdate'));
        //     $datetime2 = strtotime(session('mydate'));
        //     $secs = $datetime1 - $datetime2;// == return sec in difference
        //     $days = $secs / 86400;
        //     //return $days;
        //     $order->price=$days*$request['price'];
        //    // return $order->price;
        //     $order->transaction_id = '';
        //     $order->save();
        //     //return 'hello';
        //     $data_for_request = $this->handlePaytmRequest( $order_id, $order->price );
        //     $paytm_txn_url = 'https://securegw-stage.paytm.in/theia/processTransaction';
        //     $paramList = $data_for_request['paramList'];
        //     $checkSum = $data_for_request['checkSum'];
        //     return view( 'paytm-merchant-form', compact( 'paytm_txn_url', 'paramList', 'checkSum' ) );
           // return view('pages.payment');

        // } else {
        //     return view('auth.login');
        // }
    
       return $car_name;
    }

    public function doPayment(Request $request)
    {
        
      
            $example= "example";
           // return $request;
            $order_id = uniqid();
            $order = new Order();
            $order->order_id = $order_id;
            $order->status = 'pending';
            // $order->price = ( $request->price ) ? $request->price : ''; 
            $datetime1 = strtotime(session('mydropdate'));
            $datetime2 = strtotime(session('mydate'));
            $secs = $datetime1 - $datetime2;// == return sec in difference
            $days = $secs / 86400;
            //return $days;
            $price=session('price')*$days;   //-------------------------------------------
            $order->price=$price;
            // $order->price=100;
            // return $order->price;
            $order->transaction_id = '';
            $order->save();
            session(['amount'=>$price]);
            //return 'hello';
            $data_for_request = $this->handlePaytmRequest( $order_id, $order->price );
            $paytm_txn_url = 'https://securegw-stage.paytm.in/theia/processTransaction';
            $paramList = $data_for_request['paramList'];
            $checkSum = $data_for_request['checkSum'];
            return view( 'paytm-merchant-form', compact( 'paytm_txn_url', 'paramList', 'checkSum' ) );
       
    }

    public function handlePaytmRequest( $order_id, $amount ) {
		// Load all functions of encdec_paytm.php and config-paytm.php
		$this->getAllEncdecFunc();
		$this->getConfigPaytmSettings();
		$checkSum = "";
		$paramList = array();
		// Create an array having all required parameters for creating checksum.
		$paramList["MID"] = 'kAcBlC57364871128629'; //MERCHANT ID
		$paramList["ORDER_ID"] = $order_id;
		$paramList["CUST_ID"] = $order_id;
		$paramList["INDUSTRY_TYPE_ID"] = 'Retail';
		$paramList["CHANNEL_ID"] = 'WEB';
		$paramList["TXN_AMOUNT"] = $amount;
		$paramList["WEBSITE"] = 'WEBSTAGING';
		$paramList["CALLBACK_URL"] = url( '/paytm-callback' );
		$paytm_merchant_key = 'pWdD%R0HG6tjjbea';
		//Here checksum string will return by getChecksumFromArray() function.
		$checkSum = getChecksumFromArray( $paramList, $paytm_merchant_key );
		return array(
			'checkSum' => $checkSum,
			'paramList' => $paramList
		);
	}

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

    public function getConfigPaytmSettings(){
        define('PAYTM_ENVIRONMENT', 'TEST'); // PROD
        define('PAYTM_MERCHANT_KEY', 'pWdD%R0HG6tjjbea');
        define('PAYTM_MERCHANT_MID', 'kAcBlC57364871128629');
        // define('PAYTM_MERCHANT_KEY', 'Vs&dpLgvW7P&BHw&'); //Change this constant's value with Merchant key received from Paytm.
        // define('PAYTM_MERCHANT_MID', 'QNtdNL69060465115075'); //Change this constant's value with MID (Merchant ID) received from Paytm.
        define('PAYTM_MERCHANT_WEBSITE', 'WEBSTAGING'); //Change this constant's value with Website name received from Paytm.
        $PAYTM_STATUS_QUERY_NEW_URL='https://securegw-stage.paytm.in/merchant-status/getTxnStatus';
        $PAYTM_TXN_URL='https://securegw-stage.paytm.in/theia/processTransaction';
        if (PAYTM_ENVIRONMENT == 'PROD') {
            $PAYTM_STATUS_QUERY_NEW_URL='https://securegw.paytm.in/merchant-status/getTxnStatus';
            $PAYTM_TXN_URL='https://securegw.paytm.in/theia/processTransaction';
        }
        define('PAYTM_REFUND_URL', '');
        define('PAYTM_STATUS_QUERY_URL', $PAYTM_STATUS_QUERY_NEW_URL);
        define('PAYTM_STATUS_QUERY_NEW_URL', $PAYTM_STATUS_QUERY_NEW_URL);
        define('PAYTM_TXN_URL', $PAYTM_TXN_URL);
        
    }

    public function paytmCallback( Request $request ) {
        // return $request;
		$order_id = $request['ORDERID'];
		if ( 'TXN_SUCCESS' === $request['STATUS'] ) {
			$transaction_id = $request['TXNID'];
			$order = Order::where( 'order_id', $order_id )->first();
			$order->status = 'complete';
			$order->transaction_id = $transaction_id;
            $order->save();
            $customer=new Customer();
            $customer->name=session('fullname');
            $customer->license_no=session('license_no');
            $customer->mobile=session('mobile');
            $customer->email=session('email');
            $customer->aadhar=session('aadhar');

            // return session('user_address');
            $customer->user_address=session('user_address');
            $customer->save();
            $plate_no=session('plate_no');
            Car::where('plate_no',$plate_no)->update(['in_time_hour'=>session('start_hour'),'in_time_minute'=>session('start_minute'),
                                                             'out_time_hour'=>session('drophour'),'out_time_minute'=>session('dropminute'),
                                                             'start_date'=>session('mydate'),'drop_date'=>session('mydropdate'),'booked'=>1]);
			return view( 'order-complete', compact( 'order', 'status' ) );
		} else if( 'TXN_FAILURE' === $request['STATUS'] ){
			return view( 'payment-failed' );
		}
    }
    
    public function pdf(){
        
        // $data=['city'=>session('start_city'),'start_date'=>session('mydate'),'end_date'=>session('mydropdate')];
        $name=session('fullname');
        $data=['name'=>$name,'city'=>session('start_city'),'start_date'=>session('mydate'),'end_date'=>session('mydropdate'),
                 'car_name'=>session('car_name'),'plate_no'=>session('plate_no'),'amount'=>session('amount')  ];
        // Mail::send(new sendMail());
        $pdf = PDF::loadView('pages.paytmpdf', compact('data'));
        return $pdf->download('invoice.pdf');
    }

    public function from_book_button(Request $request)
    {
        if (Auth::user()) { 
        session(['car_name'=>$request['car_name']]); 
        session(['plate_no'=>$request['plate_no']]);
        session(['seat'=>$request['seat']]);
        session(['bag'=>$request['bag']]);
        session(['price'=>$request['price']]);
        session(['km_price'=>$request['km_price']]);
        session(['plate_no'=>$request['plate_no']]);
        
        return view('pages.bookdetails');
        }
        else{
            return view('auth.login');
        }
    }

    public function from_user_info(Request $request)
    {
        session(['fullname'=>$request['fullname']]);
        session(['license_no'=>$request['license_no']]);
        session(['mobile'=>$request['mobile']]);
        session(['email'=>$request['email']]);
        session(['aadhar'=>$request['aadhar']]);
        session(['user_address'=>$request['user_address']]);
         // $customer = new Customer();
        // $customer->name=$request['fullname'];
        // $customer->license_no=$request['license_no'];
        // $customer->mobile=$request['mobile'];
        // $customer->email=$request['email'];
        // $customer->aadhar=$request['aadhar'];
        // $customer->user_address=$request['user_address'];
        // $customer->save();
        return view('pages.finalbook');
    }

    public function to_ticket(){
        
        // $name=Auth::user()->name;
        $name=session('fullname');
        Mail::send(new sendMail());
        $data=['name'=>$name,'city'=>session('start_city'),'start_date'=>session('mydate'),'end_date'=>session('mydropdate'),
                 'car_name'=>session('car_name'),'plate_no'=>session('plate_no'),'amount'=>session('amount')  ];
        return view('pages.ticket',compact('data'));
        
    }

    // public function donePayment(Request $request)
    // {

    //         if (Auth::user()) {   // Check is user logged in
    //         $example= "example";
    //        // return $request;
    //         $order_id = uniqid();
    //         $order = new Order();
    //         $order->order_id = $order_id;
    //         $order->status = 'pending';
    //         // $order->price = ( $request->price ) ? $request->price : ''; 
    //         $datetime1 = strtotime(session('mydropdate'));
    //         $datetime2 = strtotime(session('mydate'));
    //         $secs = $datetime1 - $datetime2;// == return sec in difference
    //         $days = $secs / 86400;
    //         //return $days;
    //         $order->price=$days*$request['price'];
    //        // return $order->price;
    //         $order->transaction_id = '';
    //         $order->save();
    //         //return 'hello';
    //         $data_for_request = $this->handlePaytmRequest( $order_id, $order->price );
    //         $paytm_txn_url = 'https://securegw-stage.paytm.in/theia/processTransaction';
    //         $paramList = $data_for_request['paramList'];
    //         $checkSum = $data_for_request['checkSum'];
    //         return view( 'paytm-merchant-form', compact( 'paytm_txn_url', 'paramList', 'checkSum' ) );
    //        return view('pages.payment');

    //     } else {
    //         return view('auth.login');
    //     }
           
    //     //    $data=['city'=>session('start_city'),'start_date'=>session('mydate'),'end_date'=>session('mydropdate')];
    //     //     Mail::send(new sendMail());
    //     //     $pdf = PDF::loadView('pages.paytmpdf', compact('data'));
    //     //     return $pdf->download('invoice.pdf');
           
    // }


    public function test(){
          // Check is user logged in
            $example= "example";
           // return $request;
            $order_id = uniqid();
            $order = new Order();
            $order->order_id = $order_id;
            $order->status = 'pending';
            // $order->price = ( $request->price ) ? $request->price : ''; 
            $datetime1 = strtotime(session('mydropdate'));
            $datetime2 = strtotime(session('mydate'));
            $secs = $datetime1 - $datetime2;// == return sec in difference
            $days = $secs / 86400;
            //return $days;
            $order->price=100;
           // return $order->price;
            $order->transaction_id = '';
            $order->save();
            //return 'hello';
            $data_for_request = $this->handlePaytmRequest( $order_id, $order->price );
            $paytm_txn_url = 'https://securegw-stage.paytm.in/theia/processTransaction';
            $paramList = $data_for_request['paramList'];
            $checkSum = $data_for_request['checkSum'];
            return view( 'paytm-merchant-form', compact( 'paytm_txn_url', 'paramList', 'checkSum' ) );
           return view('pages.payment');

        
    }
}
