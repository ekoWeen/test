<?php
$data = file_get_contents('inventory.json');
$inventory = json_decode($data, true);

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
                    <a class="nav-item nav-link" href="meeting.php">Meeting Room</a>
                    <a class="nav-item nav-link" href="electronic.php">Electronic</a>
                    <a class="nav-item nav-link" href="furniture.php">Furnitures</a>
                    <a class="nav-item nav-link" href="purchased.php">Purchased</a>
                    <a class="nav-item nav-link" href="brown.php">Brown Color</a>
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
            <?php foreach ($inventory as $row) :  ?>
                <div class="col-md-2">

                    <?= "Id = " . $row["inventory_id"]; ?>
                    <h6>
                        <?php
                        echo "Name = " . $row["name"] . "<br>";
                        echo "Type = " . $row["type"] . "<br>";

                        echo "Tags: ";
                        $tags = $row["tags"];
                        // echo "<pre>";
                        // var_dump($tags);
                        foreach ($tags as $tag) {
                            echo $tag . ", ";
                        }
                        echo "<br>";
                        $date = $row["purchased_at"];
                        $conv = date("Y-m-d H:i:s", $date);

                        echo "Date = " . $conv . "<br>";
                        $place = $row["placement"];
                        echo "Room ID = " . $place["room_id"] . "<br>";
                        echo "Room Name = " . $place["name"] . "<br>";

                        ?>

                        <br>
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