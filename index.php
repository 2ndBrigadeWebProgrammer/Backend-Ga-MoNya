<html>
<?php
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);

    $conn = new mysqli($server, $username, $password, $db);
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }

    else echo "<h3>This is a php embbeded title</h3>";
?>

    <head>
        <meta charset="utf-8">
	    <title>MinsaPay</title>
    </head>
    <body>
        <h1>Home</h1>
        <h3>Welcome to MinsaPay</h3>
            <input type="button" onclick="login.php" name="login" value="AUTHORIZED USER ONLY">
            <input type="button" onclick="balance.php"name="balance" value="Balance Check (로그인 불필요)">
    </body>
</html>