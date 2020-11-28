<?php
	$str_browser_language = !empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? strtok(strip_tags($_SERVER['HTTP_ACCEPT_LANGUAGE']), ',') : '';
	$str_browser_language = !empty($_GET['language']) ? $_GET['language'] : $str_browser_language;
	switch (substr($str_browser_language, 0,2))
	{
		case 'de':
			$str_language = 'de';
			break;
		case 'en':
			$str_language = 'en';
			break;
		default:
			$str_language = 'en';
	}
    
	$arr_available_languages = array();
	$arr_available_languages[] = array('str_name' => 'English', 'str_token' => 'en');
	$arr_available_languages[] = array('str_name' => 'Deutsch', 'str_token' => 'de');
    
	$str_available_languages = (string) '';
	foreach ($arr_available_languages as $arr_language)
	{
		if ($arr_language['str_token'] !== $str_language)
		{
			$str_available_languages .= '<a href="'.strip_tags($_SERVER['PHP_SELF']).'?language='.$arr_language['str_token'].'" lang="'.$arr_language['str_token'].'" xml:lang="'.$arr_language['str_token'].'" hreflang="'.$arr_language['str_token'].'">'.$arr_language['str_name'].'</a> | ';
		}
	}
	$str_available_languages = substr($str_available_languages, 0, -3);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="<?php echo $str_language; ?>" xml:lang="<?php echo $str_language; ?>">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>MAMP PRO</title>
<style type="text/css">
    body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: .9em;
        color: #000000;
        background-color: #FFFFFF;
        margin: 0;
        padding: 10px 20px 20px 20px;
    }

    samp {
        font-size: 1.3em;
    }

    a {
        color: #000000;
        background-color: #FFFFFF;
    }

    sup a {
        text-decoration: none;
    }

    hr {
        margin-left: 90px;
        height: 1px;
        color: #000000;
        background-color: #000000;
        border: none;
    }

    #logo {
        margin-bottom: 10px;
        margin-left: 28px;
    }

    .text {
        width: 80%;
        margin-left: 90px;
        line-height: 140%;
    }
</style>
</head>

<body>
    <p><img src="MAMP-PRO-Logo.png" id="logo" alt="MAMP PRO Logo" width="250" height="49" /></p>
<?php

function resh($arg){

$arr = array();

for($i0=0;$i0<count($arg);$i0++){
    array_push($arr, $arg[$i0]);
}




$M = array();
for ($i = 0; $i < count($arr) ; $i++){
    $arr[$i] = (string)$arr[$i];
    if($i == 0){
        $arr[$i] = "a". $arr[$i] . "a";
        }
    $arr[$i] = str_split($arr[$i]);
}



function pod($arg1,$arg2,&$arg3/*,$arg4*/){
$shet = array();
for ($f = 1;$f == 1;){
 //////////////1
for ($i = 0;  $i < count($arg2); $i=$i+1){ 
if($arg2[$i] == "a"){

    if (count($shet) == 0){
    for ($i1 = 0 ; $i1 < count($arg2); $i1++){
    array_push($shet, $arg2[$i1]);
    }
    }
    unset($shet[$i]);
    $shet = array_values($shet);


    array_splice($arg2,$i,0,$arg1[0]);
    $arg2 = array_values($arg2);

   
    for ($i2 = 0 ; $i2 < count($arg2); $i2++){

    if($arg2[$i2] == "a"){
    unset($arg2[$i2]);
    $arg2 = array_values($arg2);
    }    
    }

    
}
}

for ($i6 = 0;   $i6 < count($arg2); $i6=$i6+1){
 
    if($i6 == 0 && $arg2[0] != "a" ){
        array_splice($arg2,0,0,"a");
        $arg2 = array_values($arg2);
    } 
    if ($arg2[$i6] != "a" ){
        array_splice($arg2,$i6+1,0,"a");
        $arg2 = array_values($arg2);
    }
}


array_push($arg3, $arg2);


//////////////////////////////////////////////////3 

for ($i3 = 0, $p = 1; $i3 < count($shet) && $p == 1; $i3++){
    if  ($shet[$i3] == "a"){
    $p = 0;
    $f = 1;
    $arg2 =array();
    $arg2 = array_values($arg2);
    for ($i4 = 0; $i4 < count($shet); $i4++){
    array_splice($arg2,$i4,0,$shet[$i4]);  
    }  
    } else {
        $f = 0;
    }


}




//////////////////////////////////////////////////конец 
}
//////////////////////////////////////////////////конец фукции
}





//////////////////////////////////////////////////////////////////////
for ($i1 = 1; $i1 < count($arr) ; $i1++){
    if ($i1 == 1){


    pod($arr[$i1],$arr[$i1-1],$M);

    $arr[$i1] = array();
    for ($i2 = 0; $i2 < count($M) ; $i2++){
    array_push($arr[$i1], $M[$i2]);
    }
    $M = array();



    

    } else {

    for ($i3 = 0; $i3 < count($arr[$i1-1]) ; $i3++){
        pod($arr[$i1],$arr[$i1-1][$i3],$M);

    }
    $arr[$i1] = array();
    for ($i4 = 0; $i4 < count($M) ; $i4++){
    array_push($arr[$i1], $M[$i4]);
    }
    $M = array();



    }
   
}
/////////////////////////////////////////////////////////\

for ($i5 = 0; $i5 < count($arr); $i5++){
    if ($i5 == (count($arr)-1)){
        for ($i6 = 0; $i6 < count($arr[$i5]); $i6++){
            array_push($M, $arr[$i5][$i6]);
        }

    }
}

for ($i7 = 0; $i7 < count($M); $i7++){
    for ($i8 = 0; $i8 < count($M[$i7]); $i8++){
    if ($M[$i7][$i8] =="a"){
        unset($M[$i7][$i8]);
        $M[$i7] = array_values($M[$i7]);
    }
    }
    $M[$i7] = implode($M[$i7]);
    $M[$i7] = (int)$M[$i7];

}
////////////////////////////////////////////////////1
     function p($arg){
    $b = "нет";
    for($i = 1, $a = 0; $i<count($arg) && $a==0 ;$i++){
        if ($a == 0){
        if($arg[0]<$arg[$i]){
            $a = 1;
        } else if ($arg[0]>$arg[$i]){
            $a = 0;
        } 
        }
    }
    if ($a == 0){
        return $arg[0];
    } else {
        return $b;
    }
    }


///////////////////////////////////2
    function pp($arg,$arg2){
        
        $b = "нет";
        $a = 0;

        for($i = 0; $i<$arg2 && $a==0;$i++){ 
            if ($a == 0){
            if($arg[$arg2] < $arg[$i]){
                $a = 1;
            }else if ($arg[$arg2]>$arg[$i]){
                $a = 0;
            } 
            } 
        }
        if ($a == 0){
            for($i2 = $arg2+1; $i2<count($arg) && $a==0;$i2++){
                
                if ($a == 0){
                if($arg[$arg2] < $arg[$i2]){
                    $a = 1;
                }else if ($arg[$arg2]>$arg[$i2]){
                    $a = 0;
                } 
                } 
            }
        }

        if ($a == 0){
            return $arg[$arg2];
        } else {
            return $b;
        }
    
        }
//////////////////////////////////3

        function ppp($arg,$arg2){
            $b = "нет";
            for($i = 0, $a = 0; $i<$arg2 && $a==0 ;$i++){
            if ($a == 0){
            if($arg[$arg2] < $arg[$i]){
            $a = 1;
            }else if ($arg[$arg2]>$arg[$i]){
            $a = 0;
            }

            }

            }



            if ($a == 0){
                return $arg[$arg2];
            } else {
                return $b;
            }
            }
  



for ($i9 = 0, $a="нет"; $i9 <count($M) && $a=="нет";$i9++){
    if($i9 == 0){
        $a = p($M);
    } else if ($i9 > 0 && $i9 < (count($M)-1)){
        $a = pp($M,$i9);
    } else {
        $a = ppp($M,$i9);
    }
}

echo "<pre>"; print_r($a); echo "</pre>";

}
////////////////////////////////////////////////Тут вводим значение
////////////////////////////////////////////////
////////////////////////////////////////////////
////////////////////////////////////////////////
////////////////////////////////////////////////
////////////////////////////////////////////////
////////////////////////////////////////////////
////////////////////////////////////////////////
resh([1,2,3]);

?>
</body>
</html>
