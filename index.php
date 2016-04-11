<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="http://code.jquery.com/jquery-2.2.2.js"   integrity="sha256-4/zUCqiq0kqxhZIyp4G0Gk+AOtCJsY1TA00k5ClsZYE="   crossorigin="anonymous"></script>
        <script src="js/modal.js" type="text/javascript"></script>

        <meta charset="UTF-8">

        <link rel="stylesheet" href="css/style.css">

        <title></title>

        <script type="text/javascript">
            function ViewCadastro() {
                $('#cadastro').css({display: ''});
                $('#coments').css({'margin-top': 0});
                $('html, body').animate({
                    scrollTop: $("#cadastro").offset().top     //função offset() retorna as coordenadas do elemnto na página
                }, 1000);
                $("#nome").focus();
            }

        </script>


    </head>
    <body>
        <?php
        require_once 'header.php';

        ini_set("display_errors", 1);
        error_reporting(E_ALL);

        ?>

        <div id="boxes">
            <div id="dialog" class="window">
                <b>Acessar meu cadastro</b>
                <a href="#" class="close">X</a>
                <input class="form-control input-lg" type="text" name="username" placeholder="Email"/>
                <input class="form-control input-lg" style="margin: 10px 0;" type="text" name="password" placeholder="Senha"/>
                <a href="#" ><span style="float: right; font-size: 13px; margin-bottom: 10px;">Esqueci minha senha</span></a>
                <span class="button button_entrar">ENTRAR</span>
            </div>
            <!-- Não remova o div#mask, pois ele é necessário para preencher toda a janela -->
            <div id="mask"></div>
        </div>


        <div class="content">
            <div class="box_content pedido" >
                <h2>Faça já o seu pedido Online</h2>
                <p>Faça seu cadastro e comece agora a utilizar os nossos serviços</p>
                <span class="button button_cadastrar" onclick="ViewCadastro()">CADASTRAR</span>
            </div>

        </div>

        <div id="cadastro" class="cadastro" style="display: none;">
            <div class="box_cadastro">
                <form method="POST" action="executaUsuario.php" >
                    <label class="col-sm-2 col-lg-2">Nome:</label> <div class="col-sm-10 col-lg-10"><input id="nome" name="nome" class= " form-control" type="text" maxlength="100" /></div>
                    <label class="col-sm-2 col-lg-2">E-mail:</label><div class="col-sm-10 col-lg-10"><input class="form-control" name="email" type="email" maxlength="150" /></div>
                    <label class="col-sm-2 col-lg-2">CPF:</label><div class="col-sm-4  col-lg-4"> <input class="form-control " type="text" name="cpf" maxlength="11" /></div>
                    <label class="col-sm-1 col-lg-1">RG:</label><div class="col-sm-4 col-lg-4"> <input class="form-control" type="text" name="rg" maxlength="10" /></div>
                    <label class="col-sm-2 col-lg-2">Bairro:</label><div class="col-sm-10 col-lg-10"> <input class="form-control" type="text" name="bairro" maxlength="200" /></div>
                    <label class="col-sm-2 col-lg-2">Endereço:</label><div class="col-sm-7  col-lg-7"> <input class="form-control" type="text" name="endereco" maxlength="250" /></div>
                    <label class="col-sm-1 col-lg-1">Numero:</label><div class="col-sm-2  col-lg-2"> <input class="form-control" type="text" name="numero" maxlength="5" /></div>
                    <label class="col-sm-2 col-lg-2">Telefone:</label> <div class="col-sm-4  col-lg-4"> <input class="form-control" type="text" name="telefone" maxlength="20" /></div>
                    <label class="col-sm-1 col-lg-1">Celular:</label> <div class="col-sm-4  col-lg-4"> <input class="form-control" type="text" name="celular" maxlength="22" /></div>
                </form>
            </div>
        </div>

        <div id="coments" class="coments" style="margin-top: 450px;">
            <div id="facebook" class="social_medias facebook_posts">O que estão falando no facebook</div>
            <div class="social_medias  twitter_posts">O que estão falando no twitter</div>
        </div>

        <div class="quem_somos">
            <h3>Nossa história</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel sollicitudin mi. Nulla porttitor odio ut elit cursus ornare. Ut tempor, velit sed sodales euismod, risus felis pretium magna, in dapibus erat velit in quam. Maecenas efficitur diam in sem aliquet, non malesuada erat mattis. Proin dictum aliquet erat, sit amet ornare diam. Curabitur cursus varius leo vitae congue. Curabitur bibendum scelerisque imperdiet. Phasellus lobortis, nulla vel ornare dictum, dui tellus sollicitudin leo, sit amet posuere ligula diam nec purus. Mauris vel massa neque. Nulla vehicula lorem magna, ac tincidunt neque tempus ultrices. Etiam id lorem fermentum nisi elementum congue. Curabitur nec egestas nunc, eget faucibus velit. Sed dapibus dolor sed diam congue, vitae venenatis tortor aliquet. Nunc in lacinia lorem, id molestie erat.</p>

            <p>Ut viverra euismod est, et tempus ligula fringilla eget. Aliquam erat volutpat. Etiam ultrices, ex imperdiet egestas finibus, nibh felis lacinia purus, id interdum urna justo sed purus. Nam posuere sem a purus scelerisque, ut mollis purus pharetra. Maecenas dapibus, ex facilisis tristique consequat, massa massa cursus lectus, a pulvinar leo dui tincidunt eros. Aenean scelerisque lobortis mauris, sit amet cursus neque auctor ut. Morbi sagittis cursus aliquet. Sed at sapien lobortis, elementum ante quis, elementum arcu.</p>
        </div>


        <footer></footer>

    </body>
</html>
