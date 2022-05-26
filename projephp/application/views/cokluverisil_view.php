<?php $this->load->view('include/header'); ?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4"><br>
    <!-- Brand Logo -->
	 <center> <h4 style="color: white;">Emre&Ahmet</h4>
	  <h6 style="color: white;">Admin Paneli</h6></center>

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
                  <p>Ekle/Sil/Güncelle</p>
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

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<center><h1>Kullanici Sil</h1></center>
        <form style="width: 1100px; margin-left:100px;" action="<?php echo base_url('panel/listelesildata') ?>" method="post">
            <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Sec</th>
      <th scope="col">Ad</th>
      <th scope="col">Eposta</th>
      <th scope="col">Şifre</th>
    </tr>
  </thead>
  <tbody>

      <?php foreach($uyeler as $row) {?>
    <tr>
   
      <td><input type="Checkbox" name="üye[]" value="<?php echo $row->id; ?>"></td>
      <td><?php echo $row->kadi; ?></td>
      <td><?php echo $row->eposta; ?></td>
      <td><?php echo $row->sifre; ?></td>
    </tr>   </tr>
   <?php } ?>
  </tbody>
</table>
<center><button class="btn btn-dark" style="width: 300px; margin-top: 50px; color: white;" type="submit" >Verileri Sil</button></center>
</form>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->


<?php $this->load->view('include/footer'); ?>
