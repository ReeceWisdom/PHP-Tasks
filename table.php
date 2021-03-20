// HTML Start

<?php
$forename = "Reece";
$surname = "Wisdom";
$regnum = 17033849;
$a = 3;
$b = 4;
$c = 5;
$d = 3034;
$e = 30;
$x;
$y;
?>

<table border='1'>
	<tr>
		<td><strong>Rectangle 1:</strong> <?php echo $forename . " " . $surname . " -- " . $regnum . " -- " . date("d/m/y"); ?> </td>
		<td><strong>Rectangle 2:</strong> <?php echo "3 + 4 + 5 = " , $a + $b + $c; ?> </td>
	</tr>

	<tr>
		<td><strong>Rectangle 3:</strong> <?php srand($d); echo(rand()); ?> </td>
		<td><strong>Rectangle 4:</strong>
			<?php
			while ($e <= 40)
			{
				echo $e , " "; $e = $e + 2;
			}
			?>
		</td>
	</tr>
	
	<tr>
		<td>
			<form action="table.php" method="post">
			<strong>Rectangle 5:</strong>
				<input type="text" name="variable">
				<input type="submit">
			</form>
			<?php
			if (isset($_POST['variable']))
			{
				$x = $_POST['variable'];
			}
			?>
		</td> 
		<td><strong>Rectangle 6:</strong>
			<?php
			if ((isset($x)) && (is_numeric($x) == true) && (($x%2) == 0))
			{				
			echo "Even";
			}
			else if ((isset($x)) && (is_numeric($x) == true))
			{
				echo "Odd";
			}
			?>
		</td>
	</tr>
	
	<tr>
		<td><strong>Rectangle 7:</strong>
			<?php 
			if ((isset($x)) && (is_numeric($x) == true))
			{
				srand($x);
				$y = (rand());
				echo $y;
			}
			?>
		</td>
		<td><strong>Rectangle 8:</strong>
			<?php
			if ((isset($x)) && (is_numeric($x) == false))
			{
				echo str_rot13($x);
			}
			?>
		</td>
	</tr>

	<tr>
		<td><strong>Rectangle 9:</strong> 
			<script>
			function rot13(str)
			{
				var input     = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
				var output    = 'NOPQRSTUVWXYZABCDEFGHIJKLMnopqrstuvwxyzabcdefghijklm';
				var index     = x => input.indexOf(x);
				var translate = x => index(x) > -1 ? output[index(x)] : x;
				return str.split('').map(translate).join('');
			}
			</script>
			<?php
			/*create a button that, when pressed, runs the javascript rot13 function for the variable 
			in $x if (if statement) there is a variable in $x (isset).*/
			?>
		</td>
		<td><strong>Rectangle 10:</strong>
			<?php
			$loop = 0;
			$num = 0;
			$password = "m1234";

			while ($loop == 0)
			{
				if (md5('m' . $num) == md5($password))
				{
					echo 'm' . $num . " -- " . md5('m' . $num);
					$loop = 1;
				}
				else
				{
					$num = $num + 1;									
				}
			}
			?>
		</td>
	</tr>
</table>

a b c d e f g h i j  k  l  m  n  o  p  q  r  s  t  u  v  w  x  y  z
1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21`22 23 24 25 26
