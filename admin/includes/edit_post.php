<?php
if(isset($_GET['p_id']))
{
    $blog_id=$_GET['p_id'];
}
$sql="SELECT * FROM blogs WHERE id=$blog_id";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
    $blog_id=$row['id'];
    $blog_title=$row['title'];
    $blog_category=$row['posted'];
    $blog_author=$row['author'];
    $blog_image=$row['photo'];
    $blog_tag=$row['tags'];
    $blog_content=$row['content'];
    $blog_category_id=$row['category'];
    $blog_content_image=json_decode($row['content_image']);
}
$blog_id=$_GET['p_id'];
if(isset($_POST['update_post']))
{
    $blog_title=$_POST['title'];
    $blog_category=$_POST['category'];
    $blog_author=$_POST['author'];
    $blog_image=basename($_FILES['image']['name']);
    $blog_tag=$_POST['tags'];
    $blog_category1=$_POST['category_id'];
    $blog_content=$_POST['content'];
    move_uploaded_file($_FILES['image']['tmp_name'],"../blogimage/$blog_image");
    $allowTypes=array('png','jpg','jpeg','jfif','gif');
    $fileNames=array_filter($_FILES['images']['name']);
    $filePath=pathinfo("../contentimage/$blog_image",PATHINFO_EXTENSION);
    $temp=array();//temp array to store the multiple images
    foreach($_FILES['images']['name'] as $key=>$val)
    {
        $fileName=basename($_FILES['images']['name'][$key]);
        $fileType=pathinfo("../contentimage/$fileName",PATHINFO_EXTENSION);
        if(in_array($fileType,$allowTypes))
        {
            if(move_uploaded_file($_FILES['images']['tmp_name'][$key],"../contentimage/$fileName"))
            {
                array_push($temp,$fileName);//files are store in array
            }
        }
    }
    $blog_content_image=json_encode($temp);//json encoded multiple image files
    if(empty($blog_image))
    {
        $query="SELECT * FROM blogs WHERE id={$blog_id}";
        $result=mysqli_query($conn,$query);
        while($img=mysqli_fetch_assoc($result))
        {
            $blog_image=$img['photo'];
        }
    }
    if(empty($fileName))
    {
        $query1="SELECT * FROM blogs WHERE id={$blog_id}";
        $result1=mysqli_query($conn,$query1);
        while($img1=mysqli_fetch_assoc($result1))
        {
            $blog_content_image=$img1['content_image'];
        }
    }
    $query="UPDATE `blogs` SET title='{$blog_title}',tags='{$blog_tag}',content='{$blog_content}',content_image='{$blog_content_image}',photo='{$blog_image}',posted='{$blog_category}',date=now(),author='{$blog_author}',category='{$blog_category1}' WHERE id={$blog_id}";
    if(mysqli_query($conn,$query))
    {
        header('Location:posts.php');
    }
    else
    {
        echo "<script type='text/JavaScript'>";
        echo "alert('Data is not Updated!!')";
        echo "</script>";
        header('Location:edit_post.php');
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Blog Title</label>
        <input type="text" class="form-control" name="title" value="<?php echo $blog_title;?>">
    </div>
    <div class="form-group">
        <label for="post_category">Blog Status</label>
        <input type="text" class="form-control" name="category" value="<?php echo $blog_category;?>" readonly>
    </div>
    <div class="form-group">
        <label for="post_author">Blog Author</label>
        <input type="text" class="form-control" name="author" value="<?php echo $blog_author;?>">
    </div>
    <div class="form-group">
        <label for="post_image">Blog Image</label>
        <img src="../blogimage/<?php echo $blog_image;?>" alt="Images" width="200">
        <input type="file" name="image">
    </div>
    <div class="form-group">
        <label for="post_tags">Blog Tags</label>
        <input type="text" name="tags" class="form-control" value="<?php echo $blog_tag;?>">
    </div>
    <div class="form-group"><!-- hidden filed content blog_category_id -->
        <input type="hidden" class="form-control" name="category_id" value="<?php echo $blog_category_id;?>">
    </div>
    <div class="form-group">
        <label for="post_image">Blog Content Image(If required.....)</label>
        <?php  
        for($i=0;$i<count($blog_content_image);$i++)
        {
        $imgurl='../contentimage/'.$blog_content_image[$i];
        ?>
        <img src="<?php echo $imgurl;?>" alt="Images" width="200" height="100" style="border:2px solid #000000;">&nbsp;&nbsp;&nbsp;
        <?php }?>
        <input type="file" name="images[]" multiple>
    </div>
    <div class="form-group">
        <label for="post_content">Blog Content</label>
        <textarea class="form-control" name="content" id="body" cols="30" rows="10"><?php echo $blog_content;?></textarea>
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_post" value="Update Post">
    </div> 
</form>
<script>
 ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
</script>