<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>web-forum</title>

    <link href="<?php echo BASE_URI; ?>templates/css/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo BASE_URI; ?>templates/css/custom.css" rel="stylesheet" />

    <!-- Favicons -->
    <link rel="icon" href="../images/favicon/logomakr.png" />
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Web Forum</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="nav navbar-nav ms-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.html">Create An Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.html">Create Topic</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="main-col">
            <div class="block">
              <div class="d-md-flex justify-content-between align-items-center">
                <h1>Welcome to Web Forum</h1>
                <h4>A simple PHP forum engine</h4>
              </div>
              <div class="clearfix"></div>
              <hr />