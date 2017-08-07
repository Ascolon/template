$(".venicle-characteristics").click(function () {
    if ( $(".venicle-characteristics-list").css('display') == 'none'){
      $(".venicle-characteristics img").css({transform: 'rotate(180deg)'});
    }
    else{
      $(".venicle-characteristics img").css({transform: 'rotate(0deg)'}); 
    }
    $(".venicle-characteristics-list").slideToggle( "50" );
    //$(".venicle-characteristics img").css({transform: 'rotate(180deg)'});
});
////
//$(".venicle-characteristics img").css({transform: 'rotate(180deg)'});
////
////
$(".venicle-characteristics-info").click(function() {
    if ( $(".venicle-characteristic-info").css('display') == 'none'){
      $(".venicle-characteristics-info img").css({transform: 'rotate(180deg)'});
    }
    else{
      $(".venicle-characteristics-info img").css({transform: 'rotate(0deg)'}); 
    }
  $(".venicle-characteristic-info").slideToggle( "50" );
});


///Смена описания характеритстик
$('.custom-radio').on('change', function() {
    var name = $(this).val();
    $.getJSON( "res/json/about.json", function( data ) {
     $.each( data, function( key, val ) {
        if(key == name){
            $(".col-md-12.description").html(val.descri); 
            $(".button-buy label").text(val.price);
        }           
      });
    });
});



var taskList = [];

 $(".add-new-task").click(function(){
     if($('.new-task-text').val() == ""){
         alert("Введите задачу!! Поле не может быть пустым!!!");
         return false;
     }
     var el = $('<div class="task"></div>')
      .append('<input type="text" style="padding:0;" value="'+$('.new-task-text').val()+'"readonly="readonly" class="col-md-7 current-task">')
      .append('<button class="glyphicon glyphicon-pencil font edit-task"></button>')
      .append('<button class="glyphicon glyphicon-remove font remove-task"></button>');
     $(".tasks").append(el);
     $('.new-task-text').val("");
 });


$('body').on('click', '.remove-task', function(){
    $(this).closest("div").remove();
});

$('body').on('click', '.edit-task', function(){
    //$(this).closest("div").toggleClass('editing-task');
    //$('.editing-task input').prop('readonly', false);
    
    if($(this).closest("div").hasClass('editing-task')){
        $('.editing-task input').prop('readonly', true);
        $(this).closest("div").removeClass('editing-task');
    }
    else{
        $(this).closest("div").addClass('editing-task');
        $('.editing-task input').prop('readonly', false);
    }
});





