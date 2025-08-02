<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= isset($judul) ? $judul : 'Perpustakaan Digital' ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <!-- SweetAlert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Custom Styling -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    .navbar-brand {
      font-weight: bold;
    }
    .sidebar {
      min-height: 100vh;
      background-color: #ffffff;
      border-right: 1px solid #dee2e6;
    }
    .sidebar .list-group-item {
      border: none;
      border-radius: 0;
      transition: all 0.2s;
    }
    .sidebar .list-group-item:hover {
      background-color: #f1f1f1;
      color: #0d6efd;
    }
    .sidebar .active {
      background-color: #0d6efd;
      color: white !important;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= base_url('dashboard') ?>">
        <i class="fas fa-book-reader me-2"></i>Perpustakaan Digital
      </a>
    </div>
  </nav>

  <!-- Content -->
  <div class="container-fluid mt-3">
    <div class="row">

      <!-- Sidebar -->
      <div class="col-md-2 sidebar">
        <div class="list-group">
          <a href="<?= site_url('dashboard') ?>" class="list-group-item list-group-item-action <?= ($this->uri->segment(1) == 'dashboard') ? 'active' : '' ?>">
            <i class="fas fa-home me-2"></i>Dashboard
          </a>
          <a href="<?= site_url('buku') ?>" class="list-group-item list-group-item-action <?= ($this->uri->segment(1) == 'buku') ? 'active' : '' ?>">
            <i class="fas fa-book me-2"></i>Data Buku
          </a>
          <a href="<?= site_url('auth/logout') ?>" class="list-group-item list-group-item-action text-danger">
            <i class="fas fa-sign-out-alt me-2"></i>Logout
          </a>
        </div>
      </div>

      <!-- Main Content -->
      <div class="col-md-10">
        <!-- Konten halaman akan ditampilkan di sini -->
