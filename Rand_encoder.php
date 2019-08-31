<?php
/*
тнιѕ ωαѕ cяєαтє ωιтн мяѕυвмιѕѕινє ιη 2018

уσυ cαη ωσяк ωιтн тнιѕ ιη уσυя cσ∂єѕ ƒσя єηcσ∂є αη∂ ∂єcσ∂єє ѕσмє тнιηgѕ

тιρ: тнιѕ ιѕ яαη∂σм єηcσ∂єѕ уσυя тєχтѕ

ιƒ уσυ єηנσу тнιѕ ρℓєαѕє ѕєє ωє gιт:

gιтнυв: https://github.com/MrSubmissive/
*/

// Random encode function
function random_encode($str){
  $res='';
  $bin='';
  $x=str_split('AZFK13579azfk');
  $x1=str_split('BHLW02468bhlw');
  $x3=str_split('DUOPQXduopqx');
  foreach(str_split("$str") as $v){
    $bin.=sprintf("%08b",ord("$v"));
  }
  foreach(str_split("$bin") as $v){
    if($v=='1'){
      $res.=str_replace('1',$x[rand(0,count($x)-1)],$v);
    }else{
      $res.=str_replace('0',$x1[rand(0,count($x1)-1)],$v);
    }
    $res.=$x3[rand(0,count($x3)-1)];
  }
  return $res;  
}
// Random decode function
function random_decode($str){
  $res='';
  $x=str_split('AZFK13579azfk');
  $x1=str_split('BHLW02468bhlw');
  $x3=str_split('DUOPQXduopqx');
  foreach($x3 as $v){
    $str=str_replace("$v",'',$str);
  }
  foreach($x as $v){
    $str=str_replace("$v",'1',$str);
  }
  foreach($x1 as $v){
    $str=str_replace("$v",'0',$str);
  }
  foreach(str_split("$str",8) as $v){
    $res.=chr(bindec($v));
  }
  return $res;
}

//Examples How To Use?!!

//Encode Text
echo "Encode Your Text Is:".random_encode("hi");
#Encode Text | print hi
echo "Decode Your Text Is:".random_decode("L9wBk6wLQw5F23lB1Q");
?>
