$(document).ready(function(){
	$('ul.ui-listview a').attr('id','img_Select');


	$('#img_Select img').each(function(index, element){
		element.id='img_idNum' + (index + 1);
});
});