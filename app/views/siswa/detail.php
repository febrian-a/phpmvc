<div class="container mt-5">
    
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?= $data['sw']['nama']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['sw']['nis']; ?></h6>
        <p class="card-text"><?= $data['sw']['email']; ?></p>
        <p class="card-text"><?= $data['sw']['jurusan']; ?></p>
        <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
      </div>
    </div>

</div>