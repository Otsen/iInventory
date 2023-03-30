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

                $query = "SELECT * FROM {$tablename} WHERE S_no = {$sno}";
                $result = mysqli_query($connection,$query)
                or die("Query failed: ".mysqli_error($connection));
        
                $row = mysqli_fetch_array($result);

                echo('<body><div style="margin:10px; border:none;">

        <header style="margin-top:10px;text-align:left;font-family:sans-serif;color: floralwhite;font-size: 300%;line-height: 35px">
            <b>'.$row['Name'].'<br></b>
            <span style="text-align:left;font-family:sans-serif;color: floralwhite;font-size: 40%;line-height: 5px">(2022)</span>
        </header>
        <div style="border: none;background:none; text-align: center; width: 98%; margin-left: 25px;">
            <img style="border-radius:20px;height:15em;align-content:center" src="data:image/jpeg;base64,'.base64_encode($row['Image']).'"/>
        </div><br>

        <hr><p style="color: antiquewhite;font-size: 140%;line-height: 5px">
        Release Date: 25 December 2022</p><hr>
        <p style="color: antiquewhite;font-size: 140%;line-height: 5px">
            Budget: $110 Million</p><hr>
        <hr>
        <p style="text-align:left;font-family:sans-serif;color: floralwhite;font-size: 160%">
            <span style="color: yellow"><u>STORYLINE</u> ></span><br>A tale of outsized ambition and outrageous excess, it traces the rise and fall of multiple characters during an era of unbridled decadence and depravity in early Hollywood.<br>
        </p>
        <hr>
        <p style="text-align:left;font-family:sans-serif;color: floralwhite;font-size: 160%"><span style="color: yellow"><u>PLOT</u> ></span><br>
            The story is set in Pre-Code Hollywood in the late 1920s and early 1930s, during the film industry"s transition from silent films to talkies. This era of Hollywood was renowned not only for its legendary parties and riotous behavior but also for its transgressive film content. Prior to 1934, Hollywood films could depict or imply nudity, obscene gestures, homosexual relations, adultery, rape, abortion, and drug use. When the Motion Picture Production Code was enforced 1934, the content of films was severely restricted, and Pre-Code films were not permitted by censors to be re-released without permanent cuts to the master prints. The Code would remain in effect until 1968 by which time the transgressive era of Pre-Code cinema had been forgotten in the national memory.
        </p>
        <hr>
        <p style="text-align:left;font-family:sans-serif;color: yellow;font-size: 160%"><u>TOP CREDITS</u> ></p>
        <ul style="text-align:left;font-family:sans-serif;color: floralwhite;font-size: 160%">
            <li>Director: Damien Chazelle</li>
            <li>Writer: Damien Chazelle(screenplay)</li>
            <li>Producers: <ul><li>Olivia Hamilton</li> <li>Marc Platt</li><li>Matt Plouffe</li></ul></li>
        </ul>
        <hr>
        <p style="text-align:left;font-family:sans-serif;color: yellow;font-size: 160%"><u>TOP STARS</u> ></p>
        <ul style="text-align:left;font-family:sans-serif;color: floralwhite;font-size: 160%">
            <li>Brad Pitt</li>
            <img src="brad.jpg" width="150" vspace="10">
            <li>Margot Robbie</li>
            <img src="margot.jpg" width="150" vspace="10">
            <li>Samara Weaving</li>
            <img src="samara.jpg" width="150" vspace="10">
        </ul>
        <hr>
        <p style="text-align:left;font-family:sans-serif;color: yellow;font-size: 160%"><u>SIMILAR</u> ></p>
        <ul style="text-align:left;font-family:sans-serif;color: floralwhite;font-size: 160%">
            <li><a href="https://www.imdb.com/title/tt15791034/?ref_=tt_sims_tt_t_6" style="color: floralwhite;text-decoration: none">Barbarian</a></li>
            <li><a href="https://www.imdb.com/title/tt13640696/?ref_=tt_sims_tt_i_7" style="color: floralwhite;text-decoration: none">See How They Run</a></li>
            <li><a href="https://www.imdb.com/title/tt14208870/?ref_=tt_sims_tt_i_2" style="color: floralwhite;text-decoration: none">The Fabelmans</a></li>
        </ul>
        <hr>
        <hr>
        <footer>
            <p style="color:whitesmoke;text-align:end;font-size:100%">
                WIKIPEDIA:   
                <a href="https://en.wikipedia.org/wiki/Babylon_(2022_film)" style="color:whitesmoke;text-align:end;font-size:100%">
                    Babylon (2022)
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



<!-- <html>
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

                $query = "SELECT * FROM {$tablename} WHERE S_no = {$sno}";
                $result = mysqli_query($connection,$query)
                or die("Query failed: ".mysqli_error($connection));
        
                $row = mysqli_fetch_array($result);

                echo ("<div style='border:none;width:30%;height:40%;float:left'>");        
                echo ('<img style="border-radius:20px;height:100%;align-content:left" src="data:image/jpeg;base64,'.base64_encode($row['Image']).'"/>');
                echo ("</div>");

                mysqli_close($connection);
            ?>
        </div>
    </body>
</html> -->
