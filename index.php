
<?php
	echo "サーバのIPアドレス:[{$_SERVER["SERVER_ADDR"]}]<br>";
	$host=gethostbyaddr($_SERVER["SERVER_ADDR"]);
	echo "サーバのホスト名:[{$host}]<br>";
	echo "タイムスタンプ:[{$_SERVER["REQUEST_TIME''"]}]<br>";
	echo "ACCEPT_CHARSET:[{$_SERVER["HTTP_ACCEPT_CHARSET"]}]<br>";
	echo "HTTP_HOST:[{$_SERVER["HTTP_HOST"]}]<br>";
	echo "HTTP_REFERER:[{$_SERVER["HTTP_REFERER"]}]<br>";
	echo "HTTP_USER_AGENT:[{$_SERVER["HTTP_USER_AGENT"]}]<br>";
	echo "IPアドレス:[{$_SERVER["REMOTE_ADDR"]}]<br>";
	$host=gethostbyaddr($_SERVER["REMOTE_ADDR"]);
	echo "ホスト名:[{$host}]<br>";
	echo "ポート番号:[{$_SERVER["REMOTE_PORT"]}]<br>";
?>
