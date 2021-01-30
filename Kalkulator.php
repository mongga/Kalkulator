<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <?php
        if(isset($_POST['hitung'])){
            $bil1 = $_POST['bil1'];
            $bil2 = $_POST['bil2'];
            $operasi = $_POST['operasi'];

            switch($operasi){
                case 'tambah':
                    $hasil =$bil1+$bil2;
                break;
                case 'kurang':
                    $hasil =$bil1-$bil2;
                break;
                case 'kali':
                    $hasil =$bil1*$bil2;
                break;
                case 'bagi':
                    $hasil =$bil1/$bil2;
                break;
            }
        }
    ?>
    <section class="container-fluid bg">
        <section class="row">
            <section class="col-12 col-sm-6 col-md-3">
            <form class="form-container" method="post" action="Kalkulator.php">
                <div class="mb-3">
                    <label for="bil1" class="form-label">Masukkan Bilangan 1</label>
                    <input type="text" class="form-control" name="bil1">
                <div class="mb-3">
                    <label for="bil2" class="form-label">Masukkan Bilangan 2</label>
                    <input type="text" class="form-control" name="bil2">
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="operasi" id="inlineRadio1" value="tambah">
                    <label class="form-check-label" for="inlineRadio1">Tambah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="operasi" id="inlineRadio2" value="kurang">
                    <label class="form-check-label" for="inlineRadio2">Kurang</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="operasi" id="inlineRadio3" value="kali">
                    <label class="form-check-label" for="inlineRadio3">Kali</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="operasi" id="inlineRadio3" value="bagi">
                    <label class="form-check-label" for="inlineRadio3">Bagi</label>
                </div>
                <div class="d-grid gap-2">
                    <br><button class="btn btn-primary" type="submit" name="hitung" value="hitung">Hitung</button>
                </div>
                </form>
                <?php if(isset($_POST['hitung'])){ ?>
                    <div class="mb-3">
                        <label for="bil" class="form-label"></label>
                        <input type="text" class="form-control" name="bil" value="<?php echo $hasil; ?>">
                    </div>
                <?php }else{ ?>
                    <div class="mb-3">
                        <label for="bil" class="form-label"></label>
                        <input type="text" class="form-control" name="bil" value="0">
                    </div>
                <?php } ?>

                
            </section>
        </section>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>