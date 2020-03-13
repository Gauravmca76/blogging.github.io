<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Blog Title</label>
        <input type="text" class="form-control" name="title" required>
    </div>
    <div class="form-group">
        <label for="post_category">Blog Status</label>
        <select name="category" id="category" class="form-control" readonly>
        <option value="publish">Publish</option>
        </select>
    </div>
    <div class="form-group">
        <label for="post_author">Blog Author</label>
        <input type="text" class="form-control" name="author" required>
    </div>
    <div class="form-group">
        <label for="post_status">Blog category</label>
        <select name="category1" id="category1" class="form-control">
        <?php
        include_once("../admin/database.php");
        $sql="SELECT * FROM categories";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result))
        {
            $id=$row['id'];
            $title=$row['name'];
            echo "<option value='${id}'>{$title}</option>";
        }
        ?>
        </select>
    </div>
    <div class="form-group">
        <label for="post_image">Blog Image</label>
        <input type="file" name="image">
    </div>
    <div class="form-group">
        <label for="post_tags">Blog Tags</label>
        <input type="text" name="tags" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="post_image">Blog Content Image(If requried.....)</label>
        <input type="file" name="files[]" multiple>
    </div>
    <div class="form-group">
        <label for="post_content">Blog Content</label>
        <textarea class="form-control" name="content" id="body" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
    </div> 
</form>
<script>
 ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<?php
if(isset($_POST['create_post']))
{
    include_once("../admin/database.php");
    $blog_title=$_POST['title'];
    $blog_author=$_POST['author'];
    $blog_category=$_POST['category1'];
    $blog_image=basename($_FILES['image']['name']);
    $blog_tag=$_POST['tags'];
    $blog_content=$_POST['content'];
    $blog_status=$_POST['category'];
    $allowTypes=array('png','jpg','jpeg','jfif','gif');
    $fileNames=array_filter($_FILES['files']['name']);
    $filePath=pathinfo("../blogimage/$blog_image",PATHINFO_EXTENSION);
    $temp=array();//temp array to store the multiple images
    foreach($_FILES['files']['name'] as $key=>$val)
    {
        $fileName=basename($_FILES['files']['name'][$key]);
        $fileType=pathinfo("../contentimage/$fileName",PATHINFO_EXTENSION);
        if(in_array($fileType,$allowTypes))
        {
            if(move_uploaded_file($_FILES['files']['tmp_name'][$key],"../contentimage/$fileName"))
            {
                array_push($temp,$fileName);//files are store in array
            }
        }
    }
    $multifile=json_encode($temp);//json encoded multiple image files
    if(in_array($filePath,$allowTypes))
    {
        if(move_uploaded_file($_FILES['image']['tmp_name'],"../blogimage/$blog_image"))
        {
            $sql="INSERT INTO blogs VALUES('','{$blog_title}','{$blog_tag}','{$blog_content}','{$multifile}','{$blog_image}','{$blog_status}',now(),'{$blog_author}','{$blog_category}')";
            if(mysqli_query($conn,$sql))
            {
                echo "<script type='text/JavaScript'>";
                echo "alert('Blog are Added!!!')";
                echo "</script>";
            }
            else
            {
                echo "<script type='text/JavaScript'>";
                echo "alert('Blog are Not Added!!!')";
                echo "</script>";
            }
        }
        else
        {
                echo "<script type='text/JavaScript'>";
                echo "alert('Image are Not Added!!!')";
                echo "</script>";
        }
    }
    else
    {
                echo "<script type='text/JavaScript'>";
                echo "alert('Image are Not uploaded!!!')";
                echo "</script>";
    }
}
?>