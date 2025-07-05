<div class="mb-3">
    <label for="nama_menu" class="form-label">Nama Menu</label>
    <input type="text" name="nama_menu" id="nama_menu" class="form-control" 
           value="{{ old('nama_menu', $menu->nama_menu ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="kategori" class="form-label">Kategori</label>
    <input type="text" name="kategori" id="kategori" class="form-control" 
           value="{{ old('kategori', $menu->kategori ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="harga" class="form-label">Harga</label>
    <input type="number" name="harga" id="harga" class="form-control" 
           value="{{ old('harga', $menu->harga ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="deskripsi" class="form-label">Deskripsi</label>
    <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control">{{ old('deskripsi', $menu->deskripsi ?? '') }}</textarea>
</div>

@if(isset($menu) && $menu->gambar)
    <div class="mb-3">
        <label class="form-label">Gambar Saat Ini:</label><br>
        <img src="{{ asset('gambar_menu/' . $menu->gambar) }}" alt="Gambar Menu" style="max-width: 200px;" class="img-thumbnail">
    </div>
@endif

<div class="mb-3">
    <label for="gambar" class="form-label">Upload Gambar</label>
    <input type="file" name="gambar" id="gambar" class="form-control">
</div>
