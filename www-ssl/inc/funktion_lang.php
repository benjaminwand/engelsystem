<?PHP


function Get_Text ($TextID)
{
	GLOBAL $con, $error_messages;
	
	if( !isset($_SESSION['Sprache'])) 
		$_SESSION['Sprache'] = "EN";
	if( $_SESSION['Sprache']=="") 
		$_SESSION['Sprache']="EN";
	if( isset($_GET["SetLanguage"]))
		$_SESSION['Sprache']= $_GET["SetLanguage"];

	$SQL = "SELECT * FROM `Sprache` WHERE TextID=\"$TextID\" AND Sprache ='".$_SESSION['Sprache']."'";
	@$Erg = mysql_query($SQL, $con);
	
	if( mysql_num_rows( $Erg) == 1)
		return (@mysql_result($Erg, 0, "Text"));
	else
	{
        	array_push($error_messages, "Get_Text, '$TextID' found ". mysql_num_rows( $Erg). "x in Sprache Database Table for Language (".$_SESSION['Sprache'].")\n");
		return "Error Data, '$TextID' found ". mysql_num_rows( $Erg). "x";
	}
	
}

function Print_Text ($TextID)
{
	GLOBAL $con, $error_messages;
	
	if( !isset($_SESSION['Sprache'])) 
		$_SESSION['Sprache'] = "EN";
	if( $_SESSION['Sprache']=="") 
		$_SESSION['Sprache']="EN";
	if( isset($_GET["SetLanguage"]))
		$_SESSION['Sprache']= $_GET["SetLanguage"];
	
	$SQL = "SELECT * FROM `Sprache` WHERE TextID=\"$TextID\" AND Sprache ='".$_SESSION['Sprache']."'";
	@$Erg = mysql_query($SQL, $con);

	if( mysql_num_rows( $Erg) == 1)
		echo nl2br(@mysql_result($Erg, 0, "Text"));
	else
	{
        	array_push($error_messages, "Get_Text, '$TextID' found ". mysql_num_rows( $Erg). "x in Sprache Database Table for Language (".$_SESSION['Sprache'].")\n");
		echo "Error Data, '$TextID' found ". mysql_num_rows( $Erg). "x";
	}
}

?>
