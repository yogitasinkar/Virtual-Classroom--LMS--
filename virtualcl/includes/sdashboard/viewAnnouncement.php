<?php

include_once 'sheader.php';
session_start();

$dbServerName  ="localhost";
$dbUserName ="root" ;
$dbPassword ="";
$dbName ="virtualcl";
$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName );
// $tdept= $_SESSION['t_dept'];
// $tname = $_SESSION['t_first']. " ".$_SESSION['t_last'];

$sql="SELECT message, tfirst, tlast FROM announce ORDER BY id";
$result =mysqli_query($conn, $sql);

echo '<br><br><br><div class="ui raised very padded text container ">';
print "<table class='ui celled table'>\n";
print "<thead>
      <tr><th>Announcement</th>
      <th>By</th>
      </tr></thead>";

while ($row = mysqli_fetch_assoc($result)){
$message= $row['message'];
$tfirst= $row['tfirst'];
$tlast= $row['tlast'];

print "<tr>\n";
print "\t<td>\n";
echo "<font face=arial size=4/>$message</font>";
print "</td>\n";
print "\t<td>\n";
echo "<font face=arial size=4/>". $tfirst ." ".$tlast. "</font>";
print "</td>\n";
print "</tr>\n";
}
print "</table>\n";

// echo '<a class="ui blue basic button" href="addAnnouncement.php">Add New Assignment</a>';
echo '<a class="ui blue basic button" href="sdashboard.php">Dashboard</a>';
echo '</div>';


?>
