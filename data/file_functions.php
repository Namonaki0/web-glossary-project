<?php

function get_terms()
{
    $json = get_data();
    return json_decode($json);
}

function get_data()
{
    $fname = CONFIG['data_file'];

    $json = '';

    if (!file_exists($fname)) {
        file_put_contents($fname, '');
    } else {
        try {
            $json = file_get_contents($fname);
        } catch (Exception $e) {
            echo 'Error reading the file: ' . $e->getMessage();
        }
    }

    return $json;
}
