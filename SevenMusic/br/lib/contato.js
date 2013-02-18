/*	Contact Seven Music BR jQuery
	Marcos DeSousa
	Feb.05.2013
*/
$(document).ready(function() {
	var passFailArray = [];
	
	//--------------------------------------//
	//										//
	// 		USER NAME REG CHECK				//
	//										//
	//--------------------------------------//
	var RegExp_UserName = /^[a-z- -0-9_-]{3,15}$/i;
	
	var checkName = function(){
		if($('#user-nome').val() === "Nome" || $('#user-nome').val() === ""){
			$('#user-nome').addClass("failCheck");
			
			passFailArray[0] = false;
			
			console.log("nome fail");
			
			return false;
		}else if(RegExp_UserName.test($('#user-nome').val())){
			$('#user-nome').removeClass("failCheck");
			$('#user-nome').addClass("passCheck");
			
			passFailArray[0] = true;
			
			console.log("nome pass");
		};
	};

	$("#user-nome").keyup(function(){checkName()});
	$("#user-nome").focus(function(){checkName()});
	$("#user-nome").blur(function(){checkName()});
	
	//--------------------------------------//
	//										//
	// 		USER BAIRRO REG CHECK			//
	//										//
	//--------------------------------------//
	var RegExp_UserBairro = /^[a-z- -0-9_-]{3,15}$/i;
	
	var checkUserBairro = function(){
		if($('#user-bairro').val() === "Bairro" || $('#user-bairro').val() === ""){
			$('#user-bairro').addClass("failCheck");
			
			passFailArray[1] = false;
			
			console.log("bairro fail");
			
			return false;
		}else if(RegExp_UserBairro.test($('#user-bairro').val())){
			$('#user-bairro').removeClass("failCheck");
			$('#user-bairro').addClass("passCheck");
			
			passFailArray[1] = true;
			
			console.log("bairro pass");
		};
	};

	$("#user-bairro").keyup(function(){checkUserBairro()});
	$("#user-bairro").focus(function(){checkUserBairro()});
	$("#user-bairro").blur(function(){checkUserBairro()});
	
	//--------------------------------------//
	//										//
	// 		USER CIDADE REG CHECK			//
	//										//
	//--------------------------------------//
	var RegExp_UserCidade = /^[a-z- -0-9_-]{3,15}$/i;
	
	var checkUserCidade = function(){
		if($('#user-cidade').val() === "Cidade" || $('#user-cidade').val() === ""){
			$('#user-cidade').addClass("failCheck");
			
			passFailArray[2] = false;
			
			console.log("cidade fail");
			
			return false;
		}else if(RegExp_UserCidade.test($('#user-cidade').val())){
			$('#user-cidade').removeClass("failCheck");
			$('#user-cidade').addClass("passCheck");
			
			passFailArray[2] = true;
			
			console.log("cidade pass");
		};
	};

	$("#user-cidade").keyup(function(){checkUserCidade()});
	$("#user-cidade").focus(function(){checkUserCidade()});
	$("#user-cidade").blur(function(){checkUserCidade()});
	
	//--------------------------------------//
	//										//
	// 		USER PHONE REG CHECK			//
	//										//
	//--------------------------------------//
	var RegExp_UserPhone = /^[\\(]{0,1}([0-9]){3}[\\)]{0,1}[ ]?([^0-1]){1}([0-9]){2}[ ]?[-]?[ ]?([0-9]){4}[ ]*((x){0,1}([0-9]){1,5}){0,1}$/;
	
	var checkUserPhone = function(){
		if($('#user-telefone').val() === "Telefone" || $('#user-telefone').val() === ""){
			$('#user-telefone').addClass("failCheck");
			
			passFailArray[3] = false;
			
			console.log("telefone fail");
			
			return false;
		}else if(RegExp_UserPhone.test($('#user-telefone').val())){
			$('#user-telefone').removeClass("failCheck");
			$('#user-telefone').addClass('passCheck');
			
			passFailArray[3] = true;
			
			console.log('telefone pass');
		};
	};

	$("#user-telefone").keyup(function(){checkUserPhone()});
	$("#user-telefone").focus(function(){checkUserPhone()});
	$("#user-telefone").blur(function(){checkUserPhone()});
	
	//--------------------------------------//
	//										//
	// 		USER EMAIL REG CHECK			//
	//										//
	//--------------------------------------//
	var RegExp_UserEmail = /^((?:(?:(?:\w[\.\-\+]?)*)\w)+)\@((?:(?:(?:\w[\.\-\+]?){0,62})\w)+)\.(\w{2,6})$/i
	
	var checkEmail = function(){
		if($('#user-email').val() === "Email" || $('#user-email').val() === ""){
			$('#user-email').addClass("failCheck");
			
			passFailArray[4] = false;
			
			console.log("email fail");
			
			return false;
		}else if(RegExp_UserEmail.test($('#user-email').val())){
			$('#user-email').removeClass("failCheck");
			$('#user-email').addClass("passCheck");
			
			passFailArray[4] = true;
			
			console.log("email pass");
		};
	};

	$("#user-email").keyup(function(){checkEmail()});
	$("#user-email").focus(function(){checkEmail()});
	$("#user-email").blur(function(){checkEmail()});
	
	
	//--------------------------------------//
	//										//
	// 		USER COMMENT REG CHECK			//
	//										//
	//--------------------------------------//
	var RegExp_UserComment = /^[a-z- -0-9_-]{5,255}$/i;
	
	var checkMessage = function(){
		if($('#user-mensagem').val() === "Menssagem" || $('#user-mensagem').val() === ""){
			$('#user-mensagem').addClass("failCheck");
			
			passFailArray[5] = false;
			
			console.log("mensagem fail");
			
			return false;
		}else if(RegExp_UserComment.test($('#user-mensagem').val())){
			$('#user-mensagem').removeClass("failCheck");
			$('#user-mensagem').addClass("passCheck");
			
			passFailArray[5] = true;
			
			console.log("mensagem pass");
		};
	};

	$("#user-mensagem").keyup(function(){checkMessage()});
	$("#user-mensagem").focus(function(){checkMessage()});
	$("#user-mensagem").blur(function(){checkMessage()});
	
	//--------------------------------------//
	//										//
	// 		USER AGE REG CHECK			//
	//										//
	//--------------------------------------//
	var RegExp_UserAge = /^[0-9]{2}/;
	
	var checkUserAge = function(){
		if($('#user-idade').val() === "Idade" || $('#user-idade').val() === ""){
			$('#user-idade').addClass("failCheck");
			
			passFailArray[6] = false;
			
			console.log("idade fail");
			
			return false;
		}else if(RegExp_UserAge.test($('#user-idade').val())){
			$('#user-idade').removeClass("failCheck");
			$('#user-idade').addClass("passCheck");
			
			passFailArray[6] = true;
			
			console.log("idade pass");
		};
	};

	$("#user-idade").keyup(function(){checkUserAge()});
	$("#user-idade").focus(function(){checkUserAge()});
	$("#user-idade").blur(function(){checkUserAge()});
	
	
	
	
	
	
	
	
	$("input.enviarMusicContato").click(function(){
		checkName();
		checkEmail();
		checkMessage();
		checkUserAge();
		checkUserBairro();
		checkUserCidade();
		checkUserPhone();
		
		for(var i=0; i<passFailArray.length; i++){
			if(!passFailArray[i]){
				//fail
				console.log(passFailArray);
				
				return false;
			}else{
				//pass
			}
		}
	});
});//close document ready