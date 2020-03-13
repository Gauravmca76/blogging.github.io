<?php 
function gettagline($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Tagline!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $tagline) {
      	# code...
			echo ''.$tagline['tagline'].'';
		}
	}
	mysqli_close($con);
}
function geticon($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no icon alert
		if ($rowcount==0) {
      		# code...
			echo 'NoIcon';
		}
      	//if there are rows available display all the results
		foreach ($result as $webicon => $icon) {
      	# code...
			echo ''.$icon['icon'].'';
		}
	}
	mysqli_close($con);
}
function getjavascripts($table){
require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no script alert
		if ($rowcount==0) {
      		# code...
			echo 'No script';
		}
      	//if there are rows available display all the results
		foreach ($result as $jsscripts => $js) {
      	# code...
			echo ''.$js['javascript'].'';
		}
	}
	mysqli_close($con);
}
function getshortdescription($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Description!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $sdc) {
      	# code...
			echo ''.$sdc['short_description'].'';
		}
	}
	mysqli_close($con);
}
function getcontacts($table,$num){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Description!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $contacts) {
      	# code...num
			if ($num==1) {
				# code...
				echo ''.$contacts['address'].'';
			}
			elseif ($num==2) {
				# code...
				echo ''.$contacts['email'].'';
			}
			elseif ($num==3) {
				# code...
				echo ''.$contacts['phone'].'';
			}
		}
	}
	mysqli_close($con);
}
function getdetaileddescription($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Description!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $sdc) {
      	# code...
			echo ''.$sdc['detailed_description'].'';
		}
	}
	mysqli_close($con);
}
function getbannertext($table,$position){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'Hello World!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $bannertext) {
      	# code...
			if ($position==1) {
					# code...
				echo ''.$bannertext['bannertext1'].'';
			}
			elseif ($position==2) {
					# code...
				echo ''.$bannertext['bannertext2'].'';
			}
			elseif ($position==3) {
					# code...
				echo ''.$bannertext['bannertext3'].'';
			}
			elseif ($position==4) {
					# code...
				echo ''.$bannertext['bannertext4'].'';
			}
		}
	}
	mysqli_close($con);
}
function getwebname($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Name!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $blogname) {
      	# code...
			echo ''.$blogname['website_name'].'';
		}
	}
	mysqli_close($con);
}
function getkeywords($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'Nothing';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $keywords) {
      	# code...
			echo ''.$keywords['keywords'].'';
		}
	}
	mysqli_close($con);
}
function getlinks($table,$platform){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo '#';
		}
      	//if there are rows available display all the results
		foreach ($result as $link => $site) {
      	# code...
			if ($platform=="facebook") {
					# code...
				echo ''.$site['facebook'].'';
			}
			elseif ($platform=="twitter") {
					# code...
				echo ''.$site['twitter'].'';
			}
			elseif ($platform=="googleplus") {
					# code...
				echo ''.$site['googleplus'].'';
			}
			elseif ($platform=="pinterest") {
					# code...
				echo ''.$site['pinterest'].'';
			}
			elseif ($platform=="dribble") {
					# code...
				echo ''.$site['dribble'].'';
			}

		}
	}
	mysqli_close($con);
}
function getcategoriesmenu($table)
{
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no categories alert
		if ($rowcount==0) {
      		# code...
			echo 'No Categories';
		}
      	//if there are rows available display all the results
		foreach ($result as $categories => $category) {
      	# code...
			echo '<a class="dropdown-item" href="category.php?id='.$category['id'].'">'.$category['name'].'</a>
			<div class="dropdown-divider"></div>';
		}
	}
	mysqli_close($con);
}
function getbottomsliderposts($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table WHERE posted='publish' ORDER BY id DESC LIMIT 3";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No posts to fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $sliderposts => $slideritem) {
      	# code...fetch actual category from categories table
			$category_id=$slideritem['category'];
			$sql="SELECT * FROM categories WHERE id='$category_id'";
			if ($result=mysqli_query($con,$sql))
			{
				foreach ($result as $results => $actualcategory) {
					$ctgry=$actualcategory['name'];
				}
			}
				#code...display the results
			echo '<li>
			<div class="blog-item">
			<img src="blogimage/'.$slideritem['photo'].'" alt="fantastic cms" class="img-fluid" style="width:450px;height:350px"/>
			<button type="button" class="btn btn-primary play">
			<a href="single.php?id='.$slideritem['id'].'" style="text-decoration:none;color:white"><i class="fas fa-eye"></i></a>
			</button>
			<div class="floods-text">
			<h3>'.$slideritem['title'].'
			<span>'.$ctgry.'
			<label>|</label>
			<i>'.$slideritem['author'].'</i>
			</span>
			</h3>
			</div>
			</div>
			</li>';
		}
	}

	mysqli_close($con);
}
function getblogridposts($table){
	require("database/db_connect.php");
	$limit = 6;//display blogs on single page
	if(isset($_GET['page'])) { $page = $_GET['page']; } else { $page=1; }//page count are started
	$start_form = ($page - 1) * $limit;
	$sql="SELECT * FROM $table WHERE posted='publish' ORDER BY id DESC LIMIT $start_form, $limit";
	$reesult= mysqli_query($con,$sql);
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
      	//if there are rows available display all the results
		while($row=mysqli_fetch_assoc($reesult))
		{
			echo '<div class="col-md-6 blog-grid-top">
			<div class="b-grid-top">
			<div class="blog_info_left_grid">
			<a href="single.php?id='.$row['id'].'">
			<img src="blogimage/'.$row['photo'].'" class="img-fluid" style="width:350px;height:250px">
			</a>
			</div>
			<h3>
			<a href="single.php?id='.$row['id'].'">'.$row['title'].'</a>
			</h3>
			</div>
			<ul class="blog-icons">
			<li>
			<a href="#">
			<i class="far fa-clock"></i>'.$row['date'].'</a>
			</li>
			<li class="mx-2">
			<a href="#">
			<i class="far fa-user"></i> '.$row['author'].'</a>
			</li>
			<li>
			<a href="#">
			<i class="fas fa-tags"></i>'.$row['tags'].'</a>
			</li>
			</ul>
			</div>';
		}
		$sql = "SELECT COUNT(id) FROM blogs";  
		$rs_result = mysqli_query($con, $sql);  
		$row11 = mysqli_fetch_row($rs_result);  
		$total_records = $row11[0];  
		$total_pages = ceil($total_records / $limit);  
		$pagLink = "<div class='pagination' style='position:absolute; bottom:0px; margin-left:500px;'>";  
		for ($i=1; $i<=$total_pages; $i++) {  
			 $pagLink .= "<h4><B><U><a href='index.php?page=".$i."'>".$i."</a></U></B></h4>";
			 $pagLink .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";  
		}  
		echo $pagLink."</div>";  
	}
	mysqli_close($con);
}
function getolderposts($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table WHERE posted='publish' ORDER BY id ASC LIMIT 8";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $olderposts => $op) {
      	# code...
			echo '<div class="blog-grids row mb-3">
			<div class="col-md-5 blog-grid-left">
			<a href="single.php?id='.$op['id'].'">
			<img src="blogimage/'.$op['photo'].'" class="img-fluid" alt="fantastic cms">
			</a>
			</div>
			<div class="col-md-7 blog-grid-right">

			<h5>
			<a href="single.php?id='.$op['id'].'">'.$op['title'].'</a>
			</h5>
			<div class="sub-meta">
			<span>
			<i class="far fa-clock"></i> '.$op['date'].'</span>
			</div>
			</div>

			</div>';
		}
	}
	mysqli_close($con);
}
function getsingleolderposts($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table WHERE posted='publish' ORDER BY id ASC LIMIT 5";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $olderposts => $op) {
      	# code...
			echo '<div class="blog-grids row mb-3">
			<div class="col-md-5 blog-grid-left">
			<a href="single.php?id='.$op['id'].'">
			<img src="blogimage/'.$op['photo'].'" class="img-fluid" alt="fantastic cms">
			</a>
			</div>
			<div class="col-md-7 blog-grid-right">

			<h5>
			<a href="single.php?id='.$op['id'].'">'.$op['title'].'</a>
			</h5>
			<div class="sub-meta">
			<span>
			<i class="far fa-clock"></i> '.$op['date'].'</span>
			</div>
			</div>

			</div>';
		}
	}
	mysqli_close($con);
}
function getcategoryblogs($table,$id){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table WHERE category='$id' ORDER BY id DESC LIMIT 10";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Blogs To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $categories => $cdata) {
      	# code...
			echo '<div class="col-md-6 card">
							<a href="single.php?id='.$cdata['id'].'">
								<img src="blogimage/'.$cdata['photo'].'" class="card-img-top img-fluid" alt="fantastic cms" style="width:480px;height:300px">
							</a>
							<div class="card-body">
								<ul class="blog-icons my-4">
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> '.$cdata['date'].'</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-user"></i> '.$cdata['author'].'</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-tags"></i> '.$cdata['tags'].'</a>
									</li>

								</ul>
								<h5 class="card-title ">
									<a href="single.php?id='.$cdata['id'].'">'.$cdata['title'].'</a>
								</h5>
								<a href="single.php?id='.$cdata['id'].'" class="btn btn-primary read-m">Read More</a>
							</div>
						</div>';
		}
	}
	mysqli_close($con);
}
?>
