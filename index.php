<?php
    function br() {
        echo nl2br("\n");
    }
    function unicode_encode($str) {
      return preg_replace_callback("/\\\\u([0-9a-zA-Z]{4})/", "encode_callback", $str);
    }
    define (URL, (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    if (strlen($_GET["unicode"]) >= 1){
        $json_array = array(
            'conv' => unicode_encode($_GET["unicode"]),
        );
        header("Content-Type: text/javascript; charset=utf-8");
        echo json_encode($json_array);
        return;
    }
    $json_array = array(
        'conv' => false,
    );
    header("Content-Type: text/javascript; charset=utf-8");
    echo json_encode($json_array);
?>
