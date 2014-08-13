$(document).ready(function(){
  $("#menu-item-112").hide();
  $("#menu-item-111").hide();
  $("#menu-item-218").hide();
  
  $("#menu-item-141").mouseover(function(){
  $("#menu-item-112").show();
  $("#menu-item-111").show();
  $("#menu-item-218").show();
  });
  $("#menu-item-141").mouseout(function(){
  $("#menu-item-112").hide();
  $("#menu-item-111").hide();
  $("#menu-item-218").hide();
  });
});