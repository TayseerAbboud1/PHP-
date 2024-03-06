<h1>reading from foreign key</h1>
<form method = post>
<P>to check courses, enter the id :<input type=number name=id required>
        <P><input type=submit name=sb>
 <table border=3 align=center>

        <TR>
           
            <th>first name</th>
            <th>last name</TH>
            <TH>courses</TH>
        </TR> 
<?php 

if (isset($_POST["sb"])) {
    require 'connection.php';
    $id = $_POST['id'];
    $query = "SELECT `students`.`First name`, `students`.`Last Name`, courses.Course 
    FROM students INNER JOIN courses ON students.ID = $id;";
$result =mysqli_query($con, $query);
if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["First name"] . "<td>" . $row["Last Name"] . "<td>" . $row["Course"] . "</tr>";
    }
} else {
    echo "Query failed";
}
}
// echo "$result";
//   while ($row = mysqli_fetch_array($result)) {
//       echo "<TR><TD>" . $row["ID"] . "<TD> " . $row["`students`.`First name`"] .
//           "<TD>" . $row["`students.Last Name`"] . "<TD>" . $row["`courses`.`Course`"];
//       echo "</TR>";
//   }


echo "<p><a href = menu.php >Back to menu";
?>