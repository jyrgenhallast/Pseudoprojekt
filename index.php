<?php
$page = (isset($_GET['page']))? $_GET['page']:'home';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
</head>
<body>

<?php

require $page . ".php";

?>


</body>
</html>