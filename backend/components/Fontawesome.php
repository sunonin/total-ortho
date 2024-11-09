<?php

namespace backend\components;

use yii\helpers\Html;

class FontAwesome
{
    /**
     * Generate Font Awesome icon HTML.
     *
     * @param string $icon The Font Awesome icon name (e.g., "gear" for "fa-gear").
     * @param string $style The Font Awesome style prefix (e.g., "fas" for solid, "far" for regular, etc.).
     * @param array $options Additional HTML attributes for the icon.
     * @return string The HTML for the Font Awesome icon.
     */
    public static function icon($icon, $style = 'fas', $options = [])
    {
        Html::addCssClass($options, "$style fa-$icon");
        return Html::tag('i', '', $options);
    }
}
