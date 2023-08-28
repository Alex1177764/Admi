<?php

class AdministradorController {

    public function index(){
       require_once('views/components/layout/head.php');
       require_once('views/administrador/index.php');
       require_once('views/components/layout/footer.php');
    }

    public function show(){
        require_once('views/components/layout/head.php');
       require_once('views/administrador/show.php');
       require_once('views/components/layout/footer.php');
       }
    public function edit(){
        
    }
    public function create(){
       
    }
    public function destroy(){
        
    }
    
}