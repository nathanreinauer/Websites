$(document).ready(function() {
			var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
			if (w <657) {
				$(".form-control").removeAttr("placeholder");
			}
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
			$('#datetimepicker1').datetimepicker('setDaysOfWeekDisabled', [0,6]);
			});
			$(function() {
			$('#datetimepicker2').datetimepicker('setDaysOfWeekDisabled', [0,6]);
			});
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
		
					