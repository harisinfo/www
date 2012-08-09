/*
 * jQuery Watermark 0.1 - A jQuery plugin for watermarking form inputs, crazy elegant style
 *
 * Copyright (c) 2008 Rogie King (komodomedia.com)
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * $Date: 2008-02-25 $
 * $Rev: 1 $
 */
(function ($) {
  $.fn.watermark = function ( opts ) {
	
	var alt = 18;
	
	//setup some defaults
	var defaults = {
		where: 'title', //other defaults are: label, rel, or a callback function
		style: {color:'#999'},
		ignoreChars: [38,40,37,39,33,34,36,35,13,9,27,16,17,alt,20,8,224],
		valid: ':text,:password,select,textarea'		
	};
	
	var is_down = [];
	
	//extend the defaults
	var options = $.extend( {}, defaults, opts );
	
	//setup a reference to these inputs
	var inputs = $(this).filter( options.valid );
	
	function rewindCaret(){
		setCaretPosition( this, 0);	
	}
	
	function setCaretPosition(input, pos){
		if(input.setSelectionRange){
			input.setSelectionRange(pos,pos);
		}
		else if (input.createTextRange ) {
			var range = input.createTextRange();
			range.collapse( true );
			range.move('character', pos);
			range.select();
		}
	}	
		
  	function mark(e){
  		var val = $(this).val().replace(/\s+/g,'');
		var wm 	= $(this).data('watermark').replace(/\s+/g,'');
    	
    	if( val.length < 1 || (val == wm && $(this).data('watermarked') == true) ){
    		
    		if( $(this).attr('type') == 'password' && !$.browser.msie){
    			this.type = 'text';
    			$(this).data('password',true);
    		}
    		
    		$(this).val( $(this).data('watermark') ).css( options.style );
    		$(this).data('watermarked',true);
    	}
  	}  	
  	
  	function unMark(){
  		if( $(this).data('watermarked') ){
	  		$(this).val('').data('watermarked',false);
	  		
	  		if( $(this).data('password') == true && !$.browser.msie){
	   			this.type = 'password';
	   		}
	  		
	  		for( key in options.style ){
	  			$(this).css( key , '' );
	  		}
  		}
  	}
  	
  	function isWatermarked(){
  		
  		var val = $(this).val().replace(/\s+/g,'');
		var wm 	= $(this).data('watermark').replace(/\s+/g,'');
    	
    	return ( ( val == wm || val.length < 1 ) &&  $(this).data('watermarked') == true);
  	}
  	
  	function isBlank(){
  		
  		var val = $(this).val().replace(/\s+/g,'');
  		
  		return ( val == '' );
  		
  	}
  	
  	function observe( e ){
		
  		switch(e.type){  			
  			case 'keydown':  				
  				is_down[e.which] = true;
  				
  				if( isWatermarked.call( this ) && $.inArray(e.which,options.ignoreChars) < 0 || is_down[alt] == true){
  					unMark.call( this );
  				} else if( isBlank.call(this) ){
  					mark.call( this );
  					rewindCaret.call( this );
  				} else{
  					//e.preventDefault();
  				}
  				
  				
  			break;
				
  			case 'keyup':
  				
  				is_down[e.which] = false;
  				
  				if( isWatermarked.call( this ) && $.inArray(e.which,options.ignoreChars) < 0 ){
  					unMark.call( this );
  				} else if( isBlank.call(this) ){
  					mark.call( this );
  					rewindCaret.call( this );
  				} else{
  					//e.preventDefault();
  				}
  				
  			break;
  			
  			case 'mousedown':
  			case 'mouseup': 
  				if( isWatermarked.call( this ) ){
  					rewindCaret.call( this );
  				}
  			break;
  			
  			case 'focus':
  				if( isWatermarked.call( this ) ){
  					rewindCaret.call( this );
  					if( !$.browser.msie ){
  						var input = this;
  						setTimeout(function(){rewindCaret.call(input);},5);
  					}
  					e.preventDefault();
  					this.focus();
  				}
  			break;
  			
  			case 'blur':
				mark.call(this);
  			break;
  			  			
  			default:				
  				if( isWatermarked.call( this ) ){
  					//e.preventDefault();
  					//rewindCaret.call( this );
  				}  			
  			break;
  		}
  	
  	}
	
	function store(){
		
		$(this).each(
			
			function(){
				
				switch( options.where ){
				
					case 'label':
						$(this).data('watermark', $('label[for=' + $(this).attr('id') + ']').text() );
					break;
						
					case 'rel':
					case 'title':
						$(this).data('watermark', $(this).attr(options.where) ); 		
					break;
					
					default:
						if( typeof options.where == 'function' ){
							$(this).data('watermark', options.where.call( this ) );
						}
					break;
				}
			
			}
			
		);	
	
	}
		
	//setup the watermark
	store.call( this );
	
	//assign blur and focus functions, triggering blur
	$(inputs)
		.keydown( observe )
		.keyup( observe )
		.focus( observe )
		.mousedown( observe )
		.mouseup( observe )
		.select( observe )
		.click( observe )
		.dblclick( observe )
		.blur( observe );
	
	//mark each field and unmark on unload
	$(inputs).each(
		function(){
			mark.call(this);
		}
	);	
	$(window).unload(
		function(){
			$(inputs).each(
				function(){
					unMark.call(this);
				}
			);
		}
	);	
		
  };
  
  $().ready(
	function(){
		//if autorun is specified, then auto setup watermark
		if( $('script[src*=jquery.watermark.js]').attr("src").match(/jquery.watermark.js.*?autorun/i) ){
			$(':text,:password,select,textarea').watermark();
		}
	}
  );

})(jQuery);