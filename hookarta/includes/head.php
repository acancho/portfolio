<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="bootstrap-5.3.3-dist/css/bootstrap.css"
    />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="shortcut icon" href="img/favicon1.jpeg" />
    <title>
      <?php
        $page = basename($_SERVER['PHP_SELF']);
        if ($page == 'index.php') {
          echo 'Hookarta';
        } else {
          $page = str_replace(".php", "", $page);
          echo ucfirst($page);
        }
      ?>
    </title>
  </head>