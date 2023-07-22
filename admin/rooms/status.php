<html>
    <head>
        <?php
            $room_type = $_GET['room'];
            switch ($room_type) {
                case 1:
                    $room_name = "SEASIDE VILLA";
                    $table_name = "seaside_villa";
                    break;
                case 2:
                    $room_name = "GARDEN VIEW ROOM";
                    $table_name = "garden_view_room";
                    break;
                case 3:
                    $room_name = "DELUXE DOUBLE ROOM";
                    $table_name = "deluxe_double_room";
                    break;
                case 4:
                    $room_name = "STANDARD ROOM";
                    $table_name = "standard_room";
                    break;
                default:
                    echo "<script>
                        alert('Don\\'t mess with the URL !');
                        location.href='../rooms.php';
                    </script>";
                    break;
            }
            echo"<title>$room_name</title>";
        ?>
        <link rel="stylesheet" href="../../Resort.css">
        <?php
            session_start();
            $name=$_SESSION['name'];
            $pwd=$_SESSION['pwd'];
            if($name != "admin" || $pwd != "password")
            {
                echo "<script>
                    alert('WRONG PASSWORD !!!');
                    location.href='../../admin.html';
                </script>";
            }
            if($_POST['room'])
            {
                $room = $_POST['room'];
                include '../../database.php';
                mysqli_select_db($con,"PROJECT");
                $result = mysqli_query($con,"UPDATE $table_name SET fn=NULL,ln=NULL,gender=NULL,pno=NULL,email=NULL,address=NULL,pin=NULL,adults=NULL,children=NULL,price=NULL WHERE rno='$room';");
                mysqli_close($con);
                echo "<script>alert('Successfully Evacuated');</script>";
            }
        ?>
    </head>
    <body>
    
        <table>
            <tr>
                <td><br><a href="../rooms.php"><input type="submit" value="⬅️  BACK" style="width:100px;height:40px;"></a><br><br></td>
            </tr>
            <tr>
                <th>
                <?php
                    $qry="SELECT * FROM $table_name";
                    include '../../database.php';
                    mysqli_select_db($con,"PROJECT");
                    $result = mysqli_query($con,$qry);
                    echo "<table border='5' cellpadding='15' cellspacing='5'>
                    <tr>
                        <th>ROOM NO</th>
                        <th>NAME</th>
                        <th>GENDER</th>
                        <th>PHONE</th>
                        <th>EMAIL</th>
                        <th>ADDRESS</th>
                        <th>PIN CODE</th>
                        <th>ADULTS</th>
                        <th>CHILDREN</th>
                        <th>PRICE</th>
                    </tr>";
                    while($tabledata=mysqli_fetch_row($result))
                    {
                        echo "<tr>
                        <td>$tabledata[0]</td>
                        <td>$tabledata[1] $tabledata[2]</td>
                        <td>$tabledata[3]</td>
                        <td>$tabledata[4]</td>
                        <td>$tabledata[5]</td>
                        <td>$tabledata[6]</td>
                        <td>$tabledata[7]</td>
                        <td>$tabledata[8]</td>
                        <td>$tabledata[9]</td>
                        <td>$tabledata[10]</td>
                        </tr>";
                    }
                    echo "</table>";
                    mysqli_close($con);
                ?>
                </th>
                <th style="padding-left: 220px;">
                    <h1><u>Vacate  Room</u></h1>
                    <form action="" method="post">
                    <?php
                        $qry="SELECT rno FROM $table_name WHERE fn IS NOT NULL";
                        $lcv=0;
                        include '../../database.php';
                        mysqli_select_db($con,"PROJECT");
                        $result = mysqli_query($con,$qry);
                        echo "<h3>Select Room Number</h3>";
                        echo "<label>&nbsp;Room Number
                        <select id='room' name='room'>";
                        while($tabledata=mysqli_fetch_row($result))
                        {
                            echo "<option value='$tabledata[0]'>$tabledata[0]</option>";
                        }
                        echo "</select>
                        </label>";
                        mysqli_close($con);
                    ?>
                    <input type="submit" class="ml20" name="vacate" value="VACATE">
                    </form>
                </th>
            </tr>
        </table>
    </body>
</html>