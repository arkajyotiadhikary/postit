<?= $this->extend('layouts\base') ?>

<?= $this->section('body') ?>
<div class="container w-50 h-100 d-flex align-items-center justify-content-center">
    <div>
        <h1>Sign In</h1>
        <form class="form" action="<?= base_url('/signin/authuser') ?>" method="post">
            <div class="form-group">
                <label class="input-label">email</label>
                <input class="form-control" name="email" type="email" placeholder="email"/>
            </div>
            <div class="form-group">
                <label class="input-label">password</label>
                <input class="form-control" name="password" type="password" placeholder="password"/>
            </div>
            <button class="btn btn-primary">Sign In</button>
        </form>
    </div>

</div>
<?= $this->endSection() ?>
