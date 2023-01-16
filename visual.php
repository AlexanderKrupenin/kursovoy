<!doctype html>
<html>
    <head>
        <title><?=$title?></title>
        <meta charset="utf-8"></meta>
        <link rel="stylesheet" href="style.css"></link>
        <script src="UpdateScript.js"> </script>
    <script src="update_counter.js"> </script>
    <link rel="manifest" href = "site.webmanifest">
    <link rel="stylesheet" href = "index.css">
        <style>
body {
    height: 1000px;
    background: linear-gradient(to right, #90dbf4, #cfbaf0, #fde4cf);
}
</style>
    </head>
    <body>
        <div id="container">
            <div id="left">
            </div>
            <div id="right">
                <h1><?=$title?></h1>
                <?=$content;?>
                <?=$content1;?>
            </div>
           
    </body>
</html>