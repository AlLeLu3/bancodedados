<?php
define("MYSQL_HOST","localhost");
define("MYSQL_DBNAME","bd_musical");
define("MYSQL_USER","root");
define("MYSQL_PASSWORD","");
class BD{
    private $conexao;
    public function_construct() {
        $this->conexao = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD);
        $banco = mysql_select_db(MYSQL_DBNAME, $this->conexao);

    }
    public function consultar($select){
        $query = mysql_query($select, $this->conexao);
        $dados = array();
        while($retorno = @mysql_fetch_array($query)){
            $dados[] = $retorno;
        }
        return $dados;
    }
    public function alterar($sql){
        $retornoExecucao = mysql_query($sql, $this->conexao);
        return $retornoExecucao;
    }
    public function_destruct(){
        @mysql_close($this->conexao);
    }
}
?>