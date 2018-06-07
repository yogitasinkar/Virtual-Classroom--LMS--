<?php
include '../dbh.inc.php';
include_once 'theader.php';
session_start();

$tdept= $_SESSION['t_dept'];
$sql="SELECT description, filename, sem FROM upload WHERE tdept='$tdept' ORDER BY sem";
$result =mysqli_query($conn, $sql);

echo '<br><br><br><div class="ui raised very padded text container ">';
print "<table class='ui celled table'>\n";
print "<thead>
      <tr><th>Description</th>
      <th>Assignment</th>
      <th>Sem</th>
      </tr></thead>";
while ($row = mysqli_fetch_array($result)){
$files_field= $row['filename'];
$files_show= "uploads/".$files_field;
$descriptionvalue= $row['description'];
$sem = $row['sem'];
print "<tr>\n";
print "\t<td>\n";
echo "<font face=arial size=4/>$descriptionvalue</font>";
print "</td>\n";
print "\t<td>\n";
echo "<div align=center><a href='$files_show'>$files_field</a></div>";
print "</td>\n";
print "\t<td>\n";
echo "<font face=arial size=4/>$sem</font>";
print "</td>\n";
print "</tr>\n";
}
print "</table>\n";

echo '<a style="margin-right:20px" class="btn btn-primary" href="addAssignment.php">Add New Assignment</a>';
echo '<a class="btn btn-primary" href="tdashboard.php">Dashboard</a>';
echo '</div>';


?>
