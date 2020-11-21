
AOS.init();

/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function () {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function () {
    $("#back2Top").click(function (event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});


let title1 = document.getElementById('ml1');
if (title1) {
    title1.innerHTML = title1.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
}

let title2 = document.querySelector('#ml2');
if (title2) {
    title2.innerHTML = title2.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
}

let title3 = document.getElementById('ml3');
if (title3) {
    title3.innerHTML = title3.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
}

let title4 = document.getElementById('ml4');
if (title4) {
    title4.innerHTML = title4.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
}




anime.timeline({
    loop: true
})
    .add({
        targets: '#ml1 .letter, #ml2 .letter, #ml3 .letter, #ml4 .letter',
        scale: [4, 41],
        opacity: [0, 1],
        translateZ: 0,
        easing: "easeOutExpo",
        duration: 950,
        delay: (el, i) => 70 * i
    })
    .add({
        targets: '#ml1, #ml2, #ml3, #ml4',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
    });


    var textWrapper = document.querySelector('.ml7 .letters');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    
    anime.timeline({loop: true})
      .add({
        targets: '.ml7 .letter',
        translateY: ["1.1em", 0],
        translateX: ["0.55em", 0],
        translateZ: 0,
        rotateZ: [180, 0],
        duration: 750,
        easing: "easeOutExpo",
        delay: (el, i) => 50 * i
      }).add({
        targets: '.ml7',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
      });


     