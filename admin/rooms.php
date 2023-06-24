<!DOCTYPE html>
<html>
    <head>
        <title>ROOMS</title>
        <link rel="stylesheet" href="../Resort.css">
        <?php
            session_start();
            $name=$_SESSION['name'];
            $pwd=$_SESSION['pwd'];
            if($name != "admin" || $pwd != "password")
            {
                echo "<script>
                    alert('WRONG PASSWORD !!!');
                    location.href='../admin.html';
                </script>";
            }
        ?>
    </head>
    <body>
        <form action="index.php" method="post" class="ml40">
            <?php
                session_start();
                $name=$_SESSION['name'];
                $pwd=$_SESSION['pwd'];
                echo "<input type='text' name='un' value='$name' style='visibility: hidden;'>
                <input type='text' name='pwd' value='$pwd' style='visibility: hidden;'>";
            ?>
            <br>
            <input type="submit" value="⬅️  BACK" style="width:100px;height:40px;">
        </form>
        <div id="overview" class="automargin">
            <div>
                <h1 style="margin-left: 460px;">Rooms Available At Ideal Beach Resort</h1><br><br><br><br>
                <table cellpadding="40" style="margin-left: 200px;">
                    <tr>
                        <th class="subdiv">
                            <a href="./rooms/seaside_villa.php">
                            <img src="../Images/Ro_I1.jpg" class="divset1"><br>
                            <h3>Seaside Villa</h3>
                            </a>
                        </th>
                        <th width="100px"></th>
                        <th class="subdiv">
                            <a href="./rooms/garden_view_room.php">
                            <img src="../Images/Ro_I2.jpg" class="divset1">
                            <h3>Garden View Rooms</h3>
                            </a>
                        </th>
                    </tr>
                    <tr height="80px"></tr>
                    <tr>
                        <th class="subdiv">
                            <a href="./rooms/deluxe_double_room.php">
                            <img src="../Images/Ro_I3.jpg" class="divset1">
                            <h3>Deluxe Double Room</h3>
                            </a>
                        </th>
                        <th></th>
                        <th class="subdiv">
                            <a href="./rooms/standard_room.php">
                            <img src="../Images/Ro_I4.jpg" class="divset1">
                            <h3>Standard Room</h3>
                            </a>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>