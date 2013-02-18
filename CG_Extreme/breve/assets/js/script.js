/* 
Rhuan Santos - Web Master
Seven Media - Produtora
Data:24-11-2012
Email:Rhuan@7media.com.br
Email alternativo:Rhuansantos7@gmail.com
*/

$(function(){
	
	var note = $('#note'),
		ts = new Date(2012, 11, 1),
		newYear = true;
	
	if((new Date()) > ts){
		// The new year is here! Count towards something else.
		// Notice the *1000 at the end - time must be in milliseconds
		ts = (new Date()).getTime() + 7*24*60*60*1000;
		newYear = false;
	}
		
	$('#countdown').countdown({
		timestamp	: ts,
		callback	: function(days, hours, minutes, seconds){
			
			var message = "";
			
			message += days + " dia" + ( days==1 ? '':'s' ) + ", ";
			message += hours + " hora" + ( hours==1 ? '':'s' ) + ", ";
			message += minutes + " minuto" + ( minutes==1 ? '':'s' ) + " e ";
			message += seconds + " segundo" + ( seconds==1 ? '':'s' ) + " <br />";
			
			if(newYear){
				message += "Aguardem...";
			}
			else {
				message += "";
			}
			
			note.html(message);
		}
	});
	
});
