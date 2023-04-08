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
初めての投稿です！よろしくお願いいたします！

【xx_sample】
<?php echo htmlspecialchars('</textarea><script>alert()</script>') ?><br>

【owaspの攻撃】
<?php echo htmlspecialchars('</textarea><scrIpt>alert(1);</scRipt><textarea>') ?><br>

【XSS Locator (Polygot)】
URL:https://cheatsheetseries.owasp.org/cheatsheets/XSS_Filter_Evasion_Cheat_Sheet.html
※XSS Locatorで確認出来るかの確認
</pre>
owaspの検知結果<br>
<img width=250px src="../owasp_result/sample-a3_1.png"><br>

<form action="./" method="get">
    <label for="name">name</label>
    <textarea id="name" name="name"　cols="50" rows="10"><?php echo $name ?></textarea><!-- XSS発生箇所 -->
    <input type="submit" />
</form>

<?php echo htmlspecialchars($name) ?>


</body>

</html>