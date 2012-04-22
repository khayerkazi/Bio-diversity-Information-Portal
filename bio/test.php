<form enctype="multipart/form-data" action="test.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
Choose a file to upload: <input name="uploadedfile" type="file" /><br />
<input type="submit" name="BUTTON" value="Upload File" />
</form>

<?php
if(isset($_POST['BUTTON'])){
$target_path = "uploads/";
$target_path = $target_path .(string)(4).".jpg";

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".   (string)(4).".jpg". 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}
}
?>