<?= $this->extend('layouts\base') ?>
<?= $this->section('body') ?>
<div class="container h-100 w-100 ">
    <h1 class="text-center my-5">Posts</h1>
    <div class="post-btn-group w-100 d-flex justify-content-center">
        <button name="all-post" id="selected-btn" class="btn all-post rounded-0" onclick="handlePostBtn(this)">All Posts</button>
        <button name="my-post" id="" class="btn my-post rounded-0" onclick="handlePostBtn(this)">My Posts</button>
        <a href="/postit/post" class="btn btn-success rounded-0 text-white">Add Post</a>
    </div>
    <div class="d-flex justify-content-start">
        <!-- All Post-->
        <ul class="post-list nav w-100">
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
        </ul>
        <!-- My Post-->
        <ul class="mypost-list nav w-100">
            <?php if ($myposts): ?>
                <?php foreach ($myposts as $post): ?>
                    <li class="nav-item border p-4 my-3 w-100 d-flex">
                        <div class="w-100">
                            <h2><?= $post['post_title'] ?></h2>
                            <p><?= $post['post'] ?></p>
                            <div class="d-flex w-100">
                                <p class='mr-3'><?= $post['author'] ?></p>
                                <p><?= explode(" ", $post['post_date'])[0] ?></p>
                            </div>
                        </div>
                        <div class="d-flex flex-column ml-5">
                            <a href="/postit/updatepostform/<?= $post['id'] ?>" class="btn btn-sm btn-primary mb-3 d-flex justify-content-center align-items-center">
                                <span class="material-symbols-outlined">
                                    edit
                                </span>
                            </a>
                            <a href="/postit/deletepost/<?= $post['id'] ?>" class="btn btn-sm btn-danger d-flex justify-content-center align-items-center">
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