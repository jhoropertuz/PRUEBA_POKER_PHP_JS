<?php
    class Poker{
        public function esEscalera($cartas){
            /* DEFINIR SI UNA LISTA DE CARTAS CONTIENE ESCALERAS*/
            $nCartas=count($cartas);
            if($nCartas>=5 && $nCartas<=7 ){
            $countEscala=1;
            if(in_array(14,$cartas)){array_push($cartas,1);$nCartas++;}
            sort($cartas);
            for($posicionCarta=0;$posicionCarta<$nCartas;$posicionCarta++){
                if($posicionCarta>0){
                    if($cartas[$posicionCarta-1]+1==$cartas[$posicionCarta]){
                        $countEscala++;
                        if($countEscala==5)return true;
                    }else{
                        $countEscala=1;
                    }
                }
            }
                return false;
            }else{
                return false;
            }
        }

    }
?>