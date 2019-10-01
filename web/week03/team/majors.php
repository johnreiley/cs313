<?php

$majors = array("Computer Science", "Web Design and Development", 
"Computer Information Technology", "Computer Engineering");

foreach ($majors as $major) {
    echo "<input type=\"radio\" name=\"major\" value=\"$major\" > $major <br>";
}
