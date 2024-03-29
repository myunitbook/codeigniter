<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <link href="<?php echo base_url('src/css/bootstrap.min.css');?>" rel="stylesheet" >
    <link rel="stylesheet" href="<?php echo base_url('src/style.css');?>">
    </head>
<body>
<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="<?php echo base_url('./')?>">Hello</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('./')?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('welcome/insert')?>">Insert Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('welcome/view')?>">View Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('welcome/update')?>">Update Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('welcome/delete')?>">Delete Data</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo base_url('./')?>">Action</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('./')?>">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?php echo base_url('./')?>">Something else here</a></li>
          </ul>
        </li>
        
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>