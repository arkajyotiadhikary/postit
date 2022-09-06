<?= $this->extend('layouts\base') ?>
<?= $this->section('body') ?>
<div class="container h-100 w-100 ">
    <h1 class="text-center my-5">Posts</h1>
    <div class="w-100 d-flex justify-content-center">
        <button class="btn btn-primary selected rounded-0">All Posts</button>
        <button class="btn rounded-0">My Posts</button>
    </div>
    <div class="d-flex justify-content-start">
        <!--        <ul class="post-list nav w-100">
        <?php if ($posts): ?>
            <?php foreach ($posts as $post): ?>
                                                            <li class="nav-item border p-4 my-3 w-100">
                                                                <h2><?= $post['post_title'] ?></h2>
                                                                <p><?= $post['post'] ?></p>
                                                                <div class="d-flex w-100">
                                                                    <p class='mr-3'><?= $post['author'] ?></p>
                                                                    <p><?= explode(" ", $post['post_date'])[0] ?></p>
                                                                </div>
                                                            </li> 
            <?php endforeach; ?>
        <?php endif; ?>
                </ul>-->
        <ul class="mypost-list nav w-100">
            <?php if ($myposts): ?>
                <?php foreach ($myposts as $post): ?>
                    <li class="nav-item border p-4 my-3 w-100 d-flex">
                        <div>
                            <h2><?= $post['post_title'] ?></h2>
                            <p><?= $post['post'] ?></p>
                            <div class="d-flex w-100">
                                <p class='mr-3'><?= $post['author'] ?></p>
                                <p><?= explode(" ", $post['post_date'])[0] ?></p>
                            </div>
                        </div>
                        <div class="d-flex flex-column ml-3">
                            <a class="btn btn-sm btn-primary mb-3 d-flex justify-content-center align-items-center">
                                <span class="material-symbols-outlined">
                                    edit
                                </span>
                            </a>
                            <a href="/postit/deletepost/<?= $post['id']?>" class="btn btn-sm btn-danger d-flex justify-content-center align-items-center">
                                <span class="material-symbols-outlined">
                                    delete
                                </span>
                            </a>
                        </div>
                    </li> 
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
</div>

<?= $this->endSection() ?>