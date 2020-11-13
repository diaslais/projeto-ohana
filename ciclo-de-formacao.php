
    <!-- carregamento do arquivo header INTEIRO -->
    <?php  include 'header.html'; ?>   


    <!-- inicio do corpo da pagina  -->

    
    
    

    <div class="page-content">
        <h1>Ciclo de Formação</h1>

        <div class="descricao-container formacao">
            <p>O Ciclo de formações se consiste em um conjunto de treinamentos voltados para gestão
            de internas de ONGs e OSCIPs neles abordamos assuntos como: marketing para redes
            sociais, gestão de pessoas, controle financeiro, arrecadação de recursos e etc.
            </p>
            
        </div>

        
        <div class="participantes-container">

            <h2>Organizações que já participaram</h2>
            <div class="lista-img-container">
                <div class="participantes-lista">
                    <ul>
                        
                        <li>
                            <a href="https://www.youtube.com/" target="_blank">ong 1:</a>
                            <p>breve Descrição</p>
                        </li>
                        <li>
                            <a href="#">ong 2:</a>
                            <p>breve Descrição</p>
                        </li>
                        <li>
                            <a href="#">ong 3:</a>
                            <p>breve Descrição</p>
                        </li>
                        
                    </ul>
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