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
https://sachiko-kame.github.io#abc

【xx_sample】
<?php echo htmlspecialchars('https://sachiko-kame.github.io#javascript:alert(1)\/\/|.+\x23'."\n") ?>
※上記打った後は下の文字(sample)をクリックしてください。

【XSS Locator (Polygot)】
URL:https://cheatsheetseries.owasp.org/cheatsheets/XSS_Filter_Evasion_Cheat_Sheet.html
※XSS Locatorで確認出来るかの確認
</pre>

<form action="./" method="get">
    <input type="text" name="name">
    <input type="submit" />
</form>

<div id="sample"></div>

<?php
    // https://masatokinugawa.l0.cm/2018/01/regex-domxss.html
    $index = strrpos($name, '#');
    if($index !== false){
        $remove_txt = mb_substr($name, $index);
        if(strlen($remove_txt) > 0){
            $pattern ='/'. $remove_txt.'/'; 
            $replace = preg_replace($pattern, '', $name);
        }
    }else{
        $replace = '';
    }
?>

<br>

<script>
    let sample = document.getElementById("sample");
    sample.innerHTML = `<a href=<?php echo htmlspecialchars($replace) ?>>sample</a>`;
</script>


<?php echo htmlspecialchars($name) ?>

</body>

</html>