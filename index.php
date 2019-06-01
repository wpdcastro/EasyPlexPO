<body style="background-color:#fafafa;">
<?php
require('view/template.php');

$tela = new template;
$tela->SetTitle('Easy Simplex');

$conteudo='
<div>
  <form class="form-horizontal" action="restricoes.php" method="GET">
    <fieldset>

      <!-- Form Name -->
      <div class="container" style="margin-left:25%;">
        <img src="/images/logo_Easy_Plex.png" alt="super" width="500" height="200">
      </div>
      <br><br>
      <!-- Entrada de Texto -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="qtdevariaveis">Variáveis</label>  
          <div class="col-xs-4">
            <input id="qtdevariaveis" name="qtdevariaveis" type="number" step="0.01" placeholder="Ex: 2" class="form-control form-control-lg" required>
          </div>
        </div>

      <!-- Entrada de Texto -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="qtderestricoes">Restrições:</label>  
          <div class="col-xs-4">
            <input id="qtderestricoes" name="qtderestricoes" type="number" step="0.01" placeholder="Ex: 2" class="form-control input-md col-xs-3 col-md-2" required>
          </div>
        </div>

      <!-- Seleção do Modo Max ou Min -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="objetivo">Objetivo</label>
          <div class="col-xs-4">
            <select id="objetivo" name="objetivo" class="form-control">
              <option value="max">Maximizar</option>
              <option value="min">Minimizar</option>
            </select>
          </div>
        </div>

      <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="submit"></label>
          <div class="col-md-4">
            <button name="submit" class="btn btn-primary btn-lg btn-block">Continuar</button>
          </div>
        </div>
    </fieldset>
  </form>
</div>
';

$tela->SetContent($conteudo);
$tela->ShowTemplate();
?>