
function CheckInput() {
       $('#FirstStep > div > input').keyup(function() {

        var Empty = false;
        $('#FirstStep > div > input').each(function() {
            if(this.value == '') {
                Empty = true;
            }else if(this.value == 0) {
                Empty = true;
            }
        });

        if (Empty) {
            $('#NextStep').attr('disabled', 'disabled'); 
        } else {
            $('#NextStep').removeAttr('disabled'); 
        }
    });
}

function CheckLastInput() {
       $('#SecondStep > div > input').keyup(function() {

        var Empty = false;
        $('#SecondStep > div > input').each(function() {
            if(this.value == '') {
                Empty = true;
            }else if(this.value == 0) {
                Empty = true;
            }
        });

        if (Empty) {
            $('#LastStep').attr('disabled', 'disabled'); 
        } else {
            $('#LastStep').removeAttr('disabled'); 
        }
    });
}


jQuery(document).ready(function() {
    
    /*
        Login form validation
    */
    $('.login-form input[type="text"], .login-form input[type="password"], .login-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    $('.login-form').on('submit', function(e) {
    	
    	$(this).find('input[type="text"], input[type="password"], textarea').each(function(){
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    	
    });
    
    /*
        Registration form validation
    */

    $("#BackButton").click(function() {
        $("#SecondStep").fadeOut(800, function() {
            $("#FirstStep").fadeIn(200);
        });
    });

    $("#NextStep").click(function() {
        $("#FirstStep").fadeOut(800, function() {
            $("#SecondStep").fadeIn(200);
        });
    });

     $("#LastStep").click(function() {
                $("#SecondStep").fadeOut(100, function(){
                        document.getElementById('form-first-name').value = "";
                        document.getElementById('form-last-name').value = "";
                        document.getElementById('form-email').value = "";
                        document.getElementById('form-about-yourself').value = "";
                        document.getElementById('form-username-register').value = "";
                        document.getElementById('form-password-register').value = "";
                        document.getElementById('form-confirm-password').value = "";
                        $('#NextStep').attr('disabled', 'disabled'); 
                        $("#FirstStep").fadeIn(200, function() {
                });
             });
    });


    $("#SecondStep").hide();
});
