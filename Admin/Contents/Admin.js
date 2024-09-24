function activateMenuItem(event) {
    // Prevent the default anchor click behavior
    event.preventDefault();

    // Get all menu items
    var menuItems = document.querySelectorAll('.menu li');

    // Remove the 'active' class from all menu items
    menuItems.forEach(function(item) {
      item.classList.remove('active');
    });

    // Add the 'active' class to the clicked menu item
    event.currentTarget.parentNode.classList.add('active');
  }