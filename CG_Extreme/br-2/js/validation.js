/*	Contact Us jQuery
	Marcos DeSousa
	Dec.02.2012
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
		if($('.userInput_name').val() === "Nome" || $('.userInput_name').val() === ""){
			$('.userInput_name').addClass("failVerif");
			
			passFailArray[0] = false;
			
			console.log("fail");
			
			return false;
		}else if(RegExp_UserName.test($('.userInput_name').val())){
			$('.userInput_name').removeClass("failVerif");
			$('.userInput_name').addClass("passVerif");
			
			passFailArray[0] = true;
			
			console.log("pass");
		};
	};

	$(".userInput_name").keyup(function(){checkName()});
	$(".userInput_name").focus(function(){checkName()});
	$(".userInput_name").blur(function(){checkName()});
	
	//--------------------------------------//
	//										//
	// 		USER EMAIL REG CHECK			//
	//										//
	//--------------------------------------//
	///*Password expresion that requires one lower case letter, one upper case letter, one digit, 7-22 length, and no spaces.
	var RegExp_UserEmail = /^((?:(?:(?:\w[\.\-\+]?)*)\w)+)\@((?:(?:(?:\w[\.\-\+]?){0,62})\w)+)\.(\w{2,6})$/i
	
	var checkEmail = function(){
		if($('.userInput_email').val() === "Email" || $('.userInput_email').val() === ""){
			$('.userInput_email').addClass("failVerif");
			
			passFailArray[1] = false;
			
			console.log("fail");
			
			return false;
		}else if(RegExp_UserEmail.test($('.userInput_email').val())){
			$('.userInput_email').removeClass("failVerif");
			$('.userInput_email').addClass("passVerif");
			
			passFailArray[1] = true;
			
			console.log("pass");
		};
	};

	$(".userInput_email").keyup(function(){checkEmail()});
	$(".userInput_email").focus(function(){checkEmail()});
	$(".userInput_email").blur(function(){checkEmail()});
	
	
	
	
	//--------------------------------------//
	//										//
	// 		USER NAME REG CHECK				//
	//										//
	//--------------------------------------//
	var RegExp_Subject = /^[a-z]{5,40}$/i;
	
	var checkSubject = function(){
		if($('.userInput_subject').val() === "Assunto" || $('.userInput_subject').val() === ""){
			$('.userInput_subject').addClass("failVerif");
			
			passFailArray[2] = false;
			
			console.log("fail");
			
			return false;
		}else if(RegExp_UserName.test($('.userInput_subject').val())){
			$('.userInput_subject').removeClass("failVerif");
			$('.userInput_subject').addClass("passVerif");
			
			passFailArray[2] = true;
			
			console.log("pass");
		};
	};

	$(".userInput_subject").keyup(function(){checkSubject()});
	$(".userInput_subject").focus(function(){checkSubject()});
	$(".userInput_subject").blur(function(){checkSubject()});
	
	

	
	//--------------------------------------//
	//										//
	// 		USER COMMENT REG CHECK			//
	//										//
	//--------------------------------------//
	var RegExp_UserComment = /^[a-z- -0-9_-]{5,255}$/i;
	
	var checkMessage = function(){
		if($('.userInput_comment').val() === "Menssagem" || $('.userInput_comment').val() === ""){
			$('.userInput_comment').addClass("failVerif");
			
			passFailArray[3] = false;
			
			console.log("fail");
			
			return false;
		}else if(RegExp_UserComment.test($('.userInput_comment').val())){
			$('.userInput_comment').removeClass("failVerif");
			$('.userInput_comment').addClass("passVerif");
			
			passFailArray[3] = true;
			
			console.log("pass");
		};
	};

	$(".userInput_comment").keyup(function(){checkMessage()});
	$(".userInput_comment").focus(function(){checkMessage()});
	$(".userInput_comment").blur(function(){checkMessage()});
	
	
	
	
	$("input.sendContactFormBtn").click(function(){
		
		checkName();
		checkEmail();
		checkSubject();
		checkMessage();
		
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