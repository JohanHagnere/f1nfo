<?php

function getData($url)
{
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($curl);

    // Fermer la connexion cURL
    curl_close($curl);

    // Décoder les données JSON en un tableau associatif
    $results = json_decode($data, true);
    return $results;
}
