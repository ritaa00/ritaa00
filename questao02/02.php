<?php

$dados=array(
    "Nome"=>"Maria Clara",
    "CPF"=>"087883456",
    "RG"=>"2006089107117",
    "idade"=>"55",
    "altura"=>"1.75"
);

foreach($dados as $dado => $info){
    echo "$dado - $info<br>";
}
