<!DOCTYPE html>
<html lang="en">
<html>
<head>

  <!-- <title>Something With Everthing</title> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- <link rel="stylesheet" href="style.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.flex-container {
    display: -webkit-flex;
    display: flex;
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
}

.flex-container > * {
    padding: 15px;
    -webkit-flex: 1 100%;
    flex: 1 100%;
}

header {background: #F0F8FF;color:black;}
footer {background: #aaa;color:white;}  

.nav {background:#eee;}

.nav ul {
    list-style-type: none;
 padding: 0;
}
   
.nav ul a {
 text-decoration: none;
}

@media all and (min-width: 768px) {
    .nav {text-align:left;-webkit-flex: 1 auto;flex:1 auto;-webkit-order:1;order:1;}
    .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
    footer {-webkit-order:3;order:3;}
}
</style>
</head>
<body>

<div class="flex-container">
<header>
  <h1>Aptitude</h1>
</header>

<!-- navigation bar starts -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <!--   <a class="navbar-brand" href="#">Some(thing)withEvery(thing)</a> -->
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.html">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="page1.php">Education <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="page1.php">Study Mode</a></li>
          <li><a href="page2.php">Example</a></li>
          <li><a href="page3.php">Find it here</a></li>
          <li><a href="#">Videsos</a></li>
        </ul>
      </li>
      <li><a href="Entertainment.php">Entertainment</a></li>
      <li><a href="about.html">About</a></li>
    </ul>
  </div>
</nav>
<!-- Ends -->  


<nav class="nav">
<ul>
<h1>Find it here</h1>
  <li><a href="#">Average</a></li>
  <li><a class="hide-1 hide-2" href="FIHtrain.php">Train</a></li>
 <li><a href="#">Clock</a></li>
  <li><a href="#">Number System</a></li>
  <li><a href="ex1.php">Area and volume</a></li>
</ul>
</nav>















<footer>Copyright &#169 sagarvhande@gmail.com</footer>
</div>

</body>
</html>

