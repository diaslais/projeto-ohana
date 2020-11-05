<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O que oferecemos?</title>

    <link rel="stylesheet" href="css/join.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/o-que-oferecemos.css">
    

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
    


    <div class="desc">
        <h2 id="oferecemos">O que oferecemos?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo beatae consequatur facilis eos modi esse eligendi ipsum, exercitationem dolorum blanditiis.</p>
    </div>

    <div class="cards-container">
        <div class="card">
            <a class="buttons" href="#"><button>OhanaCast</button></a>
            <a href="#"><img src="assets/studio.jpg" alt="OhanaCast"></a>
        </div>


        <div class="card">
            <a href="OhanaApp.php"><button>OhanaApp</button></a>
            <a href="OhanaApp.php"><img src="assets/app.jpg" alt="OhanaApp"></a>
        </div>


        <div class="card">
            <a href="#"><button>Ciclo de formação</button></a>
        </div>

    </div>

    


    <div class="footer">
        <?php  include 'footer.html'; ?>
    </div>

</body>

</html>