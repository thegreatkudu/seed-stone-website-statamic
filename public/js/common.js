"use strict";

/* year */
const lastYear = document.querySelector("#lastYear");
const theDate = new Date();

window.onscrollend = () => { lastYear.textContent = theDate.getFullYear() }