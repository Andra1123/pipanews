<?php

function cekLogin()
{
    $ci3 = get_instance();
    if (!$ci3->session->userdata('id_user')) {
        redirect(base_url('autenthication'));
    }
}
