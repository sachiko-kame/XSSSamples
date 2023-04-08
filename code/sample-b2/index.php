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

【owaspの攻撃】
<?php echo htmlspecialchars('</script><scrIpt>alert(1);</scRipt><script>') ?><br>

【XSS Locator (Polygot)】
URL:https://cheatsheetseries.owasp.org/cheatsheets/XSS_Filter_Evasion_Cheat_Sheet.html
※XSS Locatorで確認出来るかの確認
</pre>
owaspの検知結果<br>
<img width=250px src="../owasp_result/sample-b2_1.png"><br>

<form action="./" method="get">
    name: <input type="text" name="name">
    <input type="submit" />
</form>

<div id="sample"></div>

<script>
let txt = h(<?php echo $name ?>); /*XSS発生箇所*/ 


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