
document.addEventListener('DOMContentLoaded', function () {

    var menuBtn = document.getElementById('menuBtn');
    var navMenu = document.getElementById('navMenu');

    if (menuBtn && navMenu) {
        menuBtn.addEventListener('click', function () {
            navMenu.classList.toggle('open');
        });
    }

    var topBtn = document.getElementById('topBtn');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 300) {
            topBtn.style.display = 'block';
        } else {
            topBtn.style.display = 'none';
        }
    });

    topBtn.addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    var form = document.getElementById('contactForm');

    if (form) {
        form.addEventListener('submit', function (event) {
            var name = document.getElementById('name');
            var email = document.getElementById('email');
            var message = document.getElementById('message');
            var isValid = true;

            [name, email, message].forEach(function (field) {
                if (field.value.trim() === '') {
                    field.classList.add('input-error');
                    isValid = false;
                } else {
                    field.classList.remove('input-error');
                }
            });

            if (email.value.trim() !== '' &&
                (email.value.indexOf('@') === -1 || email.value.indexOf('.') === -1)) {
                email.classList.add('input-error');
                isValid = false;
            }

            if (!isValid) {
                event.preventDefault();
                alert('Please fill in all fields with a valid email address.');
            }
        });
    }
});
