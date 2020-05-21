<?php

function callAPI($method, $url, $data){

	if ($method == 'POST') {
		# code...
		$client = curl_init($url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;

	}

	elseif ($method == 'GET') {
		# code...
		$client = curl_init($url);

				curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

				$response = curl_exec($client);

				curl_close($client);

                echo $response;

	}

}

?>