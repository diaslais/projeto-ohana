

    <!-- Carrega arquivo header INTEIRO -->
    <?php  include 'header.html'; ?>
    

    <!-- Corpo da página -->

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

    <!-- Fim do corpo da página -->


    <!-- Carregamento de script -->

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


    <!-- Carrega arquivo footer INTEIRO -->
    <?php  include 'footer.html'; ?>
