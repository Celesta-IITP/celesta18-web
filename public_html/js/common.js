// <![CDATA[ 
/*========================== All Functions ======================*/
var nav = false;
var hidden;
var evnt = false;
function hide() {
    $(".blank").addClass("hidden");
    hidden = true;
}
function show() {
    $(".blank").removeClass("hidden");
    hidden = false;
}
function openNav() {
    $("#id-drpList").addClass("slide");
    $("body").addClass("fade");
    show();
    nav = true;
}
function closeNav() {
    $("#id-drpList").removeClass("slide");
    $("body").removeClass("fade");
    hide();
    nav = false;
}
function openNav2() {
    $(".right-side-2").addClass("slide");
    $("body").addClass("fade");
    show();
    nav = true;
}
function closeNav2() {
    $(".right-side-2").removeClass("slide");
    $("body").removeClass("fade");
    hide();
    nav = false;
}
function Nav2() {
    !nav ? openNav2() : closeNav2();
}
function Nav() {
    if (evnt == false) {
        !nav ? openNav() : closeNav();
        $(".right-side-2").removeClass("slide");
    } else {
        Nav2();
    }
}
/*function pleaseWait(wait) {
    if(wait==true)
        $(".wait").removeClass("hidden");
    else
        $(".wait").addClass("hidden");
}*/
//----------------------- Pages Loading Function -----------------//
/*function loadXMLDoc(url) {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('container').innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}*/
$(document).ready(function() {
    /*===================== Navigation Links =======================*/
    $(document).ajaxStart(function() {
        $("#loader").css("display", "block");
    });
    $(document).ajaxComplete(function() {
        $("#loader").css("display", "none");
    });
    $("#HomeBox").load("pages/Home.php");
});
// ]]>
