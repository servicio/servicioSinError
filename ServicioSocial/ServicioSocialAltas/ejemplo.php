<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>shake demo</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  <style>
  #toggle {
    width: 100px;
    height: 100px;
    background: #ccc;
  }
  </style>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
</head>
<body>
 
<p>Click anywhere to shake the box.</p>
<div id="toggle">
    
    
</div>
 
<script>
$( document ).click(function() {
  $( "#toggle" ).effect( "shake" );
});
</script>
 
</body>
</html>