<?php
    include_once 'connectDB.php';

    // Given the social security number of a professor, list the titles, classrooms, meeting days and time of his/her classes.
    $query = 
    "SELECT Courses.title, Course_Sections.classroom, 
            Course_Sections.meeting_days, 
            Course_Sections.start_time, Course_Sections.end_time 
    FROM Courses, Course_Sections 
    WHERE courses.CourseNo = course_sections.CourseNo 
    AND Course_Sections.prof_ssn =" . $_POST["prof_ssn"];

    $result = $link->query($query);
    $nor = $result->num_rows;

    for ($i = 0; $i < $nor; $i++)
    {
        $row=$result->fetch_assoc();
        echo "Title: ", $row["title"], "<br>";
        echo "Classroom: ", $row["classroom"], "<br>";
        echo "Meeting days: ", $row["meeting_days"], "<br>";
        echo "<br>";
    }
    $result->free_result();
    $link->close();
?>