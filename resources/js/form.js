document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form__lead');
    console.log('test2');
    form.addEventListener('submit', function (event) {
        event.preventDefault();
        const actionURL = form.getAttribute('action');
        const formData = new FormData(form);
        
        fetch(actionURL, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Email sent successfully!');
            } else {
                alert('Failed to send email.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred.');
        });
    });
});