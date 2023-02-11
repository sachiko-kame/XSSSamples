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
※上記はコメントにされ実際表示されない。

【xx_sample】
<?php echo htmlspecialchars('--><script>alert()</script>'."\n") ?>
※コメントなら問題ないだろうとしてしまったパターン。

【XSS Locator (Polygot)】
URL:https://cheatsheetseries.owasp.org/cheatsheets/XSS_Filter_Evasion_Cheat_Sheet.html
※XSS Locatorで確認出来るかの確認
</pre>

<form action="./" method="get">
    name: <input type="text" name="name">
    <input type="submit" />
</form>

<?php
 echo "<!-- ${name} -->" /*XSS発生箇所*/ 
?>

</body>

</html>