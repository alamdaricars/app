currentLoc = location.href;
menuItems = document.querySelectorAll('.sidebar ul a');
menuItems.forEach(menuItem => {
    if(menuItem.href === currentLoc){
        menuItem.className = "active"
    }
});
