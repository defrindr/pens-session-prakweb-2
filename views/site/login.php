<?php

// redirect index jika sudah login
if($this->session->has('user')){
    header("location:?module=site&routes=index&logged=true");
}

if($_POST){
    $password = md5($_POST['password']);
    $username = addslashes($_POST['username']);
    $user = $this->db->findOne([
        'where' => [
            'and',
            [
                '=',
                'username',
                $username
            ],
            [
                '=',
                'password',
                $password
            ],
        ]
    ], 'user');

    if($user == (object)null){ ?>
        <div class="alert alert-danger">
            Login gagal
        </div>
    <?php }else{
        $this->session->set('user', $user->name);
        header("location:?module=site&routes=index&login-success=true");
    }
}

?>
<main class="form-signin center">
  <form action="http://localhost:8085/session/?module=site&routes=login" method="POST">
    <img class="m-auto d-block img-fluid" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="input" class="form-control" id="username" name="username" placeholder="name@example.com">
      <label for="floatingInput">Username</label>
    </div>
    <p></p>

    <div class="form-floating">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <p></p>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  </form>
</main>