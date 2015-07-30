<?php

   class Broj {
   var $br;
   function __construct($br) {
        if(!is_int($br)){
            throw new Exception("2 the field is not integer."); 
        }
        else if($br < 3){
            throw new Exception("1 no devideable numbers."); 
        }
        else
        {
            $this->br = $br;
            for($i = 3; $i <= $this->br; $i++){
                if ($i % 3 == 0){
                    echo $i;
                }
            }
        }
   }
   
   
}