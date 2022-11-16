<?php

function jumlah_article()
{
    $ci = get_instance();
    return $ci->db->count_all_results('article');
}
function jumlah_galery()
{
    $ci = get_instance();
    return $ci->db->count_all_results('galery');
}
