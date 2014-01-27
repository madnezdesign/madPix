  /**
   * gallery. 
   */
   
   (function ( $ ) {
	$.fn.madPix = function() {
		
		$('#gallery').append("<div id='showImgDiv'><img id='showImg' src=''/><div id='clickable'><div id='left'><p>&lsaquo;</p></div><div id='right'><p>&rsaquo;</p></div></div></div><div id='overlay'></div>");
		
		return this.each(function() {
			
			var thisImgDiv = $(this);
			var next, nextImg;
			
			$(this).append("<div class='thumbHover'></div>");
			
			$(this).hover(
				function() {
					console.log('hover');
					$(this).find('.thumbHover').show();
				}, function() {
					$(this).find('.thumbHover').hide();
				}
			);
			
			var setPositions = function() {
				var left = ($(window).width()-$('#showImg').outerWidth())/2;
				var top = ($(window).height()-$('#showImg').outerHeight())/2;
				$('#showImgDiv').css('left', left+'px');
				$('#showImgDiv').css('top', top+'px');
				
				$('#clickable').css('height', $('#showImg').outerHeight()+'px');
				$('#clickable').css('width', $('#showImg').outerWidth()+'px');
				$('#right p').css('margin-top', ($('#showImg').height()-$('#right p').outerHeight())/2+'px');
				$('#left p').css('margin-top', ($('#showImg').height()-$('#right p').outerHeight())/2+'px');
			}
			
			var setImgSize = function(thumbnail) {
				var imgSize = $(window).height()*0.95+'px';
				if ( $(thumbnail).hasClass('ga') ) {
					console.log('ga');
					$('#showImg').css('height', '');
					$('#showImg').css('width', '');
				}
			}
			
			$(this).click( function() {
				console.log('click thumbnail '+$(this).find('img').attr('src'));
				console.log($(this).attr('id'));
				$('#showImg').attr('src', $(this).find('img').attr('src'));
				$('#showImgDiv').fadeIn();
				$('#overlay').fadeIn();
				
				setImgSize(this);
				setPositions();
				
				$('#overlay').click( function() {
					console.log('hide');
					//$('#showImgDiv').fadeOut();
					$('#showImgDiv').hide();
					$('#overlay').fadeOut();
					$('#right').off();
					$('#left').off();
					$('#overlay').off();
				});
				
				$('#right').hover(
					function() {
						console.log('hover right');
						$(this).find('p').css('margin-right','0px');
					}, function() {
						$(this).find('p').css('margin-right','-30px')
					}
				);
				
				$('#left').hover(
					function() {
						console.log('hover left');
						$(this).find('p').css('margin-left','0px');
					}, function() {
						$(this).find('p').css('margin-left','-30px')
					}
				);
				
				$('#right').click( function() {
					console.log('click right');
					console.log(thisImgDiv.next().attr('id'));
					if (thisImgDiv.next().hasClass('madImg')) {
						next = thisImgDiv.next();
						nextImg = next.find('img');
						console.log(nextImg.attr('src'));
						$('#showImg').attr('src', nextImg.attr('src'));
						thisImgDiv = next;
						setImgSize(thisImgDiv);
						setPositions();
					} else {
						console.log('no next');
					}
				});
				
				$('#left').click( function() {
					console.log('click left');
					console.log(thisImgDiv.prev().attr('id'));
					if (thisImgDiv.prev().hasClass('madImg')) {
						next = thisImgDiv.prev();
						nextImg = next.find('img');
						console.log(nextImg.attr('src'));
						$('#showImg').attr('src', nextImg.attr('src'));
						thisImgDiv = next;
						setImgSize(thisImgDiv);
						setPositions();
					} else {
						console.log('no prev');
					}
				});
			});
		
		
		
		
		});
	 
	};
}( jQuery ));