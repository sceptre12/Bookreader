/*
	Variables Main def

	refl = reference-link 
	do = data object
	fp = index_div.Front1
	fl = fail link
	pu = popup 
	p = pop
	cl = current link
	cll = current link length
	dex = index page
	sup = signup page
	sbk = sellbook page
	csl = document.URL.search
	dp = 
*/
// global variables



$(document).ready(function(){
	$('ul.ui-listview a').attr('id','img_Select');


	$('#img_Select img').each(function(index, element){
		element.id='img_idNum' + (index + 1);
	});
	$('button').click(function(){
		// This function prevents the page from loading and it also brings up the pop up box
		var x = $('input').val(), 
		refl = 'mainScreen.php', 
		do1 = false,
		fp = $('div.front1 a:first'),
		sp = $('#vlap a:first'),
		fl = '#i_fail',
		pu = 'popup',
		p = 'pop',
		dex = 'index.php',
		sup = 'signup.php',
		sbk = 'sellBooks.php',
		cll = document.URL.length;
		
		if(document.URL.substring(document.URL.search(dex), cll) === dex){
			if( x === null || x === ""){
			$(fp).removeAttr('href').removeAttr('data-ajax').attr('href',fl).attr('data-rel',pu).attr('data-transition',p);
			} else if($(fp).attr('href') === fl){
				$(fp).removeAttr('href').removeAttr('data-rel').removeAttr('data-transition').attr('href', refl).attr('data-ajax',do1);
			}else if(document.URL.substring(document.URL.search(sbk), cll) === sbk){
				if( x === null || x === ""){
					$(sp).removeAttr('href').attr('href', refl).attr('data-rel', pu).attr('data-transition',p);
				}
			}
		}
	});
});


// Creating the js for checking to see if the user input the right information 


// This prevents the user from leaving page 

// $(document).bind("preventbeforechange", function( event, ui){
//     event.preventDefault();
//     data.deferred.reject( data.absUrl, data.options );
// });
