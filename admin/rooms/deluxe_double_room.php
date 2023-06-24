<html>
    <head>
        <title>DELUXE DOUBLE ROOM</title>
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
                $con=mysqli_connect("localhost","root","Abhi7674");
                if(!$con)
                {
                    die("Connection Error");
                }
                mysqli_select_db($con,"PROJECT");
                $result = mysqli_query($con,"UPDATE deluxe_double_room SET fn=NULL,ln=NULL,gender=NULL,pno=NULL,email=NULL,address=NULL,pin=NULL,adults=NULL,children=NULL,price=NULL WHERE rno='$room';");
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
                    $qry="SELECT * FROM deluxe_double_room";
                    $con=mysqli_connect("localhost","root","Abhi7674");
                    if(!$con)
                    {
                        die("Connection Error");
                    }
                    else
                    {
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
                    }
                ?>
                </th>
                <th style="padding-left: 220px;">
                    <h1><u>Vacate  Room</u></h1>
                    <form action="" method="post">
                    <?php
                        $qry="SELECT rno FROM deluxe_double_room WHERE fn IS NOT NULL";
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
                        }
                    ?>
                    <input type="submit" class="ml20" name="vacate" value="VACATE">
                    </form>
                </th>
            </tr>
        </table>
    </body>
</html>