<?php
$name = $_GET['name'];

?>

<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title><?php echo $name ?></title> <!-- XSS発生箇所 -->
</head>

<body>

<pre style="text-align: left; background-color: lightgray;">
【sample】
1

【xx_sample】
<?php echo htmlspecialchars('</title><script>alert()</script>') ?><br>

【XSS Locator (Polygot)】
URL:https://cheatsheetseries.owasp.org/cheatsheets/XSS_Filter_Evasion_Cheat_Sheet.html
※XSS Locatorで確認出来るかの確認
</pre>


<form action="./" method="get">
    name: <input type="text" name="name">
    <input type="submit" />
</form>

<?php echo htmlspecialchars($name) ?>


</body>

</html>