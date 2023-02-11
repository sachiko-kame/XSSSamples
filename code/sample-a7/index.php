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
red

【xx_sample】
<?php echo htmlspecialchars('" onmouseover="alert()'."\n") ?>
※上記打った後は下の文字(sample)にマウスを持ってきてください。

【XSS Locator (Polygot)】
URL:https://cheatsheetseries.owasp.org/cheatsheets/XSS_Filter_Evasion_Cheat_Sheet.html
※XSS Locatorで確認出来るかの確認
</pre>

<form action="./" method="get">
    name: <input type="text" name="name">
    <input type="submit" />
</form>

<div style="color: <?php echo htmlspecialchars($name, ENT_NOQUOTES) /*XSS発生箇所*/ ?>">sample</div>

<?php echo htmlspecialchars($name) ?>

</body>

</html>