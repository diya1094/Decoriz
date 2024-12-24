document.addEventListener("DOMContentLoaded", () => {
    const checkbox = document.getElementById('checkboxInput');

    // Retrieve and apply the checkbox state from localStorage
    const isChecked = localStorage.getItem('isChecked');
    if (isChecked === 'true') {
        checkbox.checked = true;
    }

    // Add an event listener to the checkbox to save the state and navigate
    checkbox.addEventListener('change', () => {
        localStorage.setItem('isChecked', checkbox.checked);

        // Navigate based on checkbox state
        if (checkbox.checked) {
            window.location.href = 'homeM.php';
        } else {
            window.location.href = 'homeR.php';
        }
    });
});

document.querySelector('.increment').addEventListener('click', function() {
    let qty = document.querySelector('.qty_numbers');
    qty.value = parseInt(qty.value) + 1;
});

document.querySelector('.decrement').addEventListener('click', function() {
    let qty = document.querySelector('.qty_numbers');
    if (parseInt(qty.value) > 1) {
      qty.value = parseInt(qty.value) - 1;
    }
});
