<?php
include_once('conexao.php');
$nome = $_POST['txt_nome'];
$senha = md5($_POST['pwd_senha']);
$connec  = new Conexao();
$banco = $connec->conecta();
$msg;
//valida o nome
$stmt = $banco->prepare("SELECT nome FROM usuarios WHERE nome = ?");
$stmt->bind_param('s',$nome);
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows>0){
    $msg = ['msg'=>'Usuário já Existe','status'=>'1'];
    $insert = false;
}else{
    $insert = true;
}
if($insert){
    $stmt = $banco->prepare("INSERT INTO usuarios (nome,senha) VALUES(?,?)");
    $stmt->bind_param('ss',$nome,$senha);
    $stmt->execute();
    $msg = ['msg'=>'Usuário cadastrado','status'=>'0'];
}
$banco->close();
header('Content-type: application/json');
echo json_encode( $msg );
?>