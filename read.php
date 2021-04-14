<?php
 $suggestion = $_POST["suggestion"];
 echo $suggestion;
 echo "<br>";
 $choices = $_POST["choices"];
 foreach ($choices as &$choice)
 {
	 echo $choice;
	 echo "<br>";
 }
 $answers = $_POST["answers"];
 foreach ($answers as &$answer)
 {
	 echo $answer;
	 echo "<br>";
 }
?>