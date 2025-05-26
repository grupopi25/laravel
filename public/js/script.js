// ================= Menu Lateral ===================
const sideMenu = document.querySelector('aside');
const menuBtn = document.getElementById('menu-btn');
const closeBtn = document.getElementById('close-btn');
const darkMode = document.querySelector('.dark-mode');

// Abrir menu no mobile
if (menuBtn) {
    menuBtn.addEventListener('click', () => {
        sideMenu.style.display = 'block';
    });
}

// Fechar menu no mobile
if (closeBtn) {
    closeBtn.addEventListener('click', () => {
        sideMenu.style.display = 'none';
    });
}

// Dark Mode
if (darkMode) {
    darkMode.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode-variables');
        darkMode.querySelector('span:nth-child(1)').classList.toggle('active');
        darkMode.querySelector('span:nth-child(2)').classList.toggle('active');
    });
}

// ================= Preenchimento da Tabela ===================
const Orders = [
    {
        productName: 'JavaScript Tutorial',
        productNumber: '85743',
        paymentStatus: 'Due',
        status: 'Pending'
    },
    {
        productName: 'CSS Full Course',
        productNumber: '97245',
        paymentStatus: 'Refunded',
        status: 'Declined'
    },
    {
        productName: 'Flex-Box Tutorial',
        productNumber: '36452',
        paymentStatus: 'Paid',
        status: 'Active'
    },
];

const tableBody = document.querySelector('table tbody');
if (tableBody) {
    Orders.forEach(order => {
        const tr = document.createElement('tr');
        const trContent = `
            <td>${order.productName}</td>
            <td>${order.productNumber}</td>
            <td>${order.paymentStatus}</td>
            <td class="${order.status === 'Declined' ? 'danger' : order.status === 'Pending' ? 'warning' : 'success'}">${order.status}</td>
            <td class="primary">Detalhes</td>
        `;
        tr.innerHTML = trContent;
        tableBody.appendChild(tr);
    });
}

// ================= Sistema de Lembretes ===================
const openFormBtn = document.getElementById('openForm');
const reminderForm = document.getElementById('reminderForm');
const cancelFormBtn = document.getElementById('cancelForm');
const form = document.getElementById('form');
const reminderList = document.querySelector('.reminder-list');

if (openFormBtn && reminderForm && cancelFormBtn && form && reminderList) {
    // Abrir formulário
    openFormBtn.addEventListener('click', () => {
        reminderForm.style.display = 'block';
        openFormBtn.style.display = 'none';
    });

    // Cancelar formulário
    cancelFormBtn.addEventListener('click', () => {
        reminderForm.style.display = 'none';
        openFormBtn.style.display = 'flex';
        form.reset();
    });

    // Adicionar lembrete
    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const title = document.getElementById('title').value;
        const date = document.getElementById('date').value;
        const time = document.getElementById('time').value;

        if (!title || !date || !time) {
            alert('Preencha todos os campos!');
            return;
        }

        const formattedDate = `${date.split('-').reverse().join('/')} - ${time}`;

        const notification = document.createElement('div');
        notification.classList.add('notification');

        notification.innerHTML = `
            <div class="icon">
                <span class="material-icons-sharp">event</span>
            </div>
            <div class="content">
                <div class="info">
                    <h3>${title}</h3>
                    <small class="text-muted">${formattedDate}</small>
                </div>
                <span class="material-icons-sharp delete-btn">delete</span>
            </div>
        `;

        // Clique para minimizar ou maximizar o lembrete
        notification.addEventListener('click', (e) => {
            if (e.target.classList.contains('delete-btn')) return;
            notification.classList.toggle('deactive');
        });

        // Clique no botão deletar
        notification.querySelector('.delete-btn').addEventListener('click', (e) => {
            e.stopPropagation();
            notification.remove();
        });

        reminderList.insertBefore(notification, openFormBtn);

        form.reset();
        reminderForm.style.display = 'none';
        openFormBtn.style.display = 'flex';
    });

    // Tornar os lembretes existentes funcionais
    document.querySelectorAll('.notification').forEach(notification => {
        const deleteBtn = notification.querySelector('.delete-btn');
        if (!deleteBtn) return;

        notification.addEventListener('click', (e) => {
            if (e.target === deleteBtn) return;
            notification.classList.toggle('deactive');
        });

        deleteBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            notification.remove();
        });
    });
}

// ================= Sidebar Active ===================
const menuItems = document.querySelectorAll('aside .sidebar a');

if (menuItems.length) {
    menuItems.forEach(item => {
        item.addEventListener('click', () => {
            menuItems.forEach(i => i.classList.remove('active'));
            item.classList.add('active');
        });
    });
}
