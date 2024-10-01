import './bootstrap';
import '~resources/scss/app.scss';
import '~icons/bootstrap-icons.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const btn_delete = document.getElementById('comic-removal')

btn_delete.addEventListener('click', (e) => {
    e.preventDefault();

    // lavoro sulla modale
    const modal = document.getElementById('deleteComicsModal')
    const new_modal = new bootstrap.Modal(modal)
    new_modal.show();

    const confirm = document.getElementById('confirm-del')
    confirm.addEventListener('click', function () {
        btn_delete.parentElement.submit();
    })
})