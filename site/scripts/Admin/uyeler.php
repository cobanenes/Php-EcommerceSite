<?php include 'header.php';

require_once 'sidebar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <section class="content">
    <div class="container-fluid">

      <div class="row">



        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Üyeler tablosu</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body table-responsive p-0">

              <table class="table table-hover text-nowrap">
                
                <thead>
                  <tr>
                    <th>Kullanıcı id</th>
                    <th>Kullanıcı adı</th>
                    <th>Katıldığı tarih</th>
                    <th>Yetki </th>
                    <th>Adsoyad</th>
                    <th>Adres</th>
                    <th>İl</th>
                    <th>İlçe</th>
                    <th>Telefon</th>
                    <th><a href="uyeler-ekle"><button style="float:right;" type="submit" class="btn btn-outline-success"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>  ekle</button></a></th>
                  </tr>
                </thead>
                <tbody>
                  <?php  
                  $kullanici=$baglanti->prepare("SELECT * FROM  kullanici  order by kullanici_id ASC");
                  $kullanici->execute();
                  while ($kullanicicek=$kullanici->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                      <td><?php echo $kullanicicek['kullanici_id'] ?></td>
                      <td><?php echo $kullanicicek['kullanici_adi'] ?></td>
                      <td><?php echo $kullanicicek['kullanici_zaman'] ?></td>
                      <td><span class="tag tag-success">
                        <?php if ($kullanicicek['kullanici_yetki']=="2") {
                          echo "Admin ";
                        }elseif($kullanicicek['kullanici_yetki']=="1"){
                          echo "User";
                        } ?>
                        



                      </span></td>
                      <td><?php echo $kullanicicek['kullanici_adsoyad'] ?></td>
                      <td><?php echo $kullanicicek['kullanici_adres'] ?></td>
                      <td><?php echo $kullanicicek['kullanici_il'] ?></td>
                      <td><?php echo $kullanicicek['kullanici_ilce'] ?></td>
                      <td><?php echo $kullanicicek['kullanici_tel'] ?></td>
                      <td>
                      <th><a href="uyeler-duzenle?id=<?php echo $kullanicicek['kullanici_id'] ?>"><button type="submit" class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></button></a></th>
                      <!-- düzenle -->
                      <th><a href="islem/islem.php?kullanicisil&id=<?php echo $kullanicicek['kullanici_id'] ?>"><button type="submit" class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg></button></a></th>
</td>

                      <!-- sil -->
                    </th>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
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