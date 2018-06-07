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
$sql="SELECT description, link , sem , subject FROM videos WHERE tdept='$sdept' AND sem='$ssem'";
$result =mysqli_query($conn, $sql);

echo '<br><br><br><div class="ui raised very padded text container ">';
echo "<h2>Video Material</h2>";
print "<table class='ui celled table'>\n";
print "<thead>
      <tr>
      <th>Subject</th>
      <th>Description</th>
      <th>Video</th>
      </tr></thead>";
while ($row = mysqli_fetch_array($result)){
$link= $row['link'];

$parts = parse_url($link);
parse_str($parts['query'], $query);
$q =$query['v'];
$src= 'https://www.youtube.com/embed/'.$q;

$descriptionvalue= $row['description'];
$sem = $row['sem'];
$subject = $row['subject'];
print "<tr>\n";
print "\t<td>\n";
echo "<font face=arial size=4/>$subject</font>";
print "</td>\n";
print "\t<td>\n";
echo "<font face=arial size=4/>$descriptionvalue</font>";
print "</td>\n";
print "\t<td>\n";
echo "<iframe width='450' height='250' src='$src' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
print "</td>\n";
print "\t<td>\n";
}
print "</table>\n";

echo '<a class="btn btn-primary" href="sdashboard.php">Dashboard</a>';
echo '</div>';


?>
