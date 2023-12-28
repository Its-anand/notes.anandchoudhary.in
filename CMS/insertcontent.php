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
            <option value="html">Html</option>
            <option value="css">Css</option>
            <option value="sass">Sass</option>
            <option value="javascript">JavaScript</option>
            <option value="php">Php</option>
            <option value="mysql">Mysql</option>
            <option value="figma">Figma</option>
            <option value="uiux">UI/UX</option>
            <option value="c">C language</option>
            <option value="cpp">cpp language</option>
            <option value="dart">Dart</option>
            <option value="flutter">Flutter</option>
            <option value="ajax">Ajax</option>
            <option value="reactjs">React js</option>
            <option value="nextjs">Next js</option>
            <option value="nodejs">Node js</option>
            <option value="java">Java</option>
            <option value="datastructure">Data Structure</option>
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
            case "html":
                $table = 'html';
                break;
            case "css":
                    $table = 'css';
                break;
            case "javascript":
                $table = 'javascript';
                break;
            case "php":
                    $table = 'php_PTR';
                break;
            case "mysql":
                $table = 'mysql';
                break;
            case "figma":
                    $table = 'figma';
                break;
            case "c":
                    $table = 'c';
                break;
            case "cpp":
                $table = 'cpp';
                break;
            case "dart":
                $table = 'dart';
                break;
            case "flutter":
                    $table = 'flutter';
                break;
            case "ajax":
                $table = 'ajax';
                break;
            case "reactjs":
                    $table = 'reactjs';
                break;
            case "nextjs":
                $table = 'nextjs';
                break;
            case "nodejs":
                    $table = 'nodejs';
                break;
            case "sass":
                    $table = 'sass';
                break;
            case "java":
                    $table = 'java';
                break;                
            case "datastructure":
                    $table = 'datastructure';
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

