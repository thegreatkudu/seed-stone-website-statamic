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

// Itinerary

const itineraryItem = document.querySelectorAll('.accordion-item');

itineraryItem.forEach((item) => {
    const itinerarytitle = item.querySelector('.accordion-title');

    itinerarytitle.addEventListener('click', () => {
        const openItem = document.querySelector('.open-it');

        if (openItem && openItem !== item) {
            itineraryToggle(openItem);
        }
        itineraryToggle(item);
    });
});

const itineraryToggle = (item) => {
    const itineraryContent = item.querySelector('.accordion-body');

    if (item.classList.contains('open-it')) {
        itineraryContent.removeAttribute('style');
        item.classList.remove('open-it');
    } else {
        itineraryContent.style.maxHeight = itineraryContent.scrollHeight + 'px';
        itineraryContent.style.opacity = 1;

        item.classList.add('open-it');
    }
};