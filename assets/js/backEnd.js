// start hide placeholder on form focus in login form of user

$(function(){
    'use strict';
    
    $('[placeholder]').focus(function(){
        
        $(this).attr('data-text',$(this).attr('placeholder'));
        $(this).attr('placeholder','');
        
        
    }).blur(function(){
        $(this).attr('placeholder',$(this).attr('data-text'));
            
            });
// End hide placeholder on form focus in login form of user


//start add astrisk '*' in input filed required 
$('input').each(function () {

		if($(this).attr('required')==='required'){

			$(this).after('<span class="astrisk">*</span>');
}

});
//End add astrisk '*' in input filed required 


//start convert password field to text field on hover

var passField = $('.password');
$('.show-pass').hover ( function () {

        passField.attr('type','text');
    
    },function(){
        passField.attr('type','password');
    });

//End convert password field to text field on hover


//start confirmation message on button  from page members
$('.confirm').click(function(){

    return confirm('Are you sure? ');

});

//end confirmation message on button 
    });

