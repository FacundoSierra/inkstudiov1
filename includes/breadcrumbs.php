<?php
/**
 * Utilidades para breadcrumbs y FAQ schema
 */

function render_breadcrumbs($items) {
    if (!is_array($items) || empty($items)) return '';
    $html = '<nav aria-label="breadcrumb" class="container py-2"><ol class="breadcrumb">';
    $lastIndex = count($items) - 1;
    foreach ($items as $index => $item) {
        $label = htmlspecialchars($item['label'] ?? '', ENT_QUOTES);
        $url = isset($item['url']) ? htmlspecialchars($item['url'], ENT_QUOTES) : '';
        if ($index === $lastIndex) {
            $html .= '<li class="breadcrumb-item active" aria-current="page">' . $label . '</li>';
        } else {
            $html .= '<li class="breadcrumb-item"><a href="' . $url . '">' . $label . '</a></li>';
        }
    }
    $html .= '</ol></nav>';
    return $html;
}

function build_faq_schema_jsonld($faqs) {
    if (!is_array($faqs) || empty($faqs)) return '';
    $entities = [];
    foreach ($faqs as $faq) {
        $q = trim($faq['q'] ?? '');
        $a = trim($faq['a'] ?? '');
        if ($q === '' || $a === '') continue;
        $entities[] = [
            '@type' => 'Question',
            'name' => $q,
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $a
            ]
        ];
    }
    if (empty($entities)) return '';
    $data = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $entities
    ];
    return "\n<script type=\"application/ld+json\">" . json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "</script>\n";
}

?>

