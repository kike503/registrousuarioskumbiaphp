<?php
   Load::models('usuarios');
   class UsuariosController extends AppController{
       public function index ($nombres=''){
           View::template('principal');
           $this->listUsuarios = (new Usuarios)->getUsuarios($page=1);
       }
       public function registrar(){
        View::template('principal');
    }
    public function borrar($id){
        View::select(null);
    }
    public function guardar(){
     if(input::hasPost('usuarios')){
         $usuarios = new Usuarios (Input::post('usuarios'));  
         if(!$usuarios->create()){
             Flash::error('fallo al guardar');
         }else{
             Flash::valid('Operacion exitosa');
             Input::delete();
             return Redirect::to();
         }
     }
    }
    public function editar($id){
        View::template('principal');
    }
   } 

