$(function() {
    var text = $("#typing-field").text();
    var current = 0;
    var charsTyped = 0.0;
    var totalChars = text.length;
    var start = 0;
    var timer = 0;
    var mapping = {
        "~": "`",
        "!": "1",
        "@": "2",
        "#": "3",
        "$": "4",
        "%": "5",
        "^": "6",
        "&": "7",
        "*": "8",
        "(": "9",
        ")": "0",
        "_": "-",
        "+": "=",
        "{": "[",
        "}": "]",
        "|": "backslash",
        ":": "semicolon",
        "\"": "'",
        "<": "comma",
        ">": "period",
        "?": "/"
    }

    $("#keyboard-toggle").on("click", function() {
        $("#keyboard").toggle();
        if ($("#keyboard").is(":visible")) $("#typing-panel").css("max-height", "30vh");
        else $("#typing-panel").css("max-height", "60vh");
    });

    var shiftedKeys = ["~","!","@","#","$","%","^","&","*","(",")","_","+","{","}","|",":","\"","<",">","?"];

    function nextChar(num) {
        $("#keyboard li").removeClass("key-current");
        $("#keyboard li").removeClass("key-shifted");
        var currentChar = $("#" + current).text();
        var key;
        var shift = false;
        if ($.inArray(currentChar, shiftedKeys) !== -1) {
            console.log("Is a shifted key");
            key = "#key-" + mapping[currentChar];
            $(".key-shift").addClass("key-shifted");
            $(key).addClass("key-shifted");
        }
        else {
            if (currentChar == ",") $("#key-comma").addClass("key-current");
            else if (currentChar == ".") $("#key-period").addClass("key-current");
            else if (currentChar == " ") $("#key-space").addClass("key-current");
            else if (currentChar == "\\") $("#key-backslash").addClass("key-current");
            else if (currentChar == ";") $("#key-semicolon").addClass("key-current");
            else if (currentChar.toLowerCase() != currentChar) {
                key = "#key-" + currentChar.toLowerCase();
                $(key).addClass("key-shifted");
                $(".key-shift").addClass("key-shifted");
            }
            else $("#key-" + currentChar).addClass("key-current");
        }
    }

    nextChar(current);

    function checkChar(ch) {
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
                nextChar(current);
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

    var typing = false;
// Starts timer when the user starts typing
// Key event handler
        window.onkeydown = function(event) {
            if (typing == false) {
                typing = true;
                start = (new Date).getTime();
                setInterval(setTime, 1000);
            }
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

// Focus trick by Giang
    $("#typing-field").click(function(){
        $("#typing-field").blur();
        $("#" + current).attr("tabindex",0).focus();
    });
})

