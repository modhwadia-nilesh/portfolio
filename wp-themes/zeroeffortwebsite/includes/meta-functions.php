<?php
/**
 * Echo Section block classes
 */
function block_classes($block)
{
    $output_classes = array();

    /* Meta : Block Padding Top Classes */

    if ($block['padding_top'] && $block['padding_top'] != 'default') {
        $output_classes[] = $block['padding_top'];
    }

    /* Meta : Block Padding Bottom Classes */

    if ($block['padding_bottom'] && $block['padding_bottom'] != 'default') {
        $output_classes[] = $block['padding_bottom'];
    }


    /* Meta : Block Classes Ended */

    if (empty($output_classes)) {
        return false;
    }

    return implode(" ", $output_classes);
}

/**
 * Echo Section block classes
 */
function block_id($block)
{
    $output_classes = array();

    /* Meta : Block Id */

    if ($block['section_id'] && !empty($block['section_id'])) {
        $output_classes[] = $block['section_id'];
    }

    /* Meta : Block Classes Ended */

    if (empty($output_classes)) {
        return false;
    }

    return implode(" ", $output_classes);
}