<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="icon" type="image/x-icon" href="https://img.icons8.com/?size=80&id=RH2knxpdDpjm&format=png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6e74bd18af.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="loader">
        <div class="pyramid-loader">
            <div class="wrapper">
                <span class="side side1"></span>
                <span class="side side2"></span>
                <span class="side side3"></span>
                <span class="side side4"></span>
                <span class="shadow"></span>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="box1" id="box1">
            <?php include "php/header.php"; ?>
        </div>
        <div class="box2" id="aboutme">
            <?php include "php/about.php"; ?>
        </div>
        <div class="box3" id="skills">
            <?php include "php/skills.php"; ?>
            <div class="footer">
                <h2>Designed & Built By <span id="name"></span></h2>
            </div>
            <br><br>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/loader.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed('#name', {
            strings: ['Charles Nixon Cayading'],
            typeSpeed: 100,
            loop: true,
        });
    </script>
</body>

</html>