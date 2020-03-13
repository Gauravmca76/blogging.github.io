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
                             <?php 
                             if(isset($_POST['submit']))
                             {
                                $cat_name=$_POST['cat_title'];
                                $sql="INSERT INTO categories VALUES('','{$cat_name}')";
                                mysqli_query($conn,$sql);
                             }
                             ?>
                             <form action="" method="post">
                                 <div class="form-group">
                                    <label for="cat_title">Add Category</label>
                                     <input type="text" class="form-control" name="cat_title">      
                                 </div>
                                 <div class="form-group">
                                     <input type="submit" name="submit" value="Add Category" class="btn btn-primary">
                                 </div>
                             </form>
                         </div>
                         <div class="col-xs-6">
                             <table class="table table-bordered table-hover">
                                 <thead>
                                     <tr>
                                         <th>Id</th>
                                         <th>Category Title</th>
                                         <th>Operations</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
                                      $sql1="SELECT * FROM categories";
                                      $result=mysqli_query($conn,$sql1);
                                      while($row=mysqli_fetch_assoc($result))
                                      {
                                            $id=$row['id'];
                                            $name=$row['name'];
                                            echo "<tr>";
                                            echo "<td>{$id}</td>";
                                            echo "<td>{$name}</td>";
                                            echo "<td><a href='category.php?delete={$id}'>Delete</a></td>";
                                            echo "</tr>";
                                      }
                                    ?>
                                <?php
                                     if(isset($_GET['delete']))
                                     {
                                        $del_id=$_GET['delete'];
                                        $sql2="DELETE FROM categories WHERE id={$del_id}";
                                        mysqli_query($conn,$sql2);
                                        header("Location:category.php");
                                     }
                                     ?>
                                 </tbody>
                             </table>
                         </div>
                          </div>
                </div>
            </div>
        </div>
<?php include "includes/admin_footer.php";?>
    