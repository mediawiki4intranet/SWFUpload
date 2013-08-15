var upload1;
window.onload = function() {
	upload1 = new SWFUpload({
		// Backend Settings
		upload_url: mw.util.wikiScript('api')+'?action=upload&format=json',
		post_params: {
			'token': swfupload_token,
			'ignorewarnings': 1,
			'swfuploadNamePrefix': swfupload_prefix,
			'swfuploadCookies': swfupload_cookies,
			'text': document.getElementById('swfuploadDescription').value
		},
		http_success : [ 302 ],

		// File Upload Settings
		file_size_limit : "0",
		file_types : "*.*",
		file_types_description : mw.msg('swfu-allfiles'),
		file_upload_limit : "0",
		file_queue_limit : "0",
		file_post_name : "file",

		// Event Handler Settings (all my handlers are in the Handler.js file)
		file_queued_handler : fileQueued,
		file_queue_error_handler : fileQueueError,
		file_dialog_complete_handler : fileDialogComplete,
		upload_start_handler : uploadStart,
		upload_progress_handler : uploadProgress,
		upload_error_handler : uploadError,
		upload_success_handler : uploadSuccess,
		upload_complete_handler : uploadComplete,

		// Button Settings
		button_image_url : swfupload_path + "data/button-upload.png",
		button_placeholder_id : "spanButtonPlaceholder1",
		button_width: 61,
		button_height: 22,

		// Flash Settings
		flash_url : swfupload_path + "data/swfupload.swf",

		custom_settings : {
			progressTarget : "fsUploadProgress1",
			cancelButtonId : "btnCancel1"
		},

		// Debug Settings
		debug: false
	});
};
