<?php
    require "connect.php";
    $course=$_GET['courseID'];
    $c=query("SELECT * FROM courses WHERE CourseID LIKE '$course'");
    $tutors=query("SELECT * FROM tutors");
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script defer src="calendar.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Study Inc.</title>
</head>

<body>
    <div class = "header">
        <logo><i class="fa-solid fa-book-open" id = "profile"></i>study Inc.</logo>
    </div>
    <div class="courseDetails">
        <div class="courseDetailsHeader"><?=$c[0]["CourseName"]?></div>
        <div id="datepicker">
            <div class="year-wrap">
                <input type="button" name="prevYear" value="&#10094;"  id="prevYear">
                <span id="year">2022</span>	
                <input type="button" name="nextYear" value="&#10095;"  id="nextYear">
            </div>
            <br>
            <div class="month-wrap">
                <input type="button" name="prev" value="&#10094;" id="prevMonth">
                <span id="month-title"></span>
                <input type="button" name="next" value="&#10095;" id="nextMonth">
            </div>
            <table id="dt-able" >
                <td class="day_val"></td>
            </table>
        </div>
        <div class="container">
            <form id="tutorchoose">
                <div class="tutors">
                    <h2 align="center">Available Tutor for Selected Day</h2>
                    <?php for($i=0; $i<count($tutors); $i++):?>
                        <input type="radio" value='<?=$tutors[$i]["tutorID"]?>' id="<?=$tutors[$i]["tutorID"]?>" name="tutorchoice">
                        <label for="<?=$tutors[$i]["tutorID"]?>" name="tutorchoice">
                            <div class="tut">
                                <span class="tutname"><?php if($tutors[$i]["gender"] == 'Male') echo 'Mr. '; else echo 'Ms. ';?><?=$tutors[$i]["tutorName"]?></span>
                                <span class="tutrate"><?=$tutors[$i]["tutorRating"]?>☆</span>
                            </div>
                        </label>
                    <?php endfor?>
                </div>
            </form>
            <div class="sched">
                <h2>Available Schedule</h2>
                <input type="time">
            </div>
        </div>
        <a href="home.php?courseID=<?=$course?>userID=<?$user?>">Join Course</a>
    </div>
</body>