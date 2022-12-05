<?php

function title($page)
{
    $a = new Sel();
    $response = $a->getall('settings');
    $title = $response[0]['appname'];
    echo $title.' - '.$page;
}
