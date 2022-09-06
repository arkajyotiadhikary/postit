<?= $this->extend('layouts\base')?>

<?= $this->section('body')?>
        <div class="container h-100 w-100 d-flex align-items-center justify-content-center">
            <div class="content w-25">
                <h1 class="text-center">Post It</h1>
                <div class="btn-row d-flex justify-content-between mt-5">
                    <button name="signin" class="btn" onclick="handleClick(this)">Sign In</button>
                    <button name="signup" class="btn" onclick="handleClick(this)">Sign Up</button>
                </div>
            </div>

        </div>
<?= $this->endSection()?>

