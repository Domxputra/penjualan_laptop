<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Edit Customers</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" class="form-control" value="<?= $item['name']; ?>" required>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" value="<?= $item['email']; ?>"required>
        </div>
        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" name="phone" class="form-control" value="<?= $item['phone']; ?>" required>
        </div>
        <div class="form-group">
            <label for="">Address</label>
            <input type="text" name="address" class="form-control" value="<?= $item['address']; ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/customers" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->endSection(); ?>