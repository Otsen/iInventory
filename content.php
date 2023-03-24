<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">
	<title>div-1</title>
</head>

<body style="align-items: left;">
    document.getElementById("content").innerHTML='<?php
        $x = $_REQUEST['id'];
        $connection = mysqli_connect("localhost","root","")
        or die ("Couldn't connect to server");

        $db = mysqli_select_db($connection,"iInventory")
        or die ("Couldn't select database");


        $query = "SELECT * FROM ".$x;
        $result = mysqli_query($connection,$query)
        or die("Query failed: ".mysqli_error($connection));

        echo "<ul";
        while ($row = mysqli_fetch_array($result)){
            echo "<li>", $row['S_No'], "&emsp;", $row['Name'], "</li>";
        }

        echo "</ul>";

        mysqli_close($connection);
    ?>'
</body>

</html>
