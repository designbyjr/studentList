<?php

namespace App\Helpers;

trait ObjectConversion
{
    public function convert($data) {
    // If the element being looked is an object convert to an array
    if(is_object($data)) {
        $data = get_object_vars($data);
    }
    // If the element is an array, iterate though it and call the function again on each item
    if(is_array($data)) {
        foreach($data as $key=>$value){
            $data[$key] = $this->convert($value);
        }
    }
    return $data;
    }



}
