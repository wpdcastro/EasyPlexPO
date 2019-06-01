<style>

    .trem {
        padding-left: 30%;
    }

    img {
        border-radius: 50%;
    }
</style>
<html>
  <head>
    <meta charset="utf-8">
    <title>Easy Simplex</title>
    <link rel="stylesheet" href="estilosimplex.css">
    <script type="text/javascript" src="scripts.js"></script>
    <script type="text/javascript" src="../jquery.min.js"></script>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  </head>

  <?php
    require('view/template.php');
    $tela = new template;
    $tela->SetTitle('Easy Simplex - Time');
    $tela->SetProjectName('Easy Simplex');
    $tela->ShowTemplate();
  ?>
  
  <div style="text-align:center;">
    <h1 style="color:#0000CD;">Time de Desenvolvimento</h1>
    <br><br>
    <div class="trem">
        <table>
            <tr>  
                <th>
                    <img src="https://scontent.fcgh21-1.fna.fbcdn.net/v/t1.0-9/38118633_1236826793123933_6840663041621622784_n.jpg?_nc_cat=110&_nc_ht=scontent.fcgh21-1.fna&oh=7550fa6a54eab73c11ebea0ff29c2b13&oe=5D9C32BD" alt="super" width="150" height="150">
                </th>
                <th style="padding-left:230px"></th>
                <th>
                    <h3><span>Barbara Caroline</span></h3>
                    RA: 567620 <br>
                </th>
            </tr>
        </table>
    </div>
    <br>
    <div class="trem">
        <table>
            <tr>  
                <th>
                    <h3><span>Bruno Costa</span></h3>
                    RA: 568805 <br>
                </th>
                <th style="padding-left:230px"></th>
                <th>
                    <img src="https://scontent.fcgh21-1.fna.fbcdn.net/v/t1.0-9/12742620_1032793403460071_8987230866120309145_n.jpg?_nc_cat=106&_nc_ht=scontent.fcgh21-1.fna&oh=24a4f95bfcbbaf5daf25be1cb469d525&oe=5D90FD33" alt="super" width="150" height="150">
                </th>
            </tr>
        </table>
    </div>
    <br>
    <div class="trem">
        <table>
            <tr>  
                <th>
                    
                    <img src="https://scontent.fmii2-1.fna.fbcdn.net/v/t1.0-9/36030818_1711557132274299_5025201552676093952_n.jpg?_nc_cat=101&_nc_ht=scontent.fmii2-1.fna&oh=f2f21257a9a2f96f96abb4c644e89171&oe=5D907F59" alt="super" width="150" height="150">
                </th>
                <th style="padding-left:230px"></th>
                <th>
                    <h3><span>William Castro</span></h3>
                    RA: 571644 <br>
                </th>
            </tr>
        </table>
    </div>
  </body>
</html>