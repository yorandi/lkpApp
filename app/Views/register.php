<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<!-- CODE HERE -->
<div class="card-body login-card-body">
  <p class="login-box-msg">Register new member</p>

  <div class="input-group mb-3">
    <input type="email" id="email" class="form-control" placeholder="Email" />
    <div class="input-group-text"><span class="bi bi-envelope"></span></div>


  </div>

  <div class="input-group mb-3">
    <input type="text" id="name" class="form-control" placeholder="Jhone doe" />
    <div class="input-group-text"><span class="bi bi-people-fill"></span></div>
  </div>

  <div class="input-group mb-3">
    <input type="password" id="password" class="form-control" placeholder="Password" />
    <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
  </div>
  <!--begin::Row-->
  <div class="row mt-4">
    <div class="col-12">
      <div class="d-grid gap-2">
        <button onclick="register()" class="btn btn-primary">Register now</button>
      </div>
    </div>
    <!-- /.col -->
  </div>
  <!--end::Row-->


  <div class="d-grid gap-2 mt-3 mb-5">
    <a class="btn btn-block btn-outline-secondary" href="/">Login here</a>
  </div>
</div>

<script>
  function register() {
    var email = $("#email").val()
    var nama = $("#name").val()
    var password = $("#password").val()

    if (email == "" || nama == "" || password == "") {
      $("#email").addClass("is-invalid")
      $("#name").addClass("is-invalid")
      $("#password").addClass("is-invalid")
    } else {
      $.ajax({
        url: 'proses-registrasi',
        type: 'POST',
        data: {
          email,
          name: nama,
          password,
          act: 'registrasi',

        },
        dataType: 'json',
        success: function(response) {
          if (response.pesan == 'berhasil') {
            Swal.fire({
              title: "Good Job",
              text: "Register Berhasil, silahkan Login",
              icon: "success"
            }).then((x) => {
              window.location.href = window.location.href
            });
          }
        }
      })
    }


  }
</script>

<?= $this->endSection(); ?>