<?php

return [
    'plugin' => [
        'name' => 'Zemljevid strani',
        'description' => 'Ustvari datoteko sitemap.xml za vaše spletno mesto.',
        'permissions' => [
            'access_settings' => 'Dostop do nastavitev zemljevida strani',
            'access_definitions' => 'Dostop do strani z definicijami zemljevida strani',
        ],
    ],
    'item' => [
        'location' => 'Lokacija:',
        'priority' => 'Prioriteta',
        'changefreq' => 'Spremeni frekvenco',
        'always' => 'vedno',
        'hourly' => 'vsako uro',
        'daily' => 'dnevno',
        'weekly' => 'tedensko',
        'monthly' => 'mesečno',
        'yearly' => 'letno',
        'never' => 'nikoli',
        'editor_title' => 'Urejanje elementa zemljevida strani',
        'type' => 'Vrsta',
        'allow_nested_items' => 'Dovoli gnezdene elemente',
        'allow_nested_items_comment' => 'Gnezdene elemente lahko dinamično ustvarijo statične strani in nekatere druge vrste elementov.',
        'url' => 'URL',
        'reference' => 'Referenca',
        'title_required' => 'Naslov je obvezen',
        'unknown_type' => 'Neznana vrsta elementa',
        'unnamed' => 'Neimenovan element',
        'add_item' => 'Dodaj element',
        'new_item' => 'Nov element',
        'cms_page' => 'CMS stran',
        'cms_page_comment' => 'Izberite stran, ki jo želite uporabiti za URL naslov.',
        'reference_required' => 'Referenca elementa je obvezna',
        'url_required' => 'URL povezava je obvezna',
        'cms_page_required' => 'Prosimo, izberite CMS stran',
        'page' => 'Stran',
        'check' => 'Preveri',
        'definition' => 'Definicija',
        'save_definition' => 'Shranjujem definicijo...',
        'load_indicator' => 'Praznim definicijo...',
        'empty_confirm' => 'Izpraznim to definicijo?',
    ],
    'definition' => [
        'not_found' => 'Definicije zemljevida strani ni mogoče najti. Poskusite najprej eno ustvariti.',
    ],
];