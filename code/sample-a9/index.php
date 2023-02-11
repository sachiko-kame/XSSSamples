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
https://sachiko-kame.github.io/

【xx_sample】
<?php echo htmlspecialchars('javascript:alert()'."\n") ?>
※上記打った後は下の文字(sample)をクリックしてください。※全スキームを許可するような関数を通してしまってjavascriptのスキームが通ってしまったら

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
try {
    let url = new URL("<?php echo htmlspecialchars($name) /*XSS発生箇所*/ ?>");
    let sample = document.getElementById("sample");
    sample.innerHTML = `<a href=${url}>sample</a>`;
} catch (e) {
    console.log('エラーをはきます。');
    console.log(e);
}
</script>

<?php echo htmlspecialchars($name) ?>

</body>

</html>