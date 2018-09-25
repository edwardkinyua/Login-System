<?php
        $user = array('username' => $_POST['username'], 'password' =>$_POST['password']);

        echo 'Hello, '. $_POST['username'] . ' ' . 'this is a temporary login' . "<br>";

/*      echo 'pw: ' . $_POST['password'] . "<br>";
        echo 'url:' . $_POST['url'] . "<br>";
*/
        echo 'usr: ' . $user['username'] . "<br>";
        echo 'pwd: ' . $user['password'] . "<br><br>";

        $middle_url = "https://web.njit.edu/~bkw2/middle.html"; //May change to middle.php


        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $middle_url);     //Set URL
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_POST, true);           //
        curl_setopt($ch, CURLOPT_POST, $user);          //Send array
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //Receive response

        $result = curl_exec($ch);

        if(var_dump(json_decode($result,true)) == NULL)
                echo ' - VARDUMP HAS NOTHING TO DECODE' . "<br><br>";

        $result_decode=json_decode($result, true) . "<br>";

        echo 'IF RESULTS ARE BLANK, NOTHING RECEIVED' , "<br>";
        echo 'result: ' . $result . "<br>";
        echo 'result_decode: ' . $result_decode . "<br>";

        curl_close($ch);

?>

