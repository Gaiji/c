
↓これがあなたのIPアドレスです<br />
<?
    // IPアドレスを取得して変数にセットする
    $ipAddress = $_SERVER["REMOTE_ADDR"];
    print $ipAddress;
?>
<br /><br />
↓数値にするとこんな感じです<br />
<?
    // IPアドレスを数値として取得する場合
    $ipLong = ip2long($ipAddress);
    print $ipLong;
?>
