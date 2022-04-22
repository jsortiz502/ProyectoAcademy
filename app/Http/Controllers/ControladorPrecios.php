<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Precios extends Controller {
    public function precios($costo){
        $precio1 = 3000;
        $precio2 = 9000;
        $precio3 = 25000;
        if($costo<10000){
            return 'Su producto no tiene ningun descuento';
        }
        elseif($costo>10000 and $costo<15000){
            return 'Su descuento es de el 2% y su total a pagar es' . $precio1;
        }
        elseif($costo>15000 and $costo<30000){
            return 'Su descuento es de el 3% y su total a pagar es' . $precio2;
        }
        elseif($costo>30000 and $costo <=50000){
            return 'Su descuento es del 4% y su total a pagar es' . $precio3;
        }
    }
}
