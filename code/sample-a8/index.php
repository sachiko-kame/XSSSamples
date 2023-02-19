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
"color: red"

【xx_sample】
<?php echo htmlspecialchars('"" onmouseover="alert()"'."\n") ?>
※上記打った後は下の文字(sample)にマウスを持ってきてください。間違ったエスケープ。

【owaspの攻撃】※不発
<?php echo htmlspecialchars('onMouseOver=alert(1);') ?><br>

【XSS Locator (Polygot)】
URL:https://cheatsheetseries.owasp.org/cheatsheets/XSS_Filter_Evasion_Cheat_Sheet.html
※XSS Locatorで確認出来るかの確認
※『"』でPolygotのテキストを入力すれば検知出来ますがそのまま打ち込んだだけでは検知出来ません。
</pre>
owaspの検知結果<br>
<img width=500px src="../owasp_result/sample-a8_1.png"><br>

<form action="./" method="get">
    name: <input type="text" name="name">
    <input type="submit" />
</form>

<div style=<?php echo htmlspecialchars($name, ENT_NOQUOTES) /*XSS発生箇所*/ ?>>sample</div>

<?php echo htmlspecialchars($name) ?>

</body>

</html>