<?php  
$target_path = "uploads/";  
$target_path = $target_path.basename( $_FILES['fileToUpload']['name']);   
  
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
    
    echo "File uploaded successfully!";
	header("Location: test.php");

} else{  
    echo "Sorry, file not uploaded, please try again  Test!"; 
}  
