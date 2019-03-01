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
        header:{
        left:'prev,next today',
            center:'title',
            right:'month,agendaWeek'
    },

        events: 'load-user-data.php',


        selectable:false,
        selectHelper:true,
        eventLimit:true,
        editable:true,

        // dayClick: function(date,jsEvent,view){
        //     $('#calendar').fullCalendar('gotoDate',date);
        //     $('#calendar').fullCalendar('changeView','agendaDay');
        //
        // },


        select: function(start,end,allDay){

            $("#sideModalTR").modal('show');
        },

        eventResize:function(event){
            var start = moment(event.start).format("YYYY-MM-DD HH:mm:ss");
            var end = moment(event.end).format("YYYY-MM-DD HH:mm:ss");
            var title = event.title;
            var id = event.id;
            $.ajax({
                url:"update-user-data.php",
                type:"POST",
                data:{title:title,start:start,end:end,id:id},
                success:function () {
                    calendar.fullCalendar('refetchEvents');
                    toastr["success"]("Your activity <b>"+(event.title) + "</b> has been updated in your plan", "Updated successfully")

                    toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": true,
                        "progressBar": true,
                        "positionClass": "toast-bottom-center",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "4000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                }
            })
        },
        eventDrop:function(event){
            var start = moment(event.start).format("YYYY-MM-DD HH:mm:ss");
            var end = moment(event.end).format("YYYY-MM-DD HH:mm:ss");
            var title = event.title;
            var id = event.id;

            $.ajax({
                url:"update-user-data.php",
                type:"POST",
                data:{title:title,start:start,end:end,id:id},
                success:function () {
                    calendar.fullCalendar('refetchEvents');
                    //alert('Event update 2');

                    toastr.success("Your activity <b>"+(event.title) + "</b> has been updated in your plan", "Updated successfully");

                }
            })
        },
        eventClick:function(event){
            if (confirm("Are you sure you want to delete this event ?")){
                var id = event.id;
                $.ajax({
                    url: "delete-user-data.php",
                    type:"POST",
                    data:{id:id},
                    success:function(){
                        calendar.fullCalendar('refetchEvents');
                        //alert("Event deleted");

                        toastr.info("Your activity <b>"+(event.title) + "</b> has been deleted from your plan", "Deleted successfully");
                    }
                })
            }
        }
    });

    $("#close-event").on('click',function(){
        $('#sideModalTR').modal('hide');

    })

    $("#save-event").on('click',function () {
        var pain = $('#painName').val();
        var title = $('#exerciseName').val();
        var start = $('#starts-at').val();
        var end = $('#ends-at').val();
        var desc = "desc";
        var color = $('#event-color').val();
        var emailChecked = $('#emailToggle').is(':checked');
        if (pain === "Select Pain" || title === "" || start === "" || end === ""){
            alert("Please enter all fields first");
            return false;
        }
        if(title){
            $.ajax({
                url:"insert-user-data.php",
                type: "POST",
                data:{title: title, start: start, end:end,desc:desc,color:color,emailChecked:emailChecked},
                success:function(){

                    $('#sideModalTR').find('input').val('');
                    $('#sideModalTR').modal('hide');
                    calendar.fullCalendar('refetchEvents');
                    toastr.success("Activity " + title +" added in your plan","Added successfully");
                }
            })
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

function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -33.863276, lng: 151.207977},
        zoom: 13,
        mapTypeId: 'roadmap'
        });

        /* MAP SEARCH*/
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
            searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
            var places = searchBox.getPlaces();

            if (places.length == 0) {
                return;
            }

            // Clear out the old markers.
            markers.forEach(function(marker) {
                marker.setMap(null);
            });
            markers = [];

            // For each place, get the icon, name and location.
            var bounds = new google.maps.LatLngBounds();
            places.forEach(function(place) {
                if (!place.geometry) {
                    console.log("Returned place contains no geometry");
                    return;
                }
                var icon = {
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25)
                };

            // Create a marker for each place.
                markers.push(new google.maps.Marker({
                map: map,
                icon: icon,
                title: place.name,
                position: place.geometry.location
                }));

                if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
                } else {
                bounds.extend(place.geometry.location);
                }
            });
            map.fitBounds(bounds);
        });


// function initMap() {
//     var map = new google.maps.Map(document.getElementById('map'), {
//         center: new google.maps.LatLng(-37.9117568, 145.1231749),
//         zoom: 12
//     });
        var infoWindow = new google.maps.InfoWindow;


    // Change this depending on the name of your PHP or XML file
        downloadUrl('brickitwithease/map_data_xml.php', function(data) {
        var xml = data.responseXML;
        var locations = xml.documentElement.getElementsByTagName('location');
        Array.prototype.forEach.call(locations, function(markerElem) {
            var id = markerElem.getAttribute('id');
            var name = markerElem.getAttribute('name');
            var point = new google.maps.LatLng(
                parseFloat(markerElem.getAttribute('Latitude')),
                parseFloat(markerElem.getAttribute('Longitude')));

            var infowincontent = document.createElement('div');
            var strong = document.createElement('strong');
            strong.textContent = name
            infowincontent.appendChild(strong);
            infowincontent.appendChild(document.createElement('br'));

            var text = document.createElement('text');
            text.textContent = name
            infowincontent.appendChild(text);
            var icon = customLabel[type] || {};
            var location = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
            });
            location.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, location);
            });

        });
    });

    function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
            if (request.readyState == 4) {
                request.onreadystatechange = doNothing;
                callback(request, request.status);
            }
        };

        request.open('GET', url, true);
        request.send(null);
    }

    function doNothing() {}
}





<!--  For modal  -->

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


