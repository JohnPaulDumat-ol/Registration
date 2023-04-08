<?php

$fname = $_REQUEST ['fname'];
echo "First Name:" .$fname;
echo "</br>";
$lname = $_REQUEST ['lname'];
echo "Last Name:" .$lname;
echo "</br>";
$date = $_REQUEST ['date'];
echo "Date:" .$date;
echo "</br>";
$search = $_REQUEST ['search'];
echo "Search:" .$search;
echo "</br>";
$homepage = $_REQUEST ['homepage'];
echo "Homepage:" .$homepage;
echo "</br>";
$favcolor = $_REQUEST ['favcolor'];
echo "Favorite Color:" .$favcolor;
echo "</br>";
$vol = $_REQUEST ['vol'];
echo "Volume:" .$vol;
echo "</br>";
$birthdaytime = $_REQUEST ['birthdaytime'];
echo "Birthday (date and time):" .$birthdaytime;
echo "</br>";
$number = $_REQUEST ['number'];
echo "Number:" .$number;
echo "</br>";
$file = $_REQUEST ['file'];
echo "My File:" .$file;
echo "</br>";

if (isset($_POST['subjects'])) {
    $selected_subjects = $_POST['subjects'];

    if (in_array('ITS-309', $selected_subjects)) {
      echo "I Choice IA&S";
    }
    if (in_array('ITS-307', $selected_subjects)) {
      echo "I Choice Platform Technologies";
    }
    if (in_array('ITS-306', $selected_subjects)) {
      echo "I choice Web Development 2";
    }
  } else {
    echo "No subject";
  }
  echo "</br>";

  if(isset($_POST['fav_language'])){
    $selected_language = $_POST['fav_language'];
    echo "My choiceng language is: " . $selected_language;
  } 
$email = $_REQUEST ['email'];
echo "Email:" .$email;
echo "</br>";
$password = $_REQUEST ['password'];
echo "Password:" .$password;
echo "</br>";
?>