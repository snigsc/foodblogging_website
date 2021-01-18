<html>  
      <head>  
           <title>Upload</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
           <link rel="stylesheet" type="text/css" href="UploadPage.css"> 
      </head>  
      <body>  
           <br /><br /> 
           <h1 class = "name" align = center>~ UPLOAD YOUR BLOG ~</h1> 
           <br /><hr />
           <div class="container" align = center>  
                <div class = "row">
                        <br />
                <h3 align="center">Upload the given details as below:</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data" id = "f">  
                    <h3>Title of your Blog: </h3><input type="text" class = "formboxes" name="title" id="title" required placeholder="Enter Title"/>
                    <br /><br />
                    <h3><br>Name of the Restaurant:</h3><input type="text" class = "formboxes" name="rname" id="rname" required placeholder="Enter Restaurant Name"/>
                    <br /><br>
                    <h3><br>Your Name:</h3><input type="text" class = "formboxes" name="bname" id="bname" required placeholder="Enter Your Name"/>
                    <br /><br>
					<h3><br>Your Blog:</h3><br><textarea name="blog" class = "textarea" id="textarea" rows="10" cols="50"></textarea><br />
                    <br /><h3>Attach Image:</h3> <input type="file" class = "formboxes" name="image" id="image" />  
                     <br><br> 
                     <input type="submit" class="insert" name="insert" id="insert" value="SUBMIT" class="submit" />  
                    <br><br><hr />
                    </form> 
                <br />  
                <br /> 
             
           </div>
           </div>
      </body>  
 </html> 
  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>
  <?php  
 $connect = mysqli_connect("localhost", "root", "", "final");  
 
 if(isset($_POST["insert"]))  
 {  $title = $_POST['title'];
 	$rname = $_POST['rname'];
	$bname = $_POST['bname'];
	$blog = $_POST['blog'];
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
    mysqli_query($connect, "INSERT INTO blog_table(img,blog_title,restaurant_name,blogger_name,blog) VALUES ('$file','$title','$rname','$bname','$blog')");
	  //mysqli_query($connect,$query);
	  
	 // $sql = "INSERT INTO blog_table(blog_title, restaurant_name, blogger_name,blog)
      //  VALUES ('".$_POST["title"]."','".$_POST["rname"]."','".$_POST["bname"]."','".$_POST["blog"]."')";
    // if(mysqli_query($connect, $query))  
      //{  
        //   echo '<script>alert("Image Inserted into Database")</script>';  
      //}  
     
 }  
 ?> 
 
 
 