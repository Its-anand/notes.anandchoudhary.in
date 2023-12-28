<!DOCTYPE html>
<html lang="en">
<?php
include '../includes/alert.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Content</title>
    <link rel="stylesheet" href="../style_and_script/cmsStyle.css">
    
</head>
<body>
    
    <form method="post" enctype="multipart/form-data">
        <h2>Insert Image</h2>
        <!-- <div class="fileUploadHolder"> -->
        <input type="file" name="upload" id="imageUpload">
        <!-- </div> -->
        <input type="submit" id="submitButton" value="Submit" name="insertContent">
    </form>
</body>
</html>
<?php
    $filename = $_FILES['upload']['name'];
    $tempname = $_FILES['upload']['tmp_name'];
    $folder = "../images/".$filename;
    if(move_uploaded_file($tempname, $folder)){
        alert("Uploaded Successfully");
    }
    else{
        alert("Upload failed");
    }


?>

