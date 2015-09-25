<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //

	protected function arrayUnique($array, $preserveKeys = false)
	{
	    // Unique Array for return
	    $arrayRewrite = array();
	    // Array with the md5 hashes
	    $arrayHashes = array();
	    foreach($array as $key => $item) {
	        // Serialize the current element and create a md5 hash
	        $hash = md5(serialize($item));
	        // If the md5 didn't come up yet, add the element to
	        // to arrayRewrite, otherwise drop it
	        if (!isset($arrayHashes[$hash])) {
	            // Save the current element hash
	            $arrayHashes[$hash] = $hash;
	            // Add element to the unique Array
	            if ($preserveKeys) {
	                $arrayRewrite[$key] = $item;
	            } else {
	                $arrayRewrite[] = $item;
	            }
	        }
	    }
	    return $arrayRewrite;
	}

}
