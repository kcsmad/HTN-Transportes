<?php

header("Location: app/home.php");

if($_COOKIE["lang"] == null)
{
    include("choose_lang.php");
}
else
{
    if ($_COOKIE["lang"] . value === "en_US") {
        return 0;
    } else if ($_COOKIE["lang"] . value === "es_ES") {
        return 1;
    } else {
        return 2;
    }
}
