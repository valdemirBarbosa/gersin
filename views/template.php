<!DOCTYPE html>
<html lang="en">
<head>

    <link href="<?php echo BASE_URL; ?>assets\css\style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo BASE_URL;?>js/script.js"></script> 
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GERSIND</title>
</head>
<body>
    
    <h1><strong><div class id="teste">Gerenciador de Processos de Sindicância</strong></h1></div>

    <p><a href="<?php echo BASE_URL; ?>">home</a></p> 
    <p><a href="<?php echo BASE_URL; ?>galeria">galeria</a></p>
    
    <hr/>

    <?php $this->loadViewInTemplate($viewName, $viewData); ?>    

</body>
</html>