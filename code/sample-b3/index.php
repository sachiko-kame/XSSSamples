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
こんにちは今日は良い天気ですね#出来事#天気#aaa

【xx_sample】
<?php echo htmlspecialchars('こんにちは今日は良い天気ですね#<script>alert()</script>'."\n") ?>

【XSS Locator (Polygot)】
URL:https://cheatsheetseries.owasp.org/cheatsheets/XSS_Filter_Evasion_Cheat_Sheet.html
※XSS Locatorで確認出来るかの確認
</pre>

<form action="./" method="get">
    <input type="text" name="name">
    <input type="submit" />
</form>

<?php
echo '<ol>';
$names = explode("#", $name);
for($i = 0; $i < count($names); ++$i) {
    if($i > 0){
        echo '<li>' . $names[$i] . '</li>'; /*XSS発生箇所*/ 
    }
}
echo '</ol>';
?>

</body>

</html>
