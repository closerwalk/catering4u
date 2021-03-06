/* jQuery tooltip 1.0
 * hfbttip://www.webspider.ro
 * Copyright (c) 2011 Ovidiu Pop
 *
 * Dual licensed under the MIT and GPL licenses:
 *   hfbttip://www.opensource.org/licenses/mit-license.php
 *   hfbttip://www.gnu.org/licenses/gpl.html
 * 
 */
 
(function(jQuery){
 	jQuery.fn.extend({bttooltip: function(options) {
		var defaults = {
			style 	: "background:#666666;opacity:0.8;border-radius:5px 5px 5px 5px;box-shadow:0 5px 15px #AAAAAA;-moz-border-radius:5px 5px 5px 5px;-moz-box-shadow:0 5px 15px #AAAAAA;border:1px solid #DDDDDD;padding:5px 5px;color:#FFFFFF;position:absolute;display:none;z-index:9999;",
			xos 	: -10,
			yos 	: 20,
			hide    : false,
			design  : false,//class name for tooltip

			onHover:function(obj, event){
				if(obj.hasClass('fbttip')){//for speed up
					obj.attr('title', '');
					obj.data('title', obj.find('img').attr('alt'));
				}else{
					obj.attr('data-title', obj.attr('title'));
					obj.attr('title', '');
				}
				
				if(options.hide)
					return false;
				
				var design =  options.design ? 'class="' + options.design + '"' : 'style="' + options.style + '"';
				
				jQuery('body').append('<div ' + design + ' id="fbttip">'+ obj.data('title') + '</div>');
				jQuery('#fbttip')
					.css("top",(event.pageY - options.xos) + "px")
					.css("left",(event.pageX + options.yos) + "px")
					.fadeIn("fast");
			},
			
			removeTooltip:function(obj){
				jQuery('#fbttip').remove();
				obj.attr('title', obj.data('title'));
			},

			moveTooltip:function(event){
				$('#fbttip')
					.css("top",(event.pageY - options.xos) + "px")
					.css("left",(event.pageX + options.yos) + "px");
			}
		}

		var options =  jQuery.extend(defaults, options);
	
		return this.each(function() {

			var obj = jQuery(this);
			
			//prevent losing title when sort thumbnails
			obj.closest('#sortable_container').bind('sort', function(event, ui) {options.removeTooltip(obj); });

			obj.hover(function(event){
				options.onHover(obj, event);
			},function(){
				options.removeTooltip(obj);
			});

			obj.mousedown(function(){
				options.removeTooltip(obj);
			});
			
			obj.mousemove(function(event){
				options.moveTooltip(event);
			});
		});
	}
});
})(jQuery);

