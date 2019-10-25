<!DOCTYPE html>
<html>
<title>
	Storybuilder - generate sentences
</title>
<body>

<?php
    
    /* Attempt MySQL server connection. */
    $link = mysqli_connect("localhost", "root", "", "storybuilding");

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM sentences ORDER BY RAND() LIMIT 1";

    $result= mysqli_query($link, "SELECT * FROM sentences ORDER BY rand() limit 1" ) or die("SELECT Error: ".mysqli_error($link));
    $row = mysqli_fetch_array($result);
    $sentence = $row['entry'];
    $result= mysqli_query($link, "SELECT * FROM nouns ORDER BY rand() limit 1" ) or die("SELECT Error: ".mysqli_error($link));
    $row = mysqli_fetch_array($result);
    $noun = $row['entry'];
    echo str_replace('_NOUN_', $noun, $sentence);
 
    // close connection
    mysqli_close($link);
?>

<form>
<input type="button" onClick="history.go(0)" value="Refresh">
</form>

</body>
</html>