<html>
    <head>
        <title>STAFFS</title>
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
        <br><br><br>
        <div style="margin-left: 640px;">
        <?php
            $qry="select * from staff";
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
                    <th>ID</th>
                    <th>NAME</th>
                    <th>AGE</th>
                    <th>GENDER</th>
                    <th>PHONE</th>
                    <th>PLACE</th>
                    <th>SALARY</th>
                </tr>";
                while($tabledata=mysqli_fetch_row($result))
                {
                    echo "<tr>
                    <td>$tabledata[0]</td>
                    <td>$tabledata[1]</td>
                    <td>$tabledata[2]</td>
                    <td>$tabledata[3]</td>
                    <td>$tabledata[4]</td>
                    <td>$tabledata[5]</td>
                    <td>$tabledata[6]</td>
                    </tr>";
                }
                echo "</table>";
            }
            mysqli_close($con);
        ?>
        </div>
    </body>
</html>