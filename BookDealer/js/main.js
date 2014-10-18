$(document).ready(function(){
	$('ul.ui-listview a').attr('id','img_Select');


	$('#img_Select img').each(function(index, element){
		element.id='img_idNum' + (index + 1);
});
});

// Creating the js for checking to see if the user input the right information 
// $('button').click(function(){
// var x = $('input').val();
// if( x === null || x === ''){
// alert('feilds are empty');
// return false;
// } });