<?php

function linkCSS($cssPath)
{
    $url = BASEURL . "/public/css/" . $cssPath . ".css?version=51";
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '">';
}

function linkJS($jsPath)
{
    $url = BASEURL . "/public/js/" . $jsPath . ".js";
    echo '<script src="' . $url . '"></script>';
}

function shortIcon($iconPath)
{
    $url = BASEURL . "/public/img/" . $iconPath;
    echo '<link rel="shortcut icon" href="' . $url . '">';
}

function srcIMG($imgPath)
{
    $url = "src='" . BASEURL . "/public/img/" . $imgPath . "'";
    echo $url;
}

function linkPhp($phpPath)
{
    $url = "../app/views/components/" . $phpPath . ".php";
    include $url;
}
