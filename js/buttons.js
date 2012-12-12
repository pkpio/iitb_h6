$(document).ready(function() {	



	//Background color, mouseover and mouseout

	var colorOver = '#a5a5a5';

	var colorOut = '#23586a';



	//Padding, mouseover

	var padLeft = '20px';

	var padRight = '20px';

	

	//Default Padding

	var defpadLeft = $('#men li a').css('paddingLeft');

	var defpadRight = $('#men li a').css('paddingRight');

		

	//Animate the LI on mouse over, mouse out

	$('#men li').click(function () {	

		//Make LI clickable

		window.location = $(this).find('a').attr('href');

		

	}).mouseover(function (){

		

		//mouse over LI and look for A element for transition

		$(this).find('a')

		.animate( { paddingLeft: padLeft, paddingRight: padRight}, { queue:false, duration:100 } )

		.animate( { backgroundColor: colorOver }, { queue:false, duration:200 });



	}).mouseout(function () {

	

		//mouse oout LI and look for A element and discard the mouse over transition

		$(this).find('a')

		.animate( { paddingLeft: defpadLeft, paddingRight: defpadRight}, { queue:false, duration:100 } )

		.animate( { backgroundColor: colorOut }, { queue:false, duration:200 });

	});	

	

	//Scroll the menu on mouse move above the #sidebar layer


});