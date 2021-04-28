<?php

// redirect index jika sudah login
if($this->session->has('user') == false){ ?>
    <div class="alert alert-danger">
        Anda belum login
    </div>
<?php } else {
    $this->session->delete('user');
    header("location:?module=site&routes=login&logout-success=true");
}

?>