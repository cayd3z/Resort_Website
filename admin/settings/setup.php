<!DOCTYPE html>
<html>
    <head>
        <title>SETUP</title>
        <link rel="stylesheet" href="../Resort.css">
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
                die("WRONG PASSWORD !!!");
            }
        ?>
    </head>
    <body>
        <?php
            $qry="SHOW DATABASES;";
            include '../../database.php';
            $result_1 = mysqli_query($con,$qry);
            while($tabledata=mysqli_fetch_row($result_1))
            {
                if($tabledata[0] == "PROJECT")
                {
                    $qry="DROP DATABASE PROJECT;";
                    $result = mysqli_query($con,$qry);
                }
            }
            $qry_1 = "CREATE DATABASE PROJECT;";
            $qry_2 = "USE PROJECT;";
            $qry_3 = "create table seaside_villa(rno int primary key,fn varchar(20),ln varchar(15),gender varchar(12),pno varchar(16),email varchar(20),address varchar(100),pin int,adults int,children int,price int);";
            $qry_4 = "create table garden_view_room(rno int primary key,fn varchar(20),ln varchar(15),gender varchar(12),pno varchar(16),email varchar(20),address varchar(100),pin int,adults int,children int,price int);";
            $qry_5 = "create table deluxe_double_room(rno int primary key,fn varchar(20),ln varchar(15),gender varchar(12),pno varchar(16),email varchar(20),address varchar(100),pin int,adults int,children int,price int);";
            $qry_6 = "create table standard_room(rno int primary key,fn varchar(20),ln varchar(15),gender varchar(12),pno varchar(16),email varchar(20),address varchar(100),pin int,adults int,children int,price int);";
            $qry_7 = "create table reviews(name varchar(40),rel varchar(15),country varchar(20),about varchar(200),comment varchar(16000),room varchar(20));";
            $qry_8 = "create table staff(id int primary key,name varchar(20),age int,gender varchar(12),pno varchar(16),place varchar(50),salary int);";
            $qry_9 = "INSERT INTO staff (id, name, age, gender, pno, place, salary) VALUES
            (1, 'John', 35, 'Male', '1234567890', 'Kannur', 15000),
            (2, 'Jane', 28, 'Female', '9876543210', 'Payyanur', 16000),
            (3, 'Michael', 42, 'Male', '4567890123', 'Cheruvathur', 17000),
            (4, 'Anusree', 31, 'Female', '0123456789', 'Azhikode', 15500),
            (5, 'David', 39, 'Male', '7890123456', 'Thalassery', 16500),
            (6, 'Fathima', 27, 'Female', '3456789012', 'Chova', 15500),
            (7, 'Sanjay', 36, 'Male', '8901234567', 'Kannur', 16000),
            (8, 'Sophia', 33, 'Female', '5678901234', 'Kozhikode', 15500),
            (9, 'Jugal', 29, 'Male', '2345678901', 'Alavil', 16000),
            (10, 'Gayathri', 20, 'Female', '9012345678', 'Valapattanam', 18000),
            (11, 'Karthik', 38, 'Male', '4321098765', 'Pallikkunnu', 17000),
            (12, 'Martinez', 26, 'Female', '6789012345', 'Periya', 16000);";
            $result = mysqli_query($con,$qry_1);
            $result = mysqli_query($con,$qry_2);
            $result = mysqli_query($con,$qry_3);
            $result = mysqli_query($con,$qry_4);
            $result = mysqli_query($con,$qry_5);
            $result = mysqli_query($con,$qry_6);
            $result = mysqli_query($con,$qry_7);
            $result = mysqli_query($con,$qry_8);
            $result = mysqli_query($con,$qry_9);
            for ($i = 1; $i < 21; $i++)
            {
                $qry_10 = "insert into seaside_villa(rno) values($i);";
                $qry_11 = "insert into garden_view_room(rno) values($i);";
                $qry_12 = "insert into deluxe_double_room(rno) values($i);";
                $qry_13 = "insert into standard_room(rno) values($i);";
                $result = mysqli_query($con,$qry_10);
                $result = mysqli_query($con,$qry_11);
                $result = mysqli_query($con,$qry_12);
                $result = mysqli_query($con,$qry_13);
            }
            mysqli_close($con);
            $d = 100;
            $fp = fopen("../../visit.txt","w");
            fwrite($fp,$d);
            fclose($fp);
            echo "<script>
                alert('Installation Completed');
                location.href='../../index.php';
            </script>";
        ?>
    </body>
</html>