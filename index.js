

function showCustomersPage(event) {

    event.preventDefault();

    var iframe = document.getElementById('content_frame');

    // Set the src attribute of the iframe to the URL of the new page (replace with your URL)

    iframe.src = 'customer_form.html'; // Replace 'newpage.html' with your URL​



}



function showBillingPage(event) {

    event.preventDefault();

    var iframe = document.getElementById('content_frame');

    // Set the src attribute of the iframe to the URL of the new page (replace with your URL)

    iframe.src = 'billing.html'; // Replace 'newpage.html' with your URL​



}





function hideSideMenu() {

    var elements = document.getElementsByClassName('side_menu');

    var sideMenu = (elements.length > 0)?  elements[0] : null;

    if (sideMenu !== null) {

        sideMenu.style.display = 'none';

    }  

}



function showSideMenu() {

    var elements = document.getElementsByClassName('side_menu');

    var sideMenu = (elements.length > 0)?  elements[0] : null;

    if (sideMenu !== null) {

        sideMenu.style.display = 'inline';

    }  

}