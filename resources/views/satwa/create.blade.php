<form method="POST" action="{{ route('satwa.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="nama_satwa">Nama Satwa</label>
        <input type="text" class="form-control" id="nama_satwa" name="nama_satwa" required>
    </div>

    <div class="form-group">
        <label for="kategori">Kategori</label>
        <input type="text" class="form-control" id="kategori" name="kategori" required>
    </div>

    <div class="form-group">
        <label for="tgl_masuk">Tanggal Masuk</label>
        <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" required>
    </div>

    <div class="form-group">
        <label for="foto">Foto</label>
        <input type="file" class="form-control-file" id="foto" name="foto" required>
    </div>

    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <textarea class="form-control" id="keterangan" name="keterangan" rows="3" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>