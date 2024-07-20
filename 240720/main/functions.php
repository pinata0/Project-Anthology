<?php
function my_custom_page_assets()
{
    // 현재 페이지의 템플릿 파일 이름을 가져옵니다.
    $template = get_page_template_slug();

    // 템플릿 이름을 기반으로 페이지 슬러그를 추출합니다.
    $template_slug = basename($template, '.php');

    // CSS 및 JS 파일 경로를 설정합니다.
    $css_path = get_template_directory_uri() . "/page/page-{$template_slug}/{$template_slug}-page-style.css";
    $js_path = get_template_directory_uri() . "/page/page-{$template_slug}/{$template_slug}-page-script.js";

    // CSS 파일 로드
    if (file_exists(get_template_directory() . "/page/page-{$template_slug}/{$template_slug}-page-style.css")) {
        wp_enqueue_style("page-{$template_slug}-style", $css_path);
    }

    // JS 파일 로드
    if (file_exists(get_template_directory() . "/page/page-{$template_slug}/{$template_slug}-page-script.js")) {
        wp_enqueue_script("page-{$template_slug}-script", $js_path, array(), null, true);
    }
}
add_action('wp_enqueue_scripts', 'my_custom_page_assets');


?>