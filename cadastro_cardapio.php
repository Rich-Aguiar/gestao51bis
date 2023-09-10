<?php
// Incluir arquivo de configuração do banco de dados
include 'config.php';

// Definir a data de início como quarta-feira da semana atual
$inicio = strtotime('last wednesday');

// Definir a data de término como terça-feira da semana seguinte
$fim = strtotime('next tuesday');

// Preparar e executar a consulta SQL para obter os dados do cardápio da semana
$sql = "SELECT * FROM cardapio_semanal WHERE data >= '".date('Y-m-d', $inicio)."' AND data <= '".date('Y-m-d', $fim)."' ORDER BY data ASC";
$resultado = $conn->mysqli_query($sql);

// Verificar se a consulta retornou algum resultado
if ($resultado->num_rows > 0) {
    // Iniciar a tabela
    echo '<table>';
    echo '<tr><th>Data</th><th>Refeição</th><th>Prato Principal</th><th>Acompanhamentos</th></tr>';

    // Percorrer os resultados da consulta e adicionar as linhas na tabela
    while($row = $resultado->fetch_assoc()) {
        echo '<tr>';
        echo '<td>'.$row["data"].'</td>';
        echo '<td>'.$row["refeicao"].'</td>';
        echo '<td>'.$row["prato_principal"].'</td>';
        echo '<td>'.$row["acompanhamentos"].'</td>';
        echo '</tr>';
    }

    // Finalizar a tabela
    echo '</table>';
} else {
    // Se a consulta não retornou resultados, exibir mensagem de aviso
    echo 'Não há cardápio cadastrado para a semana.';
}

// Fechar conexão com o banco de dados
$conn->close();
?>
<!-- Tabela com os dias da semana -->
<table>
    <tr>
        <th>Data</th>
        <th>Refeição</th>
        <th>Prato principal</th>
        <th>Acompanhamentos</th>
    </tr>
    <?php
        // Obter a data de quarta-feira desta semana
        $data = date('Y-m-d', strtotime('this wednesday'));

        // Exibir os dados para cada dia da semana (até terça-feira)
        for ($i = 0; $i < 6; $i++) {
            // Exibir a data e as opções de refeição
            echo "<tr>";
            echo "<td>" . $data . "</td>";
            echo "<td>";
            echo "<select name='refeicao'>";
            echo "<option value='cafe'>Café da manhã</option>";
            echo "<option value='almoco'>Almoço</option>";
            echo "<option value='jantar'>Jantar</option>";
            echo "<option value='ceia'>Ceia</option>";
            echo "</select>";
            echo "</td>";

            // Exibir os campos para cadastro do cardápio
            echo "<td><input type='text' name='prato_principal'></td>";
            echo "<td><textarea name='acompanhamentos'></textarea></td>";

            // Incrementar a data para o próximo dia da semana
            $data = date('Y-m-d', strtotime($data . ' +1 day'));

            echo "</tr>";
        }
    ?>
</table>

<!-- Formulário de cadastro -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input type="submit" value="Cadastrar">
</form>
