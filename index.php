<?php
include 'sign.php';

if(isset($_COOKIE['session']) && !empty($_COOKIE['session'])){
    $session = hex2bin($_COOKIE["session"]);
    $signature = $_COOKIE['signature'];

    if($signature == sign($session))
    {
        if(strpos($session, "admin"))
        {
            echo "<h2>You are in your admin space</h2>";
        }
        else
        {
            echo "<h2>You are in your auditor space</h2>";
        }
    }
    else
    {
        echo "Bad Signature, Don't Try to Manipulate Cookies";
    }
}
else{
    echo "please login first";
}