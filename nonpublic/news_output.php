<?php
include ("./inc/db.php");
include ("./inc/funktion_user.php");


if ( isset($text) && isset($betreff) && IsSet($date) ) {
  if (!isset($treffen)) $treffen = 0;
  //$escaped_text = htmlescape($text);
  //$escaped_betreff = htmlescape($betreff);
  $SQL = "INSERT INTO `News` (`Datum`, `Betreff`, `Text`, `UID`, `Treffen`) ";
  $SQL.= "VALUES ('$date', '$betreff', '$text', '".$_SESSION['UID'];
  $SQL.= "', '$treffen');";
  $Erg = mysql_query($SQL, $con);
  if ($Erg == 1) { Print_Text(4); }
}


if (!IsSet($news_begin)) {
	$news_begin=0;
}

if (!IsSet($DISPLAY_NEWS)) {
  $DISPLAY_NEWS = 5;
}
 
//if (($news_begin-$DISPLAY_NEWS) >= 0 ) {
//	echo "<br><br><a href=\"./news.php?news_begin=".($news_begin-$DISPLAY_NEWS)."\">Die vorherigen $DISPLAY_NEWS News anzeigen...</a><br>";
//} 
   
$SQL = "SELECT * FROM `News` ORDER BY 'ID' DESC LIMIT $news_begin,$DISPLAY_NEWS";
$Erg = mysql_query($SQL, $con);

// anzahl zeilen
$news_rows  = mysql_num_rows($Erg);

for ($n = 0 ; $n < $news_rows ; $n++) {

  if (mysql_result($Erg, $n, "Treffen") == 0) {
  	echo "<p class='question'>";
  } else {	
	echo "<p class='engeltreffen'>";
  }
  echo "<u>".mysql_result($Erg, $n, "Betreff")."</u><br>\n";


  echo "&nbsp; &nbsp;<font size=1>".mysql_result($Erg, $n, "Datum").", ";
  echo UID2Nick(mysql_result($Erg, $n, "UID"))."</font>";
  // avatar anzeigen?
  echo DisplayAvatar (mysql_result($Erg, $n, "UID"));
  echo "</p>\n";
  echo "<p class='answer'>".nl2br(mysql_result($Erg, $n, "Text"))."</p>\n";
  $RefID=mysql_result($Erg, $n, "ID");
  $countSQL="SELECT COUNT(*) from news_comments where Refid = '$RefID'";
  $countErg = mysql_query($countSQL, $con);
  $countcom = mysql_result($countErg, 0, "COUNT(*)");
  echo "<p class='comment' align='right'><a href=\"./news_comments.php?nid=$RefID\">$countcom comments</a></p>\n\n";


}
//echo "<a href=\"./news.php?news_begin=".($news_begin+$DISPLAY_NEWS)."\">Die n&auml;chsten $DISPLAY_NEWS News anzeigen...</a><br><br>\n";

echo "<div align=\"center\">\n\n";
$rowerg = mysql_query("select * from News", $con);
$rows  = mysql_num_rows($rowerg);
$dis_rows =  round (($rows / $DISPLAY_NEWS)+0.5);

Print_Text(5);

for ($i=1; $i <= $dis_rows; $i++) {
	if (!((($i * $DISPLAY_NEWS) - $news_begin) == $DISPLAY_NEWS)) {
		echo "<a href=\"./news.php?news_begin=".(($i*$DISPLAY_NEWS) - $DISPLAY_NEWS)."\">$i</a>&nbsp; ";
	} else {
		echo "$i&nbsp; ";
	}
}
echo "</div>";

?>

<br>
<hr>
<h4><?PHP Print_Text(6); ?></h4>
<a name="Neu">&nbsp;</a>

<form action="<? echo $ENGEL_ROOT ?>nonpublic/news.php" method="post">
<? 
// Datum mit uebergeben, um doppelte Eintraege zu verhindern 
// (Reload nach dem Eintragen!)
?>
<input type="hidden" name="date" value="<? echo date("Y-m-d H:i:s"); ?>">
<table>
 <tr>
  <td align="right"><?PHP Print_Text(7); ?></td>
  <td><input type="text" name="betreff" size="60"></td>
 </tr>
 <tr>
  <td align="right"><?PHP Print_Text(8); ?></td>
  <td><textarea name="text" cols="50" rows="10"></textarea></td>
 </tr>

<?
if ($_SESSION['CVS']["nonpublic/newsAddMeting"] == "Y") {
?>
 <tr>
  <td align="right"><?PHP Print_Text(9); ?></td>
  <td><input type="checkbox" name="treffen" size="1" value="1"></td>
 </tr>
<?
}
?>
</table>
<br>
<input type="submit" value="<?PHP Print_Text(10); ?>">
</form>
