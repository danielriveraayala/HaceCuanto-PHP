<?php

date_default_timezone_set('America/Mexico_City');

class HaceCuanto{
 
    public function imprimirTiempo($fecha,$hora = '00:00:00'){
      if($fecha > date('Y-m-d')){
        return "Error: La fecha debe ser menor a hoy.";
      }elseif ($hora > date('H:m:s')) {
        return "Error: La hora debe ser menor a hoy.";
      }

        $start_date = new DateTime($fecha." ".$hora);
        $since_start = $start_date->diff(new DateTime(date("Y-m-d")." ".date("H:i:s")));
        $impresion_pantalla = "";
        $impresion_pantalla .= "Hace ";
        if($since_start->y==0){
            if($since_start->m==0){
                if($since_start->d==0){
                   if($since_start->h==0){
                       if($since_start->i==0){
                          if($since_start->s==0){
                             $impresion_pantalla .= $since_start->s.' segundos';
                          }else{
                              if($since_start->s==1){
                                 $impresion_pantalla .= $since_start->s.' segundo'; 
                              }else{
                                 $impresion_pantalla .= $since_start->s.' segundos'; 
                              }
                          }
                       }else{
                          if($since_start->i==1){
                              $impresion_pantalla .= $since_start->i.' minuto'; 
                          }else{
                            $impresion_pantalla .= $since_start->i.' minutos';
                          }
                       }
                   }else{
                      if($since_start->h==1){
                        $impresion_pantalla .= $since_start->h.' hora';
                      }else{
                        $impresion_pantalla .= $since_start->h.' horas';
                      }
                   }
                }else{
                    if($since_start->d==1){
                        $impresion_pantalla .= $since_start->d.' día';
                    }else{
                        $impresion_pantalla .= $since_start->d.' días';
                    }
                }
            }else{
                if($since_start->m==1){
                   $impresion_pantalla .= $since_start->m.' mes';
                }else{
                    $impresion_pantalla .= $since_start->m.' meses';
                }
            }
        }else{
            if($since_start->y==1){
                $impresion_pantalla .= $since_start->y.' año';
            }else{
                $impresion_pantalla .= $since_start->y.' años';
            }
        }

        return $impresion_pantalla;
    }
}



$obj = new HaceCuanto();
echo $obj->imprimirTiempo('2019-09-26','21:06:00');