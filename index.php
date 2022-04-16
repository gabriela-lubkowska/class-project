<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>Projekt</title>
</head>

<body>
    <?php
    include("navbar.php");
    ?>
    <?php
    session_start();
    $counter_name = "visits.txt";

    // Check if a text file exists.
    // If not create one and initialize it to zero.
    if (!file_exists($counter_name)) {
        $f = fopen($counter_name, "w");
        fwrite($f, "0");
        fclose($f);
    }

    // Read the current value of our counter file
    $f = fopen($counter_name, "r");
    $counterVal = fread($f, filesize($counter_name));
    fclose($f);

    // Has visitor been counted in this session?
    // If not, increase counter value by one
    if (!isset($_SESSION['hasVisited'])) {
        $_SESSION['hasVisited'] = "yes";
        $counterVal++;
        $f = fopen($counter_name, "w");
        fwrite($f, $counterVal);
        fclose($f);
    };


    ?>
    <header class="page-header gradient">
        <div class="container pt-3">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-5">
                    <h2>Gabriela Łubkowska</h2>
                    <p>Studiuję na Dolnośląskiej Szkole Wyższej na kierunku e-Commerce Developer. Po zajęciach i pracy lubię grać w gry albo słuchać muzyki. </p>
                    <div class="card">
                        <div class="card-body">
                            <p class="licznik">Ilość odwiedzin strony:
                                <?php
                                echo $counterVal;
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5"><img class="graphic" src="graphic2.png" alt="graphic"></div>
            </div>

        </div>
        <svg class="fixed-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,133.3C384,117,480,107,576,128C672,149,768,203,864,208C960,213,1056,171,1152,154.7C1248,139,1344,149,1392,154.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>