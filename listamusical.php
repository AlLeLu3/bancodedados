<html>
    <head>
        <link href="style.css" rel="stylesheet">
        <title>Musical</title>
    </head>
    <body>
        <table class = "lista">
            <tr>
                <th>Artista</th>
                <th>Local</th>
                <th>Data</th>
                <th></th>
            </tr>
            <?php
            require_once __DIR__."/vendor/autoload.php";
            
            $m = new Musical();
            $musicais = $m->selecionarTodos();
            if(is_array($musicais)){
                foreach($musicais as $musical){
                    echo "<tr>";
                    echo "<td>".$musical["artista"]."</td>";
                    echo "<td>".$musical["local"]."</td>";
                    echo "<td>".$musical["dia"]."</td>";
                    echo "<td><a href='formmusical.php?acao=altera&idmusica=".$musical["idmusica"]."'>Alterar</a>";
                    echo "<a href='formmusical.php?acao=deleta&idmusica=".$musical["idmusica"]."'>Deletar</a></td>";
                    echo "</tr>";

                }
            }
            ?>
        </table>
        <a href="formmusical.php?acao=insere">Novo Musical</a>
    </body>
</html>