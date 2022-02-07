<?php require_once('header.php'); ?>

<?php

$sorgu_urunler = $db -> prepare('select * from urunler');
$urunadet = count(array($sorgu_urunler));

?>

<section id="dashboardBox" class="bg-purple py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-6 my-auto">
                            <h4 class="lead">Mesajlar</h4>
                            <small>45 Adet Mesajınız Var</small>
                            <a href="mesajlar.php">Tümünü Okuyun</a>
                        </div>
                        <div class="col-6 text-right">
                            <i class="bi bi-envelope bg-danger px-2 rounded text-white" style="font-size:22px;"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card p-3">
                    <div class="row">
                        <div class="col-8 my-auto">
                            <h4 class="lead">Ürünler</h4>
                            <small><?php echo $urunadet; ?> Adet Ürününüz Var</small>
                            <a href="urunler.php">Tümünü Görün</a>
                        </div>
                        <div class="col-4 text-right">
                            <i class="bi bi-shop bg-warning px-2 rounded text-white" style="font-size:22px;"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card p-3">
                    <div class="row">
                        <div class="col-6 my-auto">
                            <h4 class="lead">Sayfalar</h4>
                            <small>5 Adet Sayfanız Var</small>
                            <a href="sayfalar.php">Tümünü Görün</a>
                        </div>
                        <div class="col-6 text-right">
                            <i class="bi bi-house bg-danger px-2 rounded text-white" style="font-size:22px;"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card p-3">
                    <div class="row">
                        <div class="col-6 my-auto">
                            <h4 class="lead">Yazılar</h4>
                            <small>23 Adet Yazınız Var</small>
                            <a href="yazilar.php">Tümünü Okuyun</a>
                        </div>
                        <div class="col-6 text-right">
                            <i class="bi bi-sticky bg-danger px-2 rounded text-white" style="font-size:22px;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>