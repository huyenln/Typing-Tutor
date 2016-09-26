window.fbAsyncInit = function() {
    FB.init({
        appId      : "1190204851001830",
        xfbml      : true,
        version    : "v2.7"
    });
    $(".btn-fb-login").hide();
    $("#nav-profile").hide();
    $(function() {
        FB.getLoginStatus(function(response) {
            if (response.status === "connected") {
                $("#nav-profile").show();
                var accessToken = response.authResponse.accessToken;
                FB.api(
                    "/me?fields=first_name", 
                    function (response) {
                        if (response && !response.error) {
                            $("#msg-logged-in").text("Welcome, " + response.first_name);
                        }
                        else $("#msg-logged-in").text("Welcome!");
                    }
                )
            }
            else {
                $(".btn-fb-login").show();
                $(".btn-fb-login").click(function () {
                    console.log("hello");
                    FB.login(function (response) {
                        if (response.status === "connected") {
                            $(".btn-fb-login").hide();
                            $("#nav-profile").show();
                            var accessToken = response.authResponse.accessToken;
                            FB.api(
                                "/me?fields=first_name", 
                                function (response) {
                                    if (response && !response.error) {
                                        $("#msg-logged-in").text("Welcome, " + response.first_name);
                                    }
                                    else $("#msg-logged-in").text("Welcome!");
                                }
                            )
                        }
                        else alert("Something went wrong. Please sign in again.");
                    });
                });
            }
        });

        $(".btn-share").on("click", function () {
            FB.ui({
                method: "share",
                // Dummy URL, replace when possible
                href: "https://facebook.com",
                hashtag: "#TypingTutorCNPM",
                quote: "Typing has never been so much fun."
            });
        });
    });
};

(function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, "script", "facebook-jssdk"));
    

