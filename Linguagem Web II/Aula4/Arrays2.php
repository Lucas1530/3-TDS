
<?php 
//assosciativo


$professor = array("nome"=>"Daniel",
                   "idade" =>25);
echo $professor["nome"];

foreach ($professor as $p) {
    echo $p . "<br>";
}

$professor2 = array("nome"=>"jefferson",
                     "idade"=>34);

$professores = array($professor , $professor2);  

echo $professores[1]["nome"] , "<br>";

foreach ($professores as $prof) {
       foreach ($prof as $p) {
        echo $p , "<br>";
       }
}

?>
