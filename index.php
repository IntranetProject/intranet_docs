<?php
if (!(file_exists("up.txt"))) {
    header("Location: http://maintenance.intranetproject.net?site=documentation");
}
?>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/reset.css">
</head>

<body>
    <div class="container">
        <h1>Docs</h1>
        <div class="release">
            <h2>Release</h2>
            <div class="boxr">
                <!--<a href="#">v1.0.0</a>-->
            </div>
        </div>
        <div class="beta">
            <h2>Beta</h2>
            <div class="boxb">
                <!--<a href="#">v0.1.0</a>-->
            </div>
        </div>
        <div class="alpha">
            <h2>Alpha</h2>
            <div class="boxa">
                <a href="v/0.0.21/index.html">v0.0.21</a>
                <a href="v/0.0.20/index.html">v0.0.20</a>
                <a href="v/0.0.19/index.html">v0.0.19</a>
                <a href="v/0.0.12/index.html">v0.0.12</a>
            </div>
        </div>
    </div>
</body>

</html>
