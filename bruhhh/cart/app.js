document.getElementById('checkout').addEventListener('click', function() {
    const cartItems = {
        phone: getInputvalue('phone'),
        case: getInputvalue('case'),
        total: document.getElementById('total-price').innerText
    };

    fetch('update_cart.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(cartItems)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Cart updated successfully!');
        } else {
            alert('Error updating cart.');
        }
    })
    .catch(error => console.error('Error:', error));
});
