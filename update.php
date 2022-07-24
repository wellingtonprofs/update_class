
<?php
class updatemarca {

  public $pasta_dir;
  public $arquivo_nome;
  public $tipo;
  public $modelo = 'image/gif';

  public function executar(){

              $arquivo = $_FILES['MARCA']['name'];   //"marca.gif"
              $tipo = $_FILES['MARCA']['type'];  
              $pasta_dir = "uploads/";

  $arquivo_nome = $pasta_dir . $arquivo;


  var_dump($tipo);

  // Confere formato de Imagen espessifica //
  if($tipo == $this->modelo) {
    
    move_uploaded_file($_FILES["MARCA"]['tmp_name'], $arquivo_nome);

    echo '<script type="text/javascript">alert("Salvo com Sucesso !");window.history.go(-1);</script>';

    return true;
  }
  else {

    echo "Imagens Somente Gif é Aceita";
    return true;

  }

  }
  
} // end class

$a = new updatemarca();
$a->executar();
       
        ?>