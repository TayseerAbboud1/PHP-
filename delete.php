<h1> delete a student with ID </h1>
    <form method=post>
        <P>enter the id :<input type=number name=id required>
        <P><input type=submit name=sb><input type=reset>
    </form>
    <?php
    if (isset($_POST["sb"])) {
        require 'connection.php';
        $id = $_POST['id'];
        $query = "DELETE FROM `students` WHERE ID =$id ";
        $result =mysqli_query($con, $query);
        $r=  mysqli_affected_rows ($con);
        if ($r==1) {
            echo "the student $id is deleted";
        }else{
                echo "the student $id do no exist";
        }
        mysqli_close($con);
        echo "</table>";

    }
    echo "<p><a href = menu.php >Back to menu";
    ?>