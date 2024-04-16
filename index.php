<?php
require_once 'models.php';
$arr = Contact::select(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<!-- Navigation bar -->
<nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="#">Contact App Manager</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Sidebar -->
<div class="row">
  <div class="col-md-2 sidebar">
    <ul>
      <li>Dashboard</li>
      <li>Profile</li>
    </ul>
  </div>

  <!-- Main content -->
  <div class="col-md-9 content">
    <h2>Dashboard</h2>
    <table class="table">
      <thead class="thead">
        <tr>
          <th scope="col">No</th>
          <th scope="col">ID</th>
          <th scope="col">No HP</th>
          <th scope="col">Nama Pemilik</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php
          for ($i = 0; $i < count($arr ['id']); $i++){
      ?>
          <tr>
              <td><?= $i ?></td>
              <td><?= $arr['id'][$i] ?></td>
              <td><?= $arr['no_hp'][$i] ?></td>
              <td><?= $arr['nama_pemilik'][$i] ?></td>
              <td><?= $arr['jenis_kelamin'][$i] ?></td>
              <td>
                <button class="btn btn-primary">Edit</button>
                <button class="btn btn-danger">Delete</button>
              </td>
          </tr>
      <?php
          }
      ?>
      </tbody>
    </table>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
