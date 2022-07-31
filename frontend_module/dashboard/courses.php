<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <?php include "./components/mdbootstrap_css.php" ?>
</head>
<body>
<?php
include "./components/sidebar_header.php"?>
   <main style="margin-top: 58px">
        <div class="container pt-4">
            
        <!-- jumbotron -->

<div class="p-5 text-center bg-light">
    <h1 class="mb-3">Course</h1>
    <h4 class="mb-3">Create And Update All Course Here</h4>
    <a class="btn btn-primary" href="" data-mdb-toggle="modal" data-mdb-target="#exampleModal" role="button">Add New Course</a>
  </div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">...</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  <!-- small cards -->

<div class="row">
  <div class="col-xl-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <div class="d-flex align-items-center">
            <img
              src="https://mdbootstrap.com/img/new/avatars/8.jpg"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
            />
            <div class="ms-3">
              <p class="fw-bold mb-1">John Doe</p>
              <p class="text-muted mb-0">john.doe@gmail.com</p>
            </div>
          </div>
          <span class="badge rounded-pill badge-success">Active</span>
        </div>
      </div>
      <div
        class="card-footer border-0 bg-light p-2 d-flex justify-content-around"
      >
        <a
          class="btn btn-link m-0 text-reset"
          href="#"
          role="button"
          data-ripple-color="primary"
          >Message<i class="fas fa-envelope ms-2"></i
        ></a>
        <a
          class="btn btn-link m-0 text-reset"
          href="#"
          role="button"
          data-ripple-color="primary"
          >Call<i class="fas fa-phone ms-2"></i
        ></a>
      </div>
    </div>
  </div>
  <div class="col-xl-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <div class="d-flex align-items-center">
            <img
              src="https://mdbootstrap.com/img/new/avatars/6.jpg"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
            />
            <div class="ms-3">
              <p class="fw-bold mb-1">Alex Ray</p>
              <p class="text-muted mb-0">alex.ray@gmail.com</p>
            </div>
          </div>
          <span class="badge rounded-pill badge-primary"
            >Onboarding</span
          >
        </div>
      </div>
      <div
        class="card-footer border-0 bg-light p-2 d-flex justify-content-around"
      >
        <a
          class="btn btn-link m-0 text-reset"
          href="#"
          role="button"
          data-ripple-color="primary"
          >Message<i class="fas fa-envelope ms-2"></i
        ></a>
        <a
          class="btn btn-link m-0 text-reset"
          href="#"
          role="button"
          data-ripple-color="primary"
          >Call<i class="fas fa-phone ms-2"></i
        ></a>
      </div>
    </div>
  </div>
  <div class="col-xl-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <div class="d-flex align-items-center">
            <img
              src="https://mdbootstrap.com/img/new/avatars/7.jpg"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
            />
            <div class="ms-3">
              <p class="fw-bold mb-1">Kate Hunington</p>
              <p class="text-muted mb-0">kate.hunington@gmail.com</p>
            </div>
          </div>
          <span class="badge rounded-pill badge-warning">Awaiting</span>
        </div>
      </div>
      <div
        class="card-footer border-0 bg-light p-2 d-flex justify-content-around"
      >
        <a
          class="btn btn-link m-0 text-reset"
          href="#"
          role="button"
          data-ripple-color="primary"
          >Message<i class="fas fa-envelope ms-2"></i
        ></a>
        <a
          class="btn btn-link m-0 text-reset"
          href="#"
          role="button"
          data-ripple-color="primary"
          >Call<i class="fas fa-phone ms-2"></i
        ></a>
      </div>
    </div>
  </div>
  <div class="col-xl-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <div class="d-flex align-items-center">
            <img
              src="https://mdbootstrap.com/img/new/avatars/3.jpg"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
            />
            <div class="ms-3">
              <p class="fw-bold mb-1">Michael Bale</p>
              <p class="text-muted mb-0">michael.bale@gmail.com</p>
            </div>
          </div>
          <span class="badge rounded-pill badge-danger">Removed</span>
        </div>
      </div>
      <div
        class="card-footer border-0 bg-light p-2 d-flex justify-content-around"
      >
        <a
          class="btn btn-link m-0 text-reset"
          href="#"
          role="button"
          data-ripple-color="primary"
          >Message<i class="fas fa-envelope ms-2"></i
        ></a>
        <a
          class="btn btn-link m-0 text-reset"
          href="#"
          role="button"
          data-ripple-color="primary"
          >Call<i class="fas fa-phone ms-2"></i
        ></a>
      </div>
    </div>
  </div>
</div>
        </div>
   </main>
</body>
</html>