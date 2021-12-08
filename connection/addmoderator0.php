<?php
session_start();
if($_SESSION['usertype'] == 3){ //3 - System Dev
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Moderator</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $id = $_POST['id'];
            $sqlCheck = "SELECT * FROM systemaccess WHERE user_user_id='".$id."'";
        }
    ?>
</body>
</html>

<?php
}else{
    header("location: index.php");
}
?>