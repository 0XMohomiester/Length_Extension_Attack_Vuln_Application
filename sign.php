<?php

function sign($data){
    $key = "super_secret_long_Hash_key";
    // Hashing incoming data with secret key.
    $hash = sha1($data.$key);
    return $hash;
}