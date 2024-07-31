 document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('salesModal');
    modal.style.display = 'block';

    const closeBtn = modal.querySelector('.close');

    closeBtn.onclick = function() {
        modal.style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});