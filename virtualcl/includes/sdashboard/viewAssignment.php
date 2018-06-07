<?php

  include_once 'sheader.php';
  session_start();


$dbServerName  ="localhost";
$dbUserName ="root" ;
$dbPassword ="";
$dbName ="virtualcl";
session_start();
$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName );
$sdept= $_SESSION['s_dept'];
$ssem=$_SESSION['s_sem'];
$sql="SELECT description, filename FROM upload WHERE tdept='$sdept' AND sem='$ssem'";
// $sql="SELECT description, filename FROM upload";
$result =mysqli_query($conn, $sql);

echo '<br><br><br><div class="ui raised very padded text container ">';
print "<table class='ui celled table'>\n";
print "<thead>
      <tr><th>Description</th>
      <th>Assignment</th>
      </tr></thead>";
while ($row = mysqli_fetch_array($result)){
$files_field= $row['filename'];

$files_show= "../tdashboard/uploads/".$files_field;
$descriptionvalue= $row['description'];
print "<tr>\n";
print "\t<td>\n";
echo "<font face=arial size=4/>$descriptionvalue</font>";
print "</td>\n";
print "\t<td>\n";
echo "<div align=center><a href='$files_show'>$files_field</a></div>";
print "</td>\n";
print "</tr>\n";
}
print "</table>\n";

echo '<a class="ui blue basic button" href="sdashboard.php">Back</a>';
echo '</div>';


?>
