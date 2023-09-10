<?php
      if(isset($_POST['submit']))
      {
        //print_r($_POST['nomecompleto']);
        //print_r($_POST['graduacao']);
        //print_r($_POST['nomeguerra']);
        //print_r($_POST['arma']);
        //print_r($_POST['funcao']);
        //print_r($_POST['cpf']);
        //print_r($_POST['inputPassword']);
        //print_r($_POST['inputPassword2']);

        include_once('config.php');
        $cia = isset($_POST['cia']) ? $_POST['cia'] : '';
        $nomecompleto = $_POST['nomecompleto'];
        $graduacao = $_POST['graduacao'];
        $nomeguerra = $_POST['nomeguerra'];
        $arma = $_POST['arma'];
        $funcao = $_POST['funcao'];
        $cpf = $_POST['cpf'];
        $inputPassword = $_POST['inputPassword'];
        $inputPassword2 = $_POST['inputPassword2'];


        $result = mysqli_query($conexao, "INSERT INTO usuarios(cia,nomecompleto,graduacao,nomeguerra,arma,funcao,cpf,inputPassword,inputPassword2) 
        VALUES ('$cia','$nomecompleto','$graduacao','$nomeguerra','$arma','$funcao','$cpf','$inputPassword','$inputPassword2')");
        


if ($result) {
  $resposta = "Cadastro realizado com sucesso!";
} else {
  $resposta = "Erro ao cadastrar usuário.";
}

mysqli_close($conexao);




      }


?>



<html><!-- MEMO: update me with `git checkout gh-pages && git merge master && git push origin gh-pages` --><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="./favicon.ico">

  <title>Arranchamento Digital - 51º BIS</title>
  
  <!--CSS de complemento-->
  <link href="./complemento.css" rel="stylesheet">  

  <!-- Material Design fonts -->
  <link rel="stylesheet" href="./material_desing\dependencias\roboto.css" type="text/css">
  <link href="./material_desing\dependencias\materialicons.css" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="./material_desing\dependencias\bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Material Design -->
  <link href="./material_desing\dist\css\bootstrap-material-design.css" rel="stylesheet">
  <link href="./material_desing\dist\css\ripples.min.css" rel="stylesheet">


  <link href="./material_desing\dependencias\snackbar.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  //<script src="chrome-extension://ajdpfmkffanmkhejnopjppegokpogffp/assets/prompt.js"></script></head>
<body onload="document.formlogin.login.focus();tamanho_elemento();" class="fundo" id="bodyy" style="height: 731px;">
    


<div class="container">
  <!-- Form -->
    <div class="panel panel-info">
      <div class="panel-heading">
        <table style="width:100%">
            <tbody><tr>
                <th> <img src="./img/arranchamento_72x72.png" height="48">
                    <font style="font-size:16px;margin-left:2px;position: relative;top: 7px"><b>Nova conta</b></font><b>
                </b></th>
                <th>
                    <button onclick="history.back();" class="buttonvoltar"></button>
                </th>
            </tr>
        </tbody></table>       
    </div>
      <div class="panel-body" method="post">        
      <form action="cadastro.php" method="post">
        <center>"<h1><?php echo isset($_POST['grad']) ? $_POST['grad'] : ''; ?></h1> - <h1><?php echo isset($_POST['cia']) ? $_POST['cia'] : ''; ?></h1>"</center>     
    
                    <div class="form-group is-empty">
                      <label for="inputNGuerra" class="col-md-2 control-label">Nome Completo</label>        
                      <div class="col-md-10">
                        <input type="text" onkeyup="visibilidade_cp();" onfocus="proximoCampo ='graduacao'; " class="form-control" id="nomecompleto" name="nomecompleto" placeholder="" onblur="upperCaseF(this)" data-siid="si_input_0">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputNome" class="col-md-2 control-label">Graduação</label>        
                      <div class="col-md-10">
                        <select id="graduacao" name="graduacao" class="form-control" onfocus="proximoCampo ='nomeguerra'; " "="">
                          <option value="GEN">GEN</option>
                          <option value="CEL">CEL</option>
                          <option value="TC">TC</option>
                          <option value="MAJ">MAJ</option>
                          <option value="CAP">CAP</option>
                          <option value="1º TEN">1º TEN</option>
                          <option value="2º TEN">2º TEN</option>
                          <option value="ASP OF">ASP OF</option>
                          <option value="ST">ST</option>
                          <option value="1º SGT">1º SGT</option>
                          <option value="2º SGT">2º SGT</option>
                          <option value="3º SGT">3º SGT</option>
                          <option value="CB">CB</option>
                          <option value="SD">SD</option>
                          <option value="SD EV">SD EV</option>
                        </select>
                      </div>              
                    </div>

                    <div class="form-group is-empty">
                      <label for="inputNome" class="col-md-2 control-label">Nome de Guerra</label>        
                      <div class="col-md-10">
                        <input type="text" onkeyup="visibilidade_cp();" class="form-control" name="nomeguerra" id="nomeguerra" placeholder="" onblur="upperCaseF(this)" onfocus="proximoCampo ='arma'; " data-siid="si_input_1">
                      </div>              
                    </div>
                    
                    <div class="form-group">
                      <label for="inputNome" class="col-md-2 control-label">Arma</label>        
                      <div class="col-md-10">
                        <select id="arma" name="arma" class="form-control" onfocus="proximoCampo ='funcao'; ">
                          <option value="INFANTARIA">INFANTARIA</option>
                          <option value="CAVALARIA">CAVALARIA</option>
                          <option value="ARTILHARIA">ARTILHARIA</option>
                          <option value="ENGENHARIA">ENGENHARIA</option>
                          <option value="COMUNICAÇÕES">COMUNICAÇÕES</option>
                          <option value="INTENDÊNCIA">INTENDÊNCIA</option>
                          <option value="MATERIAL BÉLICO">MATERIAL BÉLICO</option>
                          <option value="OUTRAS">OUTRAS</option>                  
                        </select>
                      </div>              
                    </div>                    

                    <div class="form-group is-empty">
                      <label for="inputCPF" class="col-md-2 control-label">Seção/Função</label>        
                      <div class="col-md-10">
                        <input type="text" onkeyup="visibilidade_cp();" class="form-control" name="funcao" id="funcao" placeholder="" onblur="upperCaseF(this)" onfocus="proximoCampo ='cpf'; " data-siid="si_input_2">
                      </div>              
                    </div>

                    <div class="form-group is-empty">
                      <label for="inputCPF" class="col-md-2 control-label">Nr do CPF</label>        
                      <div class="col-md-10">
                        <input type="number" onkeyup="visibilidade_cp();" class="form-control" id="cpf" name="cpf" placeholder="" onfocus="proximoCampo ='inputPassword'; " data-siid="si_input_3">
                      </div>              
                    </div>            

                    <div class="form-group is-empty">
                          <label for="inputPassword" class="col-md-2 control-label">Senha</label>            
                          <div class="col-md-10">
                            <input onkeyup="visibilidade_cp();" type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="" onfocus="proximoCampo ='inputPassword2'; " data-siid="si_input_4">
                          </div>
                    </div>
                    <div class="form-group is-empty">
                          <label for="inputPassword2" class="col-md-2 control-label">Redigite sua senha</label>            
                          <div class="col-md-10">
                            <input onkeyup="visibilidade_cp();" type="password" class="form-control" id="inputPassword2" name="inputPassword2" placeholder="" data-siid="si_input_5">
                          </div>
                    </div> 

                    <input type="hidden" name="tipo_acesso" value="Militar Ativo">
                    <input type="hidden" name="numero" value="NULL">
                    <input type="hidden" name="turma" value="">

                    <div id="msg" style="font-weight:100;font-size:12px;position: fixed;left:30%;bottom: 15px;z-index: 1;visibility:visible">O botão para gravar só aparece depois que todos os campos estão preenchidos corretamente!</div>

                    <button type="submit" name="submit" id="gravar" action="login.php" style="background: url(./img/like_48x48.png);border:0;          display:block;height:48px;width:48px;position: fixed;left:80%;bottom: 15px;z-index: 1;visibility:hidden"></button>

                </form>
                        
      </div>
    </div>

</div>
<br>

<script src="./material_desing/dependencias/jquery-1.10.2.min.js"></script>
<script src="./material_desing/dependencias/bootstrap.min.js"></script>
<script>
</script>
<script src="material_desing\dist\js\ripples.min.js"></script>
<script src="material_desing\dist\js\material.min.js"></script>
<script src="material_desing\dependencias\snackbar.min.js"></script>



<script src="material_desing\dependencias\jquery.nouislider.min.js"></script>

<script>
    //Função para ocultar o botão de gravar
    function visibilidade_cp() {
        if(document.getElementById('inputPassword').value == document.getElementById('inputPassword2').value && 
           document.getElementById('nomecompleto').value.length!=0 &&
           document.getElementById('nomeguerra').value.length!=0 &&
           document.getElementById('inputPassword').value.length!=0   &&
           document.getElementById('cpf').value.length!=0 &&
           document.getElementById('funcao').value.length!=0
          ){
            document.getElementById('gravar').style.visibility = 'visible';
            document.getElementById('msg').style.visibility = 'hidden';
        }
        else{
            document.getElementById('gravar').style.visibility = 'hidden';
            document.getElementById('msg').style.visibility = 'visible';
        }
        
    }
    function visibilidade() {
        if(document.getElementById('inputPassword').value == document.getElementById('inputPassword2').value && 
           document.getElementById('nomecompleto').value.length!=0 &&
           document.getElementById('nomeguerra').value.length!=0 &&
           document.getElementById('inputPassword').value.length!=0   &&
           document.getElementById('cpf').value.length!=0 &&
           document.getElementById('numero').value.length!=0
          ){
            document.getElementById('gravar').style.visibility = 'visible';
            document.getElementById('msg').style.visibility = 'hidden';
        }
        else{
            document.getElementById('gravar').style.visibility = 'hidden';
            document.getElementById('msg').style.visibility = 'visible';
        }
        
    }    
</script>

<script>
  $(function () {
    $.material.init();
    $(".shor").noUiSlider({
      start: 40,
      connect: "lower",
      range: {
        min: 0,
        max: 100
      }
    });

    $(".svert").noUiSlider({
      orientation: "vertical",
      start: 40,
      connect: "lower",
      range: {
        min: 0,
        max: 100
      }
    });
  });
  //Função para deixar as letras maiúsculas
  function upperCaseF(a){
    setTimeout(function(){
        a.value = a.value.toUpperCase();
    }, 1);
  }
  
//###############################################################
//FUNÇÃO PARA PASSAR PARA O PROXIMO CAMPO COM A TECLA "enter"
//nome do formulário 
nomeForm = "formulario"  
//função que gere o evento 
function TeclaPressionada( e ) {  
if ( window.event != null)     //IE4+  
tecla = window.event.keyCode;  
else if ( e != null )          //N4+ o W3C compatíveis  
tecla = e.which;  
else  
return;  
if (tecla == 13) {             //se pressionou enter  
if ( proximoCampo == "fin" ) { //fim da sequência, faz o submit  
alert("Envio do formulário.")  //eliminar este alert para uso normal  
return false                   //sustituir por return true para fazer o submit  
} else {                       //passa o foco para o campo seguinte 
eval("document." + nomeForm + "." + proximoCampo + ".focus()")  
return false  
}  
}  
}  
document.onkeydown = TeclaPressionada;  //faz com que a função TeclaPressionada seja executada no evento onkeydown 
if (document.captureEvents)             //netscape é especial: requer ativação da captura do evento  
document.captureEvents(Event.KEYDOWN)
//###############################################################  
</script>






<div id="snackbar-container"></div><script src="//abp.smartadcheck.de/js/abpc.js?#ads/banner/ad/" type="text/javascript"></script></body></html>