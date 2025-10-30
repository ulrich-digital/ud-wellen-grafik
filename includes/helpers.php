<?php
defined('ABSPATH') || exit;

/**
 * Erlaubt nur a–z, 0–9 und Bindestrich in Klassenslugs.
 */
function ud_wellen_sanitize_slug($value, $fallback = '') {
    $value = is_string($value) ? strtolower($value) : '';
    // erlaubt jetzt auch Unterstriche:
    $value = preg_replace('~[^a-z0-9\-_]~', '', $value ?? '');
    return $value !== '' ? $value : $fallback;
}


/**
 * Kleinset: erlaubte Positionswerte.
 */
function ud_wellen_allowed_positions() {
    return ['top', 'nach_teaser_cover', 'bottom'];
}
