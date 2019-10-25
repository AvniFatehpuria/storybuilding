<!DOCTYPE html>
<html>
<body>

<?php
    $sentence_list = explode(';', $_POST['sentences']);
    
    /* Attempt MySQL server connection. */
    $link = mysqli_connect("localhost", "root", "", "storybuilding");

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    foreach ($sentence_list as $sentence) {
        $sql = "INSERT INTO sentences (entry) VALUES ('$sentence')";

        if(mysqli_query($link, $sql)){
            echo "Entry $sentence added successfully.\n";
            echo "<br>";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            echo "<br>";
        }

    }

    // attempt insert query execution
   
    // close connection
    mysqli_close($link);
?>
</body>
</html>
