const pageToast = document.querySelector(".page-toast");
const nav = document.querySelector("#nav");
const menus = document.querySelectorAll("ul.menu > li");

function navOn() {
    document.querySelector(".logo-black").style.display = "block";
    document.querySelector(".logo-white").style.display = "none";
    document.querySelector("#nav").style.background = "white";
    document.querySelector("nav#nav .nav-in").style.color = "#555555";
    document.querySelector("nav#nav .nav-in .right-menus").classList.add("on");
    document.querySelector(".btn-orange-gradient").style.color = "#ffffff";
}

function navOff() {
    document.querySelector(".logo-black").style.display = "none";
    document.querySelector(".logo-white").style.display = "block";
    document.querySelector("#nav").style.background = "transparent";
    document.querySelector("nav#nav .nav-in").style.color = "white";
    document.querySelector("nav#nav .nav-in .right-menus").classList.remove("on");
    document.querySelector(".btn-orange-gradient").style.color = "#ffffff";
}




function toastUp() {
    if (pageToast.style.display != "none") {
        pageToast.style.top = "calc( 100% - 100px )";
    }
}

function toastDown() {
    if (pageToast.style.display != "none") {
        pageToast.style.top = "99%";
    }
}

document.addEventListener("scroll", function() {
    const _scroll = document.documentElement.scrollTop;
    if (_scroll > 80) {
        navOn();
        toastUp();
    } else {
        navOff();
        toastDown();
    }
});


Array.prototype.forEach.call(menus, function (i, v) {

    i.addEventListener("mouseover", function() {
        navOn();
        var submenus = i.querySelector("div.sub-menus-wrap");
        submenus.style.display = "block";
        var a = i.querySelector("a");
        a.classList.add("on");
        a.style.width = (i.offsetWidth - 60) + "px";

    });

    i.addEventListener("mouseleave", function() {
        var _scroll = document.documentElement.scrollTop;
        _scroll > 80 ? navOn() : navOff();
        var submenus = i.querySelector("div.sub-menus-wrap");
        var a = i.querySelector("a");
        a.classList.remove("on");
        submenus.style.display = "none";
    })

});


document.querySelector(".toast-close").onclick = function () {
    pageToast.style.top = "100%";
    setTimeout(function () {
        pageToast.style.display = "none";
    }, 500);
};
