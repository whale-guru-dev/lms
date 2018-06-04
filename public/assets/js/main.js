$(document).ready(function(){
    $('.modal').modal();
});

$(".dropdown-trigger").dropdown();

$(document).ready(function(){
    $('.collapsible').collapsible();
});
$(document).ready(function(){
    $('select').formSelect();
});               
$(document).ready(function(){
    $('.timepicker').timepicker();
});
$(document).ready(function(){
    $('.datepicker').datepicker();
});

$('.chips').chips();
$('.chips-placeholder').chips({
    placeholder: 'Enter a tag',
    secondaryPlaceholder: '+Tag',
});

(function ($) {
	"use strict";

    jQuery(document).ready(function($){


        $(".class-list label .single-class").click(function(){
              $(".class-list label .single-class").removeClass("active-2");            
              $(this).addClass("active-2");
        });
        


    });


    jQuery(window).load(function(){

        
    });


}(jQuery));	                  