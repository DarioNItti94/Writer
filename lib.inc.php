<?php

require "session.php";

function includesmarty()
{
    require("libs/Smarty.class.php");
    $smarty = new Smarty;
    $smarty->template_dir = "templates";
    $smarty->compile_dir = "templates_c";

    return $smarty;
}
function checkSessione()
{
    session_regenerate_id(TRUE);
    if (!isset($_SESSION['user'] ) )
    {
        header('location: Login.php');
        exit;
    }
}





