<?php
    function tabuada($tabuada){
        $cont = 1;
        $resultado = '';
     
        while ($cont <= 10){
             $resultado .= '<tr><td>' . $tabuada . 'x' . $cont . ' = ' . ($tabuada * $cont) . '</td></tr>';
           $cont++;
        }
     
        return $resultado;
     }
    $tabela = "";
    $add = 1;
    while ($add <=10) {
      $tabela .= '<table border="1";>';
      $tabela .= tabuada($add);
      $tabela .= '</table>';
    $add++;
    }
    
    
     
     echo $tabela;

?>