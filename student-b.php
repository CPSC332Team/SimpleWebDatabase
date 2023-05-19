<?php
    include_once 'connectDB.php';

    //-- Given the campus wide ID of a student, list all courses the student took and the grades.
    $query = "  SELECT Enrollment_Records.CourseNo, Enrollment_Records.grade 
                FROM Enrollment_Records
                WHERE Enrollment_Records.CWID = " . $_POST["CWID"];


    $result = $link->query($query);
    $nor = $result->num_rows;

    for ($i = 0; $i < $nor; $i++)
    {
        $row=$result->fetch_assoc();
        echo "Course: ", $row["CourseNo"], "<br>";
        echo "Grade: ", $row["grade"], "<br>";
        echo "<br>";
    }
    $result->free_result();
    $link->close();
?>