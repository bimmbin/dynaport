const btnHome = document.querySelector('.logo');


btnHome.addEventListener("click", () => {
    window.scrollTo({top: 0, behavior: 'smooth',})
    menu.classList.remove('drop');
});


window.addEventListener('scroll', function () {


    var scroll = window.pageYOffset;
    console.log(scroll);
    if (scroll > 0){ 
        $( ".sfm" ).fadeOut();
    } else if (scroll == 0) {
        $( ".sfm" ).fadeIn();
    }

});    


// jquery

$(".btn-nav").click(function(){
    $(".hid-nav").slideToggle();
    $(".bg-black").toggle();
});

$(".hid-nav li:nth-child(1), .hid-nav li:nth-child(2), .hid-nav li:nth-child(3)").click(function(){
    $(".hid-nav").slideToggle();
    $(".bg-black").toggle();
});