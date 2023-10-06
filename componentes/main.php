<main class="main" id="main">
    <div class="popupNutri" id="popupNutri">
        <h1 onclick="fecharPopupNutri()"><i class="fa-solid fa-arrow-left"></i></h1>
        <h2>Preencha a tabela para montarmos sua dieta:</h2>
        
        <form action="./bancoPerfil.php" method="post">
        <div class="gp1">
            <input type="text" placeholder="Altura em cm"><br>
            <input type="text" placeholder="Peso em kg"><br>
            <input type="text" placeholder="Idade">
        </div>
        <div class="gp2">
            <input type="text" placeholder="Sexo"><br>
            <input type="text" placeholder="Idade"><br>
            <input type="submit" value="Enviar">
        </div>
        </form>
    </div>



    <div class="popup" id="meuPopup">
        <h2 id="h2Sobre">Error</h2>
        <p id="pSobre">Informação não encontrada, tente novamente.</p>
        <button id="fecharPopup" onclick="fecharPopup()">Fechar</button>
    </div>
    
    <div id="container_tudo">
    <div class="inicio">
            <h1>Use nosso site para <span>organizar sua vida Fitness!</span></h1>
            <p>Saiba mais sobre:</p>

            <div class="elementos">
                <div class="elemento" onclick="abrirDieta()">
                    <p>Minha dieta</p>
                </div>

                <div class="elemento" onclick="abrirIA()">
                    <p>Nutricionista IA</p>
                </div>

                <div class="elemento" onclick="abrirCalendario()">
                    <p>Meu calendario</p>
                </div>
            </div>
        </div>

        <div class="container_plano">
            <div class="plano">
                <h1><span>Atinja seus</span> objetivos com nosso site:</h1>
                <div class="balao">
                    <h1>01-</h1>
                    <p>Perfil de dieta para você</p>
                </div>
                <div class="balao">
                    <h1>02-</h1>
                    <p>Preparação de uma refeição rápida</p>
                </div>
                <div class="balao">
                    <h1>03-</h1>
                    <p>Desenhado para si</p>
                </div>
                <div class="balao">
                    <h1>04-</h1>
                    <p>Desenhado para si</p>
                </div>
            </div>
            <div class="img">
                <img src="https://cdn-icons-png.flaticon.com/512/5223/5223176.png" alt="">
            </div>
        </div>
        <hr id="hr">
        <div class="container_programa">
            <div class="programa_titulo">
                <h1>Metodologia NutriMax</h1>
            </div>
            <div class="programa_subtitulo">
                <p>Deixe no passado as tentativas frustradas de ser mais saudável,
                    as dietas mirabolantes e os treinos sem resultados.
                    Confira como funcionam os programas do NutriMax.
                </p>
            </div>
            <div class="programa">
                <div class="programa_elementos">
                    <img src="https://cdn-icons-png.flaticon.com/512/815/815128.png" alt="">
                    <h1>Sem desafios dolorosos</h1>
                    <p>Metodologias e programas são desenvolvidos por uma IA especialista focada em tirar o corpo da
                        estagnação, melhor nutrição, reprogramar o corpo para queimar mais gordura e transformá-la em
                        massa magra.</p>
                </div>
                <div class="programa_elementos">
                    <img src="https://cdn-icons-png.flaticon.com/512/977/977451.png" alt="">
                    <h1>Chegue no seu objetivo</h1>
                    <p>Metodologias e programas são desenvolvidos por uma IA especialista focada em tirar o corpo da
                        estagnação, melhor nutrição, reprogramar o corpo para queimar mais gordura e transformá-la em
                        massa magra.</p>
                </div>
                <div class="programa_elementos">
                    <img src="https://cdn-icons-png.flaticon.com/256/606/606534.png" alt="">
                    <h1>melhore seu jeito de viver</h1>
                    <p>Metodologias e programas são desenvolvidos por uma IA especialista focada em tirar o corpo da
                        estagnação, melhor nutrição, reprogramar o corpo para queimar mais gordura e transformá-la em
                        massa magra.</p>
                </div>
            </div>
            <button id="programa_btn">Conheça nossos programas</button>
        </div>

        <div class="container_feedback">
            <h2>Observe alguns Feedbacks feitos para nosso site!</h2>
            <div class="feedback">
                <div class="feedback_elemento">
                    <div class="feedback_user">
                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                            alt="">
                        <h3>Roger Santos</h3>
                    </div>
                    <p>Muito bom!! Consegui resultados incriveis em poucos dias.</p>
                    <img id="stars" src="https://www.tecnonutri.com.br/campanha/15em3/img/tecnonutri/fivestars.png"
                        alt="">
                </div>
                <div class="feedback_elemento">
                    <div class="feedback_user">
                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                            alt="">
                        <h3>Roger Santos</h3>
                    </div>
                    <p>Muito bom!! Consegui resultados incriveis em poucos dias.</p>
                    <img id="stars" src="https://www.tecnonutri.com.br/campanha/15em3/img/tecnonutri/fivestars.png"
                        alt="">
                </div>
                <div class="feedback_elemento">
                    <div class="feedback_user">
                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                            alt="">
                        <h3>Roger Santos</h3>
                    </div>
                    <p>Muito bom!! Consegui resultados incriveis em poucos dias.</p>
                    <img id="stars" src="https://www.tecnonutri.com.br/campanha/15em3/img/tecnonutri/fivestars.png"
                        alt="">
                </div>
                <div class="feedback_elemento">
                    <div class="feedback_user">
                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                            alt="">
                        <h3>Roger Santos</h3>
                    </div>
                    <p>Muito bom!! Consegui resultados incriveis em poucos dias.</p>
                    <img id="stars" src="https://www.tecnonutri.com.br/campanha/15em3/img/tecnonutri/fivestars.png"
                        alt="">
                </div>
                </div>
            </div>
        </div>  
</main>


