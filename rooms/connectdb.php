<html>
    <head>
        <link rel="stylesheet" href="../Resort.css">
    </head>
    <body>
        <?php
            $room = $_POST["rooms"];
            $adults = $_POST["adults"];
            $children = $_POST["children"];
            $fn = $_POST["fn"];
            $ln = $_POST["ln"];
            $gender = $_POST["gender"];
            $pno = $_POST["pno"];
            $email = $_POST["email"];
            $address = $_POST["address"];
            $pin = $_POST["pin"];
            $roomtype = $_POST["roomtype"];
            $rooms = array($_POST["room1"],$_POST["room2"],$_POST["room3"],$_POST["room4"]);
            $lcv = $room;

            $rp=6850;
            $ap=3420;
            $cp=1710;
            if(($room+$room)>=($adults+$children/2))
            {
                $p=$room*$rp;
            }
            else
            {
                $p=$adults*$ap+$children*$cp;
            }
            $fprice=($p*80)/100;

            $con=mysqli_connect("localhost","root","Abhi7674");
            if(!$con)
            {
                die("Connection Error");
            }
            mysqli_select_db($con,"PROJECT");
            while($lcv!=0)
            {
                $r = $rooms[$lcv-1];
                switch($roomtype)
                {
                    case 1:$result = mysqli_query($con,"UPDATE seaside_villa SET fn='$fn',ln='$ln',gender='$gender',pno='$pno',email='$email',address='$address',pin='$pin',adults='$adults',children='$children',price='$fprice' WHERE rno='$r';");
                    break;
                    case 2:$result = mysqli_query($con,"UPDATE garden_view_room SET fn='$fn',ln='$ln',gender='$gender',pno='$pno',email='$email',address='$address',pin='$pin',adults='$adults',children='$children',price='$fprice' WHERE rno='$r';");
                    break;
                    case 3:$result = mysqli_query($con,"UPDATE deluxe_double_room SET fn='$fn',ln='$ln',gender='$gender',pno='$pno',email='$email',address='$address',pin='$pin',adults='$adults',children='$children',price='$fprice' WHERE rno='$r';");
                    break;
                    case 4:$result = mysqli_query($con,"UPDATE standard_room SET fn='$fn',ln='$ln',gender='$gender',pno='$pno',email='$email',address='$address',pin='$pin',adults='$adults',children='$children',price='$fprice' WHERE rno='$r';");
                    break;
                }
                $adults = 0;
                $children = 0;
                $fprice = 0;
                $lcv--;
            }
            mysqli_close($con);
            echo "<script>alert('Payment Sucessful ✅');
            location.href='../rooms.php';</script>";
        ?>
    </body>
</html>