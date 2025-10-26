<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Header -->
  <section class="content-header text-center mt-4">
    <div class="container-fluid">
      <h1 class="display-5 text-muted">Selamat Datang di</h1>
      <h2 class="fw-bold text-primary">Dashboard Project Angella</h2>
      <p class="lead text-secondary">Pantau aktivitas dan tugas kamu dengan tampilan yang ringan dan lembut 💫</p>
    </div>
  </section>

  <!-- Main Content -->
  <section class="content">
    <div class="container-fluid">

      <!-- Statistik Singkat -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="small-box bg-light shadow-sm">
            <div class="inner text-center">
              <h3>12</h3>
              <p>Tugas Selesai</p>
            </div>
            <div class="icon">
              <i class="fas fa-check-circle text-success"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-light shadow-sm">
            <div class="inner text-center">
              <h3>5</h3>
              <p>Tugas Aktif</p>
            </div>
            <div class="icon">
              <i class="fas fa-tasks text-primary"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-light shadow-sm">
            <div class="inner text-center">
              <h3>3</h3>
              <p>Menunggu Revisi</p>
            </div>
            <div class="icon">
              <i class="fas fa-pen text-warning"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-light shadow-sm">
            <div class="inner text-center">
              <h3>20</h3>
              <p>Total Tugas</p>
            </div>
            <div class="icon">
              <i class="fas fa-folder-open text-info"></i>
            </div>
          </div>
        </div>
      </div>

      <!-- Daftar Tugas -->
      <div class="card mt-4 border-0 shadow-sm">
        <div class="card-header bg-white">
          <h5 class="card-title mb-0 text-primary"><i class="fas fa-list"></i> Daftar Tugas</h5>
        </div>
        <div class="card-body">
          <table class="table table-hover align-middle">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Tugas</th>
                <th>Status</th>
                <th>Deadline</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Membuat Laporan Akhir</td>
                <td><span class="badge bg-success">Selesai</span></td>
                <td>20 Okt 2025</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Revisi Proposal PKM</td>
                <td><span class="badge bg-warning text-dark">Proses</span></td>
                <td>28 Okt 2025</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Presentasi Kelas</td>
                <td><span class="badge bg-secondary">Belum</span></td>
                <td>31 Okt 2025</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Motivasi -->
      <div class="alert alert-light border mt-4 text-center">
        <h6 class="mb-0"><i class="fas fa-quote-left text-muted"></i>
          Satu tugas kecil yang selesai lebih berarti daripada seribu rencana yang tertunda.
          <i class="fas fa-quote-right text-muted"></i>
        </h6>
      </div>

    </div>
  </section>
</div>

<?php include 'footer.php'; ?>
