<html><!-- MEMO: update me with `git checkout gh-pages && git merge master && git push origin gh-pages` --><head>
  <link rel="icon" href="./favicon.ico">  

<script src="chrome-extension://ajdpfmkffanmkhejnopjppegokpogffp/assets/prompt.js"></script></head><body style="">﻿  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <title>Arranchamento</title>
  
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
    

 




<!--VARIÁVEIS DE DATAS E CONEXÃO-->


<div class="container" id="container">

  <!-- Form Arranchamento
================================================== -->  
  <div class="panel panel-info" style="margin-top: -21px">
    <div class="panel-heading">
		<table style="width:100%">
		  <tbody><tr>
			<th>
            <img src="./img/arranchamento_72x72.png" height="48">
				<font style="font-size:16px;margin-left:2px;position: relative;top: 7px"><b>Arranchar</b></font><b>			
			</b></th>
			<th style="text-align:right">
				 <a href="logout.php" title="Sair" class="botaosair"><img src="./img/sair.png"></a>
				 <a href="editar_conta.php" title="Editar minha Conta" class="botaosair"><img src="./img/editar.png"></a>
				 			</th>
		  </tr>
		</tbody></table>
	  
    </div>
    <div class="panel-body">
        <form method="post" class="form-horizontal" style="color: white" action="arrancha.php" id="form_arrancha" name="form_arrancha">
            <center><h3 style="color:#fe9400">
            Boa noite, 1º TEN RICHARD AGUIAR</h3></center><br>
			21:34:47 - 51º BIS            <table style="width:100%;line-height: 200%; border-top: 3px solid rgb(40,40,40);">
                <tbody><tr>
                    <th style="width:50%"><h4>Dias/Refeições</h4></th>    
                    <th><!--ICONE CAFÉ--><img src="./img/cafe.png"></th>    
                    <th><!--ICONE ALMOÇO--><img src="./img/almoco.png"></th>   
                    <th><!--ICONE JANTAR--><img src="./img/jantar.png"></th>
                </tr>
            </tbody></table>

            <br>
		  
		<table style="width:100%;line-height: 200%; border-top: 3px solid rgb(40,40,40);">
		  <tbody><tr>
			<th style="width:50%"><font style="font-size:20px;color:white">Hoje</font><br>
										  <font style="color:white">02-05-2023</font><br>
										  <font style="color:#cb00ff;font-size:11px">   </font>
										  <font style="color:cyan;font-size:11px">Expediente normal<br></font>
										  <font style="color:cyan;font-size:11px">Prazo: Até 10:30:00 de segunda<br></font>
										  </th>    
			<th><!--CHECKBOX CAFÉ-->
				<div class="checkbox">
				  <label style="opacity: 0.2;filter: invert(100%);"> 
					<input type="checkbox" value="None" onclick="this.checked=!this.checked;" id="caf0" name="checkcaf0"><span class="checkbox-material"><span class="check"></span></span>
				  </label>
				</div>    
			</th>
			
			<th><!--CHECKBOX ALMOÇO-->
				<div class="checkbox">
				  <label style="opacity: 0.2;filter: invert(100%);">
					<input type="checkbox" value="None" onclick="this.checked=!this.checked;" id="alm0" name="checkalm0"><span class="checkbox-material"><span class="check"></span></span>
				  </label>
				</div>    
			</th>
			
			<th><!--CHECKBOX JANTAR-->
				<div class="checkbox">
				  <label style="opacity: 0.2;filter: invert(100%);">
					<input type="checkbox" value="None" onclick="this.checked=!this.checked;" id="jan0" name="checkjan0"><span class="checkbox-material"><span class="check"></span></span>
				  </label>
				</div>    
			</th>
			
		  </tr>
		</tbody></table>
    
            <div class="form-group has-warning is-empty" id="almoco_justificativa0" style="background-color:#522121;display:none;position:fixed;top:2%;padding:15px;z-index:10"><br>
                <p>Por favor, justifique o seu arranchamento para o almoço de Sexta-Feira</p>
                <label class="control-label" for="inputWarning">Descreva de forma sucinta</label>
                <input class="form-control" type="text" value="" id="justificativa_texto0" name="almoco_justificativa0" style="color:white" data-siid="si_input_0">   
                <font onclick="verifica_just_preench('justificativa_texto0','almoco_justificativa0','alm0');" style="margin-right:30px;cursor:pointer;color:#00ff00;font-weight: 500;">Justificar</font>
                <font onclick="sem_justificativa(0)" style="margin-right:30px;cursor:pointer;color:#ffb3b3;font-weight: 500;">Não me arranchar</font>
            </div>
        <br>
		  
		<table style="width:100%;line-height: 200%; border-top: 3px solid rgb(40,40,40);">
		  <tbody><tr>
			<th style="width:50%"><font style="font-size:20px;color:white">Quarta-feira</font><br>
										  <font style="color:white">03-05-2023</font><br>
										  <font style="color:#cb00ff;font-size:11px">   </font>
										  <font style="color:cyan;font-size:11px">Expediente normal<br></font>
										  <font style="color:cyan;font-size:11px">Prazo: Encerrado<br></font>
										  </th>    
			<th><!--CHECKBOX CAFÉ-->
				<div class="checkbox">
				  <label style="opacity: 0.2;filter: invert(100%);"> 
					<input type="checkbox" value="None" onclick="this.checked=!this.checked;" id="caf1" name="checkcaf1"><span class="checkbox-material"><span class="check"></span></span>
				  </label>
				</div>    
			</th>
			
			<th><!--CHECKBOX ALMOÇO-->
				<div class="checkbox">
				  <label style="opacity: 0.2;filter: invert(100%);">
					<input type="checkbox" value="None" onclick="this.checked=!this.checked;" id="alm1" name="checkalm1"><span class="checkbox-material"><span class="check"></span></span>
				  </label>
				</div>    
			</th>
			
			<th><!--CHECKBOX JANTAR-->
				<div class="checkbox">
				  <label style="opacity: 0.2;filter: invert(100%);">
					<input type="checkbox" value="None" onclick="this.checked=!this.checked;" id="jan1" name="checkjan1"><span class="checkbox-material"><span class="check"></span></span>
				  </label>
				</div>    
			</th>
			
		  </tr>
		</tbody></table>
    
            <div class="form-group has-warning is-empty" id="almoco_justificativa1" style="background-color:#522121;display:none;position:fixed;top:2%;padding:15px;z-index:10"><br>
                <p>Por favor, justifique o seu arranchamento para o almoço de Sexta-Feira</p>
                <label class="control-label" for="inputWarning">Descreva de forma sucinta</label>
                <input class="form-control" type="text" value="" id="justificativa_texto1" name="almoco_justificativa1" style="color:white" data-siid="si_input_1">   
                <font onclick="verifica_just_preench('justificativa_texto1','almoco_justificativa1','alm1');" style="margin-right:30px;cursor:pointer;color:#00ff00;font-weight: 500;">Justificar</font>
                <font onclick="sem_justificativa(1)" style="margin-right:30px;cursor:pointer;color:#ffb3b3;font-weight: 500;">Não me arranchar</font>
            </div>
        <br>
		  
		<table style="width:100%;line-height: 200%; border-top: 3px solid rgb(40,40,40);">
		  <tbody><tr>
			<th style="width:50%"><font style="font-size:20px;color:white">Quinta-feira</font><br>
										  <font style="color:white">04-05-2023</font><br>
										  <font style="color:#cb00ff;font-size:11px">   </font>
										  <font style="color:cyan;font-size:11px">Expediente normal<br></font>
										  <font style="color:cyan;font-size:11px">Prazo: Até 10:30:00 de quarta<br></font>
										  </th>    
			<th><!--CHECKBOX CAFÉ-->
				<div class="checkbox">
				  <label> 
					<input type="checkbox" value="None" id="caf2" name="checkcaf2"><span class="checkbox-material"><span class="check"></span></span>
				  </label>
				</div>    
			</th>
			
			<th><!--CHECKBOX ALMOÇO-->
				<div class="checkbox">
				  <label>
					<input type="checkbox" value="None" id="alm2" name="checkalm2"><span class="checkbox-material"><span class="check"></span></span>
				  </label>
				</div>    
			</th>
			
			<th><!--CHECKBOX JANTAR-->
				<div class="checkbox">
				  <label>
					<input type="checkbox" value="None" id="jan2" name="checkjan2"><span class="checkbox-material"><span class="check"></span></span>
				  </label>
				</div>    
			</th>
			
		  </tr>
		</tbody></table>
    
            <div class="form-group has-warning is-empty" id="almoco_justificativa2" style="background-color:#522121;display:none;position:fixed;top:2%;padding:15px;z-index:10"><br>
                <p>Por favor, justifique o seu arranchamento para o almoço de Sexta-Feira</p>
                <label class="control-label" for="inputWarning">Descreva de forma sucinta</label>
                <input class="form-control" type="text" value="" id="justificativa_texto2" name="almoco_justificativa2" style="color:white" data-siid="si_input_2">   
                <font onclick="verifica_just_preench('justificativa_texto2','almoco_justificativa2','alm2');" style="margin-right:30px;cursor:pointer;color:#00ff00;font-weight: 500;">Justificar</font>
                <font onclick="sem_justificativa(2)" style="margin-right:30px;cursor:pointer;color:#ffb3b3;font-weight: 500;">Não me arranchar</font>
            </div>
        <br>
		  
		<table style="width:100%;line-height: 200%; border-top: 3px solid rgb(40,40,40);">
		  <tbody><tr>
			<th style="width:50%"><font style="font-size:20px;color:white">Sexta-feira</font><br>
										  <font style="color:white">05-05-2023</font><br>
										  <font style="color:#cb00ff;font-size:11px">   </font>
										  <font style="color:cyan;font-size:11px">Expediente normal<br></font>
										  <font style="color:cyan;font-size:11px">Prazo: Até 10:30:00 de quinta<br></font>
										  </th>    
			<th><!--CHECKBOX CAFÉ-->
				<div class="checkbox">
				  <label> 
					<input type="checkbox" value="None" id="caf3" name="checkcaf3"><span class="checkbox-material"><span class="check"></span></span>
				  </label>
				</div>    
			</th>
			
			<th><!--CHECKBOX ALMOÇO-->
				<div class="checkbox">
				  <label>
					<input type="checkbox" onclick="div_visivel('almoco_justificativa3');tamanho_msg('almoco_justificativa3');reaplica_check('alm3')" value="None" id="alm3" name="checkalm3"><span class="checkbox-material"><span class="check"></span></span>
				  </label>
				</div>    
			</th>
			
			<th><!--CHECKBOX JANTAR-->
				<div class="checkbox">
				  <label>
					<input type="checkbox" value="None" id="jan3" name="checkjan3"><span class="checkbox-material"><span class="check"></span></span>
				  </label>
				</div>    
			</th>
			
		  </tr>
		</tbody></table>
    
            <div class="form-group has-warning is-empty" id="almoco_justificativa3" style="background-color:#522121;display:none;position:fixed;top:2%;padding:15px;z-index:10"><br>
                <p>Por favor, justifique o seu arranchamento para o almoço de Sexta-Feira</p>
                <label class="control-label" for="inputWarning">Descreva de forma sucinta</label>
                <input class="form-control" type="text" value="" id="justificativa_texto3" name="almoco_justificativa3" style="color:white" data-siid="si_input_3">   
                <font onclick="verifica_just_preench('justificativa_texto3','almoco_justificativa3','alm3');" style="margin-right:30px;cursor:pointer;color:#00ff00;font-weight: 500;">Justificar</font>
                <font onclick="sem_justificativa(3)" style="margin-right:30px;cursor:pointer;color:#ffb3b3;font-weight: 500;">Não me arranchar</font>
            </div>
        <br>
		  
		<table style="width:100%;line-height: 200%; border-top: 3px solid rgb(40,40,40);">
		  <tbody><tr>
			<th style="width:50%"><font style="font-size:20px;color:red">Sábado</font><br>
										  <font style="color:red">06-05-2023</font><br>
										  <font style="color:#cb00ff;font-size:11px">   </font>
										  <font style="color:cyan;font-size:11px">Sem expediente<br></font>
										  <font style="color:cyan;font-size:11px">Prazo: Até 10:30:00 de sexta<br></font>
										  </th>    
			<th><!--CHECKBOX CAFÉ-->
				<div class="checkbox">
				  <label> 
					<input type="checkbox" value="None" id="caf4" name="checkcaf4"><span class="checkbox-material"><span class="check"></span></span>
				  </label>
				</div>    
			</th>
			
			<th><!--CHECKBOX ALMOÇO-->
				<div class="checkbox">
				  <label>
					<input type="checkbox" value="None" id="alm4" name="checkalm4"><span class="checkbox-material"><span class="check"></span></span>
				  </label>
				</div>    
			</th>
			
			<th><!--CHECKBOX JANTAR-->
				<div class="checkbox">
				  <label>
					<input type="checkbox" value="None" id="jan4" name="checkjan4"><span class="checkbox-material"><span class="check"></span></span>
				  </label>
				</div>    
			</th>
			
		  </tr>
		</tbody></table>
    
            <div class="form-group has-warning is-empty" id="almoco_justificativa4" style="background-color:#522121;display:none;position:fixed;top:2%;padding:15px;z-index:10"><br>
                <p>Por favor, justifique o seu arranchamento para o almoço de Sexta-Feira</p>
                <label class="control-label" for="inputWarning">Descreva de forma sucinta</label>
                <input class="form-control" type="text" value="" id="justificativa_texto4" name="almoco_justificativa4" style="color:white" data-siid="si_input_4">   
                <font onclick="verifica_just_preench('justificativa_texto4','almoco_justificativa4','alm4');" style="margin-right:30px;cursor:pointer;color:#00ff00;font-weight: 500;">Justificar</font>
                <font onclick="sem_justificativa(4)" style="margin-right:30px;cursor:pointer;color:#ffb3b3;font-weight: 500;">Não me arranchar</font>
            </div>
        <br>
		  
		<table style="width:100%;line-height: 200%; border-top: 3px solid rgb(40,40,40);">
		  <tbody><tr>
			<th style="width:50%"><font style="font-size:20px;color:red">Domingo</font><br>
										  <font style="color:red">07-05-2023</font><br>
										  <font style="color:#cb00ff;font-size:11px">   </font>
										  <font style="color:cyan;font-size:11px">Sem expediente<br></font>
										  <font style="color:cyan;font-size:11px">Prazo: Até 10:30:00 de sexta<br></font>
										  </th>    
			<th><!--CHECKBOX CAFÉ-->
				<div class="checkbox">
				  <label> 
					<input type="checkbox" value="None" id="caf5" name="checkcaf5"><span class="checkbox-material"><span class="check"></span></span>
				  </label>
				</div>    
			</th>
			
			<th><!--CHECKBOX ALMOÇO-->
				<div class="checkbox">
				  <label>
					<input type="checkbox" value="None" id="alm5" name="checkalm5"><span class="checkbox-material"><span class="check"></span></span>
				  </label>
				</div>    
			</th>
			
			<th><!--CHECKBOX JANTAR-->
				<div class="checkbox">
				  <label>
					<input type="checkbox" value="None" id="jan5" name="checkjan5"><span class="checkbox-material"><span class="check"></span></span>
				  </label>
				</div>    
			</th>
			
		  </tr>
		</tbody></table>
    
            <div class="form-group has-warning is-empty" id="almoco_justificativa5" style="background-color:#522121;display:none;position:fixed;top:2%;padding:15px;z-index:10"><br>
                <p>Por favor, justifique o seu arranchamento para o almoço de Sexta-Feira</p>
                <label class="control-label" for="inputWarning">Descreva de forma sucinta</label>
                <input class="form-control" type="text" value="" id="justificativa_texto5" name="almoco_justificativa5" style="color:white" data-siid="si_input_5">   
                <font onclick="verifica_just_preench('justificativa_texto5','almoco_justificativa5','alm5');" style="margin-right:30px;cursor:pointer;color:#00ff00;font-weight: 500;">Justificar</font>
                <font onclick="sem_justificativa(5)" style="margin-right:30px;cursor:pointer;color:#ffb3b3;font-weight: 500;">Não me arranchar</font>
            </div>
        <br>
		  
		<table style="width:100%;line-height: 200%; border-top: 3px solid rgb(40,40,40);">
		  <tbody><tr>
			<th style="width:50%"><font style="font-size:20px;color:white">Segunda-feira</font><br>
										  <font style="color:white">08-05-2023</font><br>
										  <font style="color:#cb00ff;font-size:11px">   </font>
										  <font style="color:cyan;font-size:11px">Expediente normal<br></font>
										  <font style="color:cyan;font-size:11px">Prazo: Até 10:30:00 de sabado<br></font>
										  </th>    
			<th><!--CHECKBOX CAFÉ-->
				<div class="checkbox">
				  <label> 
					<input type="checkbox" value="None" id="caf6" name="checkcaf6"><span class="checkbox-material"><span class="check"></span></span>
				  </label>
				</div>    
			</th>
			
			<th><!--CHECKBOX ALMOÇO-->
				<div class="checkbox">
				  <label>
					<input type="checkbox" value="None" id="alm6" name="checkalm6"><span class="checkbox-material"><span class="check"></span></span>
				  </label>
				</div>    
			</th>
			
			<th><!--CHECKBOX JANTAR-->
				<div class="checkbox">
				  <label>
					<input type="checkbox" value="None" id="jan6" name="checkjan6"><span class="checkbox-material"><span class="check"></span></span>
				  </label>
				</div>    
			</th>
			
		  </tr>
		</tbody></table>
    
            <div class="form-group has-warning is-empty" id="almoco_justificativa6" style="background-color:#522121;display:none;position:fixed;top:2%;padding:15px;z-index:10"><br>
                <p>Por favor, justifique o seu arranchamento para o almoço de Sexta-Feira</p>
                <label class="control-label" for="inputWarning">Descreva de forma sucinta</label>
                <input class="form-control" type="text" value="" id="justificativa_texto6" name="almoco_justificativa6" style="color:white" data-siid="si_input_6">   
                <font onclick="verifica_just_preench('justificativa_texto6','almoco_justificativa6','alm6');" style="margin-right:30px;cursor:pointer;color:#00ff00;font-weight: 500;">Justificar</font>
                <font onclick="sem_justificativa(6)" style="margin-right:30px;cursor:pointer;color:#ffb3b3;font-weight: 500;">Não me arranchar</font>
            </div>
        <br>
		  
		<table style="width:100%;line-height: 200%; border-top: 3px solid rgb(40,40,40);">
		  <tbody><tr>
			<th style="width:50%"><font style="font-size:20px;color:white">Terça-feira</font><br>
										  <font style="color:white">09-05-2023</font><br>
										  <font style="color:#cb00ff;font-size:11px">   </font>
										  <font style="color:cyan;font-size:11px">Expediente normal<br></font>
										  <font style="color:cyan;font-size:11px">Prazo: Até 10:30:00 de segunda<br></font>
										  </th>    
			<th><!--CHECKBOX CAFÉ-->
				<div class="checkbox">
				  <label> 
					<input type="checkbox" value="None" id="caf7" name="checkcaf7"><span class="checkbox-material"><span class="check"></span></span>
				  </label>
				</div>    
			</th>
			
			<th><!--CHECKBOX ALMOÇO-->
				<div class="checkbox">
				  <label>
					<input type="checkbox" value="None" id="alm7" name="checkalm7"><span class="checkbox-material"><span class="check"></span></span>
				  </label>
				</div>    
			</th>
			
			<th><!--CHECKBOX JANTAR-->
				<div class="checkbox">
				  <label>
					<input type="checkbox" value="None" id="jan7" name="checkjan7"><span class="checkbox-material"><span class="check"></span></span>
				  </label>
				</div>    
			</th>
			
		  </tr>
		</tbody></table>
    
            <div class="form-group has-warning is-empty" id="almoco_justificativa7" style="background-color:#522121;display:none;position:fixed;top:2%;padding:15px;z-index:10"><br>
                <p>Por favor, justifique o seu arranchamento para o almoço de Sexta-Feira</p>
                <label class="control-label" for="inputWarning">Descreva de forma sucinta</label>
                <input class="form-control" type="text" value="" id="justificativa_texto7" name="almoco_justificativa7" style="color:white" data-siid="si_input_7">   
                <font onclick="verifica_just_preench('justificativa_texto7','almoco_justificativa7','alm7');" style="margin-right:30px;cursor:pointer;color:#00ff00;font-weight: 500;">Justificar</font>
                <font onclick="sem_justificativa(7)" style="margin-right:30px;cursor:pointer;color:#ffb3b3;font-weight: 500;">Não me arranchar</font>
            </div>
                    <div class="modal-footer">
              <button type="submit" style="background: url(./img/like_48x48.png);border:0; display:block;height:48px;width:48px;
                                position: fixed;left:80%;bottom: 15px;z-index: 1;"></button>
            </div>          
        </form>
    </div>
  </div>   
  
<br>

<!--Função para mostrar ou ocultar uma DIV-->
<script>
    function div_visivel(el) {
        var display = document.getElementById(el).style.display;

            if(display == "none") document.getElementById(el).style.display = 'block';
            else document.getElementById(el).style.display = 'none';
    }
    
    function sem_justificativa(i) {
        document.getElementById('almoco_justificativa'+i).style.display = 'none';
        document.getElementById('alm'+i).checked = false;
        document.getElementById('justificativa_texto'+i).value = "";

    }      
    
    //<!--Função para determinar o tamanho da DIV da justificativa de Sexta. Pega o tamanho do container-->
    function tamanho_msg(id_nome){
        var width = window.getComputedStyle(document.getElementById("container"), null).getPropertyValue("width");
        document.getElementById(id_nome).style.width = width;
    }
    
    //<!--Função para determinar o tamanho de um elemento-->
    function tamanho_elemento(id_destino,id_base,porcentagem){
        var width = window.getComputedStyle(document.getElementById(id_base), null).getPropertyValue("width");
        width = width.replace("px","");
        document.getElementById(id_destino).style.width = (width*(porcentagem/100))+"px";
    }        
      

    function reaplica_check(elemento) {
        if(document.getElementById(elemento).checked != true)
            document.getElementById(elemento).checked = true;
        else
            document.getElementById(elemento).checked = false;
    }
    function verifica_just_preench(input_justificativa,quem_ocultar,quem_checar){
        if(document.getElementById(input_justificativa).value.length == 0)
        {
            alert('Você deve preencher a sua justificativa para poder se arranchar');
        }
        else {
            div_visivel(quem_ocultar);
            document.getElementById(quem_checar).checked = true;
        }


}
</script>




<script src="material_design/dependencias/jquery-1.10.2.min.js"></script>
<script src="material_design/dependencias/bootstrap.min.js"></script>
<script src="material_design/dist/js/ripples.min.js"></script>
<script src="material_design/dist/js/material.min.js"></script>
<script src="material_design/dependencias/snackbar.min.js"></script>


<script src="material_design/dependencias/jquery.nouislider.min.js"></script>
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



// bloquear arranchamentos - MANUAL
/*  $('#caf2').attr('disabled', 'disabled');
  $('#alm2').attr('disabled', 'disabled');
  $('#jan2').attr('disabled', 'disabled');

  $('#caf3').attr('disabled', 'disabled');
  $('#alm3').attr('disabled', 'disabled');
  $('#jan3').attr('disabled', 'disabled');
  */
</script>

<div style="position:fixed;bottom:0px;left:20px;">
<a href="https://secpsico.blogspot.com/" onmousedown="function(e) {}" onclick="function(e) {}" tranlator_sl_clk="function(e) {}" tranlator_sl_omd="function(e) {}" tranlator_sl_href="https://secpsico.blogspot.com/">
<img src="./img/laco.png" width="80" height="80">
</a>
</div>


</div><script src="//abp.smartadcheck.de/js/abpc.js?#ads/banner/ad/" type="text/javascript"></script><div id="snackbar-container"></div></body></html>