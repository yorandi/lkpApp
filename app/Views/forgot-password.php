<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="card-body login-card-body">
  <p class="login-box-msg">
    You forgot your password? Here you can easily retrieve a new password.
  </p>
  <form action="../index3.html" method="post">

    <div class="input-group mb-3">
      <input type="email" class="form-control" placeholder="Email" />
      <div class="input-group-text"><span class="bi bi-envelope"></span></div>
    </div>

    <!--begin::Row-->
    <div class="row">
      <div class="col-12">
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary">Request new password</button>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!--end::Row-->
  </form>

  <p class="mb-1 mt-5"><a href="/">Login</a></p>
  <p class="mb-0">
    <a href="register.html" class="text-center"> Register a new membership </a>
  </p>
</div>

<?= $this->endSection(); ?>