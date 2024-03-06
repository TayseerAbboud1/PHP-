<h1>update details about a student</h1>
<form method = post>
    <input type = submit name = id value = "ID">
    <p>enter the old id: <input type=number name = Oid>
    <p>enter the new id: <input type=number name = id>
    <hr>
    <?php
if(isset($_POST['id'])){
    require 'connection.php';
    echo "<br>";  
    $old_id = $_POST['Oid'];
    echo "<br>";
    $new_id = $_POST['id'];
    $query = "UPDATE `students` SET `ID` = '$new_id' WHERE `students`.`ID` = $old_id;";
    $result =mysqli_query($con, $query);    
    $r=  mysqli_affected_rows ($con);
    if ($r==1) {
        echo "the student $old_id is updated to $new_id";   
      }
        else{
            echo "No student  with this id :$old_id ";
    }
    mysqli_close($con);
    
    }
    echo "<p><a href = menu.php >Back to menu";
  
    ?>