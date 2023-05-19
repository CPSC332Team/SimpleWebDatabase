<?php
    include_once 'connectDB.php';

    // --Given a course number and a section number, count how many students get each distinct grade
    
    $query = 
    "SELECT DISTINCT grade, COUNT(*) AS num_students 
    FROM enrollment_records 
    WHERE SectionNo = " . $_POST["SectionNo"] 
    . " AND CourseNo = " . $_POST["CourseNo"] 
    . " GROUP BY grade;";

    $result = $link->query($query);
    $nor = $result->num_rows;

    for ($i = 0; $i < $nor; $i++)
    {
        $row=$result->fetch_assoc();
        echo "Grade: ", $row["grade"], "<br>";
        echo "Number of students: ", $row["num_students"], "<br>";
        echo "<br>";
    }
    $result->free_result();
    $link->close();
?>