
    <!-- carregamento do arquivo header INTEIRO -->
    <?php  include 'responsive-header.html'; ?>   


    <!-- inicio do corpo da pagina  -->

    
    <div class="formacao-headline">
        <div class="headline-itens">
            <h1>Ciclo de Formação</h1>

            <p>
                O Ciclo de formações se consiste em um conjunto de treinamentos voltados para gestão
                de internas de ONGs e OSCIPs neles abordamos assuntos como: marketing para redes
                sociais, gestão de pessoas, controle financeiro, arrecadação de recursos e etc.
            </p>
        </div>
    </div>
    
    

    <div class="page-content">
        
        <div class="participantes-container">
            <h2>Organizações que já participaram</h2>
            <div class="lista-img-container">
                <div class="participantes-lista">
                    <div class="list-block">
                        <div class="list-logo">
                            <a href="#" target="_blank">
                                <img src="assets/logo_completo.png" alt="Logo da instituição Projeto Ohana">
                            </a>
                            <a href="#" target="_blank">
                                <h3>Ohana</h3>
                            </a>
                        </div>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, ab!</p>
                    </div>
                    <div class="list-block">
                        <div class="list-logo">
                            <a href="#" target="_blank">
                                <img src="assets/logo_completo.png" alt="Logo da instituição Projeto Ohana">
                            </a>
                            <a href="#" target="_blank">
                                <h3>Ohana</h3>
                            </a>
                        </div>
                    
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, assumenda?</p>
                    </div>
                    <div class="list-block">
                        <div class="list-logo">
                            <a href="#" target="_blank">
                                <img src="assets/logo_completo.png" alt="Logo da instituição Projeto Ohana">
                            </a>
                            <a href="#" target="_blank">
                                <h3>Ohana</h3>
                            </a>
                        </div>
                    
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse, ea.</p>
                    </div>
                    

                </div>

                <div class="formacao-imagens">
                    <img src="assets/board-formacao.svg" alt="">
                    
                </div>
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