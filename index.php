<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css" media="screen" />
        <title>Formulário</title>
</head>
<body>
    <div class="flex-container">
        <div class="flex-items1"></div>
            <div class="flex-items2">
                <form method="POST"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <h3>FORMULÁRIO HTML E PHP</h3>
                    <label for="nome">Nome:
                        <input type="text" id="nome" name="nome" required placeholder="Nome completo"><br>
                    </label>
                    <label for="cpf">CPF:
                        <input type="text" id="cpf" name="cpf" required placeholder="CPF"><br>
                    </label>
                    <label for="dataNasc">Data de nascimento:
                        <input type="date" id="dataNasc" name="dataNasc" required placeholder="Data de Nascimento"><br>
                    </label>
                    <label for="telefone">Telefone:
                        <input type="text" id="telefone" name="telefone" required placeholder="Telefone de contato"><br>
                    </label>
                    <label for="email">E-mail:
                        <input type="email" id="email" name="email" required placeholder="ex: 1234@gmail.com"><br>
                    </label>
                    <input type="checkbox" class="input-aluno" id="input-aluno" name="input-aluno" >Você é aluno?<br>
                    <button type="submit" class="btn-enviar" id="btn-enviar" name="btn-enviar">ENVIAR</button><br>
                    
                </form> 
                    <?php 
                    
                    if ($_SERVER["REQUEST_METHOD"] == "POST"){
                        echo"Deu certo";
                
                    }
                    else{
                        echo"Deu errado";

                    }
                    
                    ?>
            </div>
        <div class="flex-items3"></div>
    </div>
        
</body>
</html>
