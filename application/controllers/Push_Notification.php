<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	//League controller ..
	class Push_Notification extends CI_Controller {
	
		public $api_access_key;


		public function __construct()
		{
			parent:: __construct();
		

			$this->api_access_key = "AAAAEk6wsdc:APA91bF4NpONXz82fMxeRByG5PVqrPvDHXzcA-lvJkRIAjiTLAVYRxvMMy1SXs247QEM57zQElx97tCTfSMFImMy2tCC6AJ9yxiY-MdOpqqEM3vcPGbKcGDzqXm4vgi7PmjNWKR_auSh";

		
		}
		
		// viewing league page ...
		public function index(){
		
					// API access key from Google API's Console
define( 'API_ACCESS_KEY', 'AAAAEk6wsdc:APA91bF4NpONXz82fMxeRByG5PVqrPvDHXzcA-lvJkRIAjiTLAVYRxvMMy1SXs247QEM57zQElx97tCTfSMFImMy2tCC6AJ9yxiY-MdOpqqEM3vcPGbKcGDzqXm4vgi7PmjNWKR_auSh' );
//$registrationIds = array( $_GET['id'] );
//$registrationIds = array('eCrjPAKrH3M:APA91bG1Qf2Wvn4vDDwktmMKHkjkCYa4JacVhV…90tapbhfOXTGcCCncnSknOUZ3bubJaX9iqmN1EHwHVpDPN01x');
// prep the bundle

define('registrationIds','eCrjPAKrH3M:APA91bG1Qf2Wvn4vDDwktmMKHkjkCYa4JacVhV…90tapbhfOXTGcCCncnSknOUZ3bubJaX9iqmN1EHwHVpDPN01x');
$msg = array
(
'message'=> 'here is a message. message',
'title'=> 'This is a title. title',
'subtitle'=> 'This is a subtitle. subtitle',
'tickerText'=> 'Ticker text here...Ticker text here...Ticker text here',
'vibrate'=>1,
'sound'=>1,
'largeIcon'=>'large_icon',
'smallIcon'=>'small_icon'
);
$fields = array
('registration_ids'=>$registrationIds,
'data'=>$msg,
//'to' => '/topics/general',
'priority' => 'high',
'restricted_package_name' => 'com.trianabot.skyzen',

);



$headers = array
('Authorization: key=' . API_ACCESS_KEY,
'Content-Type: application/json'
);

$ch = curl_init();
curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
curl_setopt( $ch,CURLOPT_POST, true );
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
$result = curl_exec($ch);
    if ($result === FALSE) {
        echo "fail";
        die('FCM Send Error: ' . curl_error($ch));
    }else {
        echo "seccess";
        echo "----";
        //echo $registrationIds;
        echo $result;
    }
    curl_close($ch);
    return $result;
					
				
		}




		        // Sends Push notification for Android users
		public function android($data, $reg_id) {
		   
	        $url = 'https://fcm.googleapis.com/fcm/send';
	        /*$message = array(
	            'body'	 => $data['mdesc'],
	            'title'		 => $data['mtitle']
	        );*/
	        
	        $headers = array(
	        	'Content-Type : application/json',
	        	'Authorization: key='.$this->api_access_key
	        );
	
	        $fields = array(
	            'registration_ids'  => array($reg_id),
				'notification'		=> $data
	          //  'data' => $message,
	        );
		
	    	return $this->useCurl($url, $headers, json_encode($fields));
    	}



	public function useCurl($url, $headers, $fields = null) {
	    $ch = curl_init();
curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
curl_setopt( $ch,CURLOPT_POST, true );
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
$result = curl_exec($ch);
    if ($result === FALSE) {
        echo "fail";
        die('FCM Send Error: ' . curl_error($ch));
    }else {
        echo "seccess";
        echo "----";
       
        echo $result;
    }
    curl_close($ch);
    return $result;
    }

	
}