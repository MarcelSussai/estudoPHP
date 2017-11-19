<?php 
// Métodos Estáticos!
require_once './var_util.php';
class CPF {
    private $numero;
    public function setNumero($v) {
        $resultado = CPF::validarCPF($v);
        if($resultado === false) {
            throw new Exception("CPF INVÁLIDO",1);
        }

        $this->numero = $v;
    }
    public function getNumero() {
        return $this->numero;
    }

    public static function validarCPF($cpf):bool {

        // Verifica se um número foi passado.
        if(empty($cpf)) return false;

        // Elimina Possivel Máscara
        // $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
        // ou
        $cpf = preg_replace('[^0-9]', '', $cpf);
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

        // verifica se o numero de digitos é igual a 11
        if(strlen($cpf)!=11) {
            return false;
        }

        // Verifica se foi digitado algo assim, caso sim, retorna falso
        else if($cpf == '00000000000' || 
                $cpf == '11111111111' || 
                $cpf == '22222222222' || 
                $cpf == '33333333333' || 
                $cpf == '44444444444' || 
                $cpf == '55555555555' || 
                $cpf == '66666666666' || 
                $cpf == '77777777777' || 
                $cpf == '88888888888' || 
                $cpf == '99999999999') {
        return false;
        }
        // Calcula os digitos verificados pra verificar se o CPF é válido.
        else {
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }
        return true;
        }
    }
}
// assim
$teste = new CPF;
var_dump($teste->setNumero("34240696801"));
echo
// ou
var_dump(CPF::validarCPF("34240696801"));