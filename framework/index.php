<?php
    require "vendor/autoload.php";

    use phpSails\Core;

    $coreFrameWorkClass = new Core();
    echo $coreFrameWorkClass->index($_SERVER['REQUEST_URI']);