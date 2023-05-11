import './bootstrap';
import '~resources/scss/app.scss'

// Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap'

// gestione immagini build
import.meta.glob([
    '../img/**'
])

const deleteBtn = document.getElementById('delete-btn');
const cancelBtn = document.getElementById('cancel-btn');
const deleteBox = document.getElementById('delete-box');

function toggleClass(element, classToToggle) {
    element.classList.toggle(classToToggle)
};

cancelBtn.addEventListener('click', () => {
    toggleClass(deleteBox, 'show');
});

deleteBtn.addEventListener('click', () => {
    toggleClass(deleteBox, 'show');
});