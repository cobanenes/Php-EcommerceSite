<?php include 'header.php';

require_once 'sidebar.php';




 





 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <section class="content">
      <div class="container-fluid">
       
        <div class="row">
    



 
<div class="card card-primary col-md-10">
              <div class="card-header">
                <h3 class="card-title">Genel ayarlar </h3>         </div> <?php 

if (@$_GET['yuklenme']=="basarili") { ?>
<h6 style="color:green">(Yükleme işlemi başarılı)</h6>
<?php }
elseif(@$_GET['yuklenme']=="basarisiz"){ ?>
<h6 style="color:red">(Yükleme işlemi başarısız)</h6><?php }


                 ?>
     
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem/islem.php" method="POST" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site başlığı</label>
                    <input value="<?php echo $ayarcek['baslik'] ?>" name="Baslik" type="text" class="form-control"  placeholder="Lütfen sitenizin başlığını giriniz.">
                  </div>
                
                       <div class="form-group">
                    <label for="exampleInputPassword1">PopUp Başlık</label>
                    <input value="<?php echo $ayarcek['pb'] ?>" name="pb" type="text" class="form-control"  placeholder="Lütfen popup başlığını giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">PopUp Açıklama</label>
                    <input value="<?php echo $ayarcek['pa'] ?>" name="pa" type="text" class="form-control"  placeholder="Lütfen popup açıklamasını giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">PopUp Resim</label>
                    <input value="<?php echo $ayarcek['pimg'] ?>" name="pimg" type="text" class="form-control"  placeholder="Lütfen popup resim linki veya yolunu giriniz.">
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="ayarkaydet" type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>





 
<div class="card card-primary col-md-12">
            
     
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem/islem.php" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
              <input type="hidden" name="eskilogo" value="<?php echo $ayarcek['logo'] ?>">
                       <div class="form-group">
                    <label for="exampleInputPassword1">Logo</label>
                    <img style="width:250px" src="resimler/logo/<?php echo $ayarcek['logo'] ?>">
                  </div>
                       <div class="form-group">
                    
                    <h6 style="color:blue;">Logo Boyutunuz 1x1 Olmalıdır !</h6>
                    <input  name="logo" type="file" class="form-control"  >
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="logokaydet" type="submit" class="btn btn-primary">Gönder</button>
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