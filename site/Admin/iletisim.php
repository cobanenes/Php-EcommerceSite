<?php require_once 'header.php'; 

require_once 'sidebar.php'; 


?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <section class="content">
      <div class="container">
        
        <div class="row">
         
<div class="card card-primary col-md-10">
              <div class="card-header">
                <h3 class="card-title">İletişim Ayarları </h3> </div> <?php
                if(@$_GET['yuklenme']=="basarili") { ?>  
                <h6 style="color:green">Yüklenme İşlemi Başarılı</h6>
                <?php }
                elseif(@$_GET['yuklenme']=="basarisiz"){ ?>
                <h6 style="color:red">Yüklenme İşlemi Başarısız</h6>
                <?php } 
                ?>
              
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem/islem.php" method="POST" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Telefon numarası</label>
                    <input value="<?php echo $ayarcek['telefon'] ?>" name="telefon" type="text" class="form-control" placeholder="Lütfen İşletmenizin Telefon numarasını giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Whatsapp Numarası</label>
                    <input value="<?php echo $ayarcek['wpno'] ?>"name="wpno" type="text" class="form-control"  placeholder="Lütfen Whatsapp Numaranızı giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Adres</label>
                    <input value="<?php echo $ayarcek['adres'] ?>"name="adres" type="text" class="form-control"  placeholder="Lütfen  İşletmenizin Adresini giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mail</label>
                    <input value="<?php echo $ayarcek['email'] ?>"name="email" type="text" class="form-control"  placeholder="Lütfen Sitenizin mail adresini giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mesai</label>
                    <input value="<?php echo $ayarcek['mesai'] ?>"name="mesai" type="text" class="form-control"  placeholder="Lütfen Sitenizin mesai saatlerini giriniz.">
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="iletisimkaydet" type="submit" class="btn btn-primary">Gönder</button>
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