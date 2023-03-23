<?php

class DateTimeFormat{

    public static function HowTimeAgo($date) {
    
        $interval = $date->diff(new \DateTime(date("Y-m-d H:i:s")));

        $date_elements = array( 'y'=> [0 => ' año', 1 => ' años'],
                                'm'=> [0 => ' mes', 1 => ' meses'],
                                'd'=> [0 => ' día', 1 => ' días'],
                                'h'=> [0 => ' hora', 1 => ' horas'],
                                'i'=> [0 => ' minuto', 1 => ' minutos'],
                                's'=> [0 => ' segundo', 1 => ' segundos']);

        $formatted_date = "Hace";

        foreach($date_elements as $key=> $element){  
            if($interval->$key != 0){
                if($interval->$key > 1){
                    $formatted_date.= ' '.$interval->$key.$element[1];
                }else{
                    $formatted_date.= ' '.$interval->$key.$element[0];
                }
                
                //Puede comentar esta condición si desea que devuelva todos los intervalos Ej: 1 año 4 meses 5 horas 7 minutos 20 segundos
                if($key == 'y' || $key == 'm' || $key == 'd' || $key == 'h' || $key == 'i'){
                    break;
                }
                
            }elseif($key == 's'){
                $formatted_date.= ' '.$interval->$key.$element[1]; // 0 segundos ó Hace unos instantes
            }  
        }
        return $formatted_date;
    }
}