<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "../includes/includes.php"; 
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Content</title>
    <link rel="stylesheet" href="../style_and_script/cmsStyle.css">

</head>
<body>
    <form method="post">
        <h2>Insert Content</h2>
        <select name="selectLanguage" id="selectLanguage">
            <option >Select Language</option>
            <option value="php">Php</option>
            <option value="dart">Empty</option>
            
        </select>
        <input type="text" name="heading" placeholder="Heading.." id="">
        <textarea name="content" id="" placeholder="Code.."></textarea>
        <input type="submit" id="submitButton" value="Submit" name="insertContent">
    </form>
</body>
</html>
<?php
    if(isset($_POST['insertContent'])){
        $selectLanguage= $_POST['selectLanguage'];
        $id=strtolower(str_replace(' ','_',$_POST['heading']));

        $heading = $_POST['heading'];
        $content = $_POST['content'];
        $code = mysqli_real_escape_string($con, $content);
        $table=null;
        switch($selectLanguage){
            case "Empty":
                $table = 'temp1';
                break;
            case "php":
                    $table = 'php_PTR';
                break;
        }
        $checkQuery="SELECT * FROM $table WHERE id = $id";
        $result = mysqli_query($con,$checkQuery);
        if($result){
            alert("Topic already Exists");
        }
        else{
            $insertContent = "INSERT INTO $table(id,heading,code) VALUES('$id','$heading','$code')";
            $result = mysqli_query($con, $insertContent);
            if($result){
                alert("Done!");
            }
            else{
                alert("Unable to connect");
            }
        }
    }
?>

