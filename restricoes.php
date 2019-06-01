<body style="background-color:#fafafa;">
<?php
require('view/template.php');
$tela = new template;
$tela->SetTitle('Método Simplex');

session_start();

//é criado dinimicamente os campos para preennche-los
if (isset($_GET['qtdevariaveis']) and isset($_GET['qtderestricoes']) and isset($_GET['objetivo']))
{
	$_SESSION['qtdevariaveis'] = $_GET['qtdevariaveis'];
	$_SESSION['qtderestricoes'] = $_GET['qtderestricoes'];
	$_SESSION['objetivo'] = $_GET['objetivo'];
}

$conteudo=$conteudo.'<div style="text-align:center; font-size="34";"><strong><font size="34">Função Objetiva</font></strong><br><br>';

//Monta Z = .......
$conteudo=$conteudo.'<form name="frmdefinicao" method="GET" action="formapadrao.php">';
if ($_SESSION['objetivo']=='max')
{
	$conteudo=$conteudo.'<strong>Maximizar  Z =  </strong>';
}else{
	$conteudo=$conteudo.'<strong>Minimizar  Z =  </strong>';
}

for ($i=1; $i <= $_SESSION['qtdevariaveis']; $i++)
{ 
	$conteudo=$conteudo.'<input class="form-group type="number" step="0.001" name="z'.$i.'" size="3" maxlength="4"> X<sub>'.$i.'</sub>';
	if($i<$_SESSION['qtdevariaveis'])
	{
		$conteudo=$conteudo.' + ';
	}
}
$conteudo=$conteudo.'<br><br>';

//Monta requisicoes
$conteudo=$conteudo.'<br><br><strong>Restrições</strong><br><br>';

//L de linha   C de coluna
for ($l=1; $l <= $_SESSION['qtderestricoes']; $l++)
{ 
	for ($c=1; $c <= $_SESSION['qtdevariaveis'] ; $c++)
	{ 
		$conteudo=$conteudo.'<input class="form-group" type="number" step="0.001" name="r'.$l.'_'.$c.'" size="3" maxlength="4"> X<sub>'.$c.'</sub>';
		if($c<$_SESSION['qtdevariaveis'])
		{ 
			// se nao for a ultima coloca um ponto
	  	    $conteudo=$conteudo.' + ';
		}else{
			//se não acrescenta o resultado da linha
			$conteudo=$conteudo.'
				<input id="relacao" name="relacao'.$l.'" readonly placeholder="<="  class="form-group" style="max-width: 20px;">
        		<input type="number" step"0.001" name="resultado'.$l.'" size="3" maxlength="4">
			';
		}
	}
	$conteudo=$conteudo.'<br>';
}
$conteudo=$conteudo.'</div><br><br>';//espaçamento

//x1...>=0
$funcao='<div style="text-align:center">';
for ($c=1; $c <=$_SESSION['qtdevariaveis']; $c++)
{ 
	$funcao=$funcao.'X<sub>'.$c.'</sub>';
	if($c<$_SESSION['qtdevariaveis'] )
	{
		$funcao=$funcao.' , ';	
	}else{
		$funcao=$funcao.' >= 0;';
	}
}
$funcao .= '</div>';

$_SESSION['restricaopadrao']=$funcao;
$conteudo=$conteudo.$funcao;
$conteudo=$conteudo.'<br><br>';
$conteudo=$conteudo.'<div style="text-align:center"><button id="submit" name="submit" class="btn btn-primary btn-lg ">Definir</button></div>';
$conteudo=$conteudo.'</form>';
$tela->SetContent($conteudo);
$tela->ShowTemplate();
?>