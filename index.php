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
        <form action="login.php">
            <input type="button" name="login" value="AUTHORIZED USER ONLY">
        </form>
        <form action="balance.php">
            <input type="button" name="balance" value="Balance Check (로그인 불필요)">
        </form>
    </body>
</html>