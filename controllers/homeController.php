<?php
class HomeController extends Controller{

    public function index(){
       $denuncia = new Denuncia();
       $usuario = new Usuario();
       $userAll = new Usuario();

      
       $dados = array(
        'qtd'=>$denuncia->getQtdeDenuncia(),
        'email' => $usuario->getUsuario(),
        'senha' => $usuario->getSenha()
        ); 

        $this->loadTemplate('home', $dados);
    }
    

    public function teste(){
        echo 'Este é um teste';
    }
}

