<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class contaBanco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function abrirConta($t) {
            $this->setTipo($t);
            $this->setStatus(true);

            if ($t == "CC") {
                $this->setSaldo(50);
            } 
            
            elseif ($t == "CP") {
                $this->setSaldo(150);
            }
        }

        public function fecharConta() {
            if ($this->getSaldo() > 0) {
                echo "<p>Conta ainda tem dinheiro, não posso fechá-la.";
            } 
            elseif ($this->getSaldo() < 0) {
                echo "<p>Conta com saldo negativo</p>";
            }
            else {
                $this->setStatus(false);
            }

        }

        public function depositar($v) {
            if ($this->getStatus()) {
                $this->setSaldo($this->getSaldo() + $v);
            }
            else {
                echo "<p>Conta fechada. Sem possibilidade de depósito</p>";
            }
        }

        public function sacar($v) {
            if($this->getStatus()) {
                if ($this->getSaldo() > $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                }
                else {
                    echo "<p>Saldo insufuciente</p>";
                }
            }
            else {
                echo "<p>Conta inexistente.</p>";
            }

        }

        public function pagarMensal() {
            if($this->getTipo() == "CC") {
                $v = 12;
            }
            else if ($this->getTipo() == "CP") {
                $v = 20;
            }
            if($this->getStatus()) {
                $this->setSaldo($this->getSaldo() - $v);
            }
            else {
                echo "<p>Problemas com a conta.</p>";
            }
        }

        // Métodos especiais

        public function __construct() {
            $this->setSaldo(0);
            $this->setStatus(false);
        }

        function getNumConta() {
            return $this->numConta;
        }

        function setNumConta($numConta) {
            $this->numConta = $numConta;
        }

        function getTipo() {
            return $this->tipo;
        }

        function setTipo($tipo) {
            $this->tipo = $tipo;
        }

        function getDono() {
            return $this->dono;
        }

        function setDono($dono) {
            $this->dono = $dono;
        }

        function getSaldo() {
            return $this->saldo;
        }

        function setSaldo($saldo) {
            $this->saldo = $saldo;
        }

        function getStatus() {
            return $this->status;
        }

        function setStatus($status) {
            $this->status = $status;
        }
    }
    ?>
</body>
</html>