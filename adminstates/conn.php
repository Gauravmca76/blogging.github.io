<?php
$connect=mysqli_connect("localhost","root","","blog_sarestates_db");
if(!$connect)
{
    die('Could Not Connect: '.mysqli_error());
}
?>