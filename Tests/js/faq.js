$(document).ready(function () {
            function waitThenDoSomething(waitTimeInMS, myAction) {
                setTimeout(function () {
                    if (myAction == "displayPopup") {
                        $('#myModalPopUp').modal('show');
                    }
                }, waitTimeInMS); //time in ms to wait before modal dialog box shows up.
            }
            if (document.referrer == "https://learncodinganywhere.com/index.html" || document.referrer == "https://learncodinganywhere.com/") {
                waitThenDoSomething(0, "displayPopup"); //this function waits 0 milliseconds before displaying a popup.
                //I left the wait function here so that if you change your mind and decide you want to wait before showing 
                //the modal dialog box, it's as easy as changing the 0 above to a different number, rather than recoding 
                //all of it again.
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
        });