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
    ?>
    <?php
    include("config.php");
    error_reporting(0);

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $comment = $_POST['comment'];
        $sql = "INSERT INTO posts (name, comment, date)
            VALUES ('$name','$comment', CURRENT_TIMESTAMP())";
        $result = mysqli_query($conn, $sql);
        
    }
    ?>
    <header class="page-header gradient">
        <div class="container pt-3">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                
                    <form method="POST" class="form-inline">
                        <label class="sr-only" for="inlineFormInputGroupUsername2">Nick</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input name="name" type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Wpisz nick" value="<?php echo $name; ?>" required>
                        </div>
                        <div class="form-group light-border-focus">
                            <label for="exampleFormControlTextarea1">Komentarz</label>
                            <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3" value="<?php echo $comment; ?>" required></textarea>
                        </div>

                        <div class="form-check mb-2 mr-sm-2">
                            <input class="form-check-input" type="checkbox" id="inlineFormCheck" required>
                            <label class="form-check-label" for="inlineFormCheck">
                                Akceptuje regulamin
                            </label>
                        </div>

                        <div class="d-grid gap-2">
                            <button name="submit" type="submit" class="btn btn-outline-light submitbutton">Submit</button>
                        </div>
                    </form>
                    <div class="wpisy">
                        <?php
                        $sql = "SELECT * FROM posts";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>

                                <div class="single-item">
                                    <h4><?php echo $row['name']; ?></h4>
                                    <p><?php echo $row['comment']; ?></p>
                                    <p><?php echo $row['date']; ?></p>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>