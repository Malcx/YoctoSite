
    <link href="/css/test.css" rel="stylesheet">

    <?php


    $_QS = $_SERVER['QUERY_STRING'];
	$_RU = $_SERVER['REQUEST_URI'];
	$_PATH = strtok($_SERVER["REQUEST_URI"], '?');
	echo $_QS . "<br />"; 
	echo $_RU . "<br />"; 
	echo $_PATH . "<br />"; 
//phpinfo();

echo "Hello World<br />";
?>


<img src="/media/noimage.jpg" /><br />
<img src="/no-profile.png" /><br />