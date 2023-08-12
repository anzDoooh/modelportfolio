var button = document.getElementById('nonScrollButton');
button.addEventListener('click', function() {
    console.log('Button clicked!');
});

var navbar = document.querySelector('.navbar');

navbar.addEventListener('mouseenter', function() {
    navbar.style.scrollBehavior = 'smooth';
});

navbar.addEventListener('mouseleave', function() {
    navbar.style.scrollBehavior = 'auto';
});

navbar.addEventListener('wheel', function(event) {
    navbar.scrollLeft += event.deltaY;
});
