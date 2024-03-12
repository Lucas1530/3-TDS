<?php 



//Desenhar botão

function desenhabotao($botao, $titulo){
    echo '<div class="dropdown" style="margin-bottom: 20px">';
        echo '<button class="dropbtn">' . $titulo . '</button>';
        echo '<div class="dropText">';
            foreach($botao as $b)
                echo '<span><img src="' . $b['linkImg'] . '" width="20" height="20">' . $b['info'] . '</span>';
        echo "</div>";
    echo "</div>";
    echo "<br>";
echo "</br>";
echo "<br>";
echo "</br>";
echo "<br>";
echo "</br>";
echo "<br>";
echo "</br>";
}

//Programa principal
//Acionar o CSS na saída HTML (echo)
echo '<link rel="stylesheet" href="estilo.css">';


$info1 = array("linkImg" => "https://s3.static.brasilescola.uol.com.br/be/2023/09/1-escudo-do-corinthians.jpg" , 
                "info" => "Corinthias");
$info2 = array("linkImg" => "https://upload.wikimedia.org/wikipedia/pt/thumb/a/ac/CRVascodaGama.png/120px-CRVascodaGama.png" , 
                "info" => "Vasco");
$info3 = array("linkImg" => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/Gremio_logo.gif/120px-Gremio_logo.gif" , 
                "info" => "Gremio");
$times = array($info1,$info2,$info3);
desenhabotao($times, "Times de Futebol Brasileiro");

$info1 = array("linkImg" => "https://seeklogo.com/images/T/team-liquid-logo-AC6053E709-seeklogo.com.png" , 
                "info" => "Team Liquid");
$info2 = array("linkImg" => "data:image/jpeg;base64,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" , 
                "info" => "MIBR");
$info3 = array("linkImg" => "data:image/png;base64,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" , 
                "info" => "Faze clan");
$timesESP = array($info1,$info2,$info3);
desenhabotao($timesESP, "Times de E-SPORT");

$info1 = array("linkImg" => "https://upload.wikimedia.org/wikipedia/commons/9/9e/Flag_of_Japan.svg" , 
                "info" => "Japão");
$info2 = array("linkImg" => "https://upload.wikimedia.org/wikipedia/commons/f/fa/Flag_of_the_People%27s_Republic_of_China.svg" , 
                "info" => "China");
$info3 = array("linkImg" => "https://upload.wikimedia.org/wikipedia/commons/0/09/Flag_of_South_Korea.svg" , 
                "info" => "Koreia do Sul");
$PaisesA = array($info1,$info2,$info3);
desenhabotao($PaisesA , "Paises Asiáticos");

$info1 = array("linkImg" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSG24QVtqDWYqBksVSyK1yULlQWKw_HXQ853vdS-3M5dwS_n4MdgL35AF2WfI&s=10" , 
                "info" => "França");
$info2 = array("linkImg" => "https://upload.wikimedia.org/wikipedia/commons/1/12/Flag_of_Poland.svg" , 
                "info" => "Polonia");
$info3 = array("linkImg" => "https://upload.wikimedia.org/wikipedia/commons/f/f3/Flag_of_Russia.svg" , 
                "info" => "Russia");
$PaisesE = array($info1,$info2,$info3);
desenhabotao($PaisesE , "Paise Europeus");
















?>
