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

function dismiss() {
    deleteBox.classList.remove('show')
};

function show() {
    deleteBox.classList.add('show')
};

deleteBtn.addEventListener('click', () => {
    show();
});

cancelBtn.addEventListener('click', () => {
    dismiss();
});