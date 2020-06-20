<?php
class productos extends controllers
{
    public function __construct(){
        parent::__construct();

    }
    public function productos()
    {
      $data['page_id'] = 2;
      $data['page_tag'] = "Procuctos ";
      $data['page_title'] = "Productos en venta";
      $data['page_name'] = "Productos";
      
            $this->views->getview($this,"productos", $data);
    }
    
    

}
?>