import './bootstrap';
import flatpickr from 'flatpickr';
import 'flatpickr/dist/flatpickr.css';

document.getElementById("logout-link").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent default action of following the link
    document.getElementById("logout-form").submit(); // Submit the form
});

flatpickr(".datepicker", {
    dateFormat: "Y-m-d",
    minDate: "today",
    placeholder: "Select a date",
});


