

<div id="demo-container">
<img id="demo-phone" src="../images/simple_iphone.png"> 

<div class="my-container">
	<div class="categorySection">
		<div class='categoryHeader'><span> Food </span></div>
		<div class="categoryBar">
			<div class="sliderBar">
				<div class="categoryCurAmount"> $99</div>
			</div>
		</div>
	</div>
	<div class="categorySection">
		<div class='categoryHeader'><span> Utilities</span> </div>
		<div class="categoryBar">
			<div class="sliderBar">
				<div class="categoryCurAmount"> $99</div>
			</div>
		</div>
	</div>
	<div class="categorySection">
		<div class='categoryHeader'><span> Fun </span></div>
		<div class="categoryBar">
			<div class="sliderBar">
				<div class="categoryCurAmount"> $99</div>
			</div>
		</div>
	</div>
	<div class="categorySection">
		<div class='categoryHeader'><span> Events </span></div>
		<div class="categoryBar">
			<div class="sliderBar">
				<div class="categoryCurAmount"> $99</div>
			</div>
		</div>
	</div>
	<div class="categorySection">
		<div class='categoryHeader'><span> Clothes </span></div>
		<div class="categoryBar">
			<div class="sliderBar">
				<div class="categoryCurAmount"> $99</div>
			</div>
		</div>
	</div>

</div>
</img>
</div>

<script>

var CategoryBar = function( element ) {

	this.element = element.children('.sliderBar')
	// console.log(this.element)

    // var bar = $('#sliderBar')

    // NEEDSWORK: make a jquery object from id of element (remove hard code)
	var sliderContainer = this.element.parent()
	var dragging = false
	var startingY = 0
	var startingX = 0
	var toTopBar= 0
	var bottomOfBar = sliderContainer.height() + sliderContainer.offset().top
	var passElement = this.element
 	var categoryTotal = parseFloat(passElement.children('.categoryCurAmount').text().replace('$', ''))
 	// This value must always slightly be more than .sliderBar: min-height
 	var minHeight = passElement.height() * .08
 	console.log(minHeight)

	this.element.on('mousedown', function( e ) {
		e.preventDefault()
		console.log( ' down pressed ')
		CategoryBar.prototype.doDown( e, passElement, 'click', bottomOfBar, categoryTotal, minHeight )		
	});
	this.element.on('touchstart', function( e ) {
		e.preventDefault()
		console.log( ' down pressed ')
		CategoryBar.prototype.doDown( e, passElement, 'touch', bottomOfBar, categoryTotal, minHeight )		
	});

};


CategoryBar.prototype.doDown = function ( e, element, type, bottomOfBar, categoryTotal, minHeight ) {
	console.log(element)
	console.log('do down called')

	startingY = element.offset().top
    startingX = element.offset().left

  	var toTopBar = ''
  	var moveType = ''
  	var pageY = 0
  	dragging = true

	// Need distance between click and top of bar
	if(type == 'click') {
		toTopBar = e.originalEvent.pageY - startingY
		moveType = 'mousemove'
	} else if (type == 'touch') {
		var toTopBar = e.originalEvent.touches[0].pageY - startingY
		moveType = 'touchmove'
	}		
	
	$(document).on( moveType, function( e ) {
		// console.log(moveType)
	    e.preventDefault()

	    if(type == 'click') {
			pageY = e.originalEvent.pageY
		} else if (type == 'touch') {
			pageY = e.originalEvent.touches[0].pageY 
		}

    	var top =  pageY - toTopBar
    	var newHeight = bottomOfBar - top 
    	element.height( newHeight ) 

	    if (element.hasClass('at-bottom') && element.height() > minHeight) {
	    		element.removeClass('at-bottom')
	    }
	    if (element.height() > $('.categoryBar').height()) {
	    	element.height( $('.categoryBar').height() )
		}
		else if( element.height() < minHeight ) {
			element.addClass('at-bottom')
		}

		var ratio = element.height() / $('.categoryBar').height()
    	var curAmount = element.children('.categoryCurAmount')
    	formattedRatio = '$' + Math.round(ratio * categoryTotal)
    	curAmount.text( formattedRatio) //(ratio * 100) - 15.9 )

// NEEDSWORK: use .text() to set the remaining category amount

	});

}

function doMove() {

}

$(document).ready( function() {

	// Initialize bars
	var bars = []
	$(".categoryBar").each( function () {
		var temp = new CategoryBar( $( this ) )
		bars.push(temp)
	})

	$(document).on('touchend', function( e ) {
		//use changedTouches
		dragging = false;
		$(document).unbind('touchmove');
	});
	$(document).on('mouseup', function( e ) {
		dragging = false;
		$(document).unbind('mousemove');
	});

	$('.my-container').hide();
	// Demo animations
	$('#startSlideUp').on('click', function() {
		// $('.categorySection').each( function() {
			console.log(this);
			$('.my-container').show( "slide", { direction: "down", distance: "150" }, 1000 );
		// });
	});

});



</script>

<style>

#demo-container {
	position: absolute;
	left: 75%;
	margin-top: 50px;
}
#demo-phone {
	position: relative;
	left: -44%;
	height: 604px;
	background-color: white;
}

.bar-info {
	height: 200px;
	background-color: white;
}
#pos::before {
	content: attr(data-before);
	font-size: 64px;
}
#pos2::before {
	content: attr(data-before);
	font-size: 64px;
}
.sliderBar {
	background-color: #5DBCD8;
	height: 88%;
	width: 100%;
	min-height: 7%;
	position: absolute;
	bottom: 0;
	border-radius: 100px;
	z-index: 1;

}

.my-container{

	position: absolute;
    height: 600px;
    top: 130;
    left: -132;

}
.categorySection {
	position: relative;
	margin-left: 20px;
	height: 50%;
	width: 10%;
	display: inline-block;
}
.categoryHeader {
	height: 12%;
	font-size: 12px;
	text-align: center;
	/*font-weight: 300;*/
}
.categoryCurAmount {
	text-align: center;
	margin-top: -14px;
	font-size: 9px;
}
.categoryBar {
	/*position: relative;*/
	
	height: 88%;
	width: 100%;
	background-color: #DDE1E4;
	border-radius: 75px;
	display: inline-block;
}
.sliderBar.at-bottom {
	border-top-left-radius: 0;
	border-top-right-radius: 0;
	color:darkred;
	background-color: rgba(0,0,0,0.6)  ;
	/*background-color: transparent;*/
}
span {
	transform: translateX(-50%);
	margin: 0 50%;
	display: inline-block;
}

/*@media(max-device-width: 580px) {
	#demo-phone {
	position: relative;
	left: -50%;
	height: 95%;
	}
}*/

</style>