/* Task modal functionality - start */
document.addEventListener('DOMContentLoaded', function() {
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
        if (event.target === modalBg1) {
            modalBg1.classList.add('hidden');
        }
    });
});
/* Task modal functionality - end */
