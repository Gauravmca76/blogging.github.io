<?php require("libs/fetch_data.php");?>
<?php //code to get the item using its id
include("database/db_connect.php");//database config file
$id=$_GET['id']; $query="SELECT * from blogs where id=".$id; $result=mysqli_query($con,$query);  
$row = mysqli_fetch_assoc($result); 
//pageview count query
$page=$row['title'];
$count="SELECT * FROM page_hits WHERE page='".$page."'"; $feedback=mysqli_query($con,$count); 
$roo=mysqli_fetch_assoc($feedback);?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title><?php echo $row['title']; ?>|<?php getwebname("titles");?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link id="browser_favicon" rel="shortcut icon" href="blogimage/<?php geticon("titles"); ?>">
	<meta charset="utf-8" name="description" content="<?php getshortdescription("titles");?>">
	<meta name="keywords" content="<?php getkeywords("titles");?>" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/single.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<style>
	#img
	{
		top:450px;
		right:150px;
		width:250px;
		height:150px;
		border:3px solid #000000;
	}
	#img1
	{
		top:4060px;
		right:200px;
		width:200px;
		height:100px;
		border:3px solid #000000;
	}
	#img2
	{
		top:600px;
		right:450px;
		width:250px;
		height:150px;
		border:3px solid #000000;
	}
    #img3
	{
		top:1620px;
		right:400px;
		width:300px;
		height:150px;
		border:3px solid #000000;
	}
    #img4
	{
		top:1360px;
		right:400px;
		width:300px;
		height:150px;
		border:3px solid #000000;
	}
	#img5
	{
		top:4470px;
		right:200px;
		width:200px;
		height:100px;
		border:3px solid #000000;
	}
	#img6
	{
		top:4330px;
		right:200px;
		width:200px;
		height:100px;
		border:3px solid #000000;
	}
	#img7
	{
		top:3930px;
		right:500px;
		width:250px;
		height:150px;
		border:3px solid #000000;
	}
	#img8
	{
		top:2580px;
		right:400px;
		width:300px;
		height:150px;
		border:3px solid #000000;
	}
	#img9
	{
		top:1960px;
		right:450px;
		width:300px;
		height:150px;
		border:3px solid #000000;
	}
	#img10
	{
		top:3650px;
		right:450px;
		width:300px;
		height:150px;
		border:3px solid #000000;
	}
	#img11
	{
		top:1000px;
		right:400px;
		width:300px;
		height:150px;
		border:3px solid #000000;
	}
	#img12
	{
		top:2880px;
		right:400px;
		width:300px;
		height:150px;
		border:3px solid #000000;
	}
	#img13
	{
		top:2200px;
		right:400px;
		width:300px;
		height:150px;
		border:3px solid #000000;
	}
    #img14
	{
		top:3245px;
		right:400px;
		width:300px;
		height:150px;
		border:3px solid #000000;
	}
	#img15
	{
		top:4050px;
		right:250px;
		width:200px;
		height:100px;
		border:3px solid #000000;
	}
	</style>
</head>
<body>
	<!--Header-->
	<?php include("header.php");?> 
	<!--//header-->
	<!--update database on page views-->
	<?php  require_once('adminstates/conn.php');
	require_once('counter.php');
	$pn=updateCounter(''.$row['title'].''); // Updates page hits
	echo $pn;
	?>
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">Blog</li>
	</ol>
	<!--//banner-->
	<section class="banner-bottom">
		<!--/blog-->
		<div class="container">
			<div class="row">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits">
					<div class="blog-grid-top">
						<div class="b-grid-top">
							<div class="blog_info_left_grid">
								<a href="#">
									<img src="blogimage/<?php echo $row['photo']; ?>" class="img-fluid" alt="image not available" style="width:900px;height:300px">
								</a>
							</div>
							<div class="blog-info-middle">
								<ul>
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i><?php echo $row['date']; ?></a>
										</li>
										<li class="mx-2">
											<a href="#">
												<i class="far fa-user"></i><?php echo $row['author']; ?></a>
											</li>
											<li>
												<a href="#">
													<i class="far fa-tags"></i> <?php echo $row['tags']; ?></a>
												</li>
												<li>
													<a href="#">
														<i class="far fa-eye fa-x2"></i> <?php echo $roo['count']." views"; ?></a>
													</li>
								</ul>
							</div>
						</div>
								<h3 align="center">
											<?php echo $row['title']; ?>
										</h3>
										<h6 align="center" style="font-weight:bold;"><?php echo $row['content']; ?></h6>
									</div>
								</div>
								<!--//left-->
								</div>
										</div>
										<?php
										//display content image
										$img=json_decode($row['content_image']);
										$a=1;
										if(!empty($img))
										{
										for($i=0;$i<count($img);$i++)
										{
											$imgurl="contentimage/".$img[$i];
										?>
	<?php if(count($img) > 1){?><img src="<?php echo $imgurl;?>" id="img<?php echo $a;?>" style="position:absolute;"/><?php }?>
	<?php if(count($img) == 1){?><img src="<?php echo $imgurl;?>" id="img" style="position:absolute;"/><?php }?>
										<?php
										$a++;
										}
										}
										else
										{
											echo "";
										}
										?>
									</section>
									<!--//main-->
									<!--footer-->
									<?php include("footer.php");?>
									<script src="js/jquery-2.2.3.min.js"></script>
									<script sr c="js/move-top.js"></script>
									<script src="js/easing.js"></script>
									<script>
										jQuery(document).ready(function ($) {
											$(".scroll").click(function (event) {
												event.preventDefault();
												$('html,body').animate({
													scrollTop: $(this.hash).offset().top
												}, 900);
											});
										});
									</script>
									<script>
										$(document).ready(function () {
							 		$().UItoTop({
							 			easingType: 'easeOutQuart'
							 		});
							 	});
							 </script> 
							 <a href="#home" class="scroll" id="toTop" style="display: block;">
							 	<span id="toTopHover" style="opacity: 1;"> </span>
							 </a>
							 <script src="js/bootstrap.js"></script>
							</body>
							</html>