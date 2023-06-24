<!DOCTYPE html
<html>
    <head>
        <title>DASHBOARD</title>
        <link rel="stylesheet" href="../Resort.css">
        <?php
            $name=$_POST['un'];
            $pwd=$_POST['pwd'];
            session_start();
            $_SESSION['name'] = $name;
            $_SESSION['pwd'] = $pwd;
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
        <br>
        <h1 id="dashboard" style="margin-left: 50px;">Dashboard</h1>
        <img class="pl20" src="../Images/A_I1.jpg" height="100px" width="150px">
        <h1 style="margin-left: 640px;font-size: 40px;">IDEAL BEACH RESORT</h1>
        <br><br>
        <div id="overview">
            <table class="w1412">
                <tr>
                    <td>
                            <div class="subdiv p40 ml140" style="width: 370px;">
                            <a href="staffs.php"><img src="../Images/A_I2.jpg" height="230px" width="330px">
                            <h1 class="pl80">Resort Staffs</h1>
                            </a>
                        </div>
                    </td>
                    <td>
                            <div class="subdiv p40 ml100" style="width: 370px;">
                            <a href="rooms.php">
                            <img src="../Images/A_I3.jpg" height="230px" width="330px">
                            <h1 style="margin-left: 130px;">Rooms</h1>
                            </a>
                        </div>
                    </td>
                    <td>
                            <div class="subdiv p40 ml100" style="width: 370px;">
                            <a href="reviews.php">
                            <img class="ml20" src="../Images/A_I4.jpg" height="268px" width="330px">
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="subdiv p40 ml60 ml140" style="margin-top: 40px; width: 940px;">
                            <img src="../Images/A_I5.jpg" height="220px">
                        </div>
                    </td>
                    <td>
                        <div class="subdiv p40 ml100" style="margin-top: 40px;width: 370px;height: 220px;">
                            <br><br>
                            <?php
                                $fp=fopen("../visit.txt","r");
                                $d=fread($fp,4);
                                echo "<h1 style='font-size: 100px;margin-left: 100px;'>$d</h1>";
                                fclose($fp);
                            ?>
                            <br>
                            <h1 style="margin-left: 130px;">Visitors</h1>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>