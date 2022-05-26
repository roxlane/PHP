<?php $this->load->view('include/header'); ?>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
  
  </div>

  <div style="width: 500px;height:500px;" class="card">
    <div class="card-body register-card-body">
    <h1 class="login-box-msg">Kayıt Ol</h1>

      <form action="<?php echo base_url('register/registerdata');?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="kadi" placeholder="Ad">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div><br>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="eposta" placeholder="E-posta">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div><br>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="sifre" placeholder="Sifre">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
    
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
           

            </div>
          </div>
          <!-- /.col -->

          <!-- /.col -->
        </div>
		  <center> <button type="submit" style="width: 450px;" class="btn btn-dark">Kayit ol</button></center>
		<center><P style="font-size: 13px; margin-top:8px;">Zaten Bir Hesaba Sahipsen <a href="<?php echo base_url('login'); ?>">Giriş Yap</a></P> </center>
	  </form>

   
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<?php $this->load->view('include/footer'); ?>
