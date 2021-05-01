<?php

function createNameCode($name, $code) 
{
    return [
        'name'=>$name , 
        'code'=>$code,
    ];
}

$data = [];

$data[] = 
[
    'name'     =>   'Amcor',
    'brand'    =>   9,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('cool',  1),
            createNameCode('heat',  2),
            createNameCode('fan',   3),
            createNameCode('dry',   4),    
            createNameCode('auto',  5),
    ],

    "fan"       => 
    [
            createNameCode('auto',  0),
            createNameCode('min',   1),
            createNameCode('med',   2),
            createNameCode('max',   3),
            createNameCode('auto',  4),
    ],	
];

$data[] = 
[
    'name'     =>   'argo',
    'brand'    =>   10,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('cool',  0),
            createNameCode('heat',  4),
            createNameCode('dry',   1),    
            createNameCode('auto',  5),
    ],

    "fan"       => 
    [
            createNameCode('auto',  0),
            createNameCode('min',   1),
            createNameCode('med',   2),
            createNameCode('max',   3),
    ],	
];

$data[] = 
[
    'name'     =>   'carrier',
    'brand'    =>   11,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('cool',  2),
            createNameCode('heat',  1),
            createNameCode('fan',   3),
    ],

    "fan"       => 
    [
            createNameCode('auto',  0),
            createNameCode('low',   1),
            createNameCode('med',   2),
            createNameCode('high',  3),
    ],	
];

$data[] = 
[
    'name'     =>   'funiki',
    'brand'    =>   12,
    'temp_min' =>   17,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('cool',  0),
            createNameCode('dry',   1),
            createNameCode('auto',  2),
            createNameCode('heat',  3),
            createNameCode('fan',   4),
    ],

    "fan"       => 
    [
            createNameCode('min',   4),
            createNameCode('med',   2),
            createNameCode('max',   1),
            createNameCode('auto',  5),
    ],	
];

$data[] = 
[
    'name'     =>   'corona',
    'brand'    =>   13,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('heat',  0),
            createNameCode('dry',   1),
            createNameCode('cool',  2),        
            createNameCode('fan',   3),
    ],

    "fan"       => 
    [
            createNameCode('auto',  0),
            createNameCode('low',   1),
            createNameCode('med',   2),
            createNameCode('high',  3),
    ],	
];

$data[] = 
[
    'name'     =>   'delonghi',
    'brand'    =>   15,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  0),
            createNameCode('dry',   2),
            createNameCode('cool',  3),        
            createNameCode('fan',   6),
            createNameCode('heat',  4),
    ],

    "fan"       => 
    [
            createNameCode('min',   1),
            createNameCode('med',   3),
            createNameCode('max',   5),
            createNameCode('auto',  10),
    ],	
];


$data[] = 
[
    'name'     =>   'daikin',
    'brand'    =>   14,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  0),
            createNameCode('dry',   2),
            createNameCode('cool',  3),        
            createNameCode('fan',   6),
            createNameCode('heat',  4),
    ],

    "fan"       => 
    [
            createNameCode('min',   1),
            createNameCode('med',   3),
            createNameCode('max',   5),
            createNameCode('auto',  10),
    ],	
];

$data[] = 
[
    'name'     =>   'casper',
    'brand'    =>   16,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  0),
            createNameCode('dry',   2),
            createNameCode('cool',  1),        
            createNameCode('fan',   6),
            createNameCode('heat',  4),
    ],

    "fan"       => 
    [
            createNameCode('min',   3),
            createNameCode('med',   2),
            createNameCode('max',   1),
            createNameCode('auto',  5),
    ],	
];

$data[] = 
[
    'name'     =>   'fujisu',
    'brand'    =>   17,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  0),
            createNameCode('dry',   2),
            createNameCode('cool',  1),        
            createNameCode('fan',   3),
            createNameCode('heat',  4),
    ],

    "fan"       => 
    [
            createNameCode('min',   3),
            createNameCode('med',   2),
            createNameCode('max',   1),
            createNameCode('auto',  0),
    ],	
];

$data[] = 
[
    'name'     =>   'goodweather',
    'brand'    =>   18,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  0),
            createNameCode('dry',   2),
            createNameCode('cool',  1),        
            createNameCode('fan',   3),
            createNameCode('heat',  4),
    ],

    "fan"       => 
    [
            createNameCode('min',   3),
            createNameCode('med',   2),
            createNameCode('max',   1),
            createNameCode('auto',  0),
    ],	
];

$data[] = 
[
    'name'     =>   'gree',
    'brand'    =>   19,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  0),
            createNameCode('dry',   2),
            createNameCode('cool',  1),        
            createNameCode('fan',   3),
            createNameCode('heat',  4),
    ],

    "fan"       => 
    [
            createNameCode('min',   1),
            createNameCode('med',   2),
            createNameCode('max',   3),
            createNameCode('auto',  0),
    ],	
];

$data[] = 
[
    'name'     =>   'haier',
    'brand'    =>   20,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  0),
            createNameCode('dry',   2),
            createNameCode('cool',  1),        
            createNameCode('fan',   4),
            createNameCode('heat',  3),
    ],

    "fan"       => 
    [
            createNameCode('min',   1),
            createNameCode('med',   2),
            createNameCode('max',   3),
            createNameCode('auto',  0),
    ],	
];

$data[] = 
[
    'name'     =>   'hitachi',
    'brand'    =>   21,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  0),
            createNameCode('dry',   2),
            createNameCode('cool',  1),        
            createNameCode('fan',   4),
            createNameCode('heat',  3),
    ],

    "fan"       => 
    [
            createNameCode('min',   1),
            createNameCode('med',   2),
            createNameCode('max',   3),
            createNameCode('auto',  0),
    ],	
];

$data[] = 
[
    'name'     =>   'kelvinator',
    'brand'    =>   22,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  0),
            createNameCode('dry',   2),
            createNameCode('cool',  1),        
            createNameCode('fan',   3),
            createNameCode('heat',  4),
    ],

    "fan"       => 
    [
            createNameCode('min',   1),
            createNameCode('max',   5),
            createNameCode('auto',  0),
    ],	
];

$data[] = 
[
    'name'     =>   'lg',
    'brand'    =>   23,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  3),
            createNameCode('dry',   1),
            createNameCode('cool',  0),        
            createNameCode('fan',   2),
            createNameCode('heat',  4),
    ],

    "fan"       => 
    [
            createNameCode('min',   0),
            createNameCode('med',   2),
            createNameCode('max',   4),
            createNameCode('auto',  5),
    ],	
];

$data[] = 
[
    'name'     =>   'midea',
    'brand'    =>   35,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  2),
            createNameCode('dry',   2),
            createNameCode('cool',  0),        
            createNameCode('fan',   4),
            createNameCode('heat',  3),
    ],

    "fan"       => 
    [
            createNameCode('min',   1),
            createNameCode('med',   2),
            createNameCode('max',   3),
            createNameCode('auto',  0),
    ],	
];

$data[] = 
[
    'name'     =>   'mitsubishi',
    'brand'    =>   24,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  4),
            createNameCode('dry',   2),
            createNameCode('cool',  3),        
            createNameCode('heat',  1),
    ],

    "fan"       => 
    [
            createNameCode('min',   6),
            createNameCode('max',   5),
            createNameCode('auto',  0),
    ],	
];

$data[] = 
[
    'name'     =>   'neoclima',
    'brand'    =>   25,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  0),
            createNameCode('dry',   2),
            createNameCode('cool',  1),        
            createNameCode('fan',   3),
            createNameCode('heat',  4),
    ],

    "fan"       => 
    [
            createNameCode('min',   3),
            createNameCode('med',   2),
            createNameCode('max',   1),
            createNameCode('auto',  0),
    ],	
];

$data[]  = 
[
    'name'     =>   'panasonic',
    'brand'    =>   26,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  0),
            createNameCode('dry',   2),
            createNameCode('cool',  2),        
            createNameCode('fan',   3),
            createNameCode('heat',  4),
    ],

    "fan"       => 
    [
            createNameCode('min',   0),
            createNameCode('med',   2),
            createNameCode('max',   4),
            createNameCode('auto',  7),
    ],	
];

$data[]  = 
[
    'name'     =>   'samsung',
    'brand'    =>   27,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  0),
            createNameCode('dry',   2),
            createNameCode('cool',  1),        
            createNameCode('fan',   3),
            createNameCode('heat',  4),
    ],

    "fan"       => 
    [
            createNameCode('min',   2),
            createNameCode('med',   4),
            createNameCode('max',   5),
            createNameCode('auto',  0),
            createNameCode('turbo', 7),
    ],	
];

$data[]  = 
[
    'name'     =>   'sharp',
    'brand'    =>   28,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  0),
            createNameCode('dry',   3),
            createNameCode('cool',  2),        
            createNameCode('heat',  1),
    ],

    "fan"       => 
    [
            createNameCode('min',   4),
            createNameCode('med',   3),
            createNameCode('high',  5),
            createNameCode('auto',  2),
            createNameCode('max',   7),
    ],	
];

$data[]  = 
[
    'name'     =>   'tcl',
    'brand'    =>   29,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  8),
            createNameCode('dry',   2),
            createNameCode('cool',  3),        
            createNameCode('heat',  1),
            createNameCode('heat',  7),
    ],

    "fan"       => 
    [
            createNameCode('min',   2),
            createNameCode('med',   3),
            createNameCode('high',  5),
            createNameCode('auto',  0),
            
    ],	
];

$data[]  = 
[
    'name'     =>   'teco',
    'brand'    =>   30,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  0),
            createNameCode('dry',   2),
            createNameCode('cool',  1),
            createNameCode('fan',   3),
            createNameCode('heat',  4),
    ],

    "fan"       => 
    [
            createNameCode('min',   1),
            createNameCode('med',   2),
            createNameCode('high',  3),
            createNameCode('auto',  0),
            
    ],	
];

$data[]  = 
[
    'name'     =>   'toshiba',
    'brand'    =>   31,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  0),
            createNameCode('dry',   2),
            createNameCode('cool',  1),
            createNameCode('heat',  3),
    ],

    "fan"       => 
    [
            createNameCode('min',   1),
            createNameCode('med',   3),
            createNameCode('high',  5),
            createNameCode('auto',  0),
            
    ],	
];

$data[]  = 
[
    'name'     =>   'trotec',
    'brand'    =>   32,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  0),
            createNameCode('dry',   2),
            createNameCode('cool',  1),
            createNameCode('heat',  4),
            createNameCode('heat',  3),
    ],

    "fan"       => 
    [
            createNameCode('min',   1),
            createNameCode('med',   2),
            createNameCode('high',  3),
            createNameCode('auto',  0),
            
    ],	
];

$data[]  = 
[
    'name'     =>   'vestel',
    'brand'    =>   33,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  0),
            createNameCode('dry',   2),
            createNameCode('cool',  1),
            createNameCode('heat',  4),
            createNameCode('fan',   3),
    ],

    "fan"       => 
    [
            createNameCode('min',   5),
            createNameCode('med',   9),
            createNameCode('high',  11),
            createNameCode('auto',  1),
            
    ],	
];

$data[]  = 
[
    'name'     =>   'whirlpool',
    'brand'    =>   34,
    'temp_min' =>   18,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  1),
            createNameCode('dry',   3),
            createNameCode('cool',  2),
            createNameCode('heat',  0),
            createNameCode('fan',   4),
    ],

    "fan"       => 
    [
            createNameCode('min',   5),
            createNameCode('med',   9),
            createNameCode('high',  1),
            createNameCode('auto',  0),
            
    ],	
];

$data[]  = 
[
    'name'     =>   'daikinAc64',
    'brand'    =>   0,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  0b001),
            createNameCode('dry',   0b010),
            createNameCode('cool',  0b010),
            createNameCode('fan',   0b100),
    ],

    "fan"       => 
    [
            createNameCode('min',   0b1000),
            createNameCode('med',   0b0100),
            createNameCode('high',  0b0010),
            createNameCode('auto',  0b0001),
            
    ],	
];
/*
	false

$data[]  = 
[
    'name'     =>   'daikinAc2',
    'brand'    =>   0,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  0b001),
            createNameCode('dry',   0b010),
            createNameCode('cool',  0b010),
            createNameCode('fan',   0b100),
    ],

    "fan"       => 
    [
            createNameCode('min',   0b1000),
            createNameCode('med',   0b0100),
            createNameCode('high',  0b0010),
            createNameCode('auto',  0b0001),
            
    ],	
];
*/
$data[]  = 
[
    'name'     =>   'daikin128',
    'brand'    =>   5,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  0b00001010),
            createNameCode('dry',   0b00000001),
            createNameCode('cool',  0b00000010),
            createNameCode('fan',   0b00000100),
			createNameCode('heat',  0b00001000),
    ],

    "fan"       => 
    [
            createNameCode('min',   0b1000),
            createNameCode('med',   0b0100),
            createNameCode('high',  0b0010),
            createNameCode('auto',  0b0001),
            
    ],	
];

$data[]  = 
[
    'name'     =>   'daikin128',
    'brand'    =>   5,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  0b00001010),
            createNameCode('dry',   0b00000001),
            createNameCode('cool',  0b00000010),
            createNameCode('fan',   0b00000100),
			createNameCode('heat',  0b00001000),
    ],

    "fan"       => 
    [
            createNameCode('min',   0b1000),
            createNameCode('med',   0b0100),
            createNameCode('high',  0b0010),
            createNameCode('auto',  0b0001),
            
    ],	
];


//
$data[]  = 
[
    'name'     =>   'MitshubishiHeavy88',
    'brand'    =>   88,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  0b00001010),
            createNameCode('dry',   0b00000001),
            createNameCode('cool',  0b00000010),
            createNameCode('fan',   0b00000100),
	    createNameCode('heat',  0b00001000),
    ],

    "fan"       => 
    [
            createNameCode('min',   2),
            createNameCode('med',   3),
            createNameCode('high',  4),
            createNameCode('auto',  0),
            createNameCode('turbo', 6),
            
    ],	
];
//
$data[]  = 
[
    'name'     =>   'PanasonicAC32',
    'brand'    =>   89,
    'temp_min' =>   16,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  6),
            createNameCode('dry',   3),
            createNameCode('cool',  2),
            createNameCode('fan',   1),
	    createNameCode('heat',  4),
    ],

    "fan"       => 
    [
            createNameCode('min',   2),
            createNameCode('low',   3),
            createNameCode('med',  4),
            createNameCode('high',  0),
            createNameCode('max', 6),
            createNameCode('auto', 15),
            
    ],	
];
//
$data[]  = 
[
    'name'     =>   'Mitsubishi136',
    'brand'    =>   90,
    'temp_min' =>   17,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  3),
            createNameCode('dry',   5),
            createNameCode('cool',  1),
            createNameCode('fan',   0),
	    createNameCode('heat',  2),
    ],

    "fan"       => 
    [
            createNameCode('min',   0),
            createNameCode('low',   1),
            createNameCode('med',   2),
            createNameCode('high',  3),   
    ],	
];
//
$data[]  = 
[
    'name'     =>   'Mitshubishi112',
    'brand'    =>   91,
    'temp_min' =>   17,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  7),
            createNameCode('dry',   2),
            createNameCode('cool',  3),
	    createNameCode('heat',  1),
    ],

    "fan"       => 
    [
        //     createNameCode('min',   0),
        //     createNameCode('low',   1),
        //     createNameCode('med',   2),
        //     createNameCode('high',  3),   
    ],	
];
//

$data[]  = 
[
    'name'     =>   'HitachiAC1',
    'brand'    =>   92,
    'temp_min' =>   17,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
            createNameCode('auto',  14),
            createNameCode('dry',   2),
            createNameCode('cool',  6),
	    createNameCode('heat',  9),
            createNameCode('fan',   4),
    ],

    "fan"       => 
    [
            createNameCode('auto',  1),
            createNameCode('low',   8),
            createNameCode('med',   4),
            createNameCode('high',  2),   
    ],	
];
//
$data[]  = 
[
    'name'     =>   'HitachiAC424',
    'brand'    =>   93,
    'temp_min' =>   17,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
           
            createNameCode('dry',   5),
            createNameCode('cool',  3),
	    createNameCode('heat',  6),
            createNameCode('fan',   1),
    ],

    "fan"       => 
    [
            createNameCode('min',   1),
            createNameCode('low',   2),
            createNameCode('med',   3),
            createNameCode('high',  4),
            createNameCode('auto',  5),

    ],	
];
//
$data[]  = 
[
    'name'     =>   'HitachiAC344',
    'brand'    =>   94,
    'temp_min' =>   17,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [
           
            createNameCode('dry',   5),
            createNameCode('cool',  3),
	    createNameCode('heat',  6),
            createNameCode('fan',   1),
    ],

    "fan"       => 
    [
            createNameCode('min',   1),
            createNameCode('low',   2),
            createNameCode('med',   3),
            createNameCode('high',  4),
            createNameCode('auto',  5),

    ],	
];

//

$data[]  = 
[
    'name'     =>   'Airwell',
    'brand'    =>   95,
    'temp_min' =>   17,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [        
            createNameCode('dry',   4),
            createNameCode('cool',  1),
	    createNameCode('heat',  2),
            createNameCode('fan',   5),
            createNameCode('auto',  3),
    ],

    "fan"       => 
    [
            createNameCode('low',   0),
            createNameCode('med',   1),
            createNameCode('high',  2),
            createNameCode('auto',  3),

    ],	
];

//
$data[]  = 
[
    'name'     =>   'Airwell',
    'brand'    =>   95,
    'temp_min' =>   17,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [        
            createNameCode('dry',   4),
            createNameCode('cool',  1),
	    createNameCode('heat',  2),
            createNameCode('fan',   5),
            createNameCode('auto',  3),
    ],

    "fan"       => 
    [
            createNameCode('low',   0),
            createNameCode('med',   1),
            createNameCode('high',  2),
            createNameCode('auto',  3),

    ],	
];
//

$data[]  = 
[
    'name'     =>   'Ecoclim',
    'brand'    =>   96,
    'temp_min' =>   17,
    'temp_max' =>   30,
    'on'       =>   1,
    'off'      =>   0,
    'mode'     => 
    [        
            createNameCode('dry',   4),
            createNameCode('cool',  1),
	    createNameCode('heat',  2),
            createNameCode('fan',   5),
            createNameCode('auto',  3),
    ],

    "fan"       => 
    [
            createNameCode('low',   0),
            createNameCode('med',   1),
            createNameCode('high',  2),
            createNameCode('auto',  3),

    ],	
];
//

$data[]  = 
[
    'name'     =>   'Sanyo',
    'brand'    =>   97,
    'temp_min' =>   17,
    'temp_max' =>   30,
    'on'       =>   2,
    'off'      =>   1,
    'mode'     => 
    [        
            createNameCode('dry',   3),
            createNameCode('cool',  2),
	    createNameCode('heat',  1),
            
            createNameCode('auto',  4),
    ],

    "fan"       => 
    [
        //     createNameCode('low',   0),
        //     createNameCode('med',   1),
        //     createNameCode('high',  2),
        //     createNameCode('auto',  3),

    ],	
];
//

$data[]  = 
[
    'name'     =>   'Sanyo',
    'brand'    =>   98,
    'temp_min' =>   17,
    'temp_max' =>   30,
    'on'       =>   2,
    'off'      =>   1,
    'mode'     => 
    [        
            createNameCode('dry',   2),
            createNameCode('cool',  1),
	    createNameCode('heat',  8),
            createNameCode('fan',   4),
    ],

    "fan"       => 
    [
            createNameCode('low',   1),
            createNameCode('med',   2),
            createNameCode('high',  4),
           

    ],	
];
//

$data[]  = 
[
    'name'     =>   'Transcold',
    'brand'    =>   99,
    'temp_min' =>   18,
    'temp_max' =>   30,
    'on'       =>   2,
    'off'      =>   1,
    'mode'     => 
    [        
            createNameCode('dry',   12),
            createNameCode('cool',  6),
	    createNameCode('heat',  10),
            createNameCode('fan',   2),
    ],

    "fan"       => 
    [
            createNameCode('low',   9),
            createNameCode('med',   13),
            createNameCode('high',  11),
            createNameCode('auto',  15),

    ],	
];
//

$data[]  = 
[
    'name'     =>   'Voltas',
    'brand'    =>   100,
    'temp_min' =>   18,
    'temp_max' =>   30,
    'on'       =>   2,
    'off'      =>   1,
    'mode'     => 
    [        
            createNameCode('dry',   4),
            createNameCode('cool',  8),
	    createNameCode('heat',  2),
            createNameCode('fan',   1),
    ],

    "fan"       => 
    [
            createNameCode('low',   4),
            createNameCode('med',   2),
            createNameCode('high',  1),
            createNameCode('auto',  7),

    ],	
];

$data[]  = 
[
    'name'     =>   'Truma',
    'brand'    =>   101
    'temp_min' =>   16
    'temp_max' =>   31
    'on'       =>   2,
    'off'      =>   1,
    'mode'     => 
    [        
            createNameCode('auto',  0),
            createNameCode('cool',  2),
	    createNameCode('fan',   3),
         
    ],

    "fan"       => 
    [
            createNameCode('low',   6),
            createNameCode('med',   5),
            createNameCode('high',  4),
            createNameCode('quiet', 3),

    ],	
];






























echo json_encode($data);