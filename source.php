<?php  
 $connect = mysqli_connect("localhost", "root", "", "user");  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO user_image(image) VALUES ('$file')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
                <?php  
                $query = "SELECT image FROM user_image where user_id='1' ";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200" class="img-thumnail" />  
                     ';  
                }  
?>  
              
 