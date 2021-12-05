<?php
if (empty($_REQUEST[name]))
    {
        echo "Name is not given";
    }
    else{
        echo " your name is".$_REQUEST["name"];
    }

    if (empty($_REQUEST[id]))
    {
        echo "Password is not given";
    }
    else
    {
        echo "Password entered";
    }

    ?>