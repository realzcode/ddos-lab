<?php

/* REALZCODE DDOS-LAB V1.0
 * “Surely Allah is my Lord and your Lord, so worship Him ˹alone˺. This is the Straight Path.” QS.Maryam:36
 * TANGERANG SELATAN 20/07/2023, INDONESIA
 */

$date = md5(date('Y-m-d H:i:s'));

header("Refresh: 7");
header("Connection: close");
header("Cache-Control: no-cache");
header("Accept: text/html; charset=UTF-8");
header("Set-Cookie: realzcode=ddos-lab-v1.0-$date; Path=/");

$browser_user_agent = $_SERVER['HTTP_USER_AGENT'];

if (isset($_GET['reset']))
{
	$x = "./get.txt";
	$y = fopen($x, "w+");
	fwrite($y, 0);
	fclose($y);

	$x = "./post.txt";
	$y = fopen($x, "w+");
	fwrite($y, 0);
	fclose($y);

	$x = "./head.txt";
	$y = fopen($x, "w+");
	fwrite($y, 0);
	fclose($y);

	$x = "./others.txt";
	$y = fopen($x, "w+");
	fwrite($y, 0);
	fclose($y);

	header("location: .");
}

if ($browser_user_agent !== $_SERVER['HTTP_USER_AGENT']) 
{
	$ip_address = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

	echo "REALZCODE DDOS-LAB V1.0\r\n";
	echo "Method: " . $_SERVER['REQUEST_METHOD'] . "\r\n";
	echo "User-Agent: " . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
	echo "Ip-Address: $ip_address\r\n";

	if ($_SERVER['REQUEST_METHOD'] === 'GET') 
	{
		$x = "./get.txt";
		$y = fopen($x, "r");
		$z = 0;
		if (filesize($x) > 0) 
		{
			$z = fread($y, filesize($x));
		}
		$count = $z + 1;
		fclose($y);
		$y = fopen($x, "w+");
		fwrite($y, $count);
		fclose($y);
	} 
	elseif ($_SERVER['REQUEST_METHOD'] === 'POST') 
	{
		$x = "./post.txt";
		$y = fopen($x, "r");
		$z = 0;
		if (filesize($x) > 0) 
		{
			$z = fread($y, filesize($x));
		}
		$count = $z + 1;
		fclose($y);
		$y = fopen($x, "w+");
		fwrite($y, $count);
		fclose($y);
	} 
	elseif ($_SERVER['REQUEST_METHOD'] === 'HEAD') 
	{
		$x = "./head.txt";
		$y = fopen($x, "r");
		$z = 0;
		if (filesize($x) > 0) 
		{
			$z = fread($y, filesize($x));
		}
		$count = $z + 1;
		fclose($y);
		$y = fopen($x, "w+");
		fwrite($y, $count);
		fclose($y);
	} 
	else
	{
		$x = "./others.txt";
		$y = fopen($x, "r");
		$z = 0;
		if (filesize($x) > 0) 
		{
			$z = fread($y, filesize($x));
		}
		$count = $z + 1;
		fclose($y);
		$y = fopen($x, "w+");
		fwrite($y, $count);
		fclose($y);
	}
}
else
{
	$x = "./get.txt";
	$y = fopen($x, "r");
	$get = 0;
	if (filesize($x) > 0) {
	$get = fread($y, filesize($x));
	}
	fclose($y);

	$x = "./post.txt";
	$y = fopen($x, "r");
	$post = 0;
	if (filesize($x) > 0) {
	$post = fread($y, filesize($x));
	}
	fclose($y);

	$x = "./head.txt";
	$y = fopen($x, "r");
	$head = 0;
	if (filesize($x) > 0) {
	$head = fread($y, filesize($x));
	}
	fclose($y);

	$x = "./others.txt";
	$y = fopen($x, "r");
	$others = 0;
	if (filesize($x) > 0) {
	$others = fread($y, filesize($x));
	}
	fclose($y);

echo "<center style=font-family:consolas>
<b>DDOS-LAB V1.0</b>
<br>by RealzCode<br>
<br><table border=1>
<thead>
<tr>
<th width=77>METHOD</th>
<th width=77>COUNT</th>
</tr>
</thead>
<tbody>
<tr>
<td>GET</td>
<td align=center>$get</td>
</tr>
<tr>
<td>POST</td>
<td align=center>$post</td>
</tr>
<tr>
<td>HEAD</td>
<td align=center>$head</td>
</tr>
<tr>
<td>OTHERS</td>
<td align=center>$others</td>
</tr>
</tbody>
</table><br>
<a href=?reset>Reset</a> | <a href=.>Refresh</a>
</center>";

}

?>
