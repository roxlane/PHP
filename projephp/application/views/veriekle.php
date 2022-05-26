<?php $this->load->view('include/header'); ?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->


	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">

			</div>
			<div class="info">
				<a href="#" class="d-block"></a>
			</div>
		</div>

		<!-- SidebarSearch Form -->


		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
					 with font-awesome or any other icon font library -->
				<li class="nav-item menu-open">

					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url('panel') ?>" class="nav-link active">
								<i class="far fa-circle nav-icon"></i>
								<p>Kullanici Bölümü</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?php echo base_url('logout'); ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Çıkış</p>
							</a>
						</li>
					</ul>
				</li>

			</ul>
			</li>


			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>

<div style="background-color:white;" class="content-wrapper">
	<!-- Content Header (Page header) -->
	<center><h1 style="margin-top: 30px;">Kayıt Ekle</h1></center>
	<center><form style="width: 400px; margin-top: 100px;" action="<?php echo base_url('panel/registerdata') ?>" method="post">
		<div class="input-group mb-3">
			<input type="text" class="form-control" name="kadi" placeholder="Ad">
		</div>
		<div class="input-group mb-3">
			<input type="email" class="form-control" name="eposta" placeholder="E-posta">

		</div>
		<div class="input-group mb-3">
			<input type="password" class="form-control" name="sifre" placeholder="Sifre">

		</div>

		<div class="row">
			<div class="col-8">
				<div class="icheck-primary">


				</div>
			</div>
			<!-- /.col -->

			<!-- /.col -->
		</div>

			<center>
					<button style="width: 400px;" type="submit" class="btn btn-dark">Kayıt Ekle</button>
			</center>
	</form></center><br>


</div><!-- /.card-body -->
</div>
<!-- /.card -->


<?php $this->load->view('include/footer'); ?>
