<?php

function getValue($id){
    require("connection.php");
    $query = "SELECT * FROM sorting_table WHERE id ='$id'";
    $result = mysqli_query($con, $query);
    $arr = mysqli_fetch_assoc($result);
    $value = $arr['value'];
    return $value;
}

function setValue($id, $value){
    require("connection.php");
    $query = "UPDATE sorting_table SET value = '$value' WHERE id ='$id'";
    $result = mysqli_query($con, $query);
}

function bubbleSort() {
    require("connection.php");
    $result = mysqli_query($con, "SELECT DISTINCT * FROM sorting_table"); 
    $size = mysqli_num_rows($result);
    for ($i=0; $i<$size; $i++) {
        for ($j=1; $j<$size-$i; $j++) {
            $k = $j+1;
            if (getValue($k) < getValue($j)) {
                $temp = getValue($k);
                setValue($k, getValue($j));
                setValue($j, $temp);
            }
        }
    }
}

function showArr(){
    require("connection.php");
    $result = mysqli_query($con, "SELECT DISTINCT * FROM sorting_table"); 
    $size = mysqli_num_rows($result);
    for ($i=1; $i<=$size; $i++) {
        echo("Number $i, value = '".getValue($i)."'");
        echo "<br>";
    }
}