<!DOCTYPE html>
<html>
    <head>
        <title>IDEAL BEACH RESORT</title>
        <link rel="stylesheet" href="Resort.css">
        <script src="Resort.js"></script>
        <?php
            $fp=fopen("visit.txt","r");
            $d=fread($fp,4);
            $d=$d+1;
            fclose($fp);
            $fp=fopen("visit.txt","w");
            fwrite($fp,$d);
            fclose($fp);
        ?>
    </head>
    <body>
        <br><br><br><br><br>
        <div id="overview" class="automargin">
            <div class="flex">
                <div id="div1"><img src="./Images/I_I1.jpg" height="580"></div>
                <div id="div2">
                    <div  id="div3"><img src="./Images/I_I2.jpg" height="285"></div>
                    <div><img src="./Images/I_I3.jpg" height="282"></div>
                </div>
            </div>
            <div class="navigation">
              <a href="index.php" class="inlink">Overview</a>
              <a href="facilities.html" class="inlink">Facilities</a>
              <a href="rooms.php" class="inlink">Rooms</a>
              <a href="reviews.php" class="inlink">Reviews</a>
              <a href="policy.html" class="inlink">Location</a>
              <a href="policy.html" class="inlink">Policies</a>
              <h6 id="h1" class="inline">from</h6><h5 class="inline">Rs.</h5><h4 class="inline">5,480</h4>
              <a id="lk1" href="./rooms/garden_view_room.php">VIEW THIS DEAL</a>
            </div>
            <br>
            <table class="w1412">
                <tr>
                    <td id="main">
                        <div id="maindiv1">
                            <br><br>
                            <h1>IDEAL BEACH RESORT</h1>
                            <h1 class="pl20">⭐️⭐️⭐️⭐️⭐️</h1>
                            <h3>ECR, DEVENERI VILLAGE, MAHABALIPURAM, Mahabalipuram, Chennai, India, 603104</h3>
                            <br><hr width="96%"><br>
                            <p>The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Conveniently situated in the Mahabalipuram part of Chennai, this property puts you close to attractions and interesting dining options. Don`t leave before paying a visit to the famous Marina Beach. Rated with 4 stars, this high-quality property provides guests with access to massage, restaurant and fitness center on-site.</p>
                        </div>
                    </td>
                    <td rowspan="2">
                        <div id="maindiv2">
                            <br><br>
                            <img src="./Images/I_I4.jpg" height="200px">
                            <div class="subdiv m20">
                                <h3>&nbsp;&nbsp;Best Review</h3>
                                <p>&nbsp;&nbsp;Good food, great location, friendly staff,<br>&nbsp;&nbsp;a clean private beach... </p>
                                <img src="./Images/I_I5.jpg" class="inline pl50 h100">
                                <img src="./Images/I_I6.jpg" class="inline pl10 h100">
                                <br><br>
                                <h4 class="m20">🇮🇳 Muhammed Suhail M</h4>
                                <h4 class="m20">🇮🇳 Adwaid CM</h4>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>