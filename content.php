<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content=
            "width=device-width, initial-scale=1.0">
        <title>div-1</title>    
        <script src="https://code.jquery.com/jquery-3.6.3.js"></script>

        <script>
            function change2(tablename,sno){
                $(document).ready(function () {
                        let url="http://localhost/iInventory/info.php?tablename=";
                        url=url.concat("",tablename);
                        url=url.concat("&sno=",sno);
                        $('#content').load(url);
                });
            }
        </script>
                 
    </head>

    <body>
        <div style="align-items: center;height:99.7%;width:99.8%;border:none;" id="material">
            <?php
                $tablename = $_REQUEST['id'];
                $connection = mysqli_connect("localhost","root","")
                or die ("Couldn't connect to server");

                $db = mysqli_select_db($connection,"iInventory")
                or die ("Couldn't select database");

                $query = "SELECT * FROM ".$tablename;
                $result = mysqli_query($connection,$query)
                or die("Query failed: ".mysqli_error($connection));

                echo ("<br>");
                echo ("<h2 style='float: center;color: white;'>MODELS</h1>");
                echo ("<div style='float: left; border: none;'><ul>");
                while ($row = mysqli_fetch_array($result)){
                    $sno=$row['S_no'];
                    echo "<button style='background-color: black; 
                    border: none;
                    border-bottom: 2px solid aqua;
                    border-radius: 20px;
                    color: white; 
                    font-size: large;' id='$tablename' name='$sno' onclick='change2(this.id,this.name)'>",$row['S_no'],".)&emsp;",$row['Name'],"</button><br><br>";
                }
                echo "</ul></div>";

                mysqli_close($connection);
            ?>
        </div>
    </body>
</html>
