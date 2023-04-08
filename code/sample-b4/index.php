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
<?php echo htmlspecialchars('こんにちは今日は良い天気ですね#<svg onload="alert(1)"></svg>'."\n") ?>

【owaspの攻撃】
?name=abc#&lt;img src=&quot;random.gif&quot; onerror=alert(5397)&gt;
【owaspの攻撃】
#jaVasCript:/*-/*`/*\`/*&#039;/*&quot;/**/(/* */oNcliCk=alert(5397) )//%0D%0A%0d%0a//&lt;/stYle/&lt;/titLe/&lt;/teXtarEa/&lt;/scRipt/--!&gt;\x3csVg/&lt;sVg/oNloAd=alert(5397)//&gt;\x3e

【XSS Locator (Polygot)】
URL:https://cheatsheetseries.owasp.org/cheatsheets/XSS_Filter_Evasion_Cheat_Sheet.html
※XSS Locatorで確認出来るかの確認
※『#』の後ろにつければ検知出来ますがそのまま打ち込んだだけでは検知出来ません。
</pre>
owaspの検知結果<br>
<img width=250px src="../owasp_result/sample-b4_1.png"><br>
<img width=250px src="../owasp_result/sample-b4_2.png"><br>

<form action="./" method="get">
    <input type="text" name="name">
    <input type="submit" />
</form>

<?php
echo '<ol>';
$names = explode("#", $name);
for($i = 0; $i < count($names); ++$i) {
    if($i > 0){
        $str = str_replace('script', '', $names[$i]);
        echo '<li>' . $str . '</li>'; /*XSS発生箇所*/ 
    }
}
echo '</ol>';
?>

</body>

</html>