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
<?php echo htmlspecialchars('</style><script>alert()</script>') ?><br>

【XSS Locator (Polygot)】
URL:https://cheatsheetseries.owasp.org/cheatsheets/XSS_Filter_Evasion_Cheat_Sheet.html
※XSS Locatorで確認出来るかの確認
</pre>


<div>
    sample
</div>

<form action="./" method="get">
    name: <input type="text" name="name">
    <input type="submit" />
</form>

<?php echo htmlspecialchars($name) ?>


</body>

</html>

<style>
/* XSS発生箇所 */
div {
    background-color: <?php echo $name ?>;
    width: 200px;
}
</style>