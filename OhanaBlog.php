
    <!-- carregamento do arquivo header INTEIRO -->
    <?php  include 'header.html'; ?>   


    <!-- inicio do corpo da pagina  -->
    <body> 
   	<!-- Card section-->   
    
    <h1 class="title-ohanablog">Confira as novidades do Projeto Ohana</h1>
    
    <div class="card-ohanablog">
    <img src="assets/undraw_logic_n6th.png" alt="">
    <h3>Lorem ipsum dolor sit.</h3>
    <p>Por Projeto Ohana * 04 de nov, 2020</p>
    <p>Continuar lendo</p>
    </div>

    <div class="card-ohanablog">
    <img src="assets/undraw_google_docs_jf93.png" alt="">
    <h3>Lorem ipsum dolor sit.</h3>
    <p>Por Projeto Ohana * 05 de nov, 2020</p>
    <p>Continuar lendo</p>
    </div>

    <div class="card-ohanablog">
    <img src="assets/undraw_publish_article_icso.png" alt="">
    <h3>Lorem ipsum dolor sit.</h3>
    <p>Por Projeto Ohana * 06 de nov, 2020</p>
    <p>Continuar lendo</p>
    </div>

	
    </body>
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