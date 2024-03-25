<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="newstyle1.css">
  <link rel="stylesheet" href="homeS.css">  <script>
function myFunction() {
  var txt;
  if (confirm("Click Ok if you are logged in")) {
    txt = "Great, you can drop your question now! <a href='web1.php'>Questions</a>";
  } else {
    txt = "<a href='login.php'>Login first!</a>";  }
  document.getElementById("demo").innerHTML = txt;
}
</script>
</head>
<body>
  <div style="background:#5F7161;">
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
  <br><br>
<center><div class="box">
<h2>Questions<h2><hr>
<h3>You have to be logged in first!
<button onclick="myFunction()" style="background-color: #D0B8A8;
color: white;
padding: 7px 7px;
margin: 8px 1;
border: none;
cursor: pointer;

width:auto;">Click Here</button><br></h3>

<p id="demo"></p>
</div><br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>
