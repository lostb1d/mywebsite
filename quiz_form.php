<?php
include_once 'dbc.php';

$date = $_POST["date"];
$title = $_POST["title"];
$quiz_class = $_POST["quiz_class"];
$quiz_link = $_POST["quiz_link"];
$authentication_key = $_POST["authentication_key"];

if($authentication_key != "9844"){
    echo "Authentication Failed !!!!";

    echo "<br><a href='quiz_form.html'>Retry</a>";
    die();

}

echo $date;



$sql = "INSERT INTO quiz (title,class,link,quiz_date) VALUES ('$title' ,'$quiz_class', '$quiz_link', '$date')";

if(mysqli_query($conn, $sql)){
    echo "New Record created successfully";
    echo "<br><a href='quiz_form.html'>Submit Another Response</a>";
} else{
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    header('Location: '.quiz_form.html);
}

mysqli_close($conn);
?>