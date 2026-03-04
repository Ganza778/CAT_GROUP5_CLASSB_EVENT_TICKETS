// TURATSINZE DOMINIQUE| REGNO:25/30642 | ROLE:JAVASCRIPT INTERACTION ENGINEER

const qtyInput   = document.getElementById('quantity');
const priceInput = document.getElementById('price');
const totalDiv   = document.getElementById('totalDisplay');

function updateTotal() {
    const qty   = parseFloat(qtyInput.value)   || 0;
    const price = parseFloat(priceInput.value) || 0;
    const total = qty * price;
    totalDiv.textContent = 'Total: ' + total.toLocaleString() + ' RWF';
}

qtyInput.addEventListener('input', updateTotal);
priceInput.addEventListener('input', updateTotal);
