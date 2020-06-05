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
        

        $a = 50;
        $b = 40;
        $c = 55;
        $resultado = 0;

        if ($a > 10 && $b > 10 && $b < $c) {
            $resultado = 10 + $a;
            if ($resultado > 15) {
                $resultado = $resultado -$c + $b;
            } else {
                $resultado += $c - $b + $a
            }
        } elseif ($b < 30 && $b < $c && $b + $c == 52) {
            $resultado = $a + $c;
            if ($resultado < 30) {
                $resultado = 14;
            }
        

        

        $hostname=$_SERVER['SERVER_NAME'];

        if(empty($_GET['parametro'])){
            exit("
                <div class='alert alert-danger'>
                <strong>OPS!!</strong> Pâmetro não informado, para acessar utilize informe o parametro na URL <br> <a href='http://$_SERVER[HTTP_HOST]/perguntas/?parametro=X'>http://$_SERVER[HTTP_HOST]/perguntas/?parametro=X</a> <hr/> 
                </div>
            ");
        }

        $parametro=$_GET['parametro'];
        $document_root=$_SERVER['SCRIPT_FILENAME'];
        
        if($parametro != $resultado) {

            exit("
                <div class='alert alert-danger'>
                    <strong>OPS!!</strong> O valor de parametro=<strong>$parametro</strong> está incorreto!!!!
                </div>         
                <div class='alert alert-warning'>
                     Para acessar o próximo passo, descubra o valor real do <strong>?parametro=</strong> 
                 </div>       
            ");

        } else {

            echo "<div class='alert alert-success'>
                    Parabéns, você acertou o valor de paramêtro, agora responda as perguntas a seguir.
                  </div>";

        }
    ?>

    <h2>Perguntas</h2>

    <div class="alert alert-warning">
        Ao clicar no botão "Salvar Respostas", baixe o arquivo.
    </div>
    <hr class="pb-4">
    <form style="padding-top:1%;padding-bottom: 10%;" action="respostas.php?arquivo=perguntas" method="POST">
        <div class="form-group" style="padding-bottom: 20px;">
            <label for="resposta1">
                <h6><strong>1. De maneira resumida, o que exatamente acontece quando acessamos uma página na web pelo
                    navegador?</strong></h6>
            </label>
            <textarea class="form-control" id="resposta1" name="resposta1" rows="5"></textarea>
        </div>
        <hr>
        <div class="form-group" style="padding-bottom: 20px;">
            <label for="resposta2a">
                <h6><strong>2. O domínio <code>olatray.com.br</code> está hospedado em algum de nossos servidores DNS abaixo. 
                Quais destes servidores devem ser informados como Servidor DNS <code>MASTER</code> e Servidor DNS <code>SLAVE</code> no registro.br?.</strong></h6>
                <br>
                <img src="./image_prova/dns1.PNG">
                <br><br>
                <ul class="list-unstyled pl-5">
                    <li>ns1.ecomt1.com.br</li>
                    <li>ns1.ecomt.com.br</li>
                    <li>ns2.ecomt1.com.br</li>
                    <li>ns2.ecomt3.com.br</li>
                    <li>ns2.ecomt.com.br</li>
                    <li>ns2.ecomt4.com.br</li>
                    <li>ns1.ecomt5.com.br</li>
                    <li>ns1.ecomt2.com.br</li>
                    <li>ns1.ecomt4.com.br</li>
                    <li>ns2.ecomt5.com.br</li>
                </ul>
            </label>
            <div class="form-group pl-5">
                <label for="resposta2a">
                    <h6><strong>A) Qual o MASTER e SLAVE?</strong></h6>
                </label>
                <input type="text" class="form-control mb-3" id="resposta2amaster" name="resposta2amaster" placeholder="MASTER">
                <input type="text" class="form-control " id="resposta2aslave" name="resposta2aslave" placeholder="SLAVE">
            </div>
            <div class="form-group pl-5">
                <label for="resposta2b">
                    <h6><strong>B) Como chegou neste resultado?</strong></h6>
                </label>
                <textarea class="form-control" id="resposta2b" name="resposta2b" rows="5"></textarea>
            </div>
        </div>

        <hr class="pb-3">

        <div class="form-group" style="padding-bottom: 20px;">
            <label for="resposta3">
                <h6><strong>3. Ao enviar um e-mail estamos recebendo a mensagem <code>550 No Such User
                    Here</code>, qual a principal causa?</strong></h6>
            </label>

            <img src="./image_prova/img1.PNG">
            <textarea class="form-control" id="resposta3" name="resposta3" rows="5"></textarea>
        </div>
        <hr class="pb-3">

        <div class="form-group" style="padding-bottom: 20px;">
            <label for="resposta4a">
                <h6><strong>4. A loja <code>Ola Tray</code> que utiliza a URL <code>www.olatray.com.br</code> está migrando para a Plataforma Tray 
                        e ainda não sabe qual apontamento DNS fazer para começar suas vendas. 
                        Tendo como base que o ID da loja na Tray é <code>98732</code> e utilizando as URLs abaixo para testes, 
                        descubra qual apontamento DNS do tipo <code>CNAME</code> e do tipo <code>A</code> deve ser feito para a loja começar a vender pela Tray.
                </strong></h6>

                <ul class="list-unstyled pl-5">
                    <li>ID: 708166 - www.morijo.com.br</li>
                    <li>ID: 634906 - www.liviamassas.com.br</li>
                </ul>
            </label>
            <div class="form-group pl-5">
                <label for="resposta4a">
                    <h6><strong>A) <code>www.olatray.com.br</code> CNAME <code>?????????</code></strong></h6>
                </label>
                <input type="text" class="form-control mb-3" id="resposta4a" name="resposta4a" placeholder="????????????">

            </div>
            <div class="form-group pl-5">
                <label for="resposta4b">
                    <h6><strong>B) <code>www.olatray.com.br</code> A <code>?????????</code></strong></h6>
                </label>
                <input type="text" class="form-control " id="resposta4b" name="resposta4b" placeholder="?????????">
            </div>
            <div class="form-group pl-5">
                <label for="resposta4c">
                    <h6><strong>C) Como chegou neste resultado?</strong></h6>
                </label>
                <textarea class="form-control" id="resposta4c" name="resposta4c" rows="5"></textarea>
            </div>
        </div>

        <div class="form-group" style="padding-bottom: 20px;">
            <label for="resposta5">
                <h6><strong>5. Como você monitora uma aplicação Web?</strong></h6>
            </label>
            <textarea class="form-control" id="resposta5" name="resposta5" rows="5"></textarea>
        </div>

        <div class="form-group" style="padding-bottom: 20px;">
            <label for="resposta5">
                <h6><strong>5. O que acontece se executar em um servidor Linux o comando <code>sudo rm -rf /*</code> e reiniciar o servidor?</strong></h6>
            </label>
            <textarea class="form-control" id="resposta6" name="resposta6" rows="5"></textarea>
        </div>

        <button type="submit" class="btn btn-lg btn-success btn-block">Salvar Respostas</button>
    </form>
</body>

</html>
