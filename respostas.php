<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body style="padding-left: 20%;padding-right: 20%;padding-top:3%">


    <?php
    
        $arquivo = $_GET['arquivo'];
        $arquivo = "$arquivo.json";
        $data = $_POST;
        $data = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_LINE_TERMINATORS);

        file_put_contents("/tmp/".$arquivo, $data);

        $hostname=$_SERVER['SERVER_NAME'];

 

        if ($arquivo == "extra.json") {

            exit("<div class='alert alert-success text-center'>
            <strong>Parabéns, Você finalizou a prova!!!</strong>
            </div>");

            

        } else {

            $url =  "http://$_SERVER[HTTP_HOST]/perguntas/download.php?arquivo=$arquivo";

            echo "
            <div class='alert alert-success text-center'>
            Parabéns, Você finalizou a prova!!! <br><strong>Adicione o arquivo de respostas em seu GITHUB junto com:</strong>
            <br><br>
            <ul class=\"list-unstyled pl-5\">
                <li class='text-center'>Script para instalação</li>
                <li class='text-center'>Documentação simples</li>
                <li class='text-center'>Referências técnicas utilizadas</li>
                <li class='text-center'>Arquivos de resposta</li>
            </ul>
            
            </div>";

            echo "<a href=\"$url\" class=\"btn btn-lg btn-success btn-block\">Baixar Arquivo</a>";

        }

    ?>
    
</body>

</html>