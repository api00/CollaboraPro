/* Tab navigation - start */
document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.tab-link');
    const contents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', (e) => {
            e.preventDefault();
            const target = e.target.getAttribute('data-tab');

            // Remove active class from all tabs
            tabs.forEach(tab => {
                tab.classList.remove('active');
            });

            // Hide all tab contents
            contents.forEach(content => {
                content.classList.add('hidden');
            });

            // Show the target content and add active class to clicked tab
            document.getElementById(target).classList.remove('hidden');
            document.getElementById(target).classList.add('fade-in');
            e.target.classList.add('active');
        });
    });

    // Automatically click the first tab on page load to show initial content
    if (tabs.length > 0) {
        tabs[0].click();
    }
});
/* Tab navigation - end */

/* Menu link active state - start */
document.addEventListener('DOMContentLoaded', () => {
    const menuLinks = document.querySelectorAll('.menu-link');

    menuLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();

            // Remove active class from all links
            menuLinks.forEach(link => {
                link.classList.remove('border-white');
                link.classList.add('border-transparent');
            });

            // Add active class to the clicked link
            e.target.classList.add('border-white');
            e.target.classList.remove('border-transparent');

            // Show the corresponding section and hide others
            const target = e.target.getAttribute('data-target');
            document.querySelectorAll('.profile-section').forEach(section => {
                section.classList.add('hidden');
            });
            document.getElementById(target).classList.remove('hidden');
        });
    });

    // Automatically click the first link on page load to show initial content
    if (menuLinks.length > 0) {
        menuLinks[0].click();
    }
});
/* Menu link active state - end */

/* Mobile menu functionality - start */
document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    // Toggle menu open/close when clicking the menu button
    mobileMenuBtn.addEventListener('click', function (event) {
        mobileMenu.classList.toggle('open');
        event.stopPropagation(); // Prevents the click event from bubbling up
    });

    // Close the menu when clicking outside of it
    document.addEventListener('click', function (event) {
        const isClickInsideMenu = mobileMenu.contains(event.target);
        const isClickOnMenuBtn = (event.target === mobileMenuBtn);

        if (!isClickInsideMenu && !isClickOnMenuBtn) {
            mobileMenu.classList.remove('open');
        }
    });
});
/* Mobile menu functionality - end */
