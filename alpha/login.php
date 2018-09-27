<?php
        $user = array('username' => $_POST['username'], 'password' =>$_POST['password']);

        $middle_url = "https://web.njit.edu/~meu3/CS490/test.php";
//      $middle_url = "https://web.njit.edu/~bkw2/middle.phps";
//      $middle_url = "https://web.njit.edu/~ek95/backend.phps ";
//      $middle_url = "https://web.njit.edu/~ek95/test.php ";
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $middle_url);                             //Set URL
        curl_setopt($ch, CURLOPT_POST, true);                                   //Set to POST
        curl_setopt($ch, CURLOPT_POSTFIELDS, /*http_build_query*/ $user);       //Send array
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                         //Receive results of cURL and store in var instead of printing

        //Response from server will be JSON
        //Will contain true/false if succesful login, along with name of site (NJIT/SQL db)
        //if-else to display log-in success/failure statements

        $result = curl_exec($ch);

        $result_decode=json_decode($result, true);

        if($result == false || $result == null) {
                echo "No result";
        } else {
                echo 'result: ' . $result . "<br>";
                echo 'result_decode: ' . $result_decode . "<br>";
        }
        curl_close($ch);

?>


