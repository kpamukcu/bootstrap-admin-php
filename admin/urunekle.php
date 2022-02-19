<?php require_once('header.php'); ?>

<!-- Ürün Ekle Banner Section Start -->
<section id="banner" class="bg-purple py-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center text-white">
                <h1 class="display-4">ÜRÜN EKLE</h1>
            </div>
        </div>
    </div>
</section>
<!-- Ürün Ekle Banner Section End -->

<!-- Ürün Ekle Section Start -->
<section id="urunEkle" class="py-4">
    <div class="container-fluid">
        <form action="" method="POST" class="form-row" enctype="multipart/form-data">
            <div class="col-md-9">
                <div class="form-group">
                    <input type="text" name="baslik" placeholder="Ürün Adını Giriniz..." class="form-control">
                </div>
                <div class="form-group">
                    <label>Ürün Açıklaması Giriniz</label>
                    <textarea name="genelaciklama"></textarea>
                    <script>
                        CKEDITOR.replace('genelaciklama');
                    </script>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <input type="number" name="stok" placeholder="Stok" class="form-control">
                        </div>
                        <div class="col-md-3 col-6">
                            <input type="number" name="fiyat" placeholder="Ürün Fiyatı" class="form-control">
                        </div>
                        <div class="col-md-3 col-6">
                            <input type="number" name="indirim" placeholder="İndirimli Fiyat" class="form-control">
                        </div>
                        <div class="col-md-3 col-6">
                            <select name="kargo" class="form-control">
                                <option value="">Teslimat</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Ürün Sınıflandırması Seçiniz</label> <br>
                    <label for="yeni">Yeni Ürün</label> <input type="radio" name="siniflandirma" id="yeni" value="Yeni Ürün" class="mr-5">
                    <label for="trend">Trend ürün</label> <input type="radio" name="siniflandirma" id="trend" value="Trend Ürün" class="mr-5">
                    <label for="encok">En Çok Satılan</label> <input type="radio" name="siniflandirma" id="encok" value="En Çok Satılan" class="mr-5">
                    <label for="onecikan">Öne Çıkan Ürün</label> <input type="radio" name="siniflandirma" id="onecikan" value="Öne Çıkan">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-grey w-100" data-toggle="modal" data-target="#urungaleri">
                        Ürün Görseli Ekleyin
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="urungaleri" tabindex="-1" aria-labelledby="urungaleriLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="urungaleriLabel">Ürün Galerisi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="anagorsel"><b>Galeri Ana Foto</b></label>
                                                <input type="file" name="anagorsel" id="anagorsel">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="galeri1"><b>Galeri Görseli 1</b></label>
                                                <input type="file" name="galeri1" id="galeri1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="galeri2"><b>Galeri Görseli 2</b></label>
                                                <input type="file" name="galeri2" id="galeri2">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="galeri3"><b>Galeri Görseli 3</b></label>
                                                <input type="file" name="galeri3" id="galeri3">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="altetiketi"><b>Görsel Alt Etiketini Girin</b></label>
                                                <input type="text" name="altetiketi" id="altetiketi" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Görselleri Ekle</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Yayın Durumu</label>
                    <select name="durum" class="form-control">
                        <option value="">Seçiniz</option>
                        <option value="Taslak">Taslak</option>
                        <option value="Yayınlandı">Yayınlandı</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Ana Kategori</label>
                    <select name="anakategori" class="form-control">
                        <option value="">Seçiniz</option>
                        <?php
                        $sorgu = $db->prepare('select * from kategori where katturu="anakategori" order by katadi asc');
                        $sorgu->execute();
                        if ($sorgu->rowCount()) {
                            foreach ($sorgu as $satir) {
                        ?>
                                <option value="<?php echo $satir['katadi']; ?>"><?php echo $satir['katadi']; ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Alt Kategori<br>
                        <small>Birden Fazla Seçmek içn Ctrl Tuşuna Basılı Tutun</small>
                    </label>
                    <select name="altkategori[]" class="form-control" multiple>
                        <?php
                        $sorgu = $db->prepare('select * from kategori where katturu="altkategori" order by katadi asc');
                        $sorgu->execute();

                        if ($sorgu->rowCount()) {
                            foreach ($sorgu as $satir) {
                        ?>
                                <option value="<?php echo $satir['katadi']; ?>"><?php echo $satir['katadi']; ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Meta Açıklaması</label>
                    <textarea name="meta" rows="3" class="form-control" placeholder="Seo için Max. 160 Karakter"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success w-100">Kaydet</button>
                </div>
                <div class="form-group">
                    <?php
                    if ($_POST) {                        
                        $dizin = "../assets/dist/img/";
                        $anagorsel = $dizin . $_FILES['anagorsel']['name'];
                        $galeri1 = $dizin.$_FILES['galeri1']['name'];
                        $galeri2 = $dizin.$_FILES['galeri2']['name'];
                        $galeri3 = $dizin.$_FILES['galeri3']['name'];
                        $foto1 = move_uploaded_file($_FILES['anagorsel']['tmp_name'],$anagorsel);
                        $foto2 = move_uploaded_file($_FILES['galeri1']['tmp_name'],$galeri1);
                        $foto3 = move_uploaded_file($_FILES['galeri2']['tmp_name'],$galeri2);
                        $foto4 = move_uploaded_file($_FILES['galeri3']['tmp_name'],$galeri3);
                        $altkategori = implode(',',$_POST['altkategori']);                      

                        if(isset($foto1) || isset($foto2) || isset($foto3) || isset($foto4)){
                            $sorgu = $db -> prepare('insert into urunler(baslik,genelaciklama,stok,fiyat,indirim,kargo,siniflandirma,anagorsel,galeri1,galeri2,galeri3,altetiketi,durum,anakategori,altkategori,meta) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                            $sorgu -> execute(array($_POST['baslik'],$_POST['genelaciklama'],$_POST['stok'],$_POST['fiyat'],$_POST['indirim'],$_POST['kargo'],$_POST['siniflandirma'],$anagorsel,$galeri1,$galeri2,$galeri3,$_POST['altetiketi'],$_POST['durum'],$_POST['anakategori'],$altkategori,$_POST['meta']));

                            if($sorgu -> rowCount()){
                                echo '<div class="alert alert-success">Ürün Kaydedildi</div>';
                            } else {
                                echo '<div class="alert alert-danger">Hata Oluştu!!!</div>';
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Ürün Ekle Section End -->

<?php require_once('footer.php'); ?>