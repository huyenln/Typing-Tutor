function getInfo() {
    FB.api(
        "/me?fields=first_name,name", 
        function (response) {
            if (response && !response.error) {
                $("#msg-logged-in").text("Welcome, " + response.first_name);
                $("#name").text(response.name);
            }
            else $("#msg-logged-in").text("Welcome!");
        }
    );
    FB.api(
        "/me/picture?type=large",
        function (response) {
            if (response && !response.error) {
                $(".fb-picture").attr("src", response.data.url);
            }
        }
    );
}

window.fbAsyncInit = function() {
    FB.init({
        appId      : "1190204851001830",
        cookie     : true,
        version    : "v2.7"
    });
    $(".btn-fb-login").hide();
    $("#nav-profile").hide();
    $(function() {
        FB.getLoginStatus(function(response) {
            if (response.status === "connected") {
                $("#nav-profile").show();
                // var accessToken = response.authResponse.accessToken;
                getInfo();
            }
            else {
                $(".btn-fb-login").show();
                $(".btn-fb-login").click(function () {
                    FB.login(function (response) {
                        if (response.status === "connected") {
                            $(".btn-fb-login").hide();
                            $("#nav-profile").show();
                            // var accessToken = response.authResponse.accessToken;
                            getInfo();
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

        $("#btn-logout").on("click", function() {
            FB.logout(function(response) {
            // user is now logged out
                window.location = "/";
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
    

