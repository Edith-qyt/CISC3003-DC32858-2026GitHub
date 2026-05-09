document.addEventListener('DOMContentLoaded', function() {
    const hilightableFields = document.querySelectorAll('.hilightable');

    hilightableFields.forEach(function(field) {
        field.addEventListener('focus', function() {
            field.classList.add('highlight');
        });
        field.addEventListener('blur', function() {
            field.classList.remove('highlight');
        });
    });

    const artForm = document.querySelector('form');
    const requiredFields = document.querySelectorAll('.required');

    artForm.addEventListener('submit', function(e) {
        let isFormInvalid = false;

        requiredFields.forEach(function(field) {
            const fieldValue = field.value.trim();
            if (fieldValue === '') {
                field.classList.add('error'); 
                isFormInvalid = true;
            } else {
                field.classList.remove('error'); 
            }
        });

        if (isFormInvalid) {
            e.preventDefault();
        }
    });

    requiredFields.forEach(function(field) {
        field.addEventListener('input', function() {
            if (field.value.trim() !== '') {
                field.classList.remove('error');
            }
        });
    });
});