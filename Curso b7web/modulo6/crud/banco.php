<?php
//classe para conexão do banco de dados
class Banco {
    private $pdo; // guardar a conexão
    private $numRows; // guardar linhas da tabela
    private $array;

    public function __construct($host, $dbname, $dbuser, $dbpass) {
        try{
        $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $dbuser, $dbpass);
      }catch(PDOException $e) {
        echo "Falhou : ".$e->getMessage();
      }
    }

     public function query($sql) {

        $query = $this->pdo->query($sql); //faz a conexão e já executa a query recebida no metodo.
        $this->numRows = $query->rowCount();//Armazena na variavel a quantidade de linhas de uma Query.
        $this->array = $query->fetchAll();//pega todos os itens da Query.

     }

     public function result() {
       return $this->array;
     }

     public function numRows() { //Metodo que retorna o numero de linhas
        return $this->numRows;
     }

     public function insert($table, $data) {
        if(!empty($table) && (is_array($data) && count($data) > 0)) {
            $sql = "INSERT INTO ".$table." SET ";
            $dados = array();
            foreach($data as $chave => $valor) {
                $dados[] = $chave." = '".addslashes($valor)."'";
            }

            $sql = $sql.implode(", ", $dados);

            $this->pdo->query($sql);
        }
     }

     public function update($table, $data, $where = array(), $where_cond = "AND") {
        if(!empty($table) && (is_array($data) && count($data) > 0) && is_array($where)) {
            $sql = "UPDATE ".$table." SET ";
            $dados = array();
            foreach($data as $chave => $valor) {
                $dados[] = $chave." = '".addslashes($valor)."'";
            }
            $sql = $sql.implode(", ", $dados);

            if(count($where) > 0){
              $dados = array();
              foreach($where as $chave => $valor) {
                  $dados[] = $chave." = '".addslashes($valor)."'";
              }
              $sql = $sql." WHERE ".implode(" ".$where_cond." ", $dados);
            }
            $this->pdo->query($sql);
        }
     }

     public function delete($table, $where, $where_cond = "AND") {
        if(!empty($table) && (is_array($where) && count($where) > 0)) {
            $sql = "DELETE FROM ".$table;

            if(count($where) > 0){
              $dados = array();
              foreach($where as $chave => $valor) {
                  $dados[] = $chave." = '".addslashes($valor)."'";
              }
              $sql = $sql." WHERE ".implode(" ".$where_cond." ", $dados);
            }

            $this->pdo->query($sql);
        }
     }

}
 ?>
