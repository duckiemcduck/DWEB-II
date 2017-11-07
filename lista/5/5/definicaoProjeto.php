<?php
    class Projeto
    {
        static public $hostServidor = "mariadb";
        static public $portaServidor = "3306";
        static public $usuario = "root";
        static public $senha = "admin";
        static public $nomeDoBanco = "ifsc";
        static public $nomeDaTabela = "exercicio5";
        static public $conexao;

        public function cadastrar($nome,$preco)
        {
            $nome =  static::$conexao->escape_string($nome);
            $preco =  static::$conexao->escape_string($preco);
            $tabela = static::$nomeDaTabela;
            $sql = "INSERT $tabela (Produto, valor)
                    VALUES ('$nome', $preco)";
            $resultado = static::$conexao->query($sql) or die (static::$conexao->error);
            echo "cadastro realizado";
            
        }

        public function criarTabela()
        {
            $tabela = static::$nomeDaTabela;
            $sql = "CREATE TABLE IF NOT EXISTS $tabela
            (
                Produto VARCHAR(20) PRIMARY KEY,
                valor DECIMAL(3,2)
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