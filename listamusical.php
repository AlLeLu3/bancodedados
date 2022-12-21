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
            include_once("Musical.class.php");
            $m = new Musical();
            $musicais = $m->selecionarTodos();
            if(is_array($musicais)){
                foreach($musicais as $musical){
                    echo "<tr>";
                    echo "<td>".$musical["artista"]."</td>";
                    echo "<td>".$musical["local"]."</td>";
                    echo "<td>".$musical["dia"]."</td>";
                    echo "<td><a href='formmusical.php?acao=altera&idmusical=".$musical["idmusical"]."'>Alterar</a>";
                    echo "<a href='formmusical.php?acao=deleta&idmusical=".$musical["idmusical"]."'>Deletar</a></td>";
                    echo "</tr>";

                }
            }
            ?>
        </table>
        <a href="formmusical.php?acao=insere">Novo Musical</a>
    </body>
</html>