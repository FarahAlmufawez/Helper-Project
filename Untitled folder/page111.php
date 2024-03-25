<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="newstyle1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" >
<style>
    .nopadding{
        padding: 0px;
    }
    .btn_font{
        font-size: 30px;
    }
</style>
</head>
<body style="background-color: #EFEAD8;"><div style="background:#5F7161;">
<div class="container">
<div class="row">
<div class="col-md-4"><h1 id="logo">HELPER</hl></div>

<div class="col-md-8">
<ul id="menu" class="Float-right"><li><a href="mynew.php">Home</a></li>
<li><a href="page111.php">Calculator</a></li>
<li><a href="book.html">Books</a></li>
<li><a href="video.html">Videos</a></li>
<li><a href="test6.php">Questions</a></li>
<li><a href="test5.php">Appointments</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="logout.php" onclick="alert('You have logged out successfully!');">Logout</a></li>
</ul>
</div>
</div>
</div>
</div>
<h1 class="text-center" style="color: #6D8B74">Calculator</h1>
    <div class="container" style="padding: 30px;border: 1px solid grey;margin-top: 50px;background: whitesmoke;    box-shadow: 5px 5px #525252;    border-radius: 10px;">
        <div class="row">
            <div class="col-lg-12 nopadding">
            <input type="text" name="calculation" id="calculation" class="form-control" style="padding: 10px;font-size: 30px;height: 50px;">
            </div>
        </div>
    <div class="row">
        <div class="col-xs-3 nopadding">
            <button id="one" class="btn btn-primary btn-block btn_font" onclick="UserClickButton('1')">1</button>
        </div>
        <div class="col-xs-3 nopadding">
            <button id="two" class="btn btn-primary btn-block btn_font" onclick="UserClickButton('2')">2</button>
        </div>
        <div class="col-xs-3 nopadding">
            <button id="three" class="btn btn-primary btn-block btn_font" onclick="UserClickButton('3')">3</button>
        </div>
        <div class="col-xs-3 nopadding">
            <button id="add" class="btn btn-success btn-block btn_font" onclick='UserClickButton("+")'>+</button>
        </div>
    </div>
        <div class="row">
            <div class="col-xs-3 nopadding">
                <button id="four" class="btn btn-primary btn-block btn_font" onclick='UserClickButton("4")'>4</button>
            </div>
            <div class="col-xs-3 nopadding">
                <button id="five" class="btn btn-primary btn-block btn_font" onclick='UserClickButton("5")'>5</button>
            </div>
            <div class="col-xs-3 nopadding">
                <button id="six" class="btn btn-primary btn-block btn_font" onclick='UserClickButton("6")'>6</button>
            </div>
            <div class="col-xs-3 nopadding">
                <button id="minus" class="btn btn-success btn-block btn_font" onclick='UserClickButton("-")'>-</button>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-3 nopadding">
                <button id="seven" class="btn btn-primary btn-block btn_font" onclick='UserClickButton("7")'>7</button>
            </div>
            <div class="col-xs-3 nopadding">
                <button id="eight" class="btn btn-primary btn-block btn_font" onclick='UserClickButton("8")'>8</button>
            </div>
            <div class="col-xs-3 nopadding">
                <button id="nine" class="btn btn-primary btn-block btn_font" onclick='UserClickButton("9")'>9</button>
            </div>
            <div class="col-xs-3 nopadding">
                <button id="multiply" class="btn btn-success btn-block btn_font" onclick='UserClickButton("*")'>*</button>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-3 nopadding">
                <button id="dot" class="btn btn-primary btn-block btn_font" onclick='UserClickButton(".")'>.</button>
            </div>
            <div class="col-xs-3 nopadding">
                <button id="zero" class="btn btn-primary btn-block btn_font" onclick='UserClickButton("0")'>0</button>
            </div>
            <div class="col-xs-3 nopadding">
                <button id="equal" class="btn btn-primary btn-block btn_font" onclick='CalculateValue()'>=</button>
            </div>
            <div class="col-xs-3 nopadding">
                <button id="divide" class="btn btn-success btn-block btn_font" onclick='UserClickButton("/")'>/</button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 nopadding">
                <button class="btn btn-danger  btn-block" onclick="ClearData()">CLEAR</button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2 style="color: #6D8B74">History Log:</h2>
            </div>
            <div class="col-lg-12" id="history_log">

            </div>
        </div>
    </div>

<script src="calculator.js"></script>
</body>
</html>
