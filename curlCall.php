<?php
        echo 'User:'. $_POST['username']; //Test that data is being passed back and forth

/*      Commented out for testing
        $middle_url = "web.njit.edu/~meu3/index.html";

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $middle_url); //Set URL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //Return response
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_POST, true);
        $result = curl_exec($ch);
        echo $result;

        curl_close($ch);
*/
?>

