(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();

    $("#home--slider").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true, // Autoplay pauses on hover
        animateOut: 'fadeOut',
        smartSpeed: 1000,
    });

    //   partners

    var swiper = new Swiper(".clients-slider", {
        spaceBetween: 10,
        grabCursor: true,
        loop: true,
        centeredSlides: true,
        autoplayTimeout: 2500,
        smartSpeed: 2000,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            },
        },
    });

})(jQuery);

//header

const hamburger = document.querySelector('.hamburger')
const navigation = document.querySelector('.mobile--container')
const closeNav = document.querySelector('.close--nav')
const body = document.querySelector('.body')
const navContainer = document.querySelector('.header--contaier')

hamburger.addEventListener('click', () => {
    navigation.classList.add('open')
    body.classList.add('body-overlay')
    navContainer.classList.add('added')
})

closeNav.addEventListener('click', () => {
    navigation.classList.remove('open')
    body.classList.remove('body-overlay')
    navContainer.classList.remove('added')
})

const header = document.querySelector('#header')

window.onscroll = () => {

    navigation.classList.remove('open')
    navContainer.classList.remove('added')
    body.classList.remove('body-overlay')

    if (window.scrollY > 0) {
        header.classList.add('SHOW_BACK')
    } else {
        header.classList.remove('SHOW_BACK')
    }

    const targetedPos = window.scrollY;

    const targetedValue = Math.floor(targetedPos)

    const subnav = document.querySelector('.sub-nav');

    if (targetedValue >= 177) {

        subnav.style.top = 55 + "px";

        console.log("How")

    }

    const one = window.scrollY;

    console.log(one)
}

document.addEventListener('click', (e) => {
    var currentEl = e.currentTarget;
    if (!hamburger.contains(e.target) && e.target !== navigation) {
        navigation.classList.remove('open')
        navContainer.classList.remove('added')
        body.classList.remove('body-overlay')
    }
})

//year
const lastYear = document.querySelector("#lastYear");
const theDate = new Date();

window.onload = () => { lastYear.textContent = theDate.getFullYear() }

//major tabs for package web
const tabs = document.querySelectorAll(".about--nav-items li");
const divs = document.querySelectorAll(".contents > div");
const mob_tabs = document.querySelector(".mobile--tabs");
const arrowIcon = document.querySelector(".current-item-wrap i");

tabs.forEach((tab) => {
    tab.addEventListener("click", function (e) {
        e.preventDefault();
        tabs.forEach((tab) => {
            tab.classList.remove("active--tab");
        });

        replaceText();

        if (e.currentTarget == tab) {
            mob_tabs.style.display = "none";
            arrowIcon.classList.remove("active-arrow");
        }
        e.currentTarget.classList.add("active--tab");
        divs.forEach((div) => {
            div.style.display = "none";
            div.classList.remove("in");
            document.querySelector(
                "." + e.currentTarget.dataset.content
            ).style.display = "block";
            document
                .querySelector("." + e.currentTarget.dataset.content)
                .classList.add("in");
        });
    });
});

//replace a text
const retrievedText = document.querySelector(".mobile-nav-wrap span");
const tabs_two = document.querySelectorAll(".trgz-two ul li");

function replaceText() {
    for (var i = 0; i < tabs_two.length; i++) {
        const tab_text = tabs_two[0];
    }
}

//reveal tabs
const revealBtn = document.querySelector(".current-item-wrap");
const revealedTabs = document.querySelector(".mobile--tabs");

revealBtn.addEventListener("click", () => {
    if (!revealedTabs.classList.contains("active-tabs-mobile") ||
        revealedTabs.style.display == "none"
    ) {
        revealedTabs.classList.add("active-tabs-mobile");
        arrowIcon.classList.toggle("active-arrow");
        revealedTabs.style.display = "block";
    } else {
        revealedTabs.classList.remove("active-tabs-mobile");
        revealedTabs.style.display = "none";
        if (arrowIcon.classList.contains("active-arrow")) {
            arrowIcon.classList.remove("active-arrow");
        }
    }
});

//minor tabs for package web
const minorTabs = document.querySelectorAll(".sub--tab-links li");
const minoirDivs = document.querySelectorAll(".package-contents > .sub-tab");

minorTabs.forEach((tab) => {
    tab.addEventListener("click", function (e) {
        minorTabs.forEach((tab) => {
            tab.classList.remove("active--sub-tab");
        });

        e.currentTarget.classList.add("active--sub-tab");
        minoirDivs.forEach((div) => {
            div.style.display = "none";
            document.querySelector(
                "." + e.currentTarget.dataset.content
            ).style.display = "block";
        });
    });
});

//itinerary
const itineraryItem = document.querySelectorAll(".question-item");
const itinerary_content = document.querySelectorAll(".question-content");

itineraryItem.forEach((item) => {
    const itinerarytitle = item.querySelector(".question-header");

    itinerarytitle.addEventListener("click", () => {
        const openItem = document.querySelector(".open-it");

        if (openItem && openItem !== item) {
            itineraryToggle(openItem);
        }
        itineraryToggle(item);
    });
});

const itineraryToggle = (item) => {
    const itineraryContent = item.querySelector(".question-content");

    if (item.classList.contains("open-it")) {
        itineraryContent.removeAttribute("style");
        item.classList.remove("open-it");
    } else {
        itineraryContent.style.maxHeight = itineraryContent.scrollHeight + "px";
        itineraryContent.style.opacity = 1;

        item.classList.add("open-it");
    }
};

"use strict"

//faqs Accordions
const accordionBody = document.querySelectorAll(".accordion--container-body");
accordionBody.forEach((body) => {
    const accordionTitle = body.querySelector(".accordion--container-title");

    accordionTitle.addEventListener("click", () => {
        const openBody = document.querySelector(".open--it");

        if (openBody && openBody !== body) {
            accordionToggle(openBody);
        }
        accordionToggle(body);
    });
});

const accordionToggle = (body) => {
    const accordionContent = body.querySelector(".accordion--container-content");

    if (body.classList.contains("open--it")) {
        accordionContent.removeAttribute("style");
        body.classList.remove("open--it");
    } else {
        accordionContent.style.maxHeight = accordionContent.scrollHeight + "px";
        accordionContent.style.opacity = 1;
        body.classList.add("open--it");
    }
};
