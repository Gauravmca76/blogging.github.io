<?php
require('db.php');
$sql="SELECT * FROM page_hits ORDER BY page";
if($result=mysqli_query($con,$sql))
{
    $rowcount=mysqli_num_rows($result);
    printf("%d",$rowcount);
    mysqli_free_result($result);
}
?>