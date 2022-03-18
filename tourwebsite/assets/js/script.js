//Navbar

var nav = document.querySelector('nav');

window.addEventListener('scroll', function () {
    if (window.pageYOffset > 100) {
        nav.classList.add('bg-dark', 'shadow')
    } else {
        nav.classList.remove('bg-dark', 'shadow')
    }
})


//Active Nav Menu
let aloc = document.getElementsByClassName('nav-link');
Array.from(aloc).forEach(function (element) {
    element.addEventListener('click', function () {
        Array.from(aloc).forEach(btn => btn.classList.remove('activ'))
        this.classList.add('activ')
    })
});

///Scroll add menu nav
function onScroll(event) {
    var sections = document.querySelectorAll('#menu-center a ');
    var scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

    for (var i = 0; i < sections.length; i++) {
        var currLink = sections[i];
        var val = currLink.getAttribute('href');
        var refElement = document.querySelector(val);
        if (refElement.offsetTop <= scrollPos && (refElement.offsetTop + refElement.offsetHeight > scrollPos)) {
            document.querySelector('#menu-center ul li a').classList.remove('activ');
            currLink.classList.add('activ');
        } else {
            currLink.classList.remove('activ');
        }
    }
};
