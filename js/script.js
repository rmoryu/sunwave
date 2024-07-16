// .header a
window.addEventListener('scroll', function() {
    const header = document.querySelector('.header');
    if (window.scrollY > window.innerHeight) {
        document.body.classList.add('scrolled');
    } else {
        document.body.classList.remove('scrolled');
    }
});




// .search-bar
document.addEventListener('DOMContentLoaded', function () {
    const searchIcon = document.querySelector('.search-icon');
    const searchBar = document.querySelector('.search-bar');

    searchIcon.addEventListener('click', function (event) {
        event.preventDefault();
        searchBar.classList.toggle('active');
    });

    document.addEventListener('click', function (event) {
        if (!searchBar.contains(event.target) && !searchIcon.contains(event.target)) {
            searchBar.classList.remove('active');
        }
    });
});
