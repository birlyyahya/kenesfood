<?php

function slug($string)
{
    // Convert to lowercase
    $slug = strtolower($string);

    // Replace spaces with hyphens
    $slug = str_replace(' ', '-', $slug);

    // Remove special characters
    $slug = preg_replace('/[^a-z0-9-]/', '', $slug);

    // Remove duplicate hyphens
    $slug = preg_replace('/-+/', '-', $slug);

    // Trim hyphens from the beginning and end
    $slug = trim($slug, '-');

    return $slug;
}
