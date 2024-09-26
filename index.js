function hideSideMenu(){
    var elements = document.getElementsByClassName('sidebar');
    var sideMenu = (elements.length >0)? elements[0]:null;
    if(sideMenu !== null){
        sideMenu.style.display='none';
    }
}


function showSideMenu(){
    var elements = document.getElementsByClassName('sidebar');
    var sideMenu = (elements.length >0)? elements[0]:null;
    if(sideMenu !== null){
        sideMenu.style.display='block';
    }
}