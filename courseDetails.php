<?php
    require "connect.php";
    $course=$_GET['courseID'];
    // $_SESSION['level']=$_POST['level'];
    // $level = $_SESSION['level'];
    $c=query("SELECT * FROM courses WHERE CourseID LIKE '$course'");
    $topics=[];
    $topics=query("SELECT * FROM topic WHERE CourseID LIKE '$course'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="courseStyle.css">
    <script src="https://kit.fontawesome.com/d57f3da380.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Study Inc.</title>
</head>
<body>
    <div class = "header">
        <logo><i class="fa-solid fa-book-open" id = "profile"></i></logo>
        <a href = "home.html"><i class="fa-solid fa-user" id = "profile"></i></a>
    </div>
    <div class="courseDetails">
        <div class="courseDetailsHeader"><?=$c[0]["CourseName"]?></div>
        <?php for($i = 0; $i < count($topics); $i++) :?>
            <div class="courseDetail">
                <div class = "col"><?=$topics[$i]["TopicName"]?></div>
                <?php if(++$i < count($topics)):?>
                    <div class = "col"><?=$topics[$i]["TopicName"]?></div>
                <?php endif;?>
                <?php if(++$i < count($topics)):?>
                    <div class = "col"><?=$topics[$i]["TopicName"]?></div>
                <?php endif;?>
                <?php if(++$i < count($topics)):?>
                    <div class = "col"><?=$topics[$i]["TopicName"]?></div>
                <?php endif;?>
            </div>
        <?php endfor; ?>
        <a href="joinCourse.php?courseID=<?=$course?>">Join Course</a>
    </div>
</body>
</html>