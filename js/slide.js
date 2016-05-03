$(document).ready( function() {

	$('.bar').each( function () {
		$(this).sGlide({
			startAt	: 10,
			height	: 40,
			width	: 400,
			unit	: 'px',
			// snap	: {
			// 	points	: 5,
			// 	markers	: true,
			// 	type	: 'soft'
			// },
			vertical: true,
			showKnob: false,		
			drag: displayResult
		});
		// $(this).css('background-color', 'red')
		// $(this).css('transform-origin', transX + "px, " + transY + " px")
		// // transY -= 5
		// // transX -= 5
	});

	$('#flip').on('click', function() {
		console.log('hi')
$('.bar').each( function () {
			transY += 5
			transX -= 45
			var t =  transX + "px " + transY + "px"
			console.log(t)
			$(this).css({'transform-origin': t})
			// $('#bar2').css({'transform-origin': t})

		});
		
	});

});
$(window).load( function() {
		var transX = 500;
		var transY = 10;
	$('.bar').each( function () {
		console.log('dumb')
			transY += 5
			transX -= 45
			var t =  transX + "px " + transY + "px"
			console.log(t)
			$(this).css({'-webkit-transform-origin': t})

		});
})

function displayResult( o ){
	var val = Math.round( o.percent );
	console.log(val)
	$( '#value' ).html( val );
}

