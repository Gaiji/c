<?php
    function br() {
        echo nl2br("\n");
    }
    function getIpAddress() {
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipAddresses = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            return trim(end($ipAddresses));
        }
        else {
            return $_SERVER['REMOTE_ADDR'];
        }
    }
    define (URL, (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    if ($_GET["uuid"] == "5b222858-24d4-4060-ab61-55132d8042bc"){
        $json_array = array(
            'success' => true,
            'ip' => getIPAddress(),
        );
        header("Content-Type: text/javascript; charset=utf-8");
        echo json_encode($json_array);
        return;
    }
    br();
    echo URL;
    br();
    echo getIPAddress();
?>
