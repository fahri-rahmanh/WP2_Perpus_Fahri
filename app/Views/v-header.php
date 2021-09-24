<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

  <!-- Bootstrap & Style -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/stylebuku.css">

  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <title>Web Prog II | Merancang Template Sederhana dengan CodeIgniter</title>
</head>

<body>
  <div id="wrapper">
    <header>
      <hgroup>
        <h1>RentalBuku.net</h1>
        <h3>Membuat Template Sederhana dengan CodeIgniter</h3>
      </hgroup>
      <nav>
        <ul>
          <li><a href="<?= base_url() . 'index.php/web' ?>">Home</a></li>
          <li><a href="<?= base_url() . 'index.php/web/about' ?>">About</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
    </header>