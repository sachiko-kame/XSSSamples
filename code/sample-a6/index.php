<a href='/'>戻る</a>
<?php
$name = $_GET['name'];
?>

<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>

<pre style="text-align: left; background-color: lightgray;">
【sample】
sample

【xx_sample】※codeタグも同じ挙動
<?php echo htmlspecialchars('<script>alert()</script>'."\n") ?>
<?php echo htmlspecialchars('</pre><script>alert()</script>') ?><br>

【XSS Locator (Polygot)】
URL:https://cheatsheetseries.owasp.org/cheatsheets/XSS_Filter_Evasion_Cheat_Sheet.html
※XSS Locatorで確認出来るかの確認
</pre>

<form action="./" method="get">
    name: <input type="text" name="name">
    <input type="submit" />
</form>

<pre>
<?php echo $name /*XSS発生箇所*/ ?>
</pre>

<?php echo htmlspecialchars($name) ?>

</body>

</html>