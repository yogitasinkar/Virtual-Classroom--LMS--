<?php

include_once 'sheader.php';
session_start();

$dbServerName  ="localhost";
$dbUserName ="root" ;
$dbPassword ="";
$dbName ="virtualcl";
$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName );
$sdept= $_SESSION['s_dept'];
$ssem=$_SESSION['s_sem'];
$sql="SELECT description, filename, sem, subject FROM material WHERE tdept='$sdept' AND sem='$ssem'";
$result =mysqli_query($conn, $sql);

echo '<br><br><br><div class="ui raised very padded text container ">';
echo "<h2>Notes</h2>";
print "<table class='ui celled table'>\n";
print "<thead>
      <tr><th>Subject</th>
      <th>Notes</th>
      <th>Description</th>
      </tr></thead>";
while ($row = mysqli_fetch_array($result)){
$files_field= $row['filename'];
$files_show= "../tdashboard/materials/".$files_field;
$descriptionvalue= $row['description'];
$subject = $row['subject'];
// $sem = $row['sem'];
print "<tr>\n";
print "\t<td>\n";
echo "<font face=arial size=4/>$subject</font>";
print "</td>\n";
print "\t<td>\n";
echo "<font face=arial size=4/>$descriptionvalue</font>";
print "</td>\n";
print "\t<td>\n";
echo "<div align=center><a href='$files_show'>$files_field</a></div>";
print "</td>\n";
print "</tr>";
}
print "</table>\n";


echo '<a style="margin-right:20px" class="btn btn-primary" href="viewVideos.php">Videos</a>';
echo '<a class="btn btn-primary" href="sdashboard.php">Dashboard</a>';
echo '</div>';


?>
