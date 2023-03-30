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

                $query = "SELECT * FROM {$tablename} WHERE Serial_Number = {$sno}";
                // echo($query);
                $result = mysqli_query($connection,$query)
                or die("Query failed: ".mysqli_error($connection));
        
                $row = mysqli_fetch_array($result);

                echo('<body><div style="margin:10px; border:none;">

        <header style="margin-top:10px;text-align:left;font-family:sans-serif;color: floralwhite;font-size: 300%;line-height: 35px">
            <b>'.$row['Name'].'<br></b>
            <span style="text-align:left;font-family:sans-serif;color: floralwhite;font-size: 40%;line-height: 5px">'.$row['Status'].'</span>
        </header>
        <div style="border: none;background:none; text-align: center; width: 98%; margin-left: 25px;">
            <img style="border-radius:20px;height:15em;align-content:center" src="data:image/jpeg;base64,'.base64_encode($row['Image']).'"/>
        </div><br>

        <hr><p style="color: antiquewhite;font-size: 140%;line-height: 5px">
        Release Date: '.$row['Release_Date'].'</p><hr>
        <p style="color: antiquewhite;font-size: 140%;line-height: 5px">
            Price (at Launch): $'.$row['Price'].'</p><hr>
        <hr>
        <p style="text-align:left;font-family:sans-serif;color: floralwhite;font-size: 160%">
            <span style="color: yellow">SPECIFICATIONS</span><br>'.$row['Specifications'].'<br>
        </p>
        <hr>
        <p style="text-align:left;font-family:sans-serif;color: floralwhite;font-size: 160%"><span style="color: yellow">FEATURES</span><br>'.$row['Features'].'</p>
        <hr>
        
        <footer>
            <p style="color:yellow;text-align:end;font-size:100%">
                LINK:   
                <a href="'.$row['Link'].'" style="color:whitesmoke;text-align:end;font-size:100%">
                    Know More About This Product->
                </a>
            </p>
        </footer>
        </div>
    </body>');

                mysqli_close($connection);
            ?>
        </div>
    </body>
</html>