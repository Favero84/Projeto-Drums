<?php
require 'config.php';
require 'classes/Usuarios.php';

$u = new Usuarios();

if(isset($_POST['name']) && !empty($_POST['name'])) {
    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $message = addslashes($_POST['message']);
    
    $u->addMensagem($name, $email, $message);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PROJETO DRUMS</title>
        <meta charset="UTF-8">
        <meta id="viewport" name="viewport" content="width=device-width, user-scalable=no">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/style.css" rel="stylesheet" />
    </head>
    <body>
        
        <div class="menulogcad">
            <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a href="./" class="navbar-brand">Seja Bem Vindo Batera</a>
                        </div>
                        <nav>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="cadastre-se.php">Cadastre-se</a></li>
                                <li><a href="login.php">Login</a></li>
                            </ul>
                        </nav>    
                    </div>  
                </nav>
        </div>
        
        <div class="bannertopo">
            <div class="titulotopo"></div>
            <div class="imgbanner">    
                <img src="assets/images/bg-top.jpg" class="img-responsive"/>
            </div>    
        </div>
        
        <div class="menuprincipal">
            
            <nav>  
                <ul>
                    <li>Home</li>
                    <li>Fotos</li>
                    <li>Conteudo</li>
                </ul>   
            </nav> 
        </div>
        
        <div class="imgmain">
            <img src="assets/images/main.jpg" class="img-responsive"/>
        </div>   
        
            <div id="cardapio" class="cardapio">
            <div class="titulocardapio"><strong>M e n u</strong></div>
            <div class="gradescardapio">
                <div class="cardapiograde1">
                    <img src="assets/images/renown3.jpg" width="345" />
                    <img src="assets/images/renown2.jpg" width="345" />
                    <img src="assets/images/renown3.jpg" width="345" />
                </div>
                <div class="cardapiograde2">
                    <img src="assets/images/renown2.jpg" width="345" />
                    <img src="assets/images/renown3.jpg" width="345" />
                    <img src="assets/images/renown2.jpg" width="345" />
                </div>
            </div>
        </div>
        <div id="cardapio2" class="cardapio">
            <div class="gradescardapio">
                <div class="cardapiograde1">
                    <img src="assets/images/pearl-maple-1.jpg" width="350" />
                    <img src="assets/images/pearl-maple-2.jpg" width="350" />
                    <img src="assets/images/pearl-maple-4.jpg" width="350" />
                </div>
                <div class="cardapiograde2">
                    <img src="assets/images/pearl-maple-3.jpg" width="350" />
                    <img src="assets/images/pearl-maple-4.jpg" width="350" />
                    <img src="assets/images/pearl-maple-1.jpg" width="350" />
                </div>
            </div>
        </div>
        
        <div id="auxiliar" class="auxiliar">
            
            <div class="gradescardapio">
                <div class="auxiliarfotos">
                    <img src="assets/images/renown3.jpg" width="350" />
                    <img src="assets/images/renown2.jpg" width="350" />
                    <img src="assets/images/renown4.jpg" width="350" />
                    <img src="assets/images/renown1.jpg" width="350" />
                    <img src="assets/images/renown3.jpg" width="350" />
                    <img src="assets/images/renown2.jpg" width="350" />
                    <img src="assets/images/renown4.jpg" width="350" />
                    <img src="assets/images/renown1.jpg" width="350" />
                </div>    
            </div>
        </div>
        
        <div id="contato" class="contato">
            <div class="titulocontato"><strong>C o n t a t o</strong></div>
            
            <form method="POST">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="name" class="form-control" name="name" id="name" />
                </div>
                <br/>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" />
                </div>
                <br/>
                <div class="form-group">
                    <label for="message">Mensagem</label>
                    <textarea name="message" id="message" class="form-control"></textarea>
                </div>
                <br/>
                <div class="botao">
                    <button type="submit" class="btn btn-default">Enviar Mensagem</button>
                </div>    
             </form>
        </div>
        
        <div class="rodapecafe">
            <div class="textoroda">
                Copyright @ CAFEHOME - Luiz Carlos Favero Junior
            </div>
        </div>
        
    </body>
</html>

