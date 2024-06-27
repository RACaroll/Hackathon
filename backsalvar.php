<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {//testa o metodo se for post entre no if
    // faz a abertura do arquivo conectar que tem os dados de conexao
    require('conectar.php');

    // Direciona as variaveis post para variaveis locais
    $nomeArquivo = $_POST['nomeArquivo'];
    //resgata a imagem enviada apra o cache e o nome
    $curriculo = $_FILES['curriculo']['name'];//imagem
    //atribui o endereço temporario da imagem
    $tempLogo = $_FILES['curriculo']['tmp_name'];//endereço do arquivo no cache

    //Gera um nome unico sem repetição
    $nomeUnico = str_replace('.', 'Y', uniqid('', true));
    //gera o caminho onde será salvo o arquivo com base no local do arquivo atual
    $caminho = "./cv/" . $nomeUnico. ".pdf";//dentro da pasta atual na pasta /imagens/nomegerado.png
    // Move a imagem para a pasta desejada (certifique-se de ter permissões de escrita)
    move_uploaded_file($tempLogo, $caminho);
    
    // Insere os dados no banco de dados
 $sql = "UPDATE curriculo SET nomeArquivo ='$nomeArquivo', caminho='$caminho' where idcurriculo=1";

    if ($conn->query($sql) === TRUE) {//verifica se a inserção ocorreu sem erros
        echo "sucesso!";//mensagem de sucesso
    } else {
        echo "Erro : " . $conn->error;//o erro procura no objeto $conn para retornar a mensagem
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>