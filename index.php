<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="css/style.css">
        
        <title></title>
        
    </head>
    <body>
        <?php
         require_once 'header.php';
        ?>


        <div class="content">
            <div class="box_content pedido">
                <h2>Faça já o seu pedido Online</h2>
                <p>Faça seu cadastro e comece agora a utilizar os nossos serviços</p>
                <span class="button">CADASTRAR</span>
            </div>
         
        </div>

        <div class="cadastro">
            <div class="box_cadastro">
                
                <label class="col-sm-2 col-lg-2">Nome:</label> <div class="col-sm-10 col-lg-10"><input class= " form-control" type="text" maxlength="100" /></div>
                <label class="col-sm-2 col-lg-2">E-mail:</label><div class="col-sm-10 col-lg-10"><input class="form-control" type="email" maxlength="150" /></div>
                <label class="col-sm-2 col-lg-2">CPF:</label><div class="col-sm-4  col-lg-4"> <input class="form-control " type="number" maxlength="11" /></div>
                <label class="col-sm-1 col-lg-1">RG:</label><div class="col-sm-4 col-lg-4"> <input class="form-control" type="number" maxlength="10" /></div>
                <label class="col-sm-2 col-lg-2">Bairro:</label><div class="col-sm-10 col-lg-10"> <input class="form-control" type="text" maxlength="200" /></div>
                <label class="col-sm-2 col-lg-2">Endereço:</label><div class="col-sm-10  col-lg-10"> <input class="form-control" type="text" maxlength="250" /></div>
                <label class="col-sm-2 col-lg-2">Numero:</label><div class="col-sm-10  col-lg-10"> <input class="form-control" type="text" maxlength="5" /></div>
                <label class="col-sm-2 col-lg-2">Telefone:</label> <div class="col-sm-4  col-lg-4"> <input class="form-control" type="text" maxlength="20" /></div>
                <label class="col-sm-1 col-lg-1">Celular:</label> <div class="col-sm-4  col-lg-4"> <input class="form-control" type="text" maxlength="22" /></div>
            </div>
        </div>

        <div class="coments">
            <div class="social_medias facebook_posts">O que estão falando no facebook</div>
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
