import './bootstrap';
import '~resources/scss/app.scss';
import '~icons/bootstrap-icons.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


const deleteButtons = document.querySelectorAll('.delete-projects');

deleteButtons.forEach((button) => {

    button.addEventListener('click', function (event) {

        //event.preventDefault();

        const modal = document.getElementById('deleteProjectModal');

        const bootstrapModal = new bootstrap.Modal(modal);

        bootstrapModal.show();

        document.querySelector('.confirm-delete').addEventListener('click', function () {

            button.parentElement.submit();

        })
    })

});