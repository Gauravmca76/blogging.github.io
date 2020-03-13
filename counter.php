<?php

//check if page exsits in page_hit table
function checkPageName($page_name)
{
    require("database/db_connect.php");
    $sql="SELECT * FROM page_hits WHERE page='".$page_name."'";
    $result=mysqli_query($con,$sql);
    if($n=mysqli_num_rows($result) == 0)
    {
        $sql1="INSERT INTO page_hits VALUES('$page_name',0)";
        mysqli_query($con,$sql1);
    }
}

//update page hint count
function updateCounter($page_name)
{
    require("database/db_connect.php");
    checkPageName($page_name);
    $sql="UPDATE page_hits SET count = count+1 WHERE page='".$page_name."'";
    mysqli_query($con,$sql);
}
?>