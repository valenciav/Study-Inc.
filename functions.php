<?php
$con = mysqli_connect("");

function query($query){
    global $con;
}

function search($searchQuery){
    $searchQuery = "SELECT * FROM 
                    WHERE keywords LIKE '%$searchQuery%'";
    return query($searchQuery);
}