<?php

include_once 'sheader.php';
session_start();

$dbServerName  ="localhost";
$dbUserName ="root" ;
$dbPassword ="";
$dbName ="virtualcl";
$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName );
$sdept= $_SESSION['s_dept'];

// $sql="SELECT * FROM qforum WHERE qid='$sdept' ORDER BY sem";
// echo '<br><br><br>';
// echo 'hello<br>';

$qid= $_SESSION['qid'];
echo $qid;
$sql="SELECT * FROM qforum WHERE qid='$qid'";
$result =mysqli_query($conn, $sql);

echo '<br><br><br><div class="ui raised very padded text container ">';
print "<table class='ui celled table'>\n";
print "<thead>
      <tr>
      <th>Q ID.</th>
      <th>Question</th>
      <th>By</th>
      </tr></thead>";
while ($row = mysqli_fetch_array($result)){
$question= $row['question'];
$qid= $row['qid'];
$by = $row['sfirst']." ".$row['slast'];
$sem = $row['sem'];
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
?>

<h5  style="text-align:center">Answers</h5>
<div class="ui text container ">
    <form class="ui form" action="answer.php" method="post" enctype="multipart/form-data">

      Add your answer:
      <div class="ui fluid input">
        <textarea name="answer" rows="8" cols="80"></textarea>
      </div><br>

      <div class="ui fluid input">
        <button class="ui button basic primary" type="submit" name="submit">Answer</button>
      </div>
    </form>
</div >

<?php
// echo '<a style="margin-right:20px;" class="btn btn-primary" href="addStudyMaterial.php">Add New Notes</a>';
// echo '<a style="margin-right:20px;" class="btn btn-primary" href="viewVideos.php">Videos</a>';
echo '<a class="btn btn-primary" href="sdashboard.php">Dashboard</a>';

echo '</div>';
