function validateText(str,len){
	return str.length >= len;
}

function validateEmail(str){
	var emailPattern = /^[a-z0-9+_%.-]+@(?:[a-z0-9-]+\.)+[a-z]{2,6}$/i ;

	return emailPattern.test(str);
}

(function($){
	$(function(){
		$('form#contact').submit(function(){
			var feild, err=false;
	
			target = $('#name');
	
			if (validateText( target.val(), 3 )) {
	
				target.removeClass('err').addClass('ok');
	
			}else{
	
				target.removeClass('ok').addClass('err');
				err= true;
			}
	
			target = $('#email');
	
			if (validateEmail(target.val())) { 
	
				target.removeClass('err').addClass('ok');
			}else {
	
				target.removeClass('ok').addClass('err');
				err=true;
			}
	
			target = $('#message');
	
			if (validateText( target.val(), 7 )) {
	
				target.removeClass('err').addClass('ok');
	
			}else {
	
				target.removeClass('ok').addClass("err");
				err=true;
			}
	
			return !err;
		});
	});
})(Zepto);