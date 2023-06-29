<html>
    <body>
        <?php
            $name = $_POST["name"];
            $rel = $_POST["rel"];
            $country = $_POST["country"];
            $about = $_POST["about"];
            $comment = $_POST["comment"];
            $room = $_POST["room"];

            include '../database.php';
            mysqli_select_db($con,"PROJECT");
            $result = mysqli_query($con,"INSERT INTO reviews VALUES('$name','$rel','$country','$about','$comment','$room');");
            mysqli_close($con);
            echo "<script>alert('Review Added Successfully');
            location.href='../reviews.php';</script>";
        ?>
    </body>
</html>