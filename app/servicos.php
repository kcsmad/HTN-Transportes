<?php
include("includes/header.php");
?>

<body>
    <div class="container">
        <div class="main-header">
            <div class="logo-header col-md-9">
                <a href="home.php"><img class="logo" src="images/htn-big-logo.png" /></a>
            </div>
            <div class="masthead col-md-12">
                <ul class="nav nav-justified">
                    <li class="active"><a href="servicos.php">Serviços</a></li>
                    <li><a href="veiculos.php">Veículos</a></li>
                    <li><a href="#">Preços</a></li>
                    <li><a href="clientes.php">Clientes</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        
        <div class="content">
            <div class="servico col-md-6">
                <img src="images/translado.jpg" class="thumbnail" width="100%" />
                <h2>Translados</h2>
                <p><span class="icone-service glyphicon glyphicon-plane"></span> Receptivo e translado de aeroportos, rodoviárias e hotéis.</p>
                <p><span class="icone-service glyphicon glyphicon-user"></span> Transporte de passageiros para eventos, congressos e feiras.</p>
                <p><span class="icone-service glyphicon glyphicon-briefcase"></span> Transporte de funcionários, segurados e executivos.</p>
            </div>
            
            <div class="servico col-md-6">
                <img src="images/aeroporto.jpg" class="thumbnail" width="100%" />
                <h2>Benefícios</h2>
                <p><span class="icone-service glyphicon glyphicon-check"></span> Atendimento personalizado.</p>
                <p><span class="icone-service glyphicon glyphicon-time"></span> Pontualidade.</p>
                <p><span class="icone-service glyphicon glyphicon-certificate"></span> Motoristas qualificados.</p>
            </div>
            
            <div class="clearfix"></div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>
</body>
</html>
