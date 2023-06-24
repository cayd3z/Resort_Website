<!DOCTYPE html>
<html>
    <head>
        <title>FORM</title>
        <link rel="stylesheet" href="../Resort.css">
        <?php
            $rooms = $_POST["rooms"];
            $adults = $_POST["adults"];
            $children = $_POST["children"];
            $room1 = $_POST["room1"];
            $room2 = $_POST["room2"];
            $room3 = $_POST["room3"];
            $room4 = $_POST["room4"];
            $roomtype = $_POST["roomtype"];
        ?>
    </head>
    <body>
        <br><br><br>
        <div id="div9" class="subdiv p40 automargin">
            <h3>Please enter your details</h3>
            <form action="connectdb.php" method="post">
                <label>First name <input type="text" name="fn" required></label>
                <label class="pl50">Last name <input type="text" name="ln" value=""></label>
                <br><br>
                Gender :
                <label><input type="radio" name="gender" value="Male">Male</label>
                <label><input type="radio" name="gender" value="Female">Female</label>
                <label><input type="radio" name="gender" value="Others">Others</label>
                <br><br>
                <label>Phone no. <input type="number" name="pno" required></label>
                <br><br>
                <label>Email <input type="email" name="email" maxlength="20" required></label>
                <br><br>
                <label>Current Address :<br>
                <textarea name="address" cols="30" rows="3" value=NULL></textarea>
                <br><br>
                <label>Pincode <input type="text" name="pin" required></label>
                </label>
                <?php
                    echo "<input style='visibility: hidden;' type='number' name='rooms' value=$rooms>
                    <input style='visibility: hidden;' type='number' name='adults' value=$adults>
                    <input style='visibility: hidden;' type='number' name='children' value=$children>
                    <input style='visibility: hidden;' type='number' name='room1' value=$room1>
                    <input style='visibility: hidden;' type='number' name='room2' value=$room2>
                    <input style='visibility: hidden;' type='number' name='room3' value=$room3>
                    <input style='visibility: hidden;' type='number' name='room4' value=$room4>
                    <input style='visibility: hidden;' type='number' name='roomtype' value=$roomtype>";
                ?>
                <br><br>
                <input style="margin-left: 280px;height: 50px;width: 120px;" type="submit" value="PAY">
            </form>
        </div>
    </body>
</html>