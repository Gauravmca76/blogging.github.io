<?php  include "includes/admin_header.php";include "database.php"; ob_start();  session_start();?>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include "includes/admin_navigation.php";?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To Admin Panel
                        </h1>
                         <div class="col-xs-6">
                             <table class="table table-bordered table-hover">
                                 <thead>
                                     <tr>
                                         <th>Blog Title Name</th>
                                         <th>Blog Views Count</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
                                      $sql1="SELECT * FROM page_hits";
                                      $result=mysqli_query($conn,$sql1);
                                      while($row=mysqli_fetch_assoc($result))
                                      {
                                            $name=$row['page'];
                                            $count=$row['count'];
                                            echo "<tr>";
                                            echo "<td>{$name}</td>";
                                            echo "<td>{$count}</td>";
                                            echo "</tr>";
                                      }
                                    ?>
                                 </tbody>
                             </table>
                         </div>
                         <div class="col-xs-6">
                            <?php
                                $sql2="SELECT max(count) FROM page_hits";
                                $result1=mysqli_query($conn,$sql2);
                                $row3=mysqli_fetch_array($result1);
                                $n1=$row3['max(count)'];
                                $sql3="SELECT * FROM page_hits WHERE count={$n1}";
                                $result2=mysqli_query($conn,$sql3);
                                $row4=mysqli_fetch_array($result2);
                                echo "<h3><B>The Maximum Visiting Page Title: </B></h3>";
                                echo "<h3>".$row4['page']."</h3><br>";
                                echo "<h3><B>The Maximum Visting Numbers of this page: </B></h3>";
                                echo "<h3>".$row4['count']."</h3>";
                            ?>
                         </div>
                     </div>
                </div>
            </div>
        </div>
<?php include "includes/admin_footer.php";?>
    