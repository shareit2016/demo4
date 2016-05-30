<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include ("auth.php");

function checkAuth()
{
    $u='test';
    $p='pass';
    $a = new Auth();
    $a->checkLogin($u,$p);
    print_r($a);
}


checkAuth();