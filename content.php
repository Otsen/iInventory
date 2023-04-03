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
            function filter(filt,url,id){
                $(document).ready(function () {
                    let url="http://localhost/iInventory/content.php?id=";
                    url=url.concat("",id);
                    url=url.concat("&filter=",filt);
                    $('#content').load(url);
                });
            }
        </script>
                 
    </head>

    <body>
        <div style="align-items: center;height:99.7%;width:99.8%;border:none;" id="material">
            <h2 style='float: center;color: rgb(255, 0, 251);text-decoration:overline;'>MODELS</h2>
            <select style="background: rgba(255, 255, 255, 0);font-size:15px;color:white;border:none;border-radius:20px;" name="<?php echo ($_REQUEST['url']);?>" id="<?php echo ($_REQUEST['id']);?>" onchange="filter(this.value,this.name,this.id)">
                <option value="Serial_Number" selected>Default</option>    
                <option value="Price">Price &uarr;</option>
                <option value="Release_Date">Release Date &uarr;</option>
                <option value="Serial_Number">Serial Number &uarr;</option>
            </select>
            <?php
                $filter=$_REQUEST['filter'];
                if($filter==""){
                    $filter="Serial_Number";
                }
                echo("<br><br>Sorted By: ".$filter);
                $tablename = $_REQUEST['id'];
                $connection = mysqli_connect("localhost","root","")
                or die ("Couldn't connect to server");

                $db = mysqli_select_db($connection,"iInventory")
                or die ("Couldn't select database");

                $query = "SELECT * FROM ".$tablename." order by ".$filter;
                $result = mysqli_query($connection,$query)
                or die("Query failed: ".mysqli_error($connection));

                echo ("<br>");
                echo ("");
                echo ("<ul>");
                while ($row = mysqli_fetch_array($result)){
                    $sno=$row['Serial_Number'];
                    echo "<button style='background-color: black; 
                    border: none;
                    border-bottom: 2px solid aqua;
                    border-radius: 20px;
                    color: white; 
                    font-size: large;' id='$tablename' name='$sno' onclick='change2(this.id,this.name)'>","=>",$row['Name'],"&emsp;{&dollar;",$row['Price'],"}&emsp;(",$row['Release_Date'],")</button><br><br>";
                }
                echo "</ul>";

                mysqli_close($connection);
            ?>
        </div>
    </body>
</html>
