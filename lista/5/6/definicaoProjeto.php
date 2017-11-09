<?php
    class Projeto
    {
        static public $hostServidor = "mariadb";
        static public $portaServidor = "3306";
        static public $usuario = "root";
        static public $senha = "admin";
        static public $nomeDoBanco = "ifsc";
        static public $nomeDaTabela = "exercicio6";
        static public $conexao;

        public function cadastrar($matricula,$nome,$salario,$tempoServico)
        {
            $matricula =  static::$conexao->escape_string($matricula);
            $nome =  static::$conexao->escape_string($nome);
            $salario = static::$conexao->escape_string($salario);
            $tempoServico = static::$conexao->escape_string($tempoServico);
            $tabela = static::$nomeDaTabela;
            $sql = "INSERT $tabela (matricula, nome, salario, tempoServico)
                    VALUES ('$matricula', '$nome', $salario, $tempoServico)";
            $resultado = static::$conexao->query($sql) or die (static::$conexao->error);
            echo "cadastro realizado";
            
        }
        public function paraReal($valor)
        {
            return "R$" . number_format($valor, 2, ',', '.');
        }
        public function atualizarSalario($matricula, $salario)
        {
            $matricula =  static::$conexao->escape_string($matricula);
            $salario = static::$conexao->escape_string($salario);

            $sql = "UPDATE exercicio6
                    SET salario=$salario
                    WHERE matricula = '$matricula'";
            $resultado = static::$conexao->query($sql) or die (static::$conexao->error);
        }
        public function calculoSalario($salarioBase, $anos)
        {
            if($anos < 10)
            {
                return $salarioBase + ($salarioBase * 0.05 * $anos);
            }
            return $salarioBase + ($salarioBase * 0.50); 
        }
        public function retornarLista()
        {
            $tabela = static::$nomeDaTabela;
            $sql = "SELECT matricula,nome,salario,tempoServico FROM $tabela";
            $resultado = static::$conexao->query($sql) or die (static::$conexao->error);
            $dados = $resultado->fetch_all();
            if(empty($dados))
            {
               echo "Não há dados";
               return;
            }
            echo "<div class='resultados'>";
            echo "<div>Empregados:</div>";
            foreach($dados as $index => $row)
            {
                $salario = self::calculoSalario($row[2],$row[3]);
                echo "<div>matricula: ", $row[0], " | nome: ", $row[1], " | salario:", self::paraReal($salario),"</div>";
            }
            echo "</div>";
        }
        public function criarTabela()
        {
            $tabela = static::$nomeDaTabela;
            $sql = "CREATE TABLE IF NOT EXISTS $tabela
            (
                matricula VARCHAR(20) PRIMARY KEY,
                nome varchar(255),
                salario DECIMAL(8,2),
                tempoServico integer
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