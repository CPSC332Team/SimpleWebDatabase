<?php
    include_once 'connectDB.php';

    //-- Given a course number list the sections of the course, including the classrooms, 
    // the meeting days and time, and the number of students enrolled in each section.
    $query = "  SELECT Course_Sections.SectionNo, Course_Sections.classroom, 
                Course_Sections.meeting_days, Course_Sections.start_time, Course_Sections.end_time, 
                COUNT(Enrollment_Records.SectionNo) AS 'number_students' 
                FROM Course_Sections, Enrollment_Records 
                WHERE Enrollment_Records.SectionNo = Course_Sections.SectionNo 
                AND Course_Sections.CourseNo = " . $_POST['CourseNo']
                . " GROUP BY SectionNo;";

    $result = $link->query($query);
    $nor = $result->num_rows;

    for ($i = 0; $i < $nor; $i++)
    {
        $row=$result->fetch_assoc();
        echo "Section: ", $row["SectionNo"], "<br>";
        echo "Classroom: ", $row["classroom"], "<br>";
        echo "Meeting days: ", $row["meeting_days"], "<br>";
        echo "Time: ", $row["start_time"], " - " , $row["end_time"], "<br>";
        echo "Number of Student: ", $row["number_students"], "<br>";
        echo "<br>";
    }

    $result->free_result();
    $link->close();
?>