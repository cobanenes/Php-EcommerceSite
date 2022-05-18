 <?php require_once 'header.php'; 


$urunler=$baglanti->prepare("SELECT * FROM  urunler where urun_id=:urun_id  order by urun_sira ASC");
$urunler->execute(array(
  'urun_id'=>$_GET['urun_id']


));
$urunlercek=$urunler->fetch(PDO::FETCH_ASSOC);

 ?>
           <title><?php echo $ayarcek['baslik']?></title>
           <div align="center"><img src="birinciposter3.png" alt="" /></div>
 <?php require_once 'slider.php'; ?>   
 

 <section class="product-area li-laptop-product pt-30 pb-50">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>Editörün Seçimi</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="product-active owl-carousel">

                      <?php  
                      $urunler=$baglanti->prepare("SELECT * FROM  urunler where urun_durum=:urun_durum order by urun_sira ASC");
                      $urunler->execute(array(
                          'urun_durum'=>1

                      ));
                      while ($urunlercek=$urunler->fetch(PDO::FETCH_ASSOC)) { ?>


                        <div class="col-lg-12">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="urun-detay-<?=seolink($urunlercek['urun_baslik']).'-'.$urunlercek['urun_id'] ?>">
                                        <img src="Admin/resimler/urunler/<?php echo $urunlercek['urun_resim'] ?>" alt="Li's Product Image">
                                    </a>
                                   
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">

                                        <h4><a class="product_name" href="urun-detay-<?=seolink($urunlercek['urun_baslik']).'-'.$urunlercek['urun_id'] ?>"><?php echo $urunlercek['urun_baslik'] ?></a></h4>
                                        <div class="price-box">
                                            <span class="new-price new-price-2"><?php echo $urunlercek['urun_fiyat'] ?></span>
                                        </div>
                                    </div>
                                             <!-- 
   <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Detaya git</a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                                unutmaaaaaaaaaaaaaaaaaaaaaaaaaaa
                                            -->
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="urun-detay-<?=seolink($urunlercek['urun_baslik']).'-'.$urunlercek['urun_id'] ?>">Detaya git</a></li>


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>

                            <?php } ?>

                        </div>
                    </div>
                </div>
                <!-- Li's Section Area End Here -->
            </div>
        </div>
    </section>


        
            
<?php require_once 'footer.php'; ?>
