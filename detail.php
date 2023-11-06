<?php
require("app/app.php");

if (!isset($_GET['term'])) {
    redirect('index.php');
}

$data = get_term($_GET["term"]); // TODO: validate input

if ($data == false) {
    $term_not_found = $_GET["term"];
    $view_bag['title'] = "Details for $term_not_found do not exist";
    view('not_found');
    die();
}

$view_bag = [
    "title" => "Details for " . $data->term
];

view('detail', $data);
