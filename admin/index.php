<?php  include "includes/admin_header.php";?>
<?php include('database.php'); ?>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include "includes/admin_navigation.php";?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To Admin Panel
                        </h1>
                         
                          </div>
                </div>
                <div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php 
                            $sql="SELECT * FROM blogs";
                            $result=mysqli_query($conn,$sql);
                            $n=mysqli_num_rows($result);
                        ?>
                        <div class='huge'><?php echo $n; ?></div>
                        <div>POSTS</div>
                    </div>
                </div>
            </div>
            <a href="posts.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php 
                            $sql="SELECT * FROM categories";
                            $result=mysqli_query($conn,$sql);
                            $n=mysqli_num_rows($result);
                        ?>
                        <div class='huge'><?php echo $n; ?></div>
                        <div>CATEGORIES</div>
                    </div>
                </div>
            </div>
            <a href="category.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php 
                            $sql="SELECT * FROM page_hits";
                            $result=mysqli_query($conn,$sql);
                            $n=mysqli_num_rows($result);
                        ?>
                        <div class='huge'><?php echo $n; ?></div>
                        <div>PAGES</div>
                    </div>
                </div>
            </div>
            <a href="page_hits.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
</div>
            <div class="row text-center">
               <div class="col-lg-12">
           <div id="columnchart_material" style="width: auto; height: 500px;"></div>
            </div>
        </div>
        <!-- /#page-wrapper -->
<?php include "includes/admin_footer.php";?>
    