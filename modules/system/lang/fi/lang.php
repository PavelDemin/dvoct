<?php

return [
    'app' => [
        'name' => 'OctoberCMS',
        'tagline' => 'Takaisin perusteisiin'
    ],
    'directory' => [
        'create_fail' => 'Ei voida luoda hakemistoa: :name'
    ],
    'file' => [
        'create_fail' => 'Ei voida luoda tiedostoa: :name'
    ],
    'combiner' => [
        'not_found' => "Yhdistelmätiedostoa ':name' ei löydy."
    ],
    'system' => [
        'name' => 'Järjestelmä',
        'menu_label' => 'Järjestelmä',
        'categories' => [
            'cms' => 'CMS',
            'misc' => 'Muut',
            'logs' => 'Lokit',
            'mail' => 'Sähköposti',
            'shop' => 'Kauppa',
            'team' => 'Tiimi',
            'users' => 'Käyttäjät',
            'system' => 'Järjestelmä',
            'social' => 'Some',
            'events' => 'Tapahtumat',
            'customers' => 'Asiakkaat',
            'my_settings' => 'Minun asetukset'
        ]
    ],
    'theme' => [
        'label' => 'Teema',
        'unnamed' => 'Nimetön teema',
        'name' => [
            'label' => 'Teeman nimi',
            'help' => 'Nimeä teema sen uniikilla koodilla. Esimerkiksi: RainLab.Vanilla'
        ],
    ],
    'themes' => [
        'install' => 'Asenna teemoja',
        'search' => 'hae teemoja asennettavaksi...',
        'installed' => 'Asennetut teemat',
        'no_themes' => 'Ei asennettuja teemoja kaupasta.',
        'recommended' => 'Suositellaan',
        'remove_confirm' => 'Oletko varma, että haluat poistaa tämän teeman?'
    ],
    'plugin' => [
        'label' => 'Lisäosa',
        'unnamed' => 'Nimetön lisäosa',
        'name' => [
            'label' => 'Lisäosan nimi',
            'help' => 'Nimeä lisäosa sen uniikilla koodilla. Esimerkiksi, RainLab.Blog'
        ]
    ],
    'plugins' => [
        'manage' => 'Hallitse lisäosia',
        'enable_or_disable' => 'Ota käyttöön tai poista käytöstä',
        'enable_or_disable_title' => 'Ota käyttöön tai poista käytöstä lisäosia',
        'install' => 'Asenna lisäosia',
        'install_products' => 'Asenna tuotteita',
        'search' => 'hae lisäosia asennettavaksi...',
        'installed' => 'Asennetut lisäosat',
        'no_plugins' => 'Ei asennettuja lisäosia kaupasta.',
        'recommended' => 'Suositellaan',
        'remove' => 'Poista',
        'refresh' => 'Päivitä',
        'disabled_label' => 'Poistettu käytöstä',
        'disabled_help' => 'Järjestelmä ei huomioi Käytöstä poistettuja lisäosia.',
        'frozen_label' => 'Jäädytä päivitykset',
        'frozen_help' => 'Päivitystoiminto ei huomioi jäädytettyjä lisäosia.',
        'selected_amount' => 'Lisäosia valittu: :amount',
        'remove_confirm' => 'Oletko varma, että haluat poistaa tämän lisäosan?',
        'remove_success' => 'Lisäosa poistettu järjestelmästä onnistuneesti.',
        'refresh_confirm' => 'Oletko varma?',
        'refresh_success' => 'Onnistuneesti päivitetty järjestelmän lisäosat.',
        'disable_confirm' => 'Oletko varma?',
        'disable_success' => 'Lisäosat poistettu käytöstä onnistuneesti.',
        'enable_success' => 'Lisäosat otettu käyttöön onnistuneesti.',
        'unknown_plugin' => 'Lisäosa on poistettu järjestelmästä.'
    ],
    'project' => [
        'name' => 'Projekti',
        'owner_label' => 'Omistaja',
        'attach' => 'Liitä projekti',
        'detach' => 'Irrota projekti',
        'none' => 'Ei mitään',
        'id' => [
            'label' => 'Projektin ID',
            'help' => 'Mistä löydän projektin IDn?',
            'missing' => 'Määrittele käytettävän projekin ID.'
        ],
        'detach_confirm' => 'Oletko varma, että haluat irrottaa tämän projektin?',
        'unbind_success' => 'Projekti on irrotettu.'
    ],
    'settings' => [
        'menu_label' => 'Asetukset',
        'not_found' => 'Määritettyjä asetuksia ei voitu löytää.',
        'missing_model' => 'Asetussivulta puuttuu Model määritelmä.',
        'update_success' => ':name asetus päivitetty',
        'return' => 'Palaa järjestelmän asetuksiin',
        'search' => 'Hae'
    ],
    'mail' => [
        'log_file' => 'Lokitiedosto',
        'menu_label' => 'Sähkököpostin asennus',
        'menu_description' => 'Hallitse sähköpostin asetuksia.',
        'general' => 'Yleiset',
        'method' => 'Sähköpostimenetelmä',
        'sender_name' => 'Lähettäjän nimi',
        'sender_email' => 'Lähettäjän sähköpostiosoite',
        'php_mail' => 'PHP -sähköposti',
        'smtp' => 'SMTP',
        'smtp_address' => 'SMTP osoite',
        'smtp_authorization' => 'SMTP todennus vaadittu',
        'smtp_authorization_comment' => 'Valitse tämä valintaruutu mikäli sinun SMTP-palvelimesi vaatii todennusta.',
        'smtp_username' => 'Käyttäjänimi',
        'smtp_password' => 'Salasana',
        'smtp_port' => 'SMTP portti',
        'smtp_ssl' => 'SSL yhteys vaadittu',
        'smtp_encryption' => 'SMTP salausprotokolla',
        'smtp_encryption_none' => 'Ei salausta',
        'smtp_encryption_tls' => 'TLS',
        'smtp_encryption_ssl' => 'SSL',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Sendmail polku',
        'sendmail_path_comment' => 'Määritä Sendmail-ohjelman polku.',
        'mailgun' => 'Mailgun',
        'mailgun_domain' => 'Mailgun domain',
        'mailgun_domain_comment' => 'Määritä Mailgun domain nimi.',
        'mailgun_secret' => 'Mailgun sala-avain',
        'mailgun_secret_comment' => 'Syötä sinun Mailgun API sala-avain.',
        'mandrill' => 'Mandrill',
        'mandrill_secret' => 'Mandrill sala-avain',
        'mandrill_secret_comment' => 'Syötä sinun Mandrill API sala-avain.',
        'ses' => 'SES',
        'ses_key' => 'SES avain',
        'ses_key_comment' => 'Syötä sinun SES API avain.',
        'ses_secret' => 'SES sala-avain',
        'ses_secret_comment' => 'Syötä sinun SES API sala-avain.',
        'ses_region' => 'SES alue',
        'ses_region_comment' => 'Syötä sinun SES alue (esim: us-east-1)',
        'drivers_hint_header' => 'Ajureita ei asennettu',
        'drivers_hint_content' => 'Tämä sähköpostimenetelmä vaatii lisäosan ":plugin" asennettavaksi ennen kuin voit lähettää sähköpostia.'
    ],
    'mail_templates' => [
        'menu_label' => 'Sähköpostimallit',
        'menu_description' => 'Muokkaa sähköpostimalleja, jotka lähetetään käyttäjille ja järjestelmänvalvojille, hallitse sähköpostien ulkoasua.',
        'new_template' => 'Uusi malli',
        'new_layout' => 'Uusi ulkoasu',
        'template' => 'Malli',
        'templates' => 'Mallit',
        'menu_layouts_label' => 'Sähköpostin ulkoasut',
        'layout' => 'Ulkoasu',
        'layouts' => 'Ulkoasut',
        'no_layout' => '-- Ei ulkoasua --',
        'name' => 'Nimi',
        'name_comment' => 'Uniikki nimi tälle mallille',
        'code' => 'Koodi',
        'code_comment' => 'Uniikko koodi tälle mallille',
        'subject' => 'Aihe',
        'subject_comment' => 'Sähköpostiviestin aihe',
        'description' => 'Kuvaus',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Leipäteksti',
        'test_send' => 'Lähetä testiviesti',
        'test_success' => 'Testiviesti lähetetty.',
        'test_confirm' => 'Lähetä testiviesti osoitteeseen :email. Haluatko jatkaa?',
        'creating' => 'Luodaan mallia...',
        'creating_layout' => 'Luodaan ulkoasua...',
        'saving' => 'Tallennetaan mallia...',
        'saving_layout' => 'Tallennetaan ulkoasua...',
        'delete_confirm' => 'Poista tämä malli?',
        'delete_layout_confirm' => 'Poista tämä ulkoasu?',
        'deleting' => 'Poistetaan mallia...',
        'deleting_layout' => 'Poistetaan ulkoasua...',
        'sending' => 'Lähetetään testiviestiä...',
        'return' => 'Palaa mallilistaan'
    ],
    'mail_brand' => [
        'menu_label' => 'Sähköpostin brändäys',
        'menu_description' => 'Muokkaa sähköpostimallien värejä ja ulkonäköä.',
        'page_title' => 'Kustomoi sähköpostin ulkonäköä',
        'sample_template' => [
            'heading' => 'Otsikko',
            'paragraph' => 'Tämä leipäteksti sisältää Lorem Ipsumia ja linkin. Cumque dicta <a>doloremque eaque</a>, enim error laboriosam pariatur possimus tenetur veritatis voluptas.',
            'table' => [
                'item' => 'Kohde',
                'description' => 'Kuvaus',
                'price' => 'Hinta',
                'centered' => 'Keskitetty',
                'right_aligned' => 'Tasattu oikealle'
            ],
            'buttons' => [
                'primary' => 'Ensisijainen painike',
                'positive' => 'Positiivinen painike',
                'negative' => 'Negatiivinen painike',
            ],
            'panel' => 'Kuinka mahtava tämä paneeli on?',
            'more' => 'Vähän lisää tekstiä',
            'promotion' => 'Kampanjakoodi: OCTOBER',
            'subcopy' => 'Tämä on sähköpostin alateksti',
            'thanks' => 'Kiitos'
        ],
        'fields' => [
            '_section_background' => 'Tausta',
            'body_bg' => 'Kehon tausta',
            'content_bg' => 'Sisällön tausta',
            'content_inner_bg' => 'Keskeisen sisällön tausta',
            '_section_buttons' => 'Painikkeet',
            'button_text_color' => 'Painikkeiden tekstin väri',
            'button_primary_bg' => 'Ensisijaisen painikkeen tausta',
            'button_positive_bg' => 'Positiivisen painikkeen tausta',
            'button_negative_bg' => 'Negatiivisen painikkeen tausta',
            '_section_type' => 'Typografia',
            'header_color' => 'Taulukko-otsikon väri',
            'heading_color' => 'Otsikoiden väri',
            'text_color' => 'Tekstin väri',
            'link_color' => 'Linkin väri',
            'footer_color' => 'Alatunnisteen väri',
            '_section_borders' => 'Reunukset',
            'body_border_color' => 'Kehon reunuksen väri',
            'subcopy_border_color' => 'Alatekstin reunuksen väri',
            'table_border_color' => 'Taulukon reunuksen väri',
            '_section_components' => 'Komponentit',
            'panel_bg' => 'Paneelin tausta',
            'promotion_bg' => 'Kampanjan tausta',
            'promotion_border_color' => 'Kampanjan reunuksen väri',
        ]
    ],
    'install' => [
        'project_label' => 'Liitä projektiin',
        'plugin_label' => 'Asenna lisäosa',
        'theme_label' => 'Asenna teema',
        'missing_plugin_name' => 'Määritä asennettavan lisäosan nimi.',
        'missing_theme_name' => 'Määritä asennettavan teeman nimi.',
        'install_completing' => 'Viimeistellään asennusta',
        'install_success' => 'Lisäosa asennettu onnistuneesti'
    ],
    'updates' => [
        'title' => 'Hallitse päivityksiä',
        'name' => 'Ohjelmistopäivitykset',
        'menu_label' => 'Päivitykset ja lisäosat',
        'menu_description' => 'Päivitä järjestelmää, hallitse ja asenna lisäosia ja teemoja.',
        'return_link' => 'Palaa järjestelmän päivityksiin',
        'check_label' => 'Tarkista päivitykset',
        'retry_label' => 'Yritä uudelleen',
        'plugin_name' => 'Nimi',
        'plugin_code' => 'Koodi',
        'plugin_description' => 'Kuvaus',
        'plugin_version' => 'Versio',
        'plugin_author' => 'Tekijä',
        'plugin_not_found' => 'Lisäosaa ei löydy',
        'core_current_build' => 'Tämänhetkinen rakennusversio',
        'core_build' => 'Rakennusversio :build',
        'core_build_help' => 'Uusin rakennusversio on saatavilla.',
        'core_downloading' => 'Ladataan sovellustiedostoja',
        'core_extracting' => 'Puretaan sovellustiedostoja',
        'plugins' => 'Lisäosat',
        'themes' => 'Teemat',
        'disabled' => 'Poistettu käytöstä',
        'plugin_downloading' => 'Ladataan lisäosaa: :name',
        'plugin_extracting' => 'Puretaan lisäosaa: :name',
        'plugin_version_none' => 'Uusi lisäosa',
        'plugin_current_version' => 'Nykyinen versio',
        'theme_new_install' => 'Uuden teeman asennus.',
        'theme_downloading' => 'Ladataan teemaa: :name',
        'theme_extracting' => 'Puretaan teemaa: :name',
        'update_label' => 'Päivitä ohjelmisto',
        'update_completing' => 'Valmistellaan päivityksiä',
        'update_loading' => 'Ladataan saatavilla olevia päivityksiä...',
        'update_success' => 'Päivitysprosessi on valmis',
        'update_failed_label' => 'Päivitys epäonnistui',
        'force_label' => 'Pakota päivitys',
        'found' => [
            'label' => 'Löytyi uusia päivityksiä!',
            'help' => 'Aloita päivitysprosessi valitsemalla Päivitä ohjelmisto.'
        ],
        'none' => [
            'label' => 'Ei päivityksiä',
            'help' => 'Uusia päivityksiä ei löytynyt.'
        ],
        'important_action' => [
            'empty' => 'Valitse toiminto',
            'confirm' => 'Vahvista päivitys',
            'skip' => 'Ohita tämä päivitys (vain kerran)',
            'ignore' => 'Ohita tämä päivitys (aina)'
        ],
        'important_action_required' => 'Toiminto vaadittu',
        'important_view_guide' => 'Näytä päivitysopas',
        'important_view_release_notes' => 'Näytä julkaisuilmoitus',
        'important_alert_text' => 'Jotkin päivitykset tarvitsevat huomiotasi.',
        'details_title' => 'Lisäosan tiedot',
        'details_view_homepage' => 'Katso kotisivut',
        'details_readme' => 'Dokumentaatio',
        'details_readme_missing' => 'Dokumentaatiota ei annettu.',
        'details_changelog' => 'Muutosloki',
        'details_changelog_missing' => 'Muutoslokia ei annettu.',
        'details_upgrades' => 'Päivitysopas',
        'details_upgrades_missing' => 'Päivitysopasta ei annettu.',
        'details_licence' => 'Lisenssi',
        'details_licence_missing' => 'Lisenssiä ei annettu.',
        'details_current_version' => 'Tämänhetkinen versio',
        'details_author' => 'Tekijä'
    ],
    'server' => [
        'connect_error' => 'Virhe yhdistäessä palvelimeen.',
        'response_not_found' => 'Päivityspalvelinta ei löytynyt.',
        'response_invalid' => 'Virheellinen vastaus palvelimelta.',
        'response_empty' => 'Tyhjä vastaus palvelimelta.',
        'file_error' => 'Palvelin epäonnistui paketin lähettämisessä.',
        'file_corrupt' => 'Tiedosto palvelimelta on korruptoitunut.'
    ],
    'behavior' => [
        'missing_property' => 'Luokan :class täytyy määritellä ominaisuus $:property, jota käyttää :behavior käyttäytyminen.'
    ],
    'config' => [
        'not_found' => 'Asetustiedostoa :file ei löydy määriteltynä kohteelle :location.',
        'required' => "Kohteen :location asetustiedostossa on oltava arvo ':property'."
    ],
    'zip' => [
        'extract_failed' => "Ydintiedostoa ':file' ei voitu purkaa."
    ],
    'event_log' => [
        'hint' => 'Tämä loki näyttää listan mahdollisista virheistä, jotka tapahtuvat sovelluksessa, kuten poikkeukset ja virheenkorjaustiedot.',
        'menu_label' => 'Tapahtumaloki',
        'menu_description' => 'Näytä järjestelmän lokiviestit niiden kellonajoilla ja tiedoilla.',
        'empty_link' => 'Tyhjää tapahtumaloki',
        'empty_loading' => 'Tyhjätään tapahtumalokia...',
        'empty_success' => 'Tapahtumaloki tyhjätty',
        'return_link' => 'Palaa tapahtumalokiin',
        'id' => 'ID',
        'id_label' => 'Tapahtuma ID',
        'created_at' => 'Päivämäärä ja aika',
        'message' => 'Viesti',
        'level' => 'Taso',
        'preview_title' => 'Tapahtuma'
    ],
    'request_log' => [
        'hint' => 'Tämä loki näyttää listan selainten pyynnöistä, jotka saattavat vaatia huomiota. Esimerkiksi, jos vierailija avaa CMS sivun, jota ei löydy, kohde lisätään tilakoodilla 404.',
        'menu_label' => 'Pyyntöloki',
        'menu_description' => 'Tarkastele huonoja tai uudelleenohjattuja pyyntöjä, kuten Sivua ei löydy (404).',
        'empty_link' => 'Tyhjää pyyntöloki',
        'empty_loading' => 'Tyhjätään pyyntölokia...',
        'empty_success' => 'Pyyntöloki tyhjätty',
        'return_link' => 'Palaa pyyntölokiin',
        'id' => 'ID',
        'id_label' => 'Loki ID',
        'count' => 'Laskuri',
        'referer' => 'Viitteet',
        'url' => 'URL',
        'status_code' => 'Tilakoodi',
        'preview_title' => 'Pyyntö'
    ],
    'permissions' => [
        'name' => 'Järjestelmä',
        'manage_system_settings' => 'Hallitse järjestelmän asetuksia',
        'manage_software_updates' => 'Hallitse järjestelmäpäivityksiä',
        'access_logs' => 'Näytä järjestelmän lokit',
        'manage_mail_templates' => 'Hallitse sähköpostimalleja',
        'manage_mail_settings' => 'Hallitse sähköpostiasetuksia',
        'manage_other_administrators' => 'Hallitse muita järjestelmänvalvojia',
        'manage_preferences' => 'Hallitse hallintapaneelin asetuksia',
        'manage_editor' => 'Hallitse koodieditorin asetuksia',
        'view_the_dashboard' => 'Näytä hallintapaneeli',
        'manage_branding' => 'Muokkaa hallintapaneelia'
    ],
    'log' => [
        'menu_label' => 'Lokiasetukset',
        'menu_description' => 'Määrittele minkä alueiden kuuluisi käyttää lokeja.',
        'default_tab' => 'Lokit',
        'log_events' => 'Kirjaa järjestelmän tapahtumat',
        'log_events_comment' => 'Tallenna järjestelmätapahtumat tietokantaan tiedostopohjaisen lokin lisäksi.',
        'log_requests' => 'Kirjaa huonot pyynnöt',
        'log_requests_comment' => 'Selainten pyynnöt, jotka saattavat vaatia huomiota, kuten 404 virheet.',
        'log_theme' => 'Kirjaa teeman muutokset',
        'log_theme_comment' => 'Kun muutos on tehty teemaan käyttäen hallintapaneelia.',
    ],
    'media' => [
        'invalid_path' => "Kelvoton tiedostopolku määritetty: ':path'.",
        'folder_size_items' => 'kohteita',
    ],
];
