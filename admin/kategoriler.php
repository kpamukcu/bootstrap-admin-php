<?php require_once('header.php'); ?>

<!-- Kategori Ekle Banner Section Start -->
<section id="banner" class="bg-purple py-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center text-white">
                <h1 class="display-4">Kategoriler</h1>
            </div>
        </div>
    </div>
</section>
<!-- Kategori Ekle Banner Section End -->

<!-- Kategori Ekle & Kategori Listesi Start -->
<section id="kategori" class="py-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <form method="post">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-8">
                                <label for="katadi">Kategori Adı Giriniz</label>
                                <input type="text" name="katadi" id="katadi" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="katturu">Kategori Türü</label>
                                <select name="katturu" id="katturu" class="form-control">
                                    <option value="">Seçiniz</option>
                                    <option value="anakategori">Ana Kategori</option>
                                    <option value="altkategori">Alt Kategori</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="katmeta">Kategori Açıklaması <small>(Maksimum 160 Karakter Giriniz)</small></label>
                        <textarea name="katmeta" id="katmeta" rows="4" class="form-control"></textarea>
                        <label class="text-justify">Kategori açıklaması, arama motorları için önemli bir alandır. Muhakkak doldurulmasına önem gösterilmesi tavsiye edilir. Maksimum 160 karakter(Boşluklar dahil) olacak şekilde ilgili kategorinin açıklamasını giriniz.</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success w-100">Kaydet</button>
                    </div>
                </form>
                <?php
                if ($_POST) {
                    $sorgu = $db->prepare('insert into kategori(katadi,katturu,katmeta) values(?,?,?)');
                    $sorgu->execute(array($_POST['katadi'], $_POST['katturu'], $_POST['katmeta']));

                    if ($sorgu->rowCount()) {
                        echo '<div class="alert alert-success">Kategori Kaydedildi</div>';
                        echo '<meta http-equiv="refresh" content="2; url=kategoriler.php">';
                    } else {
                        echo '<div class="alert alert-danger">Hata Oluştu!!!</div>';
                    }
                }
                ?>
            </div>
            <div class="col-md-7">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Kategori Adı</th>
                            <th>Kategori Türü</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sorgu = $db->prepare('select * from kategori order by katadi asc');
                        $sorgu->execute();

                        if ($sorgu->rowCount()) {
                            foreach ($sorgu as $satir) {
                                if ($satir['katturu'] == 'anakategori') {
                                    $katturu = 'Ana Kategori';
                                } else {
                                    $katturu = 'Alt Kategori';
                                }
                        ?>
                                <tr>
                                    <td><?php echo $satir['katadi']; ?></td>
                                    <td><?php echo $katturu; ?></td>
                                    <td><a href="kategoriduzenle.php?id=<?php echo $satir['id']; ?>"><button class="btn btn-warning">Düzenle</button></a></td>
                                    <td><a href="kategorisil.php?id=<?php echo $satir['id']; ?>"><button class="btn btn-danger">Sil</button></a></td>
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
<!-- Kategori Ekle & Kategori Listesi End -->

<?php require_once('footer.php'); ?>