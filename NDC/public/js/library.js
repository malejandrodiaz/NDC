
// JavaScript Document

/* ACCORDION */

$( function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  } );



/* TIMEPICKER Y DATEPICKER */



$(function() {
    $('input[name="daterange"]').daterangepicker({
    timePicker: true,
    timePickerIncrement: 30,
	startDate : moment(),
        locale: {
            format: 'MM/DD/YYYY h:mm A'
        },
		isInvalidDate: function(date) { return (date.day() == 0 || date.day() == 6) ? true : false; }
	
    });
});

$('#multi').datepicker({
    startDate: '+2d',
	endDate: '+30d',
    todayBtn: true,
    multidate: true,
    daysOfWeekDisabled: '07',
	format: 'yyyy-mm-dd',
});

$('#mantt, #mantt2').datepicker({
    todayBtn: true,
	format: 'yyyy-mm-dd',
});



  $('#timeOnlyExample .time').timepicker({
    'showDuration': true,
    'timeFormat': 'H:i',
	'minTime': '7:00',
	'maxTime': '22:00',
	'disableTextInput': true
});

var timeOnlyExampleEl = document.getElementById('timeOnlyExample');
var timeOnlyDatepair = new Datepair(timeOnlyExampleEl);

/* JS PARA SELECCION DE ACTIVIDAD DE RESERVAS (INPUT CON IMAGEN Y BUSCADOR) */
$( function() {
    var projects = [
      {
        value: "jquery",
        label: "Sistemas distribuidos",
        desc: "Facultad de ingenieria",
        icon: "http://lorempixel.com/400/200"
      },
      {
        value: "jquery-ui",
        label: "Fotografia analoga",
        desc: "Facultad de comunicaciones",
        icon: "http://lorempixel.com/400/200"
      },
      {
        value: "sizzlejs",
        label: "Cuidado infantil",
        desc: "Facultad de educaciòn",
        icon: "http://lorempixel.com/400/200"
      }
    ];
 
    $( "#project" ).autocomplete({
      minLength: 0,
      source: projects,
      focus: function( event, ui ) {
        $( "#project" ).val( ui.item.label );
        return false;
      },
      select: function( event, ui ) {
        $( "#project" ).val( ui.item.label );
        $( "#project-id" ).val( ui.item.value );
        $( "#project-description" ).html( ui.item.desc );
        $( "#project-icon" ).attr( "src", "images/" + ui.item.icon );
 
        return false;
      }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.desc + "</div>" )
        .appendTo( ul );
    };
  } );
  
   /* JS PARA NOTIFICACIONES EN CAMPOS  
     $( function() {
    var tooltips = $( "[title]" ).tooltip({
      position: {
        my: "left top",
        at: "right+5 top-5",
        collision: "none"
      }
    });
    $( "<button>" )
      .text( "Show help" )
      .button()
      .on( "click", function() {
        tooltips.tooltip( "open" );
      })
      .insertAfter( "form" );
  } );
 */

  $( function() {
    $( document ).tooltip();
  } );


