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
<?php echo htmlspecialchars('</script><script>alert()</script>'."\n") ?>
※関数に入れるだけなら、、、の油断したパターンですかね、、

【XSS Locator (Polygot)】
URL:https://cheatsheetseries.owasp.org/cheatsheets/XSS_Filter_Evasion_Cheat_Sheet.html
※XSS Locatorで確認出来るかの確認
</pre>

<form action="./" method="get">
    name: <input type="text" name="name">
    <input type="submit" />
</form>

<div id="sample"></div>

<script>
let txt = h(<?php echo $name ?>);


//関数参考: https://hacknote.jp/archives/55765/
function h(str){
  return String(str)
    .replace(/"/g,"&quot;")
    .replace(/</g,"&lt;")
    .replace(/>/g,"&gt;")
}

</script>

<?php echo htmlspecialchars($name) ?>

</body>

</html>