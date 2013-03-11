<?php include('metas.php'); ?>

<div id="contentUnityContact">
<div class="content">
					<div class="contactForm">

				<form action="<? $PHP_SELF; ?>" method="POST">

					<div class="formSection">
					<p class="TextFormPavilhaoUnity">Nome</p>
						<div class="formInput">
							<input type="text" name="nome" placeholder="Nome" class="userInput_name">
						</div><!--close form input-->
					</div><!--close formSection-->
					
					<div class="formSection">
					<p class="TextFormPavilhaoUnity">E-mail</p>
						<div class="formInput">
							<input type="text" name="email" placeholder="E-mail" class="userInput_email">
						</div><!--close form input-->
					</div><!--close formSection-->
					
					
					
						<div class="formSection">
						<p class="TextFormPavilhaoUnity">Telefone</p>
						<div class="formInput">
							<input type="text" name="assunto" placeholder="" class="userInput_subject">
						</div><!--close form input-->
					</div><!--close formSection-->
					

					<div class="formSectionPavilhao">
					<p class="TextFormPavilhaoUnity">Perfil Facebook</p>
						<div class="formInputPavilhao">
							<textarea placeholder="" name="mensagem" class="userInput_comment"></textarea>
						</div><!--close form input-->
					</div><!--close formSection-->
					
						<div class="formSectionPavilhao">
					<p class="TextFormPavilhaoUnity">Link do Portfolio</p>
						<div class="formInputPavilhao">
							<textarea placeholder="" name="mensagem" class="userInput_comment"></textarea>
						</div><!--close form input-->
					</div><!--close formSection-->
					

               <br>
               	<fieldset>
              	  <legend class="TextFormPavilhaoUnity">Fala ingles?</legend>
                        <input type="radio" name="group1" value="sim" /<span class="TextFormPavilhaoUnity2">Sim</span><br />
                        <input type="radio" name="group2" value="nao" /><span class="TextFormPavilhaoUnity2">Não</span><br />
                </fieldset>
                <br>
                						<div class="formSection">
                						<p class="TextFormPavilhaoUnity">Mensagem</p>

							<div class="formInput">
								<textarea placeholder="Mensagem" name="mensagem" class="userInput_comment"></textarea>
							</div><!--close form input-->
						</div><!--close formSection-->
        
        
			
			
					<input type="submit" name="BTEnvia" value="Enviar" class="blueBtn sendContactFormBtn">
				</form> 				
					
					</div><!--close contactForm-->
				</div><! close content -->
				
</div> <!-- close div unity contatc -->
