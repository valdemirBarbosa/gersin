<?php
class GaleriaController extends Controller{
    public function index(){
        $dados = array(
            'qtdeGaleria'=>105,
        );

        //$this->loadView('galeria', $dados);
        $this->loadTemplate('galeria', $dados);
    }
}
   
?>