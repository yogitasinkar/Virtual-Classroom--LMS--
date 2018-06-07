<?php

include_once 'theader.php';
session_start();
include '../dbh.inc.php';
$tdept= $_SESSION['t_dept'];
$sql="SELECT * FROM qforum WHERE sdept='$tdept' ORDER BY sem, subject";
// $sql="SELECT * FROM qforum";
$result =mysqli_query($conn, $sql);

echo '<br><br><br><div class="ui raised very padded text container ">';
// echo "<h2>Questions</h2>";
print "<table class='ui celled table'>\n";
print "<thead>
      <tr>
      <th>Q ID.</th>
      <th>Subject</th>
      <th>Question</th>
      <th>By</th>
      </tr></thead>";
while ($row = mysqli_fetch_array($result)){
$question= $row['question'];
$qid= $row['qid'];
$by = $row['sfirst']." ".$row['slast'];
$sem = $row['sem'];
$subject = $row['subject'];
$href= "viewAnswers.php?".$qid;
print "<tr>\n";
print "\t<td>\n";
echo "<font face=arial size=4/>$qid</font>";
print "</td>\n";
print "\t<td>\n";
echo "<font face=arial size=4/>$subject</font>";
print "</td>\n";
print "\t<td>\n";
echo "<div align=center><a href='$href'>$question</a></div>";
print "</td>\n";
print "\t<td>\n";
echo "<font face=arial size=4/>$by</font>";
print "</td>\n";
print "</tr>\n";
}
print "</table>\n";

echo '<a class="btn btn-primary" href="tdashboard.php">Dashboard</a>';

echo '</div>';


?>
