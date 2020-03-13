<table class="table table-bordered table-hover">
<thead>
<th>Id</th>
<th>Author</th>
<th>Title</th>
<th>Status</th>
<th>Image</th>
<th>Tags</th>
<th>Contents</th>
<th>Content Images</th>
<th>Published Date</th>
<th>Cateogry</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
</tbody>
<?php
                $query="SELECT * FROM blogs";
                $select_posts=mysqli_query($conn,$query);
                while($row=mysqli_fetch_assoc($select_posts))
                {
                    $post_id=$row['id'];
                    $post_author=$row['author'];
                    $post_title=$row['title'];
                    $post_date=$row['date'];
                    $post_image=$row['photo'];
                    $post_tags=$row['tags'];
                    $post_status=$row['posted'];
                    $post_content=$row['content'];
                    $post_category_id=$row['category'];
                    $post_content_image=json_decode($row['content_image']);
                    echo "<tr>";
                    echo "<td align='center'>{$post_id}</td>";
                    echo "<td align='center'>{$post_author}</td>";
                    echo "<td align='center'>{$post_title}</td>";
                    echo "<td align='center'>{$post_status}</td>";
                    echo "<td><img src='../blogimage/{$post_image}' class='img-responsive' width='1000' style='border:3px solid #111111'></td>";
                    echo "<td align='center'>{$post_tags}</td>";
                    echo "<td>{$post_content}</td>";
                    echo "<td>";
                    for($i=0;$i<count($post_content_image);$i++)
                    {
                        $imgurl='../contentimage/'.$post_content_image[$i];
                        echo "<img src='{$imgurl}' class='img-responsive' width='1000' style='border:2px solid #000000'>";
                        echo "&nbsp;&nbsp;&nbsp;";
                    }
                    echo "</td>";
                    echo "<td><h6>{$post_date}</h6></td>";
                    $sql="SELECT * FROM categories WHERE id={$post_category_id}";
                    $result=mysqli_query($conn,$sql);
                    $row1=mysqli_fetch_assoc($result);
                    $category_name=$row1['name'];
                    echo "<td align='center'>{$category_name}</td>";
                    echo "<td align='center'><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
                    echo "<td align='center'><a href='posts.php?delete={$post_id}'>Delete</a></td>";
                    echo "</tr>";                 
                }
?>
</table>
<?php
                      if(isset($_GET['delete']))
                      {
                          $blog_id=$_GET['delete'];
                          $query="DELETE FROM blogs WHERE id={$blog_id}";
                          if(mysqli_query($conn,$query))
                          {
                            header('Location:posts.php');
                          }
                          else
                          {
                              echo "<script type='text/JavaScript>";
                              echo "alert('Blog are not deleted permanently!!!')";
                              echo "</script>";
                          }
                      }                         
?>