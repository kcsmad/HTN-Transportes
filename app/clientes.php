<?php include("includes/header.php"); ?>

<body>
    <div class="container">
        <div class="main-header">
            <div class="logo-header col-md-9">
                <a href="home.php"><img class="logo" src="images/htn-big-logo.png" /></a>
            </div>
            <div class="masthead col-md-12">
                <ul class="nav nav-justified">
                    <li><a href="servicos.php">Serviços</a></li>
                    <li><a href="veiculos.php">Veículos</a></li>
                    <li><a href="#">Preços</a></li>
                    <li class="active"><a href="clientes.php">Clientes</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        
        <div class="content">
            <div class="clientes col-md-12">
                <div class="page-header">
                    <h1>Clientes</h1>
                </div>
                
                <div class="col-md-3">
                    <a href="http://www.odebrecht.com.br" target="_blank"><img width="100%" class="thumbnail" src="images/clientes/odebrecht-logo.png" alt="Odebrecht" /></a>
                </div>
                <div class="col-md-3">
                     <a href="http://www.odebrechtoilgas.com/" target="_blank"><img width="100%" class="thumbnail" src="images/clientes/odebrecht-oog-logo.png" alt="Odebrecht Oil and Gas" /></a>
                </div>
                <div class="col-md-3">
                     <a href="http://www.sotrade.com.br" target="_blank"><img width="40%" class="thumbnail" src="images/clientes/sotrade-logo.png" alt="Sotrade" /></a>
                </div>
            </div>
            
            <div class="clearfix"></div>
        </div>
    </div>
    
    <?php include("includes/footer.php"); ?>
</body>
</html>