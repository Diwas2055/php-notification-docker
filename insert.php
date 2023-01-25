<?php
//insert.php
if (isset($_POST["subject"])) {
    include("connect.php");
    $subject = mysqli_real_escape_string($con, $_POST["subject"]);
    $comment = mysqli_real_escape_string($con, $_POST["comment"]);
    $status = 0;
    $query = "
    INSERT INTO comments(comment_subject, comment_text,comment_status)
    VALUES ('$subject', '$comment',$status)
    ";
    if (mysqli_query($con, $query)) {
        echo "Records inserted successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }

    // Close connection
    mysqli_close($con);
}
