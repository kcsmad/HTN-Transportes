<?php include("includes/header.php"); ?>

<body>
    <div class="container">
        <div class="main-header">
            <div class="logo-header col-md-9">
                <img class="logo" src="images/htn-logo5.png" />
            </div>
            <div class="masthead col-md-12">
                <ul class="nav nav-justified">
                    <li><a href="home.php">Início</a></li>
                    <li><a href="servicos.php">Serviços</a></li>
                    <li><a href="#">Veículos</a></li>
                    <li><a href="#">Preços</a></li>
                    <li><a href="#">Clientes</a></li>
                    <li class="active"><a href="contato.php">Contato</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="content">
            <div class="form-container col-md-8">
                <form action="" method="POST">
                    <h2>Você também pode nos enviar um e-mail!</h2>
                    <h3>Basta preencher as informações abaixo.</h3>
                    <div class="mail-form input-group">
                        <label class="form-label" for="nomeInput">Nome</label>
                        <input type="text" class="nomeInput form-input form-control" id="nomeInput" />
                    </div>
                    <div class="mail-form input-group">
                        <label class="form-label" for="emailInput">Email</label>
                        <input type="text" class="emailInput form-input form-control" id="emailInput" />
                    </div>
                    <div class="mail-form input-group">
                        <label class="form-label" for="assuntoInput">Assunto</label>
                        <select class="form-control form-input assuntoInput" id="assuntoInput">
                            <option>Contratar</option>
                            <option>Informação</option>
                            <option>Dúvidas</option>
                            <option>Reclamação</option>
                        </select>
                    </div>
                    <div class="mail-form input-group">
                        <label class="form-label" for="mensagemInput">Mensagem</label>
                        <textarea class="form-control form-input mensagemInput" rows="5" cols="20"></textarea>
                    </div>
                    <div class="mail-form input-group">
                        <button type="submit" class="btn btn-primary">
                            <span class="glyphicon glyphicon-envelope"></span> Enviar
                        </button>
                    </div>
                </form>
            </div>
            <div class="outros-contatos col-md-4">
                <h2>Telefones</h2>
                <p><span class="glyphicon glyphicon-phone-alt"></span> (021) 2222-2222</p>
                <p><span class="glyphicon glyphicon-earphone"></span> (021) 9999-9999</p>
            </div>
        </div>
    </div>
<?php include("includes/footer.php"); ?>
</body>
</html>