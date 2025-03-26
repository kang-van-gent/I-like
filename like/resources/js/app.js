import 'glider-js/glider.min.js';
import Swal from 'sweetalert2';
import 'intersection-observer'; // Adds support for older browsers

// Example of initializing SweetAlert2
Swal.fire({
    title: 'Hello!',
    text: 'Welcome to SweetAlert2',
    icon: 'success',
});

// Example of initializing Glider.js
document.addEventListener('DOMContentLoaded', function () {
    new Glider(document.querySelector('.glider'), {
        slidesToShow: 1,
        dots: '.dots',
        arrows: {
            prev: '.glider-prev',
            next: '.glider-next'
        }
    });
});