<!DOCTYPE html>
<html>
    <head>
        <title>FORM</title>
        <link rel="stylesheet" href="../Resort.css">
    </head>
    <body>
        <br><br><br>
        <div id="div9" class="subdiv p40 automargin">
            <h3>Add Your Comment</h3>
            <form action="connectdb.php" method="post">
                <label>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" required></label>
                <select class="ml100" name="rel">
                    <option value="Solo traveler">Solo traveler</option>
                    <option value="Couple">Couple</option>
                    <option value="Family">Family</option>
                    <option value="Friends">Friends</option>
                    <option value="Group">Group</option>
                </select>
                <select class="ml40" name="room">
                    <option value="Standard Room">Standard Room</option>
                    <option value="Seaside Villa">Seaside Villa</option>
                    <option value="Garden View Rooms">Garden View Rooms</option>
                    <option value="Deluxe Double Room">Deluxe Double Room</option>
                </select>
                <br><br>
                <label>Country &nbsp;<input type="text" name="country" required></label>
                <br><br>
                <label>About Resort <br>
                <textarea name="about" cols="60" rows="2" required></textarea>
                <br><br>
                <label>Comment :<br>
                <textarea name="comment" cols="80" rows="3" required></textarea>
                <br><br>
                <input type="submit" value="Add Comment">
            </form>
        </div>
    </body>
</html>