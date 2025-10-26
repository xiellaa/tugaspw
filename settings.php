<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<div class="content-wrapper">
  <section class="content-header text-center mt-4">
    <div class="container-fluid">
      <h2 class="fw-bold text-primary">Pengaturan Project Angella</h2>
      <p class="text-secondary">Atur tampilan dan preferensi kamu di sini 🌸</p>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <div class="card shadow-sm border-0">
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label class="form-label">Nama Pengguna</label>
              <input type="text" class="form-control" placeholder="Angella Maretmy">
            </div>
            <div class="mb-3">
              <label class="form-label">Tema</label>
              <select class="form-control">
                <option>Light (default)</option>
                <option>Dark</option>
              </select>
            </div>
            <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
          </form>
        </div>
      </div>

    </div>
  </section>
</div>

<?php include 'footer.php'; ?>
