<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="guestbook.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>Projekt</title>
</head>

<body>
    <?php
    include("navbar.php");
    if(isset($_POST['email']) && $_POST['email'] != ''){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "gabrielalubkowska000webhost@gmail.com";
    $body = "";
    $body .="From: ".$name."\r\n";
    $body .="Email: ".$email."\r\n";
    $body .="Message: : ".$message."\r\n";

    mail($to, $subject, $body);
        }
    }
    ?>
    <header class="page-header gradient">
    <div class="container">
    <div class="row contact-page">
    <div class="d-flex p-2 bd-highlight justify-content-center col-sm">
            
            <form action="contact.php" method="post">
                <div class="form-group">
                    <label for="name" class="form-label">Imię i nazwisko</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder = "Wpisz imię i nazwisko" tabindex="1" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" tabindex="2" placeholder="Wpisz adres e-mail" required>
                </div>
                <div class="form-group">
                    <label for="subject" class="form-label">Temat</label>
                    <input type="text" class="form-control" name="subject" id="subject" tabindex="3" placeholder="Wpisz temat" required>
                </div>
                <div class="form-group">
                    <label for="message" class="form-label">Wiadomość</label>
                    <textarea type="text" class="form-control" rows="5" cols="50" name="message" id="message" tabindex="4" placeholder="Napisz wiadomość" required></textarea>
                </div>
                <button type="submit" class="btn btn-outline-light submitbutton contact-btn">Wyślij wiadomość</button>

            </form>
        

</div>

        <div class="d-flex p-2 bd-highlight justify-content-center col-sm">
            
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2509.036615744735!2d17.330965015912025!3d51.03394445302963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47102077563466a7%3A0xa2e5d9e2b490c303!2sTadeusza%20Ta%C5%84skiego%2C%2055-220%20Jelcz-Laskowice!5e0!3m2!1spl!2spl!4v1623011504342!5m2!1spl!2spl" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                
                        </div>
        </div>
        </div>
        
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>