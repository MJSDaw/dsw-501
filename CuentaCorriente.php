<?php
    class CuentaCorriente {
        private $numeroCuenta;
        private $nombreTitular;
        private $importeDisponible;

        public function __construct()
        {
            $num = func_num_args();

            if($num === 0){
                // Por defecto
                $this->numeroCuenta = 1234;
                $this->nombreTitular = "Anónimo";
                $this->importeDisponible = 0;
            } else if($num === 3) {
                // 3 parámetros
                $this->numeroCuenta = func_get_arg(0);
                $this->nombreTitular = func_get_arg(1);
                $this->importeDisponible = func_get_arg(2);
            } else {
                // Diferente caso
                echo "Error: Número de parámetros incorrecto al instanciar la clase CuentaCorriente";
                die;
            }
        }

        public function ingresarDinero(float $cantidad){
            $this->importeDisponible += $cantidad;
        }
        public function retirarDinero(float $cantidad){
            if($cantidad <= $this->importeDisponible){
                $this->importeDisponible -= $cantidad;
            } else {
                echo "Saldo insuficiente";
            }
        }
        public function transferirDinero(CuentaCorriente $destino, float $importe){
            if($importe <= $this->importeDisponible){
                $this->importeDisponible -= $importe;
                $destino->importeDisponible += $importe;
                return $destino;
            } else {
                echo "Saldo insuficiente";
            }
        }
        public function consultarSaldo(){
            echo $this->importeDisponible;
        }
    }
?>