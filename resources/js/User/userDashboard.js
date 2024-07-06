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

// Get modal and button elements
const modalBg = document.getElementById('modal-bg');
const modalCloseBtn = document.getElementById('modal-close-btn');
const addProjectBtn = document.getElementById('add-project-btn');

// Function to open modal
addProjectBtn.addEventListener('click', function() {
    modalBg.classList.remove('hidden');
});

// Function to close modal
modalCloseBtn.addEventListener('click', function() {
    modalBg.classList.add('hidden');
});

// Prevent modal from closing on click inside
modalBg.addEventListener('click', function(event) {
    if (event.target === modalBg) {
        modalBg.classList.add('hidden');
    }
});

// Prevent form submission (for demonstration)
const addProjectForm = document.getElementById('add-project-form');
addProjectForm.addEventListener('submit', function(event) {
    event.preventDefault();
    // Here you can handle form submission with AJAX or other methods
    // For demonstration, prevent default behavior
    console.log('Form submitted!');
    // Close modal after submission
    modalBg.classList.add('hidden');
});


// task model

// Get modal and button elements
const modalBg1 = document.getElementById('modal-bg-task');
const modalCloseBtn1 = document.getElementById('modal-close-btn-task');
const addProjectBtn1 = document.getElementById('add-project-btn-task');

// Function to open modal
addProjectBtn1.addEventListener('click', function() {
    modalBg1.classList.remove('hidden');
});

// Function to close modal
modalCloseBtn1.addEventListener('click', function() {
    modalBg1.classList.add('hidden');
});

// Prevent modal from closing on click inside
modalBg1.addEventListener('click', function(event) {
    if (event.target === modalBg) {
        modalBg1.classList.add('hidden');
    }
});

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


document.addEventListener("DOMContentLoaded", function() {
    const settingsMenuLinks = document.querySelectorAll(".settings-menu-link");
    const settingsDetailsSections = document.querySelectorAll(".settings-details");

    // Show Account Settings by default
    document.getElementById("account-settings-section").classList.remove("hidden");

    settingsMenuLinks.forEach(link => {
        link.addEventListener("click", function(event) {
            event.preventDefault();
            const targetId = this.getAttribute("data-target");

            // Hide all settings details
            settingsDetailsSections.forEach(section => {
                section.classList.add("hidden");
            });

            // Show the targeted settings detail
            document.getElementById(targetId).classList.remove("hidden");
        });
    });
});

