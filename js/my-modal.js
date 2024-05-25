const getElement = (...args) => document.querySelector(...args);

const button = getElement('.open-modal-button');
const closeButton = getElement('.close-modal-button');
const container = getElement('.modal-container');
const modal = getElement('.my-modal');

function openModal(){container.classList.add('show');}
function closeModal(){container.classList.remove('show');}

closeButton.addEventListener('click', closeModal);

container.addEventListener('click', (event) => {
    if(event.target === container){
        closeModal();
    }
});