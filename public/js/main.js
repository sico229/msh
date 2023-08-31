import { getCookieValue, setCookie } from "/js/module.js";
gsap.registerPlugin(ScrollTrigger);
AOS.init();
gsap.from("#section1", {
    opacity: 0,
    y: -500,
    duration: 1,
    pin: true, // pin the trigger element while active
    start: "top top", // when the top of the trigger hits the top of the viewport
    end: "+=500", // end after scrolling 500px beyond the start
    scrub: 1, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
    snap: {
        snapTo: "labels", // snap to the closest label in the timeline
        duration: {
            min: 0.2,
            max: 3,
        }, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
        delay: 0.2, // wait 0.2 seconds from the last scroll event before doing the snapping
        ease: "power1.inOut", // the ease of the snap animation ("power3" by default)
    },
});
gsap.from("#section2", {
    opacity: 0,
    y: 500,
});

$(".counter").counterUp({
    delay: 10,
    time: 1000,
});

/*********************************** Affichage du cookie  ************/
//Verifie si l'utilisateur a déjà accepté les cookie et les affiche au besoin

getCookieValue("AcceptCookie") == null
    ? gsap.from("#cookie", {
          opacity: 0,
          y: 500,
          duration: 1,
          delay: 2,
      })
    : $("#cookie").css("display", "none");

//********************************************************************** */

$(".cookieChoice").click((e) => {
    const va = e.target.value;

    gsap.to("#cookie", {
        opacity: 0,
        duration: 1,
    });
    $.post(
        "api/saveCookieChoice",
        {
            choix: va,
        },
        () => {
            va === "accepted"
                ? setCookie("AcceptCookie", va, 1)
                : setCookie("AcceptCookie", null, 1);
            setInterval(() => {
                $("#cookie").css("display", "none");
            }, 1000);
        }
    );
});

//Gestion de la langue

$(".LangageSelector").click((e) => {
    const val = $(e.currentTarget).attr("data-lang");
    $.post(
        "api/LangageChanger",
        {
            langue: val,
        },
        (e) => {
            if (e.status == 200) {
                window.location.reload();
            }
        }
    );
});
