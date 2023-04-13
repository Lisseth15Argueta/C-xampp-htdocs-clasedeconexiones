<?php
class Abecedario{
    public function deletrear(){
        echo "El ";
    }
}
class ABCDEFGHI extends Abecedario{
    public $letras;
    public function __construct($_letras){
        $this->letras=$_letras;
    }
    public function deletrear(){
        echo $this->letras." deletrear la letra, A, B, C, D, E, F, G, H, I!!";
    }

}
class JKLMNÑOPQ extends Abecedario{
    public $letras;
    public function __construct($_letras){
        $this->letras=$_letras;
    }
    public function deletrear(){
        echo $this->letras." deletrear la letra, J, K, L, N, Ñ, O, P, Q!!";
    }
}

class RSTUVWXYZ extends Abecedario{
    public $letras;
    public function __construct($_letras){
        $this->letras=$_letras;
    }
    public function deletrear(){
        echo $this->letras." deletrear la letra, R, S, T, U, V, W, X, Y, Z!!";
    }
}
function deletrearAbecedario(Abecedario $abecedario, $abecedario2, $abecedario3){
    $abecedario->deletrear();
    $abecedario2->deletrear();
    $abecedario3->deletrear();
}
$abecedario1 = new ABCDEFGHI("abecedario1");
$abecedario2 = new JKLMNÑOPQ("abecedario2");
$abecedario3 = new RSTUVWXYZ("abecedario3");

?>
<script>
var msg = new SpeechSynthesisUtterance("<?php deletrearAbecedario($abecedario1, $abecedario2, $abecedario3) ?> ");
window.speechSynthesis.speak(msg);
</script>
<?php


