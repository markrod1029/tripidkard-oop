<?php

function get_var($key)
{
    if(isset($_POST[$key]))
    {
        return $_POST[$key];
    }
    return '';

}

function get_select($key, $value)
{
    if(isset($_POST[$key]))
    {
        if($_POST[$key] == $_POST[$key])
        {
            return "selected" ;

        }
        return $_POST['key'];
    }
    return '';

}

function esc($var)
{
    return htmlspecialchars($var);

}