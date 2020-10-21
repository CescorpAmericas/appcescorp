

$('#demoNotify').click(function(){
  $.notify({
    title: "Update Complete : ",
    message: "Something cool is just updated!",
  	icon: 'fa fa-check'
  },{
  	type: "info"
  });
});


$('#sl').click(function(){
  $('#tl').loadingBtn();
  $('#tb').loadingBtn({ text : "Signing In"});
});

$('#el').click(function(){
  $('#tl').loadingBtnComplete();
  $('#tb').loadingBtnComplete({ html : "Sign In"});
});

///calendarios///

$('#demoDate1').datepicker({
  format: "yyyy/mm/dd",
  autoclose: true,
  todayHighlight: true
});
$('#demoDate2').datepicker({
  format: "yyyy/mm/dd",
  autoclose: true,
  todayHighlight: true
});
$('#demoDate3').datepicker({
  format: "yyyy/mm/dd",
  autoclose: true,
  todayHighlight: true
});
$('#demoDate4').datepicker({
  format: "yyyy/mm/dd",
  autoclose: true,
  todayHighlight: true
});
$('#demoDate5').datepicker({
  format: "yyyy/mm/dd",
  autoclose: true,
  todayHighlight: true
});
$('#demoDate6').datepicker({
  format: "yyyy/mm/dd",
  autoclose: true,
  todayHighlight: true
});
$('#demoDate7').datepicker({
  format: "yyyy/mm/dd",
  autoclose: true,
  todayHighlight: true
});
$('#demoDate8').datepicker({
  format: "yyyy/mm/dd",
  autoclose: true,
  todayHighlight: true
});
$('#demoDate9').datepicker({
  format: "yyyy/mm/dd",
  autoclose: true,
  todayHighlight: true
});
$('#demoDate10').datepicker({
  format: "yyyy/mm/dd",
  autoclose: true,
  todayHighlight: true
});
$('#demoDate11').datepicker({
  format: "yyyy/mm/dd",
  autoclose: true,
  todayHighlight: true
});

$('#demoSelect').select2();
