<?php
    require "connect.php";
    $courses=[];
    $courses=query("SELECT * FROM courses");
    if(isset($_POST["search"])){
        $searchKey = $_POST["searchQuery"];
        $courses=query("SELECT * FROM courses WHERE CourseName LIKE '%$searchKey%'");
    }
    $major = 0;
    // $_SESSION['level'] = 0;
    if(isset($_POST["filter"])){
        $major=$_POST["major"];
        // $_SESSION["level"]=$_POST['level'];
        $courses=query("SELECT * FROM courses WHERE Major = $major OR Major = 3");
    }
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
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script defer src = "buttonless.js"></script>
        <title>Study Inc.</title>
    </head>
    <body>
        <div class = "header">
            <logo><i class="fa-solid fa-book-open" id = "profile"></i></logo>
            <form id = "searchbar" action="" method="post">
                <input type = "text" placeholder="Search" name="searchQuery" class = "searchbar" id = "searchQuery">
                <button type = "submit" name="search"></button>
            </form>
            <a href = "home.html"><i class="fa-solid fa-user" id = "profile"></i></a>
        </div>
        <form id="courseFilter" method="post">
            <div class="form-content">
                <label for="major"><h3>Major</h3></label>
                <select id="major" name="major" onchange="submitform()">
                    <option value="0" disabled hidden selected>Select Your Major</option>
                    <option value="1">Science</option>
                    <option value="2">Social</option>
                </select>
            </div>
            <div class="form-content">
                <label for="level"><h3>Level</h3></label>
                <select id="level" name="level" onchange="submitform()">
                    <option value="0" disabled hidden selected>Select Your Level</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <!-- <div class="form-content">
                <label for="curriculum"><h3>Curriculum</h3></label>
                <select id="curriculum" name="curriculum" onchange="submitform()">
                    <option value="none" disabled hidden selected>Select Your Curriculum</option>
                    <option value="">Kurikulum 2013</option>
                </select>
            </div> -->
            <button type="submit" name="filter"></button>
        </form>
        <div id="courses">
            <?php for($i = 0; $i < count($courses); $i++) :?>
                <div class="course">
                    <div class="col">
                        <?=$courses[$i]["CourseName"]?>
                        <div class="details"><a href="courseDetails.php?courseID=<?=$courses[$i]["CourseID"]?>">details...</a></div>
                    </div>
                    <?php if(++$i < count($courses)):?>
                        <div class="col">
                            <?=$courses[$i]["CourseName"]?>
                            <div class="details"><a href="courseDetails.php?courseID=<?=$courses[$i]["CourseID"]?>">details...</a></div>
                        </div>
                    <?php endif;?>
                </div>
            <?php endfor; ?>
        </div>
    </body>
</html>