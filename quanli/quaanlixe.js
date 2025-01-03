let cars = JSON.parse(localStorage.getItem('cars')) || [];

// Add Car
function addCar() {
    const model = document.getElementById('carModel').value;
    const color = document.getElementById('carColor').value;
    const price = document.getElementById('carPrice').value;

    if (!model || !color || !price) {
        alert('Please fill in all fields.');
        return;
    }

    cars.push({ id: cars.length + 1, model, color, price });
    localStorage.setItem('cars', JSON.stringify(cars));
    alert('Car added successfully!');

    document.getElementById('carModel').value = '';
    document.getElementById('carColor').value = '';
    document.getElementById('carPrice').value = '';
    renderCars();
}

// Render Cars
function renderCars() {
    const carTable = document.getElementById('carTable');
    carTable.innerHTML = '';

    cars.forEach(car => {
        carTable.innerHTML += `
            <tr>
                <td>${car.id}</td>
                <td>${car.model}</td>
                <td>${car.color}</td>
                <td>${car.price}</td>
                <td>
                    <button onclick="deleteCar(${car.id})">Delete</button>
                </td>
            </tr>
        `;
    });
}

// Delete Car
function deleteCar(id) {
    if (confirm('Are you sure you want to delete this car?')) {
        cars = cars.filter(car => car.id !== id);
        localStorage.setItem('cars', JSON.stringify(cars));
        renderCars();
    }
}

// Display Cars if carTable exists
if (document.getElementById('carTable')) {
    renderCars();
}
