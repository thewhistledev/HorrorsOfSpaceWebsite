<?php


//create php class for library and function that will send a get request to a url.
class Library
{
    public function URLGet($url)
    {
        try{
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);
            return $output;
        }
        catch(Exception $e){
            echo $e->getMessage();
            echo("<script>console.log('PHP_ERROR: " . $e->getMessage() . "');</script>");
        }
        
    }

    //parse json data and return array
    public function parseJson($json)
    {
        try{
            $data = json_decode($json, true);
        }
        catch(Exception $e){
            echo "Error: ".$e->getMessage();
            echo("<script>console.log('PHP_ERROR: " . $e->getMessage() . "');</script>");
        }
        
        return $data;
    }

    //config
    public function config()
    {
        $config = array(
            'access_token' => 'urtoken',
        );
        return $config;
    }


}



?>
