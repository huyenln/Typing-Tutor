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


$( function() {
    var text = $('.text-typing').text();
    var current = 0;
    var checkChar = function(ch) {
        if (ch == "" + text.charAt(current)) {
            $('#' + current).removeClass('text-current');
            $('#' + current).removeClass('text-error');
            $('#' + (current+1)).addClass('text-current');
            current++;
             $("#" + current).attr("tabindex",0).focus();
             $("#" + (current -1)).attr("tabindex",-1).blur();
        }
        else $('#' + current).addClass('text-error');
    };
    window.onkeydown = function(event) {
        if (event.keyCode == 32) {
            event.preventDefault();
            checkChar(" ");
        }
    }
    $(document).keypress(function(event) {
        checkChar(String.fromCharCode(event.which));
    });

    $("#typingField").click(function(){
        $("#typingField").blur();
        $("#" + current).attr("tabindex",0).focus();
    })
})