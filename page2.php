<!DOCTYPE html>
<html lang="en">
<html>
<head>

  <!-- <title>Something With Everthing</title> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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



table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:#f5f5f5}

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
          <li><a href="#">Videsos</a></li>
        </ul>
      </li>
      <li><a href="Entertainment.php">Entertainment</a></li>
      <li><a href="about.html">About</a></li>
    </ul>
  </div>
</nav>
<!-- Ends -->  


<h1>Examples</h1>
  
<table>
  <tr>
    <th>No.</th>
    <th>Topics</th>
    <th></th>
  </tr>
  <tr>
    <td>1.</td>
    <td><a href="#">Average</a></td>
    <td></td>
  </tr>
  <tr>
    <td>2.</td>
    <td><a href="#">Average</a></td>
    <td></td>
  </tr>
  <tr>
    <td>3.</td>
    <td><a href="#">Clock</a></td>
    <td></td>
  </tr>
  <tr>
    <td>4.</td>
    <td><a href="#">Number System</a></td>
    <td></td>
  </tr>

  <tr>
    <td>5.</td>
    <td><a href="ex1.html">Area and volume</a></td>
    <td></td>
  </tr>
</table>













<footer>Copyright &#169 sagarvhande@gmail.com</footer>
</div>

</body>
</html>

