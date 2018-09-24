<?php
        $user = array('username' => $_POST['username'], 'password' =>$_POST['password']);

        echo 'Hello, '. $_POST['username'] . ' ' . 'this is a temporary login' . "<br>";
        echo 'usr: ' . $user['username'] . "<br>";      //Alpha Testing
        echo 'pwd: ' . $user['password'] . "<br>";      //Alpha Testing


/*      $middle_url = "https://jsonplaceholder.typicode.com/todos/1"; //Commented out for testing

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $middle_url);     //Set URL
        curl_setopt($ch, CURLOPT - Ignore
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //Return response
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_POST, true);

        $result = curl_exec($ch);
        var_dump(json_decode($result,true));
        //$result_decode=json_decode($result), true;
        //print_r($result);
        //print_r($result_decode);
        echo $result;

        curl_close($ch);
*/
?>
