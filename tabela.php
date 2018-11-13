<?php 
include_once('conexao.php');
$connec  = new Conexao();
$banco = $connec->conecta();
$sql = "SELECT nome FROM usuarios";
$result = $banco->query($sql);
$html = "<thead>
            <tr>
                <th>Nome<th>
            </tr>
        </thead>
        <tbody>
        ";
while($row = $result->fetch_assoc()) {
    
    
    $html .= "<tr><td>" .  $row["nome"] . "</td></tr>";
}
$html.="</tbody>";
echo $html;
?>