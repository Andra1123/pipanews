<div class="content d-flex align-items-center justify-content-center" style="width: 100vw;height: 100vh;">

    <div class="card shadow px-4" style="width: 320px;">
        <form action="<?= current_url() ?>" method="POST" class="card-body">
            <div class="text-center my-3">
                <h5>Login Admin</h5>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" value="<?= set_value('password') ?>">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary px-5">Login</button>
            </div>
        </form>
    </div>
</div>