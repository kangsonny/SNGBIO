<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Cross site script</h1>
    <?php
echo htmlspecialchars('<script>alert("babo");</script>');
     ?>
  </body>
</html>
