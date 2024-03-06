<h2> listing all the students</h1>

    <table border=3 align=center>

        <TR>
            <TH>ID</th>
            <th>first name</th>
            <th>last name</TH>
            <TH>major</TH>
        </TR>
        <?php

        require 'connection.php';
        
        $query = "SELECT * FROM `students` ";
        $result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_array($result)) {
            echo "<TR><TD>" . $row["ID"] . "<TD> " . $row["First name"] .
                "<TD>" . $row["Last Name"] . "<TD>" . $row["Major"];
            echo "</TR>";
        }

        mysqli_close($con);

        echo "</table>";
        //echo "<input type=reset action = menu.php method = post>";
        echo "<p><a href = menu.php >Back to menu";
        ?>
    
