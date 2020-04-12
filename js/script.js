$(document).ready(function(){
  $("div.desc").hide();
  $('input[name="tipoPessoa"]').click(function(){
    var test = $(this).val(); 

      $("div.desc").hide();
      $("#tipoPessoa"+ test).show();
  });
});  

$(document).ready(function(){
  $("div.desc").hide();
  $('input[name="atendimento"]').click(function(){
    var test = $(this).val(); 

      $("div.desc").hide();
      $("#atendimento"+ test).show();
  });
});  