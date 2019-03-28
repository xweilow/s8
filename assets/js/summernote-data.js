(function ($) {
    'use strict';
    var $summernote = $('.summernote').summernote({
		toolbar: [
		    // [groupName, [list of button]]
		    ['fontsize', ['fontname','fontsize','style']],
		    ['style', ['bold', 'italic', 'underline','superscript', 'subscript', 'clear']],
		    ['color', ['color']],
		    ['para', ['ul', 'ol', 'paragraph', 'height']],
		    ['insert', ['picture','link','hr','table']],
			['action', ['undo','redo']]
		],
		height: 250,
		dialogsInBody: true,
        callbacks: {
	        onImageUpload: function(image) {
	            uploadImage(image[0]);
	        }
	    }
	});
	function uploadImage(image) {
	    var data = new FormData();
	    data.append("file", image);
	    LLC.callServer('production/onImageUpload', data, function(resp) {
            LLC.processResp(resp, function() {
                var image = $('<img>').attr({'src': resp.data});
	            $('.summernote').summernote("insertNode", image[0]);
            });
        }, this);
	}
})(window.jQuery);