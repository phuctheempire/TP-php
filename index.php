<?php
    require_once("init.php");
    session_start();

    $url = $_SERVER['REQUEST_URI'];
    echo "<p> URL: $url </p>";

    $route = explode('?', $url);

    echo "<p> Route: $route[0] </p>";
    echo "<br>";

    switch ($route[0]) {
        //Cases here are the routes of the website
        // In each case:
        // Include objectController extends Controller ( which contain loadModel and loadView )
        // Create objectController
        // Call method of objectController which indicate the behavior of the website
    }
