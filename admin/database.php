<?php

$conn=mysqli_connect("localhost","root","","blog_sarestates_db");
if(!$conn)
{
    die('Could Not Connect: '.mysqli_error());
}
?>