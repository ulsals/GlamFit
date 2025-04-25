//Toggle class active

// hamburger menu
const menu = document.querySelector ('.menu');
// ketika di klik
document.querySelector('#hamburger-menu').onclick = () => {
    menu.classList.toggle ('active');
};

//klik di luar sidebar untuk menghilangkan hambuger menu
const hamburger = document.querySelector('#hamburger-menu');
document.addEventListener('click', function(e){
    if (!hamburger.contains(e.target) && !menu.contains(e.target))
        menu.classList.remove('active');
    });

  