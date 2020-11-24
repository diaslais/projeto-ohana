
    <!-- carregamento do arquivo header INTEIRO -->
    <?php  include 'responsive-header.html'; ?>   


    <!-- inicio do corpo da pagina  -->

    <div class="app-headline">
        <div class="headline-itens">
            <h1>OhanaApp</h1>
        
            
            <p>
                Ohana App é um aplicativo, ainda em desenvolvimento, que tem como objetivo
                conectar voluntários, organizações e doadores
            </p>
            <div class="apps">
                <a class="google-play" href='https://play.google.com/store' target=" ">
                    <img alt='Disponível no Google Play' src='assets/google-play-badge.png' />
                </a>
                <a class="app-store" href="https://www.apple.com/br/ios/app-store/" target=" ">
                    <img src="assets/app-store-badge.svg" alt="Disponível na App Store">
                </a>
            </div>
        </div>

        
    </div>

    
    <!-- fim do corpo da pagina -->


    <!-- carregamento de script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>

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

    <!-- carrega arquivo footer INTEIRO -->
    <?php  include 'footer.html'; ?>