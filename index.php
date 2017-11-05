<body style="background:green">

<center>
<font style="color:#fff;font-family:Arial"><h1>Card Deck Randomize</h1></font>

<form action="cards.php" method="post">
<font style="color:#fff;font-family:Arial">Player Number:</font>&nbsp; <input style="color:red;font-family:Arial;font-weight:bold" type="text" name="players" value="13">
<input type="submit" Value="Insert">
</form>

<br />
<br />

<img src="gif/back1.gif" width="4.5%">
<img src="gif/black_joker.gif" width="4.5%">
<img src="gif/red_joker.gif" width="4.5%">


 </center>

<?php

$numbers = array('2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '1');
$codes = array('s', 'h', 'd', 'c');
		
		$decks = array(); //"decks" contain 52 combined combination cards between "numbers" and "codes"
		foreach ($codes as $code) {
			foreach ($numbers as $number) {
				$decks[] = $number . $code;				
			}
		}

$players = 13;

//array_chunk is used to distribute all cards according to the number of players
$cards = array_chunk($decks, $players);
?>
<center>

<?php

print "<table style=\"width:70%\">\n";	

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

?>
</center>
</body>