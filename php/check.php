<?php
require 'config.phplib';

$msg="";
if (!array_key_exists('hiwa-user', $_COOKIE) ||
    !array_key_exists('hiwa-role', $_COOKIE)) {
	Header("Location: login.php");
	exit();
	}
$role=$_SESSION['hiwa-user'];
if ($role != 'admin') Header("Location: menu.php");
?>
<html>
<head>
<title>HIWA Manage Users</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
<?php require 'header.php';

if (array_key_exists("ip", $_REQUEST)) {
	$ip=$_REQUEST['ip'];
	if(filter_var($ip, FILTER_VALIDATION_URL) || filter_var($ip, FILTER_VALIDATION_IP) || filter_var($ip, FILTER_FLAG_DOMAIN, FILTER_FLAG_HOSTNAME))
	{
	echo "<P>pinging target IP address</P>";
	exec("ping -c 3 $_REQUEST[ip]", $out);
	echo "<div><pre>\r\n";
	echo implode("\r\n", $out)."\r\n";
	echo "</pre></div>";
}
?>

<form>
<table>
<tr>
<td>Check hostname</td>
<td><input type="text" name="ip" placeholder="IP address or hostname" width="50"></td>
</tr>
<tr>
<td colspan="2" style="text-align: right"><input type="submit" value="Check!"/></td>
</tr>
</table>
</form>

</body>
</html>
