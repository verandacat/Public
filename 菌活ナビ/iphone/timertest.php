<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/textstyles.css" type="text/css" />
  <link rel="stylesheet" href="./n_styles.css" type="text/css" />
  <link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
</head>

<script type="text/javascript">
<!--
function doCountDown() {
setInterval('countDown()', 500);
}

function countDown() {
var now = new Date();
var tomorrow = new Date(now.getFullYear(), now.getMonth(), now.getDate() + 1);
var diff = Math.floor((tomorrow.getTime() - now.getTime()) / 1000) + 1;
var hour = Math.floor(diff / 3600);
diff %= 3600;
var min = Math.floor(diff / 60);
var sec = diff % 60;
document.getElementById('cd').innerHTML= "明日まで、あと" + hour + "時間" + min + "分" + sec + "秒";
}

//-->
</script>
</head>
<body onload="javacript:doCountDown();">
<div id='cd'></div>
</body>
</html>
</body>
</html>