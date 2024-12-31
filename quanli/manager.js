let users = JSON.parse(localStorage.getItem('users')) || [];
let cars = JSON.parse(localStorage.getItem('cars')) || [];
let currentUser = null;

// Register User
function registerUser() {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const role = document.getElementById('role').value;

    if (!name || !email || !password) {
        alert('Please fill in all fields.');
        return;
    }

    if (users.find(user => user.email === email)) {
        alert('Email already exists.');
        return;
    }

    users.push({ id: users.length + 1, name, email, password, role });
    localStorage.setItem('users', JSON.stringify(users));
    alert('Registration successful!');

    document.getElementById('registerName').value = '';
    document.getElementById('registerEmail').value = '';
    document.getElementById('registerPassword').value = '';
    toggleForms();
}

// Login User
function login() {
    const email = document.getElementById('loginEmail').value;
    const password = document.getElementById('loginPassword').value;

    const user = users.find(user => user.email === email && user.password === password);

    if (!user) {
        alert('Invalid email or password.');
        return;
    }

    currentUser = user;
    alert(`Welcome, ${user.name}!`);
    showUserManagement();
}

// Show User Management
function showUserManagement() {
    document.getElementById('loginForm').style.display = 'none';
    document.getElementById('registerForm').style.display = 'none';
    document.getElementById('userManagement').style.display = 'block';
    renderUsers();
    renderCars();
}

// Render Users
function renderUsers() {
    const userTable = document.getElementById('userTable');
    userTable.innerHTML = '';

    users.forEach(user => {
        userTable.innerHTML += `
            <tr>
                <td>${user.id}</td>
                <td>${user.name}</td>
                <td>${user.email}</td>
                <td>${user.role}</td>
                <td>
                    <button onclick="deleteUser(${user.id})">Delete</button>
                </td>
            </tr>
        `;
    });
}

// Delete User
function deleteUser(index) {
    if (confirm('Are you sure you want to delete this user?')) {
        users = users.filter(user => user.id !== index);
        localStorage.setItem('users', JSON.stringify(users));
        renderUsers();
    }
}

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
function deleteCar(index) {
    if (confirm('Are you sure you want to delete this car?')) {
        cars = cars.filter(car => car.id !== index);
        localStorage.setItem('cars', JSON.stringify(cars));
        renderCars();
    }
}

// Display Users and Cars if userTable or carTable exists
if (document.getElementById('userTable')) {
    renderUsers();
}
if (document.getElementById('carTable')) {
    renderCars();
}
