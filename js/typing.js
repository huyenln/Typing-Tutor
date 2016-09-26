$(function() {
    $("#modal-ready").modal("show");
    var text = $("#typing-field").text();
    var current = 0;
    var charsTyped = 0.0;
    var totalChars = text.length;
    var start = 0;
    var timer = 0;
    function checkChar (ch) {
        charsTyped++;
        $("#" + current).removeClass("text-current");
        if (ch == "" + text.charAt(current)) {
            $("#" + current).removeClass("text-error");
            $("#" + (current+1)).addClass("text-current");
            current++;
            if (current == text.length) {
                var data = {
                    "time": $("#timer-minutes").text() + ":" + $("#timer-seconds").text(),
                    "cpm": $("#cpm").text(),
                    "accuracy": $("#accuracy").text()
                }
                successDialog(data);
            }
            else {
                $("#" + current).attr("tabindex",0).focus();
                $("#" + (current -1)).attr("tabindex",-1).blur();
            }
        }
        else {
            $("#" + current).addClass("text-error");
        }
        $("#cpm").text(Math.round(charsTyped / ((timer-start)/1000) * 60));
        $("#accuracy").text(Math.round(current / charsTyped * 100));
    };

// timer
    function pad ( val ) { return val > 9 ? val : "0" + val; }
    function setTime () {
        timer = (new Date).getTime();
        $("#timer-minutes").text(pad(Math.round((timer-start) / 1000 / 60)));
        $("#timer-seconds").text(pad(Math.round((timer-start) / 1000 % 60)));
        $("#cpm").text(Math.round(charsTyped / ((timer-start)/1000) * 60));
    }

// Starts timer when the dialog is shown
   $("#modal-ready").on("hidden.bs.modal", function(e) {
        start = (new Date).getTime();
        setInterval(setTime, 1000);
        // Key event handler
        window.onkeydown = function(event) {
            switch(event.keyCode) {
                case 32: 
                // Space, will scroll the page if not caught
                    event.preventDefault();
                    checkChar(" ");
                    break;
                case 9:
                // Tab, will cause the hidden text area to lose focus, I think...
                case 8:
                // Backspace, will go to the previous page.
                    event.preventDefault();
                    break;
                default:
                    break;
            }
        }
        $(document).keypress(function(event) {
            checkChar(String.fromCharCode(event.which));
        });
    });

// Focus trick by Giang
    $("#typing-field").click(function(){
        $("#typing-field").blur();
        $("#" + current).attr("tabindex",0).focus();
    });
})

