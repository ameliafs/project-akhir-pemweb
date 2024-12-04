// Mengelola modal untuk menambah karyawan
const employeeModal = document.getElementById("employee-modal");

function openEmployeeModal() {
  employeeModal.style.display = "block";
}

function closeEmployeeModal() {
  employeeModal.style.display = "none";
}

function addEmployee(event) {
  event.preventDefault();

  const name = document.getElementById("name").value;
  const number = document.getElementById("number").value;
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;

  const employeeList = document.getElementById("employee-list");
  const row = document.createElement("tr");

  row.innerHTML = `
    <td>${name}</td>
    <td>${number}</td>
    <td>${email}</td>
    <td>${password}</td>
  `;

  employeeList.appendChild(row);

  // Reset form dan tutup modal
  document.getElementById("name").value = "";
  document.getElementById("number").value = "";
  document.getElementById("email").value = "";
  document.getElementById("password").value = "";
  closeEmployeeModal();
}

// Mengelola modal untuk data paket
let paketData = [];

function openPaketModal() {
  document.getElementById('paket-modal').style.display = 'block';
  document.getElementById('modal-title').textContent = 'Tambah Paket Baru';
  document.getElementById('resi').value = '';
  document.getElementById('penerima').value = '';
  document.getElementById('status').value = 'Masuk Gudang';
  document.getElementById('edit-index').value = '';
}

function closePaketModal() {
  document.getElementById('paket-modal').style.display = 'none';
}

function savePaket(event) {
  event.preventDefault();

  const resi = document.getElementById('resi').value;
  const penerima = document.getElementById('penerima').value;
  const status = document.getElementById('status').value;
  const index = document.getElementById('edit-index').value;

  if (index) {
    paketData[index] = { resi, penerima, status };
  } else {
    paketData.push({ resi, penerima, status });
  }

  renderPaketList();
  closePaketModal();
}

function renderPaketList() {
  const paketList = document.getElementById('paket-list');
  paketList.innerHTML = '';

  paketData.forEach((paket, index) => {
    const row = document.createElement('tr');
    row.innerHTML = `
      <td>${paket.resi}</td>
      <td>${paket.penerima}</td>
      <td>${paket.status}</td>
      <td>
        <button onclick="editPaket(${index})">Edit</button>
        <button onclick="deletePaket(${index})">Hapus</button>
      </td>
    `;
    paketList.appendChild(row);
  });
}

function editPaket(index) {
  openPaketModal();
  document.getElementById('modal-title').textContent = 'Edit Paket';
  document.getElementById('resi').value = paketData[index].resi;
  document.getElementById('penerima').value = paketData[index].penerima;
  document.getElementById('status').value = paketData[index].status;
  document.getElementById('edit-index').value = index;
}

function deletePaket(index) {
  paketData.splice(index, 1);
  renderPaketList();
}

// Fungsi pencarian karyawan
const searchInput = document.getElementById('search-input');
const employeeCards = document.querySelectorAll('.employee-card');

searchInput.addEventListener('input', () => {
  const searchValue = searchInput.value.toLowerCase();

  employeeCards.forEach(card => {
    const name = card.querySelector('h3').textContent.toLowerCase();

    if (name.includes(searchValue)) {
      card.style.display = ''; // Tampilkan kartu jika cocok
    } else {
      card.style.display = 'none'; // Sembunyikan kartu jika tidak cocok
    }
  });
});



function showLogin() {
    document.getElementById('form-daftar').classList.add('hidden');
    document.getElementById('form-login').classList.remove('hidden');
    document.getElementById('btn-daftar').classList.remove('active');
    document.getElementById('btn-login').classList.add('active');
}

function showDaftar() {
    document.getElementById('form-daftar').classList.remove('hidden');
    document.getElementById('form-login').classList.add('hidden');
    document.getElementById('btn-login').classList.remove('active');
    document.getElementById('btn-daftar').classList.add('active');
}

