    <div  class="footer">
        

                <!-- Begin Footer Static Top Area -->
                <div class="footer-static-top">
                    <div class="container">
                        <!-- Begin Footer Shipping Area -->
                        <div class="footer-shipping pt-60 pb-55 pb-xs-25">
                            <div class="row">
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/1.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Ücretsiz kargo</h2>
                                            <p >Tüm türkiye içinde ücretsiz kargo.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/2.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2 >Güvenli ödeme</h2>
                                            <p >Güvenli bir şekilde alışverişini tamamlayın..</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/3.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2 >Uygun fiyat</h2>
                                            <p >Hesaplı ürünlerden dilediğini alın.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/4.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2 >7/24 Canlı destek</h2>
                                            <p >Sorularınızı bize sorabilirsiniz..</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                            </div>
                        </div>
                        <!-- Footer Shipping Area End Here -->
                    </div>
                </div>
<style type="text/css">
    .beyazyazi{
        color:white !important;
    }
</style>                <!-- Footer Static Top Area End Here -->
                <!-- Begin Footer Static Middle Area -->
                <div class="footer-static-middle">
                    <div class="container">
                        <div class="footer-logo-wrap pt-50 pb-35">
                            <div class="row">
                                <!-- Begin Footer Logo Area -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="footer-logo">
                                        <img src="admin/resimler/logo/<?php echo $ayarcek['logo']?>" width="100" height="100" alt="Footer Logo">
                                        <p >
                                            <!---sadasdasd -->
                                        </p>
                                    </div>
                                    <ul class="des">
                                        <li>
                                            <span >Adres: </span>
                                          <b > <?php echo $ayarcek['adres'] ?></b>
                                        </li>
                                        <li>
                                            <span >Telefon: </span>
                                            <a  href="tel://<?php echo $ayarcek['telefon'] ?>"><?php echo $ayarcek['telefon'] ?></a>
                                         </li>
                                        <li>
                                            <span >Emaİl: </span>
                                            <a  href="mailto://<?php echo $ayarcek['email'] ?>"><?php echo $ayarcek['email'] ?></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Footer Logo Area End Here -->
                                <!-- Begin Footer Block Area -->
                                <div class="col-lg-2 col-md-3 col-sm-6">
                                    <div class="footer-block">
                                        <h3 >Kategoriler</h3>
                                        <ul>
                                            <?php       $kategori=$baglanti->prepare("SELECT * FROM  kategori  order by kategori_sira ASC limit 6");
                  $kategori->execute();
                  while ($kategoricek=$kategori->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <li><a  href="urunler-<?=seolink($kategoricek['kategori_adi']).'-'.$kategoricek['kategori_id'] ?>"><?php echo $kategoricek['kategori_adi'] ?></a></li>
                                           <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer Block Area End Here -->
                                <!-- Begin Footer Block Area -->
                                <div class="col-lg-2 col-md-3 col-sm-6">
                                    <div class="footer-block">
                                        <h3 >Sayfalar</h3>
                                        <ul>
                                            <li><a  href="index">Anasayfa</a></li>
                                            <li><a  href="hakkimizda">Hakkımızda</a></li>
                                            <li><a  href="bilgi">Sıkça sorulan sorular</a></li>
                                            <li><a  href="iletisim">İletişim</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer Block Area End Here -->
                                <!-- Begin Footer Block Area -->
                                <div class="col-lg-4">
                                    <div class="footer-block">
                                        <h3 class="footer-block-title" >Takip edin</h3>
                                        <ul class="social-link">
                                            <li class="twitter">
                                                <a href="<?php echo $ayarcek['twitter'] ?>" data-toggle="tooltip" target="_blank" title="Twitter">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                          
                                        
                                            <li class="facebook">
                                                <a href="<?php echo $ayarcek['facebook'] ?>" data-toggle="tooltip" target="_blank" title="Facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="youtube">
                                                <a href="<?php echo $ayarcek['youtube'] ?>" data-toggle="tooltip" target="_blank" title="Youtube">
                                                    <i class="fa fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="instagram">
                                                <a href="<?php echo $ayarcek['instagram'] ?>" data-toggle="tooltip" target="_blank" title="Instagram hesabımızı takip edin">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Begin Footer Newsletter Area -->
                                    <div class="footer-newsletter">
                                        <h4 >E-bültene abone olun</h4>
                                        <form action="islem" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="footer-subscribe-form validate" target="_blank" novalidate>
                                           <div id="mc_embed_signup_scroll">
                                              <div id="mc-form" class="mc-form subscribe-form form-group" >
                                                <input type="email" name="abone" placeholder="Email adresinizi giriniz." />
                                                <button style="background-color:#91AA9D;"name="aboneol" class="btn" id="mc-submit">Abone ol</button>
                                              </div>
                                           </div>
                                        </form>
                                    </div>
                                    <!-- Footer Newsletter Area End Here -->
                                </div>
                                <!-- Footer Block Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Static Middle Area End Here -->
                <!-- Begin Footer Static Bottom Area -->
                <div class="footer-static-bottom pt-55 pb-55">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Begin Footer Links Area -->
                        
                                <!-- Footer Links Area End Here -->
                                <!-- Begin Footer Payment Area -->
                                <div class="copyright text-center">
                                    <a href="#">
                                        <img src="images/payment/1.png" alt="">
                                    </a>
                                </div>
                                <!-- Footer Payment Area End Here -->
                                <!-- Begin Copyright Area -->
                                <div class="copyright text-center pt-25">
                                    <span><a target="_blank" href="linkgir">Gözde  Luxury® 1997-2022 Tüm Hakları Saklıdır.</a></span>
                                </div>
                                <!-- Copyright Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Static Bottom Area End Here -->
            </div>
            <!-- Footer Area End Here -->
            <!-- Begin Quick View | Modal Area -->
              
            <!-- Quick View | Modal Area End Here -->
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="js/scrollUp.min.js"></script>
        <!-- Main/Activator js -->
        <a href="https://wa.me/<?php echo $ayarcek['wpno'] ?>" target="_blank" rel="noopener noreferrer">
</a>
        <script src="js/main.js"></script>
        <script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "<?php echo $ayarcek['wpno'] ?>",
            call_to_action: "Merhaba, nasıl yardımcı olabilirim?",
            position: "left",
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
    </body>

<!-- index30:23-->
</html>