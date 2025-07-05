<div class="mb-3">
    <label class="form-label">Nama Menu</label>
    <input type="text" name="nama_menu" class="form-control" value="{{ old('nama_menu', $menu->nama_menu ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">Kategori</label>
    <input type="text" name="kategori" class="form-control" value="{{ old('kategori', $menu->kategori ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">Harga</label>
    <input type="number" name="harga" class="form-control" value="{{ old('harga', $menu->harga ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">Deskripsi</label>
    <textarea name="deskripsi" class="form-control">{{ old('deskripsi', $menu->deskripsi ?? '') }}</textarea>
</div>
