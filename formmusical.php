<?php
require_once __DIR__."/vendor/autoload.php";

if(isset($_GET["acao"]) && $_GET["acao"] == "altera"){
    $g = new Musical();
    $g-> setIdMusica($_GET["idmusica"]);
    $musical = $g->selecionarUm();
}
elseif (isset($_GET["acao"]) && $_GET["acao"] == "deleta"){
    $g = new Musical();
    $g-> setIdMusica($_GET["idmusica"]);
    $musical = $g->deletar();
    header("location: listamusical.php");
}
elseif (isset($_POST["acao"]) && $_POST["acao"] == "insere"){
    $g = new Musical();
    $g->setArtista($_POST["artista"]);
    $g->setLocal($_POST["local"]);
    $g->setDia($_POST["dia"]);
    $musical = $g->inserir();
    header("location: listamusical.php");
}
elseif (isset($_POST["acao"]) && $_POST["acao"] == "altera"){
    $g = new Musical();
    $g-> setIdMusica($_POST["idmusica"]);
    $g->setArtista($_POST["artista"]);
    $g->setLocal($_POST["local"]);
    $g->setDia($_POST["dia"]);
    $musical = $g->alterar();
    header("location: listamusical.php");
}
?>
<html>
    <head>
        <title>Show</title>
    </head>
    <body>
        <form action="formmusical.php" method= "post">
            <input type="hidden" name="acao" value="<?php
        if(isset($_GET["acao"])) {echo $_GET["acao"];} ?>">
            <input type="hidden" name="idmusica" value="<?php
        if(isset($musical[0]["idmusica"])) {echo $musical[0]["idmusica"];} ?>">
            Artista: <input type="text" name="artista" value="<?php
        if(isset($musical[0]["artista"])) {echo $musical[0]["artista"];} ?>"><br>
            
            Local: <SELECT name="local">
                <option value = "Oi Araujo Vianna"<?php
        if(isset($musical[0]["local"]) && $musical[0]["local"] == "Oi Araujo Vianna") {echo "selected";}?>>OI Araujo vianna</option>
            <option value="Teatro do Bourbon Country" <?php
        if(isset($musical[0]["local"]) && $musical[0]["local"] == "Teatro do Bourbon Country" ) { echo "selected"; } ?>>Teatro do Bourbon Country</option>
            <option value="Woods" <?php if(isset($musical[0] ["local"]) && $musical[0] ["local"] == "Woods") { echo "selected";}?>>Wood's</option>
            </select><br>
            
            Data: <input type = "date" name="dia" value="<?php
        if(isset($musical[0] ["dia"])) { echo $musical[0] ["dia"]; }?>"><br>
            
            <input type= "submit" name="botao" value="Enviar"> <br>
        </form>
    </body>
</html>