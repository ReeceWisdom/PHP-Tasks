<?php
$char1 = "";
$char2 = "";
$char3 = "";
$char4 = "";
$password = "4jfE"; //max 4 character length
$loop = 0;

while ($loop == 0)
{
	for ($char1 = 48; $char1 < 123; $char1++)
	{
		for ($char2 = 48; $char2 < 123; $char2++)
		{
			for ($char3 = 48; $char3 < 123; $char3++)
			{
				for ($char4 = 48; $char4 < 123; $char4++)
				{
					if (md5(chr($char1) . chr($char2) . chr($char3) . chr($char4)) == md5($password))
					{
						echo chr($char1) . chr($char2) . chr($char3) . chr($char4);
						$loop = 1;
					}
				}					
			}
		}
	}
}
?>