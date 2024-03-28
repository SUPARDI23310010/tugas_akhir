<?php


function query($query){
    $result = mysqli_query(mysqli_connect("localhost","root","","mahasiswa"),$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
?>