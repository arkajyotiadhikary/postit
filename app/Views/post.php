<?= $this->extend('layouts\base') ?>

<?= $this->section('body') ?>
<div class="container w-50 h-100 d-flex align-items-center justify-content-center">
    <div>
         <?= \Config\Services::validation()->listErrors(); ?>
        <h1>Your Article</h1>
        <form class="form" action="<?= base_url('/post/addpost') ?>" method="post" >
            <div class="form-group">
                <label class="input-label">Article Title</label>
                <input class="form-control" name="post_title" type="text" placeholder="Artcle Title"/>
            </div>
            <div class="form-group">
                <label class="input-label">Article</label>
                <textarea class="article-textarea form-control" name="post" placeholder="write your article here" cols="40" rows="10" ></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
<?= $this->endSection() ?>
