function toggleVerification(button) {
    var card = button.parentElement;
    var verification = card.querySelector('.verification');

    if (verification.style.display === 'block') {
        verification.style.display = 'none';
        button.style.backgroundColor = '#007bff';
    } else {
        verification.style.display = 'block';
        button.style.backgroundColor = 'purple';
    }
}
