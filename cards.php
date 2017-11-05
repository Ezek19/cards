<body style="background:green">

<center>
<font style="color:#fff;font-family:Arial"><h1>Card Deck Randomize</h1></font>

<form action="" method="post">
<font style="color:#fff;font-family:Arial">Player Number:</font>&nbsp; <input style="color:red;font-family:Arial;font-weight:bold" type="text" name="players" value="<?php echo $_POST['players'];?>">
<input type="submit" Value="Insert">
</form>

<input type="submit" value="Randomize Cards" onclick="javascript:location.reload(true)" />
<br />
<br />
<font style="color:#fff;font-family:Arial">Total Player:</font>
<font style="color:#fff;font-family:Arial">
<?php $players = $_POST['players']; echo $players; ?>
</font>
 </center>
<?php
if ($players <= 1) { //"if" ensure the inclusion of the appropriate number of players
?>
<script type="text/javascript">
		alert("Number of players should be between 2 and 52 people");			
		window.location = "../cards";
</script>

<?php
}else{

$numbers = array('2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '1');
$codes = array('s', 'h', 'd', 'c');
		
		$decks = array(); //"decks" contain 52 combined combination cards between "numbers" and "codes"
		foreach ($codes as $code) {
			foreach ($numbers as $number) {
				$decks[] = $number . $code;				
			}
		}

shuffle($decks); //"shuffle" is used to unpack card arrangement


$cards = array_chunk($decks, $players); //"array_chunk" is used to distribute all cards according to the number of players
?>
<center>

<?php

print "<table style=\"width:20%\">\n";	//Use tables to organize cards more precisely
for($i = 1; $i <= $players; $i++ ){	
	print "<th style=\"padding:0.5em\"><font style=\"color:#fff;font-family:Arial\">Player: ".$i.",</font></th>\n";	
}

foreach ($cards as $card) { 
	
    print "<tr>\n";		
    foreach ($card as $piece) {		
		$folder = "gif/";
		$format = ".gif";
		echo '<center>';		
        print "<td><img src=\"" .$folder.$piece.$format. "\" width=\"100%\" /> </td>\n";
		echo'</center>';
    }
    print "</tr>\n";
}
print "</table>\n";
}
?>
</center>
</body>