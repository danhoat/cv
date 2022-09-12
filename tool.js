(function($){
	function callAjax(data){
		$.ajax({
            url: cv.ajaxURL,
            type: 'post',
            data: data,
            beforeSend: function() { },
            success: function(result) {
            	const res = JSON.parse(result);
            	if(res.success){ location.reload();
            	} else{ alert('fail'); }
            }
        });
	}
	$(document).ready(function(){
        $(".content-font").change(function(event){
        	var font = this.value;
        	var data = {action:'content_font', font:font};
        	callAjax(data);
        });
        $(".content-label").change(function(event){
			var font = this.value;
        	var data = {action:'label_font', font:font};
        	callAjax(data);
        });
       $(".layout").change(function(event){
        	var layout 	= this.value;
        	var data 	= {action:'set_layout', layout:layout};
        	callAjax(data);
        });
	})
})(jQuery);