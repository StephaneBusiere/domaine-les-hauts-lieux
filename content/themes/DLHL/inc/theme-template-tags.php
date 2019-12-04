<?php

function get_first_meta($post_id, $meta_name)
{
    return get_post_meta($post_id, $meta_name, true);
}

function get_preparation($post_id)
{
    return sprintf(
        __('%s min.', 'DLHL'),
        get_first_meta($post_id, 'preparation')
    );
}

function get_cuisson($post_id)
{
    return sprintf(
        __('%s min.', 'DLHL'),
        get_first_meta($post_id, 'temps_de_cuisson')
    );
}

function get_prix($post_id)
{
    return sprintf(
        __('%s € / pers.', 'DLHL'),
        get_first_meta($post_id, 'prix')
    );
}