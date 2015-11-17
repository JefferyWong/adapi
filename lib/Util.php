<?php
namespace App\Lib;

class Util
{   
    public static  function resPonseJson($app, $code=200, $message="", $data=array()){
        $response = array(
            'code'     => $code,
            'message'  => $message,
            'data'     => $data,
        );
        
        return json_encode($response);
    }
    
}

?>