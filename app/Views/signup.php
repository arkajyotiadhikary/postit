<?= $this->extend('layouts\base') ?>

<?= $this->section('body') ?>
<div class="container w-50 h-100 d-flex align-items-center justify-content-center">
    <div>
         <?= \Config\Services::validation()->listErrors(); ?>
        <h1>Sign Up</h1>
        <form class="form" action="<?= base_url('/signup/adduser') ?>" method="post" >
            <div class="form-group">
                <label class="input-label">username</label>
                <input class="form-control" name="username" type="text" placeholder="username"/>
            </div>
            <div class="form-group">
                <label class="input-label">email</label>
                <input class="form-control" name="email" type="email" placeholder="email"/>
            </div>
            <div class="form-group">
                <label class="input-label">password</label>
                <input class="form-control" name="password" type="password" placeholder="password"/>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>

</div>
<?= $this->endSection() ?>
