function toggleMenu() {
    const menu = document.getElementById("dropdownMenu");
    menu.classList.toggle("open");

    // Almenük bezárása menü megnyitásakor
    if (menu.classList.contains("open")) {
        document.querySelectorAll('.sub-menu').forEach(submenu => {
            submenu.style.display = 'none';
        });
    }

    // Kattintás kezelése a menüpontokon
    document.querySelectorAll('.menu-item-has-children > a').forEach(link => {
        link.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                const submenu = this.nextElementSibling;
                submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
            }
        });
    });
}

// Menü bezárása kattintásra máshova
document.addEventListener('click', function(e) {
    if (!e.target.closest('.right')) {
        document.getElementById("dropdownMenu").classList.remove("open");
    }
});