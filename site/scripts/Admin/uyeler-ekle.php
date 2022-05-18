<?php include 'header.php';

require_once 'sidebar.php';

 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <section class="content">
      <div class="container-fluid">
       
        <div class="row">
    



 
<div class="card card-primary col-md-12">
              <div class="card-header">
                <h3  class="card-title">Yeni Kullanıcı Ekle</h3>         </div> <?php 

if (@$_GET['yuklenme']=="basarili") { ?>
<h6 style="color:green">(Yükleme işlemi başarılı)</h6>
<?php }

elseif(@$_GET['yuklenme']=="basarisiz"){ ?>
<h6 style="color:red">(Yükleme işlemi başarısız)</h6><?php }
elseif(@$_GET['yuklenme']=="kullanicivar"){ ?>
<h6 style="color:red">(Aynı kullanıcı adını birden fazla klullanıcı alamaz)</h6>


              <?php }   ?>
     
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem/islem.php" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                 
                       <div class="form-group">
                    <label for="exampleInputPassword1">Resim</label>
                    <input  name="resim" type="file" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kullanıcı adı</label>
                    <input  name="kadi" type="text" class="form-control"  placeholder="Lütfen  kullanıcı adın giriniz.">
                  </div>
             
                       <div class="form-group">
                    <label for="exampleInputPassword1">Kullanıcı şifre</label>
                    <input  name="sifre" type="text" class="form-control"  placeholder="Lütfen şifre giriniz.">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Kullanıcı ad soyad</label>
                    <input name="adsoyad" type="text" class="form-control"  placeholder="Lütfen ad ve soyad giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kullanıcı yetki</label>  
                    <font color="blue" size="1px"> User = 1 , Admin = 2</font>
                    <input name="yetki" type="text" class="form-control"  placeholder="Lütfen kullanıcı yetkisini giriniz.">
                  </div>
                  

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="uyelerkaydet" type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>











          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php require_once 'footer.php'; ?>