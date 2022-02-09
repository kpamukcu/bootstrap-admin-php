<?php require_once('header.php'); ?>

<!-- Ürün Listesi Banner Section Start -->
<section id="banner" class="bg-purple py-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center text-white">
                <h1 class="display-4">ÜRÜNLER</h1>
            </div>
        </div>
    </div>
</section>
<!-- Ürün Listesi Banner Section End -->

<!-- Ürünler Listesi Start -->
<section id="urunler" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Görsel</th>
                            <th>Ürün Adı</th>
                            <th>Stok Adet</th>
                            <th>Fiyat</th>
                            <th>İndirim</th>
                            <th>Durum</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $sorgu = $db->prepare('select * from urunler order by id desc');
                        $sorgu->execute();

                        if ($sorgu->rowCount()) {
                            foreach ($sorgu as $satir) {
                        ?>
                                <tr class="text-center">
                                    <td><?php echo $satir['id']; ?></td>
                                    <td><img src="<?php echo $satir['anagorsel']; ?>" style="width:80px;"></td>
                                    <td><?php echo $satir['baslik']; ?></td>
                                    <td><?php echo $satir['stok']; ?></td>
                                    <td><?php echo $satir['fiyat']; ?></td>
                                    <td><?php echo $satir['indirim']; ?></td>
                                    <td><?php echo $satir['durum']; ?></td>
                                    <td><a href="">Düzenle</a></td>
                                    <td><a href="">Sil</a></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- Ürünler Listesi End -->

<?php require_once('footer.php'); ?>