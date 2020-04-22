<?php 


class Frutas
{
	public $name;
	public $color;
    
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

     function FnRecuperaNombreFruta()
     {
     	return $this->name;
     }

     function FnRecuperaColorFruta()
     {
     	return $this->color;
     }

     function FnResultado()
     {
     	$fruta = $this->FnRecuperaNombreFruta();
     	$color = $this->FnRecuperaColorFruta();
     	return 'La fruta se llama '.$fruta.' y es de color '.$color.'<br>';
     }
}

 ?>