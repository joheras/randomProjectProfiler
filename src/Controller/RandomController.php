<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class RandomController {
    
	public function random($limit){
    	   $num = rand(1,$limit);
    	   return new Response('<html><body>Number: '. $num . '</body></html>');
	}
	
	public function random2($n1,$n2){
	    $num = rand($n1,$n2);
	    return new Response('<html><body>Number: '. $num . '</body></html>');
	}
}
