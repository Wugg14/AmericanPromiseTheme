jQuery('#form1').click(function(){
	jQuery('#div1').slideToggle();
	jQuery('#div2').hide();
	jQuery('#div3').hide();
	jQuery('#div4').hide();
	jQuery('#div5').hide();
});

jQuery('#form2').click(function(){
	jQuery('#div2').slideToggle();
	jQuery('#div1').hide();
	jQuery('#div3').hide();
	jQuery('#div4').hide();
	jQuery('#div5').hide();
});

jQuery('#form3').click(function(){
	jQuery('#div3').slideToggle();
	jQuery('#div1').hide();
	jQuery('#div2').hide();
	jQuery('#div4').hide();
	jQuery('#div5').hide();
});

jQuery('#form4').click(function(){
	jQuery('#div4').slideToggle();
	jQuery('#div1').hide();
	jQuery('#div2').hide();
	jQuery('#div3').hide();
	jQuery('#div5').hide();
});

jQuery('#form5').click(function(){
	jQuery('#div5').slideToggle();
	jQuery('#div1').hide();
	jQuery('#div2').hide();
	jQuery('#div3').hide();
	jQuery('#div4').hide();
});
