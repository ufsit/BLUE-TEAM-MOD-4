<html>
<head>
  <script src="jquery.js"></script>
</head>
<body>
<?php
  if(isset($_POST["key"]))
  {
    if($_POST["key"] == "true")
    {
      echo "The key is... not here! Mwahaha!";
      echo '<script>$.post( "test.php", { key: "false" })
            .done(function( data ) {
              alert( data );
            });</script>';
    }
    else
    {
      echo "lolfailllll.";
    }
  }
?>
</body>
</html>