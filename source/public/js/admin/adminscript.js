// hidden alert
$('div.alert').delay(3000).slideUp();
// make tooltip
$('[data-toggle="tooltip"]').tooltip();  
// 
$('#addImage').on('click',function(){
  var count = $( ".clsImage" ).length + 1;
  var html = "<input type='file' name='image[]' class='clsImage'><input type='text' class='form-control' name='nameImage[]' placeholder='Name Image'>";
  $('#divImage').append(html);
});

function deleteImage(id){
	var deleted = confirm("Bạn muốn xóa ảnh này!");
	if(deleted){
		var formId = 'frmDelete'+id;
		$('#'+formId).submit();
	}
}
function chooseType(type){
	switch(type){
		case '0':
			$('#grVideo').css('display','none');
			break;
		default:
        	$('#grVideo').css('display','block');
	}

}

function getAttrPath(id){
	var val = $('#'+id).val();
	html = jQuery.parseHTML(val);
	var path = '';
	var iframe = html[0].nodeName;
	if(iframe == 'IFRAME'){
		$.each( html, function( i, el ) {
			path = el.attributes.getNamedItem('src').value;
		});

		if(path){
			$('#'+id).val(path);
		}
	}	
	
}

function doCropperImage(src){
	$('#image').attr('src',src);
	$('#image').cropper({
		minContainerWidth: 900,
		minContainerHeight:700
	});
	$('#myModal').css('display','block');
}
function closed(){
	$('#myModal').css('display','none');
	$('#image').cropper("reset");
}
window.onclick = function(event) {
	var modal = document.getElementById('myModal');
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
// handle save image
function cropperImage(id){
	var nameImage = $('#image').attr("alt");
	$('#'+id).cropper('getCroppedCanvas').toBlob(function (blob) {
		var formData = new FormData();
		// set url		
		var urlpost = baseUrl+"admin/upload";
	  	formData.append('croppedImage', blob);
	  	formData.append('_token', token);
		$.ajax({
			url: urlpost,
			method: "POST",
			data: formData,
			processData: false,
	    	contentType: false,
		  	success: function(data) {
				console.log(data);
		 	 }
		});
	});
}

function previewImage(imageId){
	var file = this.files;

	// var data = $('#theMyForm').serialize();
	// console.log(file);
	// $.ajax({
	// 	type:'POST',
	//    	url:baseUrl+"admin/upload",
	//    	data:data,
	//    	success:function(data){
	//       	console.log(data);
	//    	}
	// });	
}