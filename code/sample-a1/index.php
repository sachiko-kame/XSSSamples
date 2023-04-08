<a href='/'>戻る</a>
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

【owaspの攻撃】
<?php echo htmlspecialchars('</title><scrIpt>alert(1);</scRipt><title>') ?><br>
【owaspの攻撃】
#jaVasCript:/*-/*`/*\`/*&#039;/*&quot;/**/(/* */oNcliCk=alert(5397) )//%0D%0A%0d%0a//&lt;/stYle/&lt;/titLe/&lt;/teXtarEa/&lt;/scRipt/--!&gt;\x3csVg/&lt;sVg/oNloAd=alert(5397)//&gt;\x3e

【XSS Locator (Polygot)】
URL:https://cheatsheetseries.owasp.org/cheatsheets/XSS_Filter_Evasion_Cheat_Sheet.html
※XSS Locatorで確認出来るかの確認
</pre>
owaspの検知結果<br>
<img width=250px src="../owasp_result/sample-a1_1.png"><br>
<img width=250px src="../owasp_result/sample-a1_2.png"><br>


<form action="./" method="get">
    name: <input type="text" name="name">
    <input type="submit" />
</form>

<?php echo htmlspecialchars($name) ?>

</body>

</html>