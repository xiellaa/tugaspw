<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<div class="content-wrapper">
  <section class="content-header text-center mt-4">
    <div class="container-fluid">
      <h2 class="fw-bold text-primary">Pengaturan Project Angella</h2>
      <p class="text-secondary">Atur preferensi tampilan dan akun kamu di sini 🌸</p>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <div class="card shadow-sm border-0 mb-4">
        <div class="card-header bg-white">
          <h5 class="card-title mb-0"><i class="fas fa-user-cog text-primary"></i> Profil Pengguna</h5>
        </div>
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" value="Angella Maretmy">
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" value="angella@example.com">
            </div>
            <div class="mb-3">
              <label class="form-label">Password Baru</label>
              <input type="password" class="form-control" placeholder="••••••••">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
          </form>
        </div>
      </div>

      <div class="card shadow-sm border-0 mb-4">
        <div class="card-header bg-white">
          <h5 class="card-title mb-0"><i class="fas fa-palette text-info"></i> Tampilan & Tema</h5>
        </div>
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label class="form-label">Pilih Tema</label>
              <select class="form-control">
                <option selected>Light (default)</option>
                <option>Dark</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Warna Utama</label>
              <input type="color" class="form-control form-control-color" value="#5e60ce">
            </div>
            <button type="submit" class="btn btn-primary">Terapkan Tema</button>
          </form>
        </div>
      </div>

      <div class="card shadow-sm border-0 mb-4">
        <div class="card-header bg-white">
          <h5 class="card-title mb-0"><i class="fas fa-bell text-warning"></i> Notifikasi</h5>
        </div>
        <div class="card-body">
          <div class="form-check mb-2">
            <input class="form-check-input" type="checkbox" checked>
            <label class="form-check-label">Aktifkan notifikasi tugas baru</label>
          </div>
          <div class="form-check mb-2">
            <input class="form-check-input" type="checkbox" checked>
            <label class="form-check-label">Tampilkan pengingat sebelum deadline</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">Kirim laporan mingguan ke email</label>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>

<?php include 'footer.php'; ?>
