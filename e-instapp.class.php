<?php 
	
	/*
		
		e-Instapp - Search application in instagram
		Author: eftal yurtseven
		web: http://e-yurtseven.net
		
	*/
	error_reporting(E_ALL ^ E_NOTICE);
	
	class einstapp{
		
		
		# Connect #
		public function search_cnnx($uName,$clientID){
			$url = "https://api.instagram.com/v1/users/search?q=$uName&client_id=$clientID";
			// cURL
			$cnnx	= curl_init();
			curl_setopt($cnnx, CURLOPT_URL, $url);
			curl_setopt($cnnx, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($cnnx, CURLOPT_HEADER, false);
			curl_setopt($cnnx, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($cnnx, CURLOPT_SSL_VERIFYPEER, false);
			$val	= curl_exec($cnnx);
			curl_close($cnnx);
			return $val; 

		}
		
	}
	
?>