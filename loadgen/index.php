<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Demo</title>
  <meta name="description" content="Container demo">
  <!-- <link rel="stylesheet" href="css/styles.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <h1>Container demo</h1>

  <form id="numbers" method="GET" action="/numbers.php">
    <label for="number_of_values">Number of values</label><br />
    <input type="text" name="number_of_values" /><br />
    <input type="submit" value="Get new values"/>
    <input type="reset" value="Reset"/>
  </form>
  
  <img src='docker.jpg' alt='Docker' />

  <br/>
  <p id="checking" style="display:none;">Loading <span id="attempt_counter"></span> numbers...</p>
  <p id="loading_time"></p>
  <br/>

  <div id="results">
  </div>

  <script src="js/script.js"></script>
</body>
</html>
