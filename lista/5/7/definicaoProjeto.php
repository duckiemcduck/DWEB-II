<?php
    class Projeto
    {
        static public $hostServidor = "mariadb";
        static public $portaServidor = "3306";
        static public $usuario = "root";
        static public $senha = "admin";
        static public $nomeDoBanco = "ifsc";
        static public $nomeDaTabela = "exercicio7";
        static public $conexao;

        public function cadastrar($fabricante,$modelo,$preco,$fabricacao,$estado)
        {
            $fabricante =  static::$conexao->escape_string($fabricante);
            $modelo =  static::$conexao->escape_string($modelo);
            $preco = static::$conexao->escape_string($preco);
            $fabricacao = static::$conexao->escape_string($fabricacao);
            $estado = static::$conexao->escape_string($estado);
            $tabela = static::$nomeDaTabela;
            $sql = "INSERT $tabela (fabricante, modelo, preco, fabricacao, estado)
                    VALUES ('$fabricante', '$modelo', $preco, $fabricacao, $estado)";
            $resultado = static::$conexao->query($sql) or die (static::$conexao->error);
            echo "cadastro realizado";
        }
        public function paraReal($valor)
        {
            return "R$" . number_format($valor, 2, ',', '.');
        }
        public function retornarLista($data)
        {
            $tabela = static::$nomeDaTabela;
            $data = static::$conexao->escape_string($data);
            $sql = "SELECT fabricante,modelo,preco FROM $tabela WHERE fabricacao = $data AND estado=1";
            if($data == -1)
            {
                $sql = "DELETE FROM $tabela WHERE fabricacao < 2013"; 
                $resultado = static::$conexao->query($sql) or die (static::$conexao->error);
                echo "Dados limpos";
                return;
            }
            if(empty($data))
            {
                $sql = "SELECT fabricante,count(modelo),sum(preco) as carros_novos,fabricacao FROM $tabela WHERE estado=0 GROUP BY fabricante "; 
                $resultado = static::$conexao->query($sql) or die (static::$conexao->error);
                $dados = $resultado->fetch_all();
                if(empty($dados))
                {
                   echo "Não há dados";
                   return;
                }
                foreach($dados as $index => $row)
                {
                    echo "<div>Fabricante: ", $row[0], " | Carros Novos: ", $row[1], " | Preco:", self::paraReal($row[2]),"</div>";
                }
                return;
            }

            $resultado = static::$conexao->query($sql) or die (static::$conexao->error);
            $dados = $resultado->fetch_all();
            if(empty($dados))
            {
               echo "Não há dados";
               return;
            }
            echo "<div class='resultados'>";
            echo "<div>Dados:</div>";
            foreach($dados as $index => $row)
            {
                echo "<div>Fabricante: ", $row[0], " | Modelo: ", $row[1], " | Preco:", self::paraReal($row[2]),"</div>";
            }
            echo "</div>";
        }
        public function criarTabela()
        {
            $tabela = static::$nomeDaTabela;
            $sql = "CREATE TABLE IF NOT EXISTS $tabela
            (
                id int PRIMARY KEY AUTO_INCREMENT,
                fabricante VARCHAR(20),
                modelo varchar(255),
                preco DECIMAL(8,2),
                fabricacao integer,
                estado smallint
            )";
            $resultado = static::$conexao->query($sql) or die(static::$conexao->error);
            return $resultado;
        }
        public function conectar()
        {
            $nomeBanco = static::$nomeDoBanco;
            $sql = "CREATE DATABASE IF NOT EXISTS $nomeBanco";
            $host = static::$hostServidor;
            $usuario = static::$usuario;
            $senha = static::$senha;

            $conexao = new mysqli($host,$usuario,$senha) or exit(static::$conexao->error);
            $conexao->set_charset("utf8");
            $conexao->query($sql) or exit($conexao->error);
            $conexao->select_db($nomeBanco);
            static::$conexao = $conexao;
            static::criarTabela();
        }
        public function encerrarConexao()
        {
            static::$conexao->close();
        }
    }
?>