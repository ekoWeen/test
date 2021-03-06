<?php
$data = file_get_contents('profile.json');
$profile = json_decode($data, true);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Testing Soal 2</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="index.php">Semua Data</a>
                    <a class="nav-item nav-link" href="nophones.php">Tanpa Telp</a>
                    <a class="nav-item nav-link" href="hvart.php">Punya Artikel</a>
                    <a class="nav-item nav-link" href="matching.php">Kata Sesuai</a>
                    <a class="nav-item nav-link" href="article2020.php">Article 2020</a>
                    <a class="nav-item nav-link" href="born.php">Born 1986</a>
                    <a class="nav-item nav-link" href="titleTips.php">Title Tips</a>
                    <a class="nav-item nav-link" href="beforeart.php">Article August 2019</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h2>Semua Data</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($profile as $row) :  ?>
                <div class="col-md-3">
                    <h5>
                        <?= "id = " . $row["id"]; ?>
                    </h5>
                    <h6>
                        <?= "username = " . $row["username"]; ?>
                        <br><br>
                        Profile: <br>
                        <?php
                        $detail = $row["profile"];
                        echo "Full name: " . $detail["full_name"] . "<br>";
                        echo "Birthday: " . $detail["birthday"] . "<br>";
                        ?>
                    </h6>
                    <h6>
                        <?php $phones = $detail["phones"];
                        foreach ($phones as $no) {
                            echo "Phones " . "$no <br>";
                        } ?>
                    </h6>
                    <h6>
                        Articles :<br><br>
                        <?php
                        $article = $row["articles:"];

                        foreach ($article as $items) {
                            echo "Id Article: " . $items["id"] . "<br> ";
                            echo "Title: " . $items["title"] . "<br> ";
                            echo "Date Published: " . $items["published_at"] . "<br><br>";
                        }
                        ?>
                    </h6>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>