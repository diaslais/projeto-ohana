<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protótipo Ohana</title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <link rel="stylesheet" href="css/OhanaApp.css">
    <link rel="stylesheet" href="css/join.css">


</head>

<body>

    <div class="header">
        <?php  include 'header.html'; ?>
    </div>
    <script type="text/javascript">
        var prevY = window.pageYOffset;
        window.onscroll = function () {
            var currentY = window.pageYOffset;
            if (currentY < prevY) {
                document.querySelector("header").style.top = "0";
            }
            else {
                document.querySelector("header").style.top = "-100px";
            }
            prevY = currentY;
        }
    </script>

    <div class="layer">
        <div class="parallax" data-parallax="scroll" data-z-index="1" data-position="0px"
            data-image-src="assets/app.jpg"></div>
    </div>
    <h1 id="ohanaApp">OhanaApp</h1>
    <script src="js/script.js"></script>

    <div class="app-container">
        <h2>Descrição</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta suscipit necessitatibus sapiente magni dolore libero molestias, ab unde iusto officia error, laborum, consequuntur beatae? Vero soluta dolorem non id quisquam explicabo ducimus, facilis quasi, odit mollitia repellendus obcaecati magnam nam molestias deserunt veniam reiciendis praesentium nihil saepe totam! Repudiandae, expedita!</p>
        <div class="apps">
            <a class="google-play" href='https://play.google.com/store' target=" ">
                <img
                    alt='Disponível no Google Play'
                    src='assets/google-play-badge.png'
                />
            </a>
            <a class="app-store" href="https://www.apple.com/br/ios/app-store/" target=" ">
                <img src="assets/app-store-badge.svg" alt="Disponível na App Store">
            </a>
        </div>
    </div>

    

    <div class="footer">
        <?php  include 'footer.html'; ?>
    </div>

</body>

</html>