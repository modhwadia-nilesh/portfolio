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

    /* Meta : Block Margin Top Classes */

    if ($block['margin_top'] && $block['margin_top'] != 'default') {
        $output_classes[] = $block['margin_top'];
    }

    /* Meta : Block Margin Bottom Classes */

    if ($block['margin_bottom'] && $block['margin_bottom'] != 'default') {
        $output_classes[] = $block['margin_bottom'];
    }

    /* Meta : Block Classes Ended */

    if (empty($output_classes)) {
        return false;
    }

    return implode(" ", $output_classes);
}