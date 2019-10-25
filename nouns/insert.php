<!DOCTYPE html>
<html>
<body>

<?php
    $noun_list = explode(',', $_POST['nouns']);
    
    /* Attempt MySQL server connection. */
    $link = mysqli_connect("localhost", "root", "", "storybuilding");

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    foreach ($noun_list as $noun) {
        $sql = "INSERT INTO nouns (entry) VALUES ('$noun')";

        if(mysqli_query($link, $sql)){
            echo "Entry $noun added successfully.\n";
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
