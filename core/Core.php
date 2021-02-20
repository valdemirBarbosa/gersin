<?php
    class Core{
        public function executar(){
           $url = '/';
           if(isset($_GET['url'])){
              $url.= $_GET['url']; 
           }
           
           $params = array(); //parâmetro inicializado, caso não tenha nenhum, será vazio.

           //pegar controller, actio e parâmetro
           if(!empty($url) && $url != '/' ){ //verfificando se o array(url) não está vazio
                $url = explode('/', $url); //separando a url por barra
                
                //CONTROLLER
                array_shift($url); //ignorando a primeira posição do array[0], a posição [1] para a ser [0]
                $currentController = $url[0].'Controller'; //definindo o controller na primeira posição[0] alterada 

                //ACTION
                array_shift($url);
                if(isset($url[0]) && !empty($url[0])){
                    $currentAction = $url[0];
                }else{
                    $currentAction = 'index';
                }

                //PARÂMETROS
                array_shift($url);
                if(count($url) > 0 ){
                    $params = $url;
                }

                print_r($url);
                echo "<br/> <hr/>";
           }else{
               $currentController = 'homeController';
               $currentAction = 'index';

           }

           $c = new $currentController();
                call_user_func_array(array($c, $currentAction), $params);

        /*
        Trecho que mostra no navegador que está funcionando a url amigável - até as ações e seus parâmetros
           echo '<br/>CONTROLLER: '.$currentController;
           echo '<br/> ACTION: '.$currentAction;  
           echo '<br/> PARAMETROS: '.print_r($params, true).'<br/>'; 
           
        */


        }

    }

?>