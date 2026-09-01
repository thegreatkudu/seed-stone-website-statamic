'use strict'

document.addEventListener('DOMContentLoaded', function() {
    const pdfjsLib = window['pdfjs-dist/build/pdf'];

    // Path to your PDF file
    const pdfPathSales = './assets/pdf/JOB ADVERT - SALES AND MARKETING OFFICER.pdf';
    const pdfPathAccount = './assets/pdf/JOB ADVERTISEMENT ACCOUNTANT.pdf';

    // Function to open PDF in a new tab
    function openPdfInNewTab(pdfUrl) {
        window.open(pdfUrl, '_blank');
    }

    // Event listener for trigger element (e.g., button click)
    const openPdfButtonSales = document.getElementById('sales');
    openPdfButtonSales.addEventListener('click', function() {
        openPdfInNewTab(pdfPathSales);
    });

    // Event listener for trigger element (e.g., button click)
    const openPdfButtonAccount = document.getElementById('accountant');
    openPdfButtonAccount.addEventListener('click', function() {
        openPdfInNewTab(pdfPathAccount);
    });

});
