$(document).ready(function(){
  
  $('#small a').click(function(eventObject){
    $('#big img').hide().attr('src',$(this).attr('href'));
    $('#big img').load(function(){
        $(this).fadeIn(2000);
    });
    eventObject.preventDefault();
  });
   
   /*
 var textH1 = $('#main_h1').text("Этот текст изменен с помощью JQuery");
   var fot = $(' img[src*=logo]');
   fot.hide(2000);
   fot.show(2000);
   
 */
/*
  var pdf1 = $('a[href$=PDF]');
 pdf1.hide().text('Это новая ссылка').show(2000);
 */
 
 /*
 $('img:not([src*=logo])').hide(5000).show(5000);
 */
  // $('#div_for_img').height(130).width(815); 
  
  //$('img[src*=logo]').fadeOut(5000).fadeIn(5000);;
  
  
 /*
 $('#moto_models li').click(function(){
  var mytext = $(this).text();
  $('#moto_table tbody').append('<tr><td>'+ mytext +'</td><td>25000</td></tr>');
    });
 */
  
/*
 var tableStr=$('#moto_table tr')
tableStr.mouseover(function(){
    $(this).addClass('svet');
})

tableStr.mouseout(function(){
    $(this).removeClass('svet');
})
 */
});//конец ready