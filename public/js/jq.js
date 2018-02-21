$(document).ready(function() {

    $(".dropdown-toggle").click(function () {

        $(".dropdown-menu").toggle();

    })


    $(".navbar-toggle").click(function () {
        $(".navbar-default.sidebar").toggle();
    });


    if ($('ul.pagination > li').length > 4) {


        var first = $('ul.pagination > li').first();
        var pos = $('ul.pagination > li.active').index();
        var leng =$('ul.pagination > li').length;
        var mean = Math.floor($('ul.pagination > li').length / 2 );

               $( "ul.pagination > li" ).each(function() {

                   if (pos >= mean){

                   $("ul.pagination > li").slice(pos+2,mean-1).hide();
                   $("ul.pagination > li").slice(mean ,pos-1).hide();
                   $("ul.pagination > li").slice(pos ,leng-2).hide();

                   } else {

                       $("ul.pagination > li").slice(2,pos-1).hide();
                       $("ul.pagination > li").slice(pos+2 ,mean-1).hide();
                       $("ul.pagination > li").slice(mean+1 ,leng-2).hide();

                   }


                   $('#getRequest').click(function(){

                      $.get('getRequest', function(data){

                          $.ajax({

                              type:"GET",
                              url:"getRequest",
                              success: function(data){
                                  console.log();
                                  $('#getRequestData').append(data);
                              }

                          })

                      });

                   });

                   $.ajaxSetup({
                       headers: {
                           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                       }
                   });


                   $('#register').submit(function(){

                      var fname = $('#firstname').val();
                      var lname = $('#lastname').val();

                      // $.post('register', { firstname:fname, lastname:lname}, function(data){
                      //
                      //     $('#postRequestData').html(data);
                      //
                      //     });

                       var dataString = "firstname="+fname+"&lastname="+lname;

                       $.ajax({

                          type:"POST",
                           url: "register",
                           data: dataString,
                          success: function(data){
                              console.log(data);
                              $('#postRequestData').append(data);
                          }

                       });

                   });



               });





    }




});