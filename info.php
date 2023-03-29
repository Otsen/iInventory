<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content=
            "width=device-width, initial-scale=1.0">
        <title>div-1</title>    
    </head>

    <body>
        <div style="align-items: center;height:99.7%;width:99.8%;border:none;" id="info">
            <?php
                $tablename = $_GET['tablename'];
                $sno = $_GET['sno'];
                $connection = mysqli_connect("localhost","root","")
                or die ("Couldn't connect to server");

                $db = mysqli_select_db($connection,"iInventory")
                or die ("Couldn't select database");

                $query = "SELECT * FROM {$tablename} WHERE S_No = {$sno}";
                $result = mysqli_query($connection,$query)
                or die("Query failed: ".mysqli_error($connection));
                
                echo ("<ul>");
                
                while ($row = mysqli_fetch_array($result)){
                    echo "<li>",$row['S_No'],"&emsp;",$row['Name'],"</li>";
                }
                echo "</ul>";

                mysqli_close($connection);
            ?>
        </div>
    </body>
</html>
