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
// $('#myFrame').attr('src','https://drive.google.com/file/d/1_QEs3zAbGrXXQwuTO9X4Nci_ssvBCuwu/preview');
// $('#myFrame').css('width','800');
// $('#myFrame').find('.drive-viewer-toolstrip').css('display','none');
// $('.drive-viewer-toolstrip').remove();
// $('.drive-viewer-toolstrip').remove();