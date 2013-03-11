<!doctype html>
<html>
<?php include('metas.php'); ?>

<body>
<?php include('include/menu.php'); ?>

		<div class="banner_pavilhao"></div> <! close baner pavilhao -->
		<div class="MarcadorBanner"></div> <! close MarcadorBanner -->
		
	<div id="ContentPavilhao">
		
	<div id="ConteudoEmpregadores">
		<span class="titulo_home">Empregadores</span>
		<div class="ImgTopoPavilhao"><img src="img/pavilhao/banner-empregadores.jpg" alt="" /></div><!-- close ImgTopoPavilhao -->
			<div class="ContentTextPavilhao">
				<div class="content">
					<div class="contactForm">
					
					<span class="TextoPadraoPavilhao">
						Um dos principais objetivos do pavilhão é atender as necessidades das empresas com mão de obra qualificada e
						direcionada para o universo de computação gráfica. Se você quer prospectar sua marca, ou esta em busca de novos
						talentos para expandir seus negócios e a demanda atual em grandes projetos, o pavilhão de carreira é o lugar para
						se estar.</span>
						<br><br><br>

				<form action="<? $PHP_SELF; ?>" method="POST">

					<div class="formSection">
					<p class="TextFormPavilhao">Nome</p>
						<div class="formInput">
							<input type="text" name="nome" placeholder="Nome" class="userInput_name">
						</div><!--close form input-->
					</div><!--close formSection-->
					
					<div class="formSection">
					<p class="TextFormPavilhao">E-mail</p>
						<div class="formInput">
							<input type="text" name="email" placeholder="E-mail" class="userInput_email">
						</div><!--close form input-->
					</div><!--close formSection-->
					

					<div class="formSection">
						<p class="TextFormPavilhao">Ramo de atuação</p>
						<div class="formInput">
							<input type="text" name="assunto" placeholder="" class="userInput_subject">
						</div><!--close form input-->
					</div><!--close formSection-->
					
					
						<div class="formSection">
						<p class="TextFormPavilhao">Telefone</p>
						<div class="formInput">
							<input type="text" name="assunto" placeholder="" class="userInput_subject">
						</div><!--close form input-->
					</div><!--close formSection-->
					
					
						<div class="formSection">
						<p class="TextFormPavilhao">Skype</p>
						<div class="formInput">
							<input type="text" name="assunto" placeholder="" class="userInput_subject">
						</div><!--close form input-->
					</div><!--close formSection-->
					
					
					<div class="formSection">
					<p class="TextFormPavilhao">Site</p>
						<div class="formInput">
							<input type="text" name="assunto" placeholder="Ex:www.cgextreme.com.br" class="userInput_subject">
						</div><!--close form input-->
					</div><!--close formSection-->
					

					<div class="formSectionPavilhao">
					<p class="TextFormPavilhao">Como ficou sabendo sobre o evento ?</p>
						<div class="formInputPavilhao">
							<textarea placeholder="" name="mensagem" class="userInput_comment"></textarea>
						</div><!--close form input-->
					</div><!--close formSection-->
					
					<div class="formSectionPavilhao">
					<p class="TextFormPavilhao">Possui quais vagas disponíveis no momento?</p>
						<div class="formInputPavilhao">
							<textarea placeholder="" name="mensagem" class="userInput_comment"></textarea>
						</div><!--close form input-->
					</div><!--close formSection-->

					
					<div class="formSectionPavilhao">
					<p class="TextFormPavilhao">Procura candidatos com qual perfil?</p>
						<div class="formInputPavilhao">
							<textarea placeholder="" name="mensagem" class="userInput_comment"></textarea>
						</div><!--close form input-->
					</div><!--close formSection-->
					
					
					<div class="formSectionPavilhao">
					<p class="TextFormPavilhao">Qual é o melhor horário para contato?</p>
						<div class="formInputPavilhao">
							<textarea placeholder="" name="mensagem" class="userInput_comment"></textarea>
						</div><!--close form input-->
					</div><!--close formSection-->
					
					<div class="formSectionPavilhao">
					<p class="TextFormPavilhao">Como ficou sabendo sobre o evento ?</p>
						<div class="formInputPavilhao">
							<textarea placeholder="" name="mensagem" class="userInput_comment"></textarea>
						</div><!--close form input-->
					</div><!--close formSection-->

					<input type="submit" name="BTEnvia" value="Enviar" class="blueBtn sendContactFormBtn">
				</form> 				
					
					</div><!--close contactForm-->
				</div><! close content -->
			</div><!-- close ContentTextPavilhao -->
		</div><!-- close ConteudoEmpregadores-->
			
			
<!-------------------------------------------------------------- ContentFixPavilhao ----------------------------------------------->
	
			<div id="ContentFixPavilhao">
					<div id="MenuPavilhao">
						<ul class="TextoPadraoPavilhao">
							<li><a href="carreira.php">O Pavilhão de Carreira</a></li>
							<li><a href="embarque.php">Embarque na Seven</a></li>
							<li><a href="oportunidade.php">Oportunidade para os alunos</a></li>
							<li><a href="unity.php">Campeonato Unity</a></li>
							<li><a href="bussola.php">Bússola do estudante</a></li>
							<li class="AtivoMenuPavilhao"><a href="empregadores.php">Empregadores</a></li>
						</ul>
				</div><!-- close Menupavilhao -->
				
				
				
				<div id="ContatoPavilhao">
					<div id="TextoContantoPavilhao" class="TextoPadraoPavilhao">
						<p>Seven Media</p>
						<p>Telefone: (021) 2509-6323</p>
						<p>E-mail: opportunity@cgextreme.com.br</p>
					</div><!-- close TextoContantoPavilhao -->
				</div><!-- ContatoPavilhao -->
				
				
			
			</div><!-- close ContatoPavilhao -->
				
				
				
		</div><!-- close ContentFixPavilhao -->	
			
<!-------------------------------------------------------------- ContentFixPavilhao ----------------------------------------------->
	</div><!-- close ContentPavilhao -->

<?php include('include/rodape.php'); ?>

</body>
</html>
