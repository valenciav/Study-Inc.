<?
    require 'connect.php';
    $user="hehe";
    $course="";
    $course="SELECT * FROM courses JOIN enroll ON courses.CourseID = enroll.CourseID WHERE UserID = $user";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homeStyle.css">
    <script src="https://kit.fontawesome.com/d57f3da380.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Study Inc.</title>
</head>
<body>
    <div class = "header">
        <logo><i class="fa-solid fa-book-open" id = "profile"></i></logo>
        <form id = "searchbar">
            <input type = "text" placeholder="Search" class = "searchbar" id = "searchQuery">
            <button class = "search" type = "submit"></button>
        </form>
        <i class="fa-solid fa-user" id = "profile"></i>
    </div>
    <div class = "content">
        <div class = "profile">
            <i class="fa-solid fa-user" id = "profile"></i>
            <h1><?echo $user?></h1>
            <h2>Highschool Student</h2>
        </div>
        <hr>
        <div class = "calendar">
            <div class = "month">
                <hr class = "half">
                <div class="week">
                    <div class="weekday">SUN</div>
                    <div class="weekday">MON</div>
                    <div class="weekday">TUE</div>
                    <div class="weekday">THU</div>
                    <div class="weekday">FRI</div>
                    <div class="weekday">SAT</div>
                </div>
                <?php $i=1; while($i <= 30): ?>
                    <div class = "week">
                        <?php for($j = 1; $j<7; $j++) :?>
                            <div class="day"><?=$i++?></div>
                        <?php endfor;?>
                    </div>
                <?php endwhile;?>
            </div>
            <div class = "month">
                <hr class = "half">
                <div class="week">
                    <div class="weekday">SUN</div>
                    <div class="weekday">MON</div>
                    <div class="weekday">TUE</div>
                    <div class="weekday">THU</div>
                    <div class="weekday">FRI</div>
                    <div class="weekday">SAT</div>
                </div>
                <?php $i=1; while($i <= 30): ?>
                    <div class = "week">
                        <?php for($j = 1; $j<7; $j++) :?>
                            <div class="day"><?=$i++?></div>
                        <?php endfor;?>
                    </div>
                <?php endwhile;?>
            </div>
        </div>
        <div class = "courses">
            <h1>Your Courses</h1>
            <div class = "dashboard">
                <div class = "dbcontent">
                    <?php if(isset($course)):?>
                    <?php else:?>
                        <text align="center">You haven't joined any course yet</text>
                        <div class ="button" align="center"><a href="course.php">Join a Course</a></div>
                    <?php endif?>
                </div>
            </div>
        </div>
        <div class = "assignments">
            <h1>Your Assignments</h1>
            <div class = "dashboard"></div>                
        </div>
    </div>
</body>