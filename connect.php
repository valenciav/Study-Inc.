<?php
    $conn = mysqli_connect('localhost', 'root', '', 'StudyInc');

    function query($query){
        global $conn;
        $result = $conn->query($query);
        $list=[];
        while($row=$result->fetch_assoc()){
            $list[]=$row;
        }
        return $list;
    }

    function insert($fn, $ln, $em, $pw, $gen){
        global $conn;
        $query="INSERT INTO users (firstName, lastName, email, pw, gender) VALUES (?, ?, ?, ?)";
        $statement = $conn->prepare($query);
        if($statement->execute(array($fn, $ln, $em, $pw, $gen))){
            echo "Data inserted";
        }
        else{
            echo "Data insertion failed";
        }
    }
?>

