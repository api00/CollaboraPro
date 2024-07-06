/* Profile section navigation - start */
document.addEventListener('DOMContentLoaded', function () {
    const menuLinks = document.querySelectorAll('.menu-link');
    const profileSections = document.querySelectorAll('.profile-section');

    menuLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const target = this.getAttribute('href').replace('#', '');

            profileSections.forEach(section => {
                if (section.id === target) {
                    section.classList.remove('hidden');
                } else {
                    section.classList.add('hidden');
                }
            });
        });
    });

    // Show the profile info section by default
    document.getElementById('profile-info').classList.remove('hidden');
});
/* Profile section navigation - end */
