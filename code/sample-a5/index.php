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

【xx_sample】
<?php echo htmlspecialchars('</xmp><script>alert()</script>') ?><br>

【owaspの攻撃】
<?php echo htmlspecialchars('</xmp><scrIpt>alert(1);</scRipt><xmp>') ?><br>

【XSS Locator (Polygot)】
URL:https://cheatsheetseries.owasp.org/cheatsheets/XSS_Filter_Evasion_Cheat_Sheet.html
※XSS Locatorで確認出来るかの確認
</pre>
owaspの検知結果<br>
<img width=500px src="../owasp_result/sample-a5_1.png"><br>

<form action="./" method="get">
    name: <input type="text" name="name">
    <input type="submit" />
</form>

<xmp>
<?php echo $name /*XSS発生箇所*/ ?>
</xmp>

<?php echo htmlspecialchars($name) ?>

</body>

</html>