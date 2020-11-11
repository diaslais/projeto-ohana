
    <!-- carregamento do arquivo header INTEIRO -->
    <?php  include 'header.html'; ?>   


    <!-- inicio do corpo da pagina  -->

    <div class="layer formacao">
        <div class="parallax" data-parallax="scroll" data-z-index="1" data-position="0px"
            data-image-src="assets/formacao2.jpg"></div>
    </div>
    <h1 class="servicos">Ciclo de Formação</h1>
    <script src="js/script.js"></script>

    <div class="descricao-container formacao">
        <h2>Descrição</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta suscipit necessitatibus sapiente magni dolore libero molestias, ab unde iusto officia error, laborum, consequuntur beatae? Vero soluta dolorem non id quisquam explicabo ducimus, facilis quasi, odit mollitia repellendus obcaecati magnam nam molestias deserunt veniam reiciendis praesentium nihil saepe totam! Repudiandae, expedita!</p>
        
    </div>

    <div class="formacao-imagens">
        <img src="assets/formacao.jpg" alt="">
        <img src="assets/formacao.jpg" alt="">
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