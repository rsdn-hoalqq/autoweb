// hidden alert
$('div.alert').delay(3000).slideUp();
// make tooltip
$('[data-toggle="tooltip"]').tooltip();  
// 
$('#addImage').on('click',function(){
  var count = $( ".clsImage" ).length + 1;
  var html = "<input type='file' name='image"+count+"' class='clsImage'>";
  $('#divImage').append(html);
});