<body>
<h1>HomeAqui</h1>

<?php


$url = (isset($_GET['url'])) ? $_GET['url']:'home.php';
$url = array_filter(explode('/',$url));
var_dump('url');

$file = $url[0].'.php';

if(is_file($file)){

include $file;
}else{
include '404.php';
}

?>
</body>
</html>