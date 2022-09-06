<?= $this->extend('layouts\base') ?>
<?= $this->section('body') ?>
<div class="container h-100 w-100 ">
    <h1 class="text-center">Posts</h1>
    <div class="w-100 d-flex justify-content-center">
        <button class="btn btn-primary selected">Posts</button>
        <button class="btn">My Posts</button>
    </div>
    <div class="d-flex justify-content-start">
        <ul class="post-list nav">
            <?= $this->include('partials/blog'); ?>
            <?= $this->include('partials/blog'); ?>
            <?= $this->include('partials/blog'); ?>
            <?= $this->include('partials/blog'); ?>
            <?= $this->include('partials/blog'); ?>
        </ul>
    </div>
</div>

<?= $this->endSection() ?>