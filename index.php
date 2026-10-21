<?php 

class Pessoa{

    private string $nome;
    private int $idade;
    private int $cpf;

    public function __construct(
        string $nome, 
        int $idade,
        int $cpf)
    {
        $this ->nome = $nome; 
        $this ->idade = $idade;
        $this ->cpf = $cpf;
    }
}

$pessoa01 = new Pessoa('Ângelo', 23, 19823256578);


?>

<?php 

class Produto{
      private string $nomeProduto;
      private float $preço;
      private int $quantidade;
      private string $categoria;

 public function __construct(

      string $nomeProduto,
      float $preço,
      int $quantidade,
      string $categoria,
) {
    $this ->nomeProduto = $nomeProduto;
    $this ->preço = $preço;
    $this ->quantidade = $quantidade;
    $this ->categoria = $categoria;
}
    public function pegarNome(){
       return $this ->nome;
    }
    public function pegarNome(){
        return $this ->preço;
     }
     public function pegarNome(){
        return $this ->quantidade;
     }
     public function pegarNome(){
        return $this ->categoria;
     }
     
  
}




}

$produto = new Produto('Energetico' , 10, 90, 'bebida');0




?>