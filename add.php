<H1> Add a student</H1>
<form method=post>

    <P>enter the new id <input type=number name=id required>
    <P>enter the new first name <input type=text name=fn required>
    <P>enter the new last name <input type=text name=ln required>
    <P>enter the new major <input type=text name=mj required>
    <P>
    <P><input type=submit name=sb>
    <?php
    if (isset($_POST["sb"])) {
        echo "<table border=3 align=center>

        <TR>
            <TH>ID</th>
            <th>first name</th>
            <th>last name</TH>
            <TH>major</TH>
        </TR>";
        require 'connection.php';
        $id = $_POST['id'];
        $fn = $_POST['fn'];
        $ln = $_POST['ln'];
        $mj = $_POST['mj'];
        $query = "INSERT INTO `students`( `ID`, `First name`, `Last Name`, `Major`)
         VALUES ('$id','$fn','$ln','$mj')";
        $sql = "SELECT * FROM `students` ";
         $result = mysqli_query($con, $query);
         $resultAll = mysqli_query($con, $sql);
          while ($row = mysqli_fetch_array($resultAll)) {
         echo "<TR><TD>" . $row["ID"] . "<TD> " . $row["First name"] .
             "<TD>" . $row["Last Name"] . "<TD>" . $row["Major"];
         echo "</TR>";
    }}
    echo "<p><a href = menu.php >Back to menu";
    ?>
    </table>
    
</form>