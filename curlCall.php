<?php

        $middle_url = ""; //Need URL

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $middle_url); //Set URL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //Return response
//      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_POST, true);
        $result = curl_exec($ch);
        echo $result;

        curl_close($ch);
?>
