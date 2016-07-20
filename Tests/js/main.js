/**
 * Created by Makali'i on 6/15/2016.
 * This file should be loaded in all html pages.
 * // TODO: 6.15.16 Makali'i - Everything in here is accessible globally. Place into modules once files are DRY and structure established.
 */

/**************************************************************************
 *
 *************************************************************************/

function waitThenDoSomething(waitTimeInMS, myAction) {
    setTimeout(function () {
        if (myAction == "displayPopup") {
            $('#myModalPopUpContact').modal('show');
        }
    }, waitTimeInMS); //time in ms to wait before modal dialog box shows up.
}



/**************************************************************************
 *  USEFUL CLASSES WITH EVENTS
 *************************************************************************/
$('.clickForContactForm').on('click', function(){
    console.log('click for contact form');
    waitThenDoSomething(0, 'displayPopup');
});

$('.slideanim').hover(
    function () { $(this).addClass('fadeIn') },
    function () { $(this).removeClass('fadeIn') });



$(document).ready(function () {
    /**************************************************************************
     * Reveals/fades in/slides up headers, containers, and text etc...
     *************************************************************************/


    $("header").hide();
    $(".text-center").scrollTop(0);
    $(".container").hide();
    $("#coverPic").fadeOut(2000);
    $(".container").fadeIn(4000);
    $("header").fadeIn(4000);
    $(".text-center").scrollTop(0);
    $("navText").click(function () { $(this).removeClass("navText")});
    $(window).ready(function () { $(window).scroll() });
    $(window).scroll(function () {
        $(".slideanim").each(function () {
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();

            if (pos < winTop + $(window).height()) {
                $(this).addClass("slide");
            }
        });
    });




    /**************************************************************************
     * Contact form logic
     *************************************************************************/




    $("#otherchoice").hide();
    $("#hearDropDown").change(function(){
        if($("#hearDropDown").val() == "other"){
            $("#otherchoice").show();
        }
        else
        {
            $("#otherchoice").hide();
        }
    });
    $(function() {
        $('#datetimepicker1').datetimepicker('setDaysOfWeekDisabled', [0,6]); });
    $(function() {
        $('#datetimepicker2').datetimepicker('setDaysOfWeekDisabled', [0,6]); });
    $('#datetimepicker1').datetimepicker({
        minuteStep: 30,
        showMeridian: true,
        /*couldn't get the below to work*/
        enabledHours: [10, 11, 12, 13, 14, 15, 16]
    });
    $('#datetimepicker2').datetimepicker({
        minuteStep: 30,
        showMeridian: true,
        /*couldn't get the below to work*/
        enabledHours: [10, 11, 12, 13, 14, 15, 16]
    });
    $("#noButton1").click(function() {
        $("#phone_input1").val("NOT NOW");
        $("#phone_input2").val("NOT AT THIS TIME");
    });
    $("#noButton2").click(function() {
        $("#tour_input1").val("NOT NOW");
        $("#tour_input2").val("NOT AT THIS TIME");
    });
    if ($("#phone_input1").val()=="SCHEDULE CALL"){
        $("#phone_input1").val("SCHEDULE CALL");
    }
    if ($("#tour_input1").val()=="SCHEDULE TOUR"){
        $("tour_input1").val("SCHEDULE TOUR");
    }
});








