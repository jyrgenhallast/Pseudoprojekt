


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pseudo</title>
</head>
<body>
<p>Pseudo 1</p>
<button onclick="tereMaailm()">Tere Maailm</button>
<script>
    function tereMaailm() {
        alert("Tere Maailm");
    }
</script>
<br>

<p>Pseudo 2</p>
<script type="text/javascript">
    function linkAlert(node) {
        return alert("Tere Maailm");
    }
</script>
<a href="http://www.khk.ee" onclick="return linkAlert(this);">Tere Maailm</a>
<br>

</body>
</html>