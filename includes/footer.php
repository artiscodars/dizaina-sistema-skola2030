</div>

<footer>

    <img src="/images/europe-fonds.png">

</footer>

<script>
    window.Userback = window.Userback || {};
    Userback.access_token = '29923|43872|KVo83IFOrdFQFn5OYh639i3xA';
    (function(d) {
        var s = d.createElement('script');s.async = true;
        s.src = 'https://static.userback.io/widget/v1.js';
        (d.head || d.body).appendChild(s);
    })(document);
</script>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

<script src="/fancybox/dist/jquery.fancybox.min.js"></script>

<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
});
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl);
});
$(".mini-menu-button").click(function(e) {
    //e.preventDefault();
    $("body").toggleClass("mini-menu");
});
$(".mini-menu-button.set-cookie").click(function(e) {
    //e.preventDefault();
    $(".has-children span.active").next().removeClass("show");
});
$(".mini-menu-button.unset-cookie").click(function(e) {
    //e.preventDefault();
    $(".has-children span.active").next().addClass("show");
});

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var user = getCookie("minimenu");
    if (user == "on") {
        $("body").addClass("mini-menu");
    }
    /*else {
        user = prompt("Please enter your name:", "");
        if (user != "" && user != null) {
            setCookie("username", user, 30);
        }
    }*/
}

/*
$(document).click(function(e) {
	if (!$(e.target).is('.mini-menu')) {
    	$('.show').collapse('hide');
    }
});*/


$(".mini-menu").click(function() {

//  $("span").attr('aria-expanded', true).setAttribute('aria-expanded', 'false');
$(".show").prev().attr('aria-expanded', 'false').toggleClass("collapsed");
$(".show").toggleClass("show");
});



$(".left_menu").scroll(function() {
  sessionStorage.scrollTop = $(this).scrollTop();
});

$(document).ready(function() {
  if (sessionStorage.scrollTop != "undefined") {
    $(".left_menu").scrollTop(sessionStorage.scrollTop);
  }
});





</script>

</html>
