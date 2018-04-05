<?php 
    $mass = [-1,-5,3,6,8,45,-3,54,6,7,-6,7,8,-4,5,6,7,16];
    $perem = 1;
    $mass_number = [];
    echo 'Исходные данные: '.json_encode($mass);

    for ($i = 0; $i < counts($mass); $i++){
        if($i+1 >= counts($mass)-1){break;}
        for ($j = $i+1; $j < counts($mass); $j++){
            if ($mass[$i] == $mass[$j] && $i != $j){                
                $perem++;
            }
        }
        if ($perem > 1){
            if (!in_array_custom($mass_number, $mass[$i])){
                $mass_number[] = $mass[$i];                     
            }      
        }
        $perem = 1;
    }

    if (!$mass_number){
        echo '<br> Нет чисел встречающихся больше 1 раза';
    }else {
        echo '<br> Ответ: '.json_encode($mass_number);
    }
    function counts($mass){
        $i = 1;            
        while ($mass[$i].'' != ''){
            $i++;
        }
        return $i;
    }

    function  in_array_custom ($mass, $perem){
        if (!$mass){return false;}
        for ($i = 0; $i < counts($mass); $i++){
            if ($mass[$i] == $perem){
                return true;
            }
        }
        return false;
    }
?>