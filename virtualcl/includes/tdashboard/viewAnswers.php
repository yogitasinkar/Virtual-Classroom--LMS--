<?php

include_once 'theader.php';
include '../dbh.inc.php';
session_start();

$tdept= $_SESSION['t_dept'];
$qid =$_SERVER['QUERY_STRING'];
$sql="SELECT * FROM aforum WHERE sdept='$tdept' AND qid='$qid' ORDER BY sem, subject";
// $sql="SELECT * FROM qforum";
$result =mysqli_query($conn, $sql);




// $qid =$_SERVER['QUERY_STRING'];
$_SESSION['qid']=$qid;
echo $qid;
$sql1="SELECT * FROM qforum WHERE qid='$qid'";
$result1 =mysqli_query($conn, $sql1);

echo '<br><br><br><div class="ui raised very padded text container ">';
print "<table class='ui celled table'>\n";
print "<thead>
      <tr>
      <th>Q ID.</th>
      <th>Question</th>
      <th>By</th>
      </tr></thead>";
while ($row1 = mysqli_fetch_array($result1)){
$question= $row1['question'];
$qid= $row1['qid'];
$by = $row1['sfirst']." ".$row1['slast'];
$sem = $row1['sem'];
print "<tr>\n";
print "\t<td>\n";
echo "<font face=arial size=4/>$qid</font>";
print "</td>\n";
print "\t<td>\n";
echo "<font face=arial size=4/>$question</font>";
print "</td>\n";
print "\t<td>\n";
echo "<font face=arial size=4/>$by</font>";
print "</td>\n";
print "</tr>\n";
}
print "</table>\n";

echo '</div>';

echo '<br><div class="ui raised very padded text container ">';
// echo "<h2>Questions</h2>";
print "<table class='ui celled table'>\n";
print "<thead>
      <tr>
      <th>Answers</th>
      <th>By</th>
      </tr></thead>";
while ($row = mysqli_fetch_array($result)){
$answer= $row['answer'];
$qid= $row['qid'];
$by = $row['sfirst']." ".$row['slast'];
$sem = $row['sem'];
$href= "addAnswers.php?".$qid;
print "<tr>\n";
// print "\t<td>\n";
// echo "<font face=arial size=4/>$qid</font>";
// print "</td>\n";
print "\t<td>\n";
echo "<font face=arial size=4/>$answer</font>";
print "</td>\n";
print "\t<td>\n";
echo "<font face=arial size=4/>$by</font>";
print "</td>\n";
print "</tr>\n";
}
print "</table>\n";


echo '<a style="margin-right:20px;" class="btn btn-primary" href="addAnswers.php">Add Answer</a>';
// echo '<a style="margin-right:20px;" class="btn btn-primary" href="viewVideos.php">Videos</a>';
echo '<a class="btn btn-primary" href="tdashboard.php">Dashboard</a>';

echo '</div>';


?>
