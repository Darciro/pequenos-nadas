<?php
/**
 * Returns a SVG icon. An array of args can be used to set properties, such as "fill" or "class"
 *
 * @param $icon
 * @param array $args
 * @return false|string|string[]|null
 */
function get_icon($icon, $args = array())
{
    ob_start();
    include get_template_directory() . '/assets/img/icons/' . $icon . '.svg';
    $svg = ob_get_contents();
    ob_end_clean();

    if (!empty($args)) {
        $pattern = '/(<svg\b[^><]*)>/';
        foreach ($args as $arg => $value) {
            $svg = preg_replace($pattern, '$1 ' . $arg . '="' . $value . '">', $svg);
        }
        // $svg = preg_replace($pattern, '$1 fill="red">', $svg);
    }

    return $svg;
}

/**
 * Function to change the excerpt length
 *
 * @param int $limit
 *
 * @return string|string[]|null
 */
function get_little_nothings_excerpt($limit = 190)
{
    $excerpt = explode(' ', get_the_excerpt(), $limit);

    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }

    $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

    return $excerpt;
}

/**
 *  Function to get post ID By slug
 */

function get_post_id_by_slug($slug)
{
    if ($post = get_page_by_path($slug)) {
        return $post->ID;
    }

    return null;
}

/**
 * Create an slug of a given string
 *
 * @param $text
 * @param string $divider
 * @return string
 */
function slugify($text, string $divider = '-')
{
    // replace non letter or digits by divider
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, $divider);

    // remove duplicate divider
    $text = preg_replace('~-+~', $divider, $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
}