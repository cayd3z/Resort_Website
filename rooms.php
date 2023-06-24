<!DOCTYPE html>
<html>
    <head>
        <title>ROOMS</title>
        <link rel="stylesheet" href="Resort.css">
        <script src="Resort.js"></script>
    </head>
    <body>
        <div id="overview" class="automargin">
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
            <br><br><br><br>
            <div>
                <h2>Rooms Available At Ideal Beach Resort</h2>
                <div class="flex">
                    <div id="div4" class="flex subdiv">
                        <div><img src="./Images/Ro_I1.jpg" class="divset1"></div>
                        <div class="divset1 pl10">
                            <h3>Seaside Villa</h3>
                            <ul>
                                <li>Room size: 46 m<sup>2</sup>/495 ft<sup>2</sup></li><br>
                                <li>Partial sea view</li><br>
                                <li>2 single beds or 1 double bed</li>
                            </ul>
                            <?php
                                $qry="SELECT rno FROM seaside_villa WHERE fn IS NULL";
                                $con=mysqli_connect("localhost","root","Abhi7674");
                                $lcv=0;
                                if(!$con)
                                {
                                    die("Connection Error");
                                }
                                else
                                {
                                    mysqli_select_db($con,"PROJECT");
                                    $result = mysqli_query($con,$qry);
                                    while($tabledata=mysqli_fetch_row($result))
                                    {
                                        $lcv++;
                                    }
                                    mysqli_close($con);
                                    if($lcv!=0)
                                    {
                                        echo "<br><form action='./rooms/seaside_villa.php' method='post' class='inline'>
                                            <input type='submit' class='ml20' value='See Prices'>
                                        </form>";
                                    }
                                    else
                                    {
                                        echo "<button class='ml20'>See Prices</button>
                                        <h6 class='inline'>NOT AVAILABLE RIGHT NOW 🙁</h6>";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <div class="flex subdiv ml20 h230">
                        <div><img src="./Images/Ro_I2.jpg" class="divset1"></div>
                        <div class="divset1 pl10">
                            <h3>Garden View Rooms</h3>
                            <ul>
                                <li>Room size: 24 m<sup>2</sup>/258 ft<sup>2</sup></li><br>
                                <li>Garden view</li><br>
                                <li>1 double bed and 2 single beds</li>
                            </ul>
                            <?php
                                $qry="SELECT rno FROM garden_view_room WHERE fn IS NULL";
                                $con=mysqli_connect("localhost","root","Abhi7674");
                                $lcv=0;
                                if(!$con)
                                {
                                    die("Connection Error");
                                }
                                else
                                {
                                    mysqli_select_db($con,"PROJECT");
                                    $result = mysqli_query($con,$qry);
                                    while($tabledata=mysqli_fetch_row($result))
                                    {
                                        $lcv++;
                                    }
                                    mysqli_close($con);
                                    if($lcv!=0)
                                    {
                                        echo "<form action='./rooms/garden_view_room.php' method='post' class='inline'>
                                            <input type='submit' class='ml20' value='See Prices'>
                                        </form>
                                        <h6 id='noti2' class='inline' style='padding-left:5px;'>from Rs.5,480</h6>";
                                    }
                                    else
                                    {
                                        echo "<button class='ml20'>See Prices</button>
                                        <h6 class='inline'>NOT AVAILABLE RIGHT NOW 🙁</h6>";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <br>
                <div class="flex">
                    <div class="flex subdiv h230">
                        <div><img src="./Images/Ro_I3.jpg" class="divset1"></div>
                        <div class="divset1 pl10">
                            <h3>Deluxe Double Room</h3>
                            <ul>
                                <li>Room size: 27 m<sup>2</sup>/291 ft<sup>2</sup></li><br>
                                <li id="reviews">1 double bed and 2 single beds</li><br><br>
                            </ul>
                            <?php
                                $qry="SELECT rno FROM deluxe_double_room WHERE fn IS NULL";
                                $con=mysqli_connect("localhost","root","Abhi7674");
                                $lcv=0;
                                if(!$con)
                                {
                                    die("Connection Error");
                                }
                                else
                                {
                                    mysqli_select_db($con,"PROJECT");
                                    $result = mysqli_query($con,$qry);
                                    while($tabledata=mysqli_fetch_row($result))
                                    {
                                        $lcv++;
                                    }
                                    mysqli_close($con);
                                    if($lcv!=0)
                                    {
                                        echo "<br><form action='./rooms/deluxe_double_room.php' method='post' class='inline'>
                                            <input type='submit' class='ml20' value='See Prices'>
                                        </form>";
                                    }
                                    else
                                    {
                                        echo "<button class='ml20'>See Prices</button>
                                        <h6 class='inline'>NOT AVAILABLE RIGHT NOW 🙁</h6>";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <div class="flex subdiv ml20 h230">
                        <div><img src="./Images/Ro_I4.jpg" class="divset1"></div>
                        <div class="divset1 pl10">
                            <h3>Standard Room</h3>
                            <ul>
                                <li>Room size: 24 m<sup>2</sup>/258 ft<sup>2</sup></li>
                            </ul><br><br><br><br>
                            <?php
                                $qry="SELECT rno FROM standard_room WHERE fn IS NULL";
                                $con=mysqli_connect("localhost","root","Abhi7674");
                                $lcv=0;
                                if(!$con)
                                {
                                    die("Connection Error");
                                }
                                else
                                {
                                    mysqli_select_db($con,"PROJECT");
                                    $result = mysqli_query($con,$qry);
                                    while($tabledata=mysqli_fetch_row($result))
                                    {
                                        $lcv++;
                                    }
                                    mysqli_close($con);
                                    if($lcv!=0)
                                    {
                                        echo "<br><form action='./rooms/standard_room.php' method='post' class='inline'>
                                            <input type='submit' class='ml20' value='See Prices'>
                                        </form>";
                                    }
                                    else
                                    {
                                        echo "<button class='ml20'>See Prices</button>
                                        <h6 class='inline'>NOT AVAILABLE RIGHT NOW 🙁</h6>";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>