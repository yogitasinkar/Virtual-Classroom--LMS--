<?php

include_once 'sheader.php';
session_start();
  
$dbServerName  ="localhost";
$dbUserName ="root" ;
$dbPassword ="";
$dbName ="virtualcl";
$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName );
$sdept= $_SESSION['s_dept'];

$sname =$_SESSION['s_first']. " ".$_SESSION['s_last'] ;
$sql="SELECT sem, tdept, subject, total, attended, sname FROM attend WHERE tdept='$sdept' AND sname='$sname' ORDER BY subject";
$result = mysqli_query($conn, $sql);
echo '<br><br><br><div class="ui raised very padded text container ">';
print "<table id='table1' class='ui celled table'>\n";
print "<thead>
      <tr>
      <th>SUBJECT</th>
      <th>ATTENDED</th>
      <th>TOTAL CLASSES</th>
      <th>PERCENT</th>
      </tr></thead>";
while ($row = mysqli_fetch_array($result)){

$subject = $row['subject'];
$total= $row['total'];
$attended = $row['attended'];
// $sname = $row['sname'];
$percent = round(($attended/$total)*100);
print "<tr>\n";
// print "\t<td>\n";
// echo "<font face=arial size=4/>$sem</font>";
// print "</td>\n";
print "\t<td>\n";
echo "<font face=arial size=4/>$subject</font>";
print "</td>\n";
// print "\t<td>\n";
// echo "<font face=arial size=4/>$sname</font>";
// print "</td>\n";
print "\t<td>\n";
echo "<font face=arial size=4/>$attended</font>";
print "</td>\n";
print "\t<td>\n";
echo "<font face=arial size=4/>$total</font>";
print "</td>\n";
print "\t<td>\n";
echo "<font face=arial size=4/>$percent</font>";
print "</td>\n";
print "</tr>\n";
}
print "</table>\n\n";

// echo '<a style="margin-right:20px" id="butt" class="btn btn-primary" href="addAttsem.php">Add New Attendance</a>';
// echo '<a class="btn btn-primary" href="tdashboard.php">Dashboard</a>';
echo '</div>';


?>
