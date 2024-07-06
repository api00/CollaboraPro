/* Modal functionality - start */
document.addEventListener('DOMContentLoaded', function() {
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
});
/* Modal functionality - end */
