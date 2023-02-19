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
sss ※jsでないのでエラーがどっちにしろでてしまう。

【xx_sample】
<?php echo htmlspecialchars('alert()'."\n") ?>
<?php echo htmlspecialchars('</script><script>alert()</script>') ?><br>

【owaspの攻撃】
<?php echo htmlspecialchars('</script><scrIpt>alert(1);</scRipt><script>') ?><br>
【owaspの攻撃】
#jaVasCript:/*-/*`/*\`/*&#039;/*&quot;/**/(/* */oNcliCk=alert(5397) )//%0D%0A%0d%0a//&lt;/stYle/&lt;/titLe/&lt;/teXtarEa/&lt;/scRipt/--!&gt;\x3csVg/&lt;sVg/oNloAd=alert(5397)//&gt;\x3e

【XSS Locator (Polygot)】
URL:https://cheatsheetseries.owasp.org/cheatsheets/XSS_Filter_Evasion_Cheat_Sheet.html
※XSS Locatorで確認出来るかの確認
</pre>
owaspの検知結果<br>
<img width=500px src="../owasp_result/sample-a4_1.png"><br>
<img width=500px src="../owasp_result/sample-a4_2.png"><br>

<form action="./" method="get">
    name: <input type="text" name="name">
    <input type="submit" />
</form>

<script>
    console.log('hello!');
    // XSS発生箇所
    <?php echo $name ?>
</script>

<?php echo htmlspecialchars($name) ?>

</body>

</html>