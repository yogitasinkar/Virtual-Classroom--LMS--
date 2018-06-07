<?php
include '../dbh.inc.php';

include_once 'theader.php';
session_start();

$tdept= $_SESSION['t_dept'];
$sql="SELECT description, link , sem, subject FROM videos WHERE tdept='$tdept' ORDER BY sem";
$result =mysqli_query($conn, $sql);

echo '<br><br><br><div class="ui raised very padded text container ">';
echo "<br><h2>Video Material</h2><br>";
echo '<a style="margin-right:20px" class="btn btn-primary" href="addVideos.php">Add New Video</a>';
echo '<a class="btn btn-primary" href="tdashboard.php">Dashboard</a><br>';
print "<table class='ui celled table'>\n";
print "<thead>
      <tr>
      <th>Subject</th>
      <th>Description</th>
      <th>Video</th>
      <th>Sem</th>
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
echo "<iframe width='350' height='200' src='$src' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
print "</td>\n";
print "\t<td>\n";
echo "<font face=arial size=4/>$sem</font>";
print "</td>\n";
print "</tr>\n";
}
print "</table>\n";


echo '</div>';


?>
