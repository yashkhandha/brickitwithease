(function($){
    $.fn.scrollingTo = function( opts ) {
        var defaults = {
            animationTime : 1000,
            easing : '',
            callbackBeforeTransition : function(){},
            callbackAfterTransition : function(){}
        };

        var config = $.extend( {}, defaults, opts );

        $(this).click(function(e){
            var eventVal = e;
            e.preventDefault();

            var $section = $(document).find( $(this).data('section') );
            if ( $section.length < 1 ) {
                return false;
            };

            if ( $('html, body').is(':animated') ) {
                $('html, body').stop( true, true );
            };

            var scrollPos = $section.offset().top;

            if ( $(window).scrollTop() == scrollPos ) {
                return false;
            };

            config.callbackBeforeTransition(eventVal, $section);

            $('html, body').animate({
                'scrollTop' : (scrollPos+'px' )
            }, config.animationTime, config.easing, function(){
                config.callbackAfterTransition(eventVal, $section);
            });
        });
    };

    /* ========================================================================= */
    /*   Contact Form Validating
    /* ========================================================================= */

    $('#contact-form').validate({
        rules: {
            name: {
                required: true, minlength: 4
            }
            , email: {
                required: true, email: true
            }
            , subject: {
                required: false,
            }
            , message: {
                required: true,
            }
            ,
        }
        , messages: {
            user_name: {
                required: "Come on, you have a name don't you?", minlength: "Your name must consist of at least 2 characters"
            }
            , email: {
                required: "Please put your email address",
            }
            , message: {
                required: "Put some messages here?", minlength: "Your name must consist of at least 2 characters"
            }
            ,
        }
        , submitHandler: function(form) {
            $(form).ajaxSubmit( {
                type:"POST", data: $(form).serialize(), url:"sendmail.php", success: function() {
                    $('#contact-form #success').fadeIn();
                }
                , error: function() {
                    $('#contact-form #error').fadeIn();
                }
            }
            );
        }
    });


}(jQuery));



jQuery(document).ready(function(){
	"use strict";
	new WOW().init();


(function(){
 jQuery('.smooth-scroll').scrollingTo();
}());

});




$(document).ready(function(){

    $(window).scroll(function () {
        if ($(window).scrollTop() > 50) {
            $(".navbar-brand a").css("color","#fff");
            $("#top-bar").removeClass("animated-header");
        } else {
            $(".navbar-brand a").css("color","inherit");
            $("#top-bar").addClass("animated-header");
        }
    });

    $("#clients-logo").owlCarousel({

        itemsCustom : false,
        pagination : false,
        items : 5,
        autoplay: true,

    });

    <!-- FULL CALENDAR-->
    var calendar = $('#calendar').fullCalendar({
        editable:true,
        height: 500,
        aspectRatio: 2,
        header:{
        left:'prev,next today',
            center:'title',
            right:'month,agendaWeek'
        },
        selectable:true,
        selectHelper:false,
        eventLimit:true,
        timeFormat: 'H(:mm)',
        events: 'load-user-data.php',
        eventRender: function(eventObj, $el) {
            $el.popover({
                title: eventObj.title,
                content: moment((eventObj.start).format("YYYY-MM-DD HH:mm:ss"), "YYYY-MM-DD HH:mm:ss").fromNow(),
                trigger: 'hover',
                placement: 'top',
                container: 'body'
            });
        },
        // dayRender: function(date, cell) {
        //     var today = $.fullCalendar.moment();
        //     if (date.get('date') == today.get('date')) {
        //         cell.css("background", "#A9CCE3");
        //     }
        // },

        dayClick: function(date,jsEvent,view){
            // $('#calendar').fullCalendar('gotoDate',date);
            // $('#calendar').fullCalendar('changeView','agendaDay');

            var day = (date).format("YYYY-MM-DD");

            $('#dateinput').val(day);
            // $('#starts-at').val(start);
            // $('#ends-at').val(end);
            $("#sideModalTR").modal('show');

        },


        // select: function(start,end,allDay){
        //     // alert(start.getTime());
        //     // alert(end.getTime());
        //     // if(end.getTime() != start.getTime()){
        //     //     calendar.fullCalendar( 'unselect' ) ;
        //     // }
        //     var start = (start).format("YYYY-MM-DD");
        //     var end = (end).format("YYYY-MM-DD");
        //     //alert(start);
        //     //alert(end);
        //     $('#starts-at').val(start);
        //     $('#ends-at').val(end);
        //     $("#sideModalTR").modal('show');
        // },

        eventResize:function(event){
            var start = moment(event.start).format("YYYY-MM-DD HH:mm:ss");
            var end = moment(event.end).format("YYYY-MM-DD HH:mm:ss");
            var title = event.title;
            var id = event.id;
            var color = event.color;
            $.ajax({
                url:"update-user-data.php",
                type:"POST",
                data:{title:title,start:start,end:end,id:id,color:color},
                success:function () {
                    calendar.fullCalendar('refetchEvents');
                    alertify.set('notifier','position','bottom-center');
                    alertify.success("Your activity <b>"+(event.title) + "</b> has been updated in your plan");
                    //toastr.success("Your activity <b>"+(event.title) + "</b> has been updated in your plan", "Updated successfully");
                }
            })
        },
        eventDrop:function(event){
            var start = moment(event.start).format("YYYY-MM-DD HH:mm:ss");
            var end = moment(event.end).format("YYYY-MM-DD HH:mm:ss");
            var title = event.title;
            var id = event.id;
            var color = event.color;

            $.ajax({
                url:"update-user-data.php",
                type:"POST",
                data:{title:title,start:start,end:end,id:id,color:color},
                success:function () {
                    calendar.fullCalendar('refetchEvents');
                    //alert('Event update 2');
                    alertify.success("Your activity <b>"+(event.title) + "</b> has been updated in your plan");
                    //toastr.success("Your activity <b>"+(event.title) + "</b> has been updated in your plan", "Updated successfully");

                }
            })
        },

        eventClick:function(event){
                var start = moment(event.start).format("YYYY-MM-DD HH:mm:ss");
                var end = moment(event.end).format("YYYY-MM-DD HH:mm:ss");
                var eventDate = moment(event.start).format("YYYY-MM-DD");
                var title = event.title;
                var id = event.id;
                var color = event.color;

                //alert(start);
                //alert(end);
                //alert(title);
                //alert(id);
                //alert(color);
                var startTime = start.substr(11,9);
                var endTime = end.substr(11,9);

                $('#exerciseTitle').val(title);
                $('#start').val(startTime);
                $('#end').val(endTime);
                $('#eventColor').val(color);
                $('#eventId').val(id);
                $('#updateDate').val(eventDate);
                $('#updateModal').modal();
        }
            //     $.ajax({
            //     url:"update-user-data.php",
            //     type:"POST",
            //     data:{title:title,start:start,end:end,id:id,eventColor:eventColor},
            //     success:function () {
            //         calendar.fullCalendar('refetchEvents');
            //         //alert('Event update 2');
            //
            //         toastr.success("Your activity <b>"+(event.title) + "</b> has been updated in your plan", "Updated successfully");
            //
            //     }
            // })



        // eventClick:function(event){
        //     if (confirm("Are you sure you want to delete this event ?")){
        //         var id = event.id;
        //         $.ajax({
        //             url: "delete-user-data.php",
        //             type:"POST",
        //             data:{id:id},
        //             success:function(){
        //                 calendar.fullCalendar('refetchEvents');
        //                 //alert("Event deleted");
        //
        //                 toastr.info("Your activity <b>"+(event.title) + "</b> has been deleted from your plan", "Deleted successfully");
        //             }
        //         })
        //     }
        // }
    });

    $("#close-event").on('click',function(){
        $('#sideModalTR').modal('hide');
        $('#starts-at').val("");
        $('#ends-at').val("");
        $('#dateinput').val("");
        $('#painName').val("");
        $('#exerciseName').val("");
    })

    $("#close").on('click',function(){
        $('#updateModal').modal('hide');
    })


    $('#progressButton').on('click',function () {
        // $.ajax({
        //     url: "js/line-db-php.js",
        //     dataType : "script",
        //     success: success
        // });
        $('#progressModal').modal('show');
    })

    $("#closeProgress").on('click',function(){
        $('#progressModal').modal('hide');
    })

    $('#progressButton2').on('click',function () {
        alert('clicked');
        // $.ajax({
        //     url: "js/line-db-php.js",
        //     dataType : "script",
        //     success: success
        // });
        $('#progressModal2').modal('show');
    })

    $("#closeProgress2").on('click',function(){
        $('#progressModal2').modal('hide');
    })



    $("#save-event").on('click',function () {
        var pain = $('#painName').val();
        var title = $('#exerciseName').val();
        var date = $('#dateinput').val();
        var start = $('#starts-at').val();
        var end = $('#ends-at').val();

        var desc = "desc";
        var color = $('#event-color').val();
        var emailChecked = $('#emailToggle').is(':checked');
        if (pain === "Select Pain" || title === "" || start === "" || end === "" || date === ""){
            alertify.error("Please enter all fields first");
            //alert("Please enter all fields first");
            return false;
        }
        if(end<=start){
            alertify.error("Please enter end time after start time");
            //alert("Please enter end time after start time");
            return false;
        }
        if(title){
            start = date + " " + start;
            end = date + " " + end;

            if (emailChecked){
                alertify.log("Your activity is getting added in your planner");
            }
            $.ajax({
                url:"insert-user-data.php",
                type: "POST",
                data:{title: title, start: start, end:end,desc:desc,color:color,emailChecked:emailChecked},
                success:function(){

                    $('#sideModalTR').find('input').val('');
                    $('#sideModalTR').modal('hide');
                    calendar.fullCalendar('refetchEvents');
                    alertify.success("Activity " + title +" added in your plan");
                    //toastr.success("Activity " + title +" added in your plan","Added successfully");
                }
            })
        }
        
    })

    $("#update").on('click',function () {
        var title = $('#exerciseTitle').val();
        var date = $('#updateDate').val();
        var start = $('#start').val();
        var end = $('#end').val();
        var color = $('#eventColor').val();
        var id = $('#eventId').val();
        var emailChecked = $('#emailToggleUpdate').is(':checked');
        if (start === "" || end === ""){
            alertify.error("Please enter all fields first");
            return false;
        }
        if(end<=start){
            alertify.error("Please enter end time after start time");
            return false;
        }
        if(title){
            start = date + " " + start;
            end = date + " " + end;

            if (emailChecked){
                alertify.log("Your activity is getting updated in your planner");
            }

            $.ajax({
                url:"update-user-data.php",
                type: "POST",
                data:{title: title, start: start, end:end,id:id,color:color,emailChecked:emailChecked},
                success:function(){

                    $('#updateModal').find('input').val('');
                    $('#updateModal').modal('hide');
                    calendar.fullCalendar('refetchEvents');
                    alertify.success("Activity " + title +" updated in your plan","Updated successfully");
                    //toastr.success("Activity " + title +" updated in your plan","Updated successfully");
                }
            })
        }

    })

    $("#delete").on('click',function () {
        var title = $('#exerciseTitle').val();
        var id = $('#eventId').val();
        if(title){
            alertify.set({ labels: { ok: "Yes", cancel: "No" }, buttonReverse: true });
            alertify.confirm("Are you sure you want to delete " + title + " from your planner?", function (e) {
                if (e) {
                    $.ajax({
                        url: "delete-user-data.php",
                        type:"POST",
                        data:{id:id},
                        success:function(){
                            $('#updateModal').find('input').val('');
                            $('#updateModal').modal('hide');
                            calendar.fullCalendar('refetchEvents');
                            //alertify.custom = alertify.extend("custom");
                            alertify.success("Your activity <b>"+(title) + "</b> has been deleted from your plan");
                            //toastr.info("Your activity <b>"+(title) + "</b> has been deleted from your plan", "Deleted successfully");
                        }
                    })
                } else {
                    return false;
                }
            });
        }

    })

});



// fancybox
$(".fancybox").fancybox({
    padding: 0,

    openEffect : 'elastic',
    openSpeed  : 450,

    closeEffect : 'elastic',
    closeSpeed  : 350,

    closeClick : true,
    helpers : {
        title : {
            type: 'inside'
        },
        overlay : {
            css : {
                'background' : 'rgba(0,0,0,0.8)'
            }
        }
    }
});


// CUSTOMIZED

  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply your last name'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    phone: {
                        country: 'US',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your state'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    },
                    zipCode: {
                        country: 'US',
                        message: 'Please supply a vaild zip code'
                    }
                }
            },
            comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a description of your project'
                    }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});


//customised

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
// function topFunction() {
//     document.body.scrollTop = 0;
//     document.documentElement.scrollTop = 0;
// }

var customLabel = {
    restaurant: {
        label: 'R'
    },
    bar: {
        label: 'B'
    }
};

<!--  For modal  -->

function logout() {
alert('in logout');

}
function successMessage(){
    var x = document.getElementById("snackbar");

    // Add the "show" class to DIV
    x.className = "show";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}

function emptyField(){
    $('#exampleModalLabel').on('shown.bs.modal', function () {
        $('#test').focus()
    })
}

$('#heading').addClass('animated fadeInDown');
$('#subheading').addClass('animated fadeInUp');


var el = document.getElementsByClassName("project-logo");
dynamics.animate(el, {
    translateX: 350,
    scale: 2,
    opacity: 0.5
}, {
    type: dynamics.spring,
    frequency: 200,
    friction: 200,
    duration: 1500
})

