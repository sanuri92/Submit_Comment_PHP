<?php


echo "<h2>Comments </h2>";
   $name=$_POST['name'];
   $email=$_POST['email'];
   $course=$_POST['course'];
   $comment=$_POST['comment'];
   
echo 'Name 				: ';
echo $name;
echo "<br>";
echo 'Email Address 	:';
echo $email;
echo "<br>";
echo 'Course		 	:';
echo $course;
echo "<br>";
echo 'Comments		 	:';
echo $comment;
echo "<br>";

?>