<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Micontroller extends Controller {
    public function helados($opcion){
        if($opcion==1){
            return 'Su helado es de Chocolate con con galletas con un valor de $500';
        }
        elseif($opcion==2){
            return 'Su helado es de Brownie con salsa de mora y barquillo de $1000';
        }
        elseif($opcion==3){
            return 'Su helado es de Delicatessen con ciruelas y manis y creama de vainillas de 1500';
        }
        else{
            return 'Este opcion es inexistente';
        }

    }
}

class Topping extends Controller {
    public function toppings($topping){
        if($topping==500){
            return 'Su helado tiene galletas';
        }
        elseif($topping==1000){
            return 'Su helado tiene salsa de mora';
        }
        elseif($topping==1500){
            return 'Su helado tiene barrilete y galletas';
        }
    }
}
