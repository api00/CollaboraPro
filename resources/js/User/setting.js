/* Settings section navigation - start */
document.addEventListener("DOMContentLoaded", function() {
    const settingsMenuLinks = document.querySelectorAll(".settings-menu-link");
    const settingsDetailsSections = document.querySelectorAll(".settings-details");

    // Show Account Settings by default and highlight the menu link
    document.getElementById("account-settings-section").classList.remove("hidden");
    document.querySelector('[data-target="account-settings-section"]').classList.add('border-white');

    settingsMenuLinks.forEach(link => {
        link.addEventListener("click", function(event) {
            event.preventDefault();
            const targetId = this.getAttribute("data-target");

            // Remove active class from all links
            settingsMenuLinks.forEach(link => {
                link.classList.remove('border-white');
            });

            // Add active class to the clicked link
            this.classList.add('border-white');

            // Hide all settings details
            settingsDetailsSections.forEach(section => {
                section.classList.add("hidden");
            });

            // Show the targeted settings detail
            document.getElementById(targetId).classList.remove("hidden");
        });
    });
});
