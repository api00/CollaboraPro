// Function to open the chat window and hide the chat list


function openChatWindow() {
    const chatList = document.getElementById('chat-list');
    const chatWindow = document.getElementById('chat-window');
    const chatInfo = document.getElementById('chat-info');
    const backbtn = document.querySelector('#chat-window button');


    chatList.classList.add('hidden');
    chatWindow.classList.remove('hidden');
    backbtn.classList.remove('hidden');

    if (window.matchMedia("(min-width: 768px)").matches) {
        chatWindow.classList.remove('md:w-1/2');
        chatWindow.classList.add('md:w-2/2');
    }
}

// Function to go back from chat window to chat list
function closeChatWindow() {

    const chatList = document.getElementById('chat-list');
    const chatWindow = document.getElementById('chat-window');
    const chatInfo = document.getElementById('chat-info');

    chatList.classList.remove('hidden');

    if (window.matchMedia("(min-width: 768px)").matches) {
        chatWindow.classList.remove('hidden');
        chatInfo.classList.remove('hidden');
        chatWindow.classList.remove('md:w-2/2');
        chatWindow.classList.add('md:w-1/2');
    }
}

// Function to handle resizing and initial setup
function handleWindowResize() {
    const chatList = document.getElementById('chat-list');
    const chatWindow = document.getElementById('chat-window');
    const chatInfo = document.getElementById('chat-info');

    if (window.matchMedia("(min-width: 768px)").matches) {
        // Ensure chat list, chat window, and chat info are visible on larger screens
        chatList.classList.remove('hidden');
        chatWindow.classList.remove('hidden');
        chatInfo.classList.remove('hidden');
    } else {
        // Hide chat window and chat info on smaller screens initially
        chatWindow.classList.add('hidden');
        chatInfo.classList.add('hidden');
    }
}

// Event listener for window resize
window.addEventListener('resize', handleWindowResize);

// Initial setup when the page loads
window.addEventListener('load', function () {
    handleWindowResize(); // Call the function to set initial state

    // Add click event listeners to chat list items
    const chatItems = document.querySelectorAll('.chat-item');
    chatItems.forEach(item => {
        item.addEventListener('click', openChatWindow);
    });

    // Add click event listener to the back button in the chat window
    const backButton = document.querySelector('#chat-window button');
    backButton.addEventListener('click', closeChatWindow);
});
document.addEventListener("DOMContentLoaded", function () {
    const defaultChatWindow = document.getElementById("default-chat-window");
    const chatWindow = document.getElementById("chat-window");

    window.openChatWindow = function () {
        defaultChatWindow.classList.add("hidden");
        chatWindow.classList.remove("hidden");
    };

    window.closeChatWindow = function () {
        chatWindow.classList.add("hidden");
        defaultChatWindow.classList.remove("hidden");
    };
});
