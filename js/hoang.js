// $( function() {
//     var text = $('.text-typing').text();
//     var current = 0;
//     $(document).keypress(function(event) {
//         if (String.fromCharCode(event.which) == ""+text.charAt(current)) {
//             $('#' + current).removeClass('text-current');
//             $('#' + current).removeClass('text-error');
//             $('#' + (current+1)).addClass('text-current');
//             $("#" + current).attr("tabindex",0).focus();
//             $("#" + (current -1)).attr("tabindex",-1).blur();
//             current++;
//             event.preventDefault();
//         }
//         else {
//             $('#' + current).addClass('text-error');
//         }
//     });

//     ////////////////////////////
//     // Phần của Giang add thêm :v
//     $("#modalToggle").click(function(){
//         $("#modalToggle").blur();
//     })

//     $("#typingField").click(function(){
//         $("#typingField").blur();
//         $("#" + current).attr("tabindex",0).focus();
//     })
// })


$(function() {
    var text = $('#text-typing').text();
    var current = 0;
    var charsTyped = 0.0;
    var totalChars = $("#text-typing > span").length;
    var start = 0;
    var timer = 0;
    var cpm = 0;
    var checkChar = function(ch) {
        charsTyped++;
        $('#' + current).removeClass('text-current');
        if (ch == "" + text.charAt(current)) {
            $('#' + current).removeClass('text-error');
            $('#' + (current+1)).addClass('text-current');
            current++;
            if (current == text.length) {
                alert("Congratulations! You finished this exercise!");
            }
            else {
                $("#" + current).attr("tabindex",0).focus();
                $("#" + (current -1)).attr("tabindex",-1).blur();
            }
        }
        else {
            $('#' + current).addClass('text-error');
        }
        $('#cpm').text(Math.round(charsTyped / ((timer-start)/1000) * 60));
        $('#accuracy').text(Math.round(current / charsTyped * 100));
    };

// timer
    function pad ( val ) { return val > 9 ? val : "0" + val; }
    function setTime () {
        timer = (new Date).getTime();
        $('#timer-minutes').text(pad(Math.round((timer-start) / 1000 / 60)));
        $('#timer-seconds').text(pad(Math.round((timer-start) / 1000 % 60)));
    }

// Starts timer when the dialog is shown
    $("#index_modal").on("shown.bs.modal", function(e) {
        start = (new Date).getTime();
        setInterval(setTime, 100);
    });


// Key event handler
    window.onkeydown = function(event) {
        if (event.keyCode == 32) {
            event.preventDefault();
            checkChar(" ");
        }
    }
    $(document).keypress(function(event) {
        checkChar(String.fromCharCode(event.which));
    });

// Focus trick by Giang
    $("#typingField").click(function(){
        $("#typingField").blur();
        $("#" + current).attr("tabindex",0).focus();
    });
})