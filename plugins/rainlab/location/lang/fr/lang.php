<?php

return [
    'plugin' => [
        'name' => 'Localisation géographique',
        'description' => 'Fonctionnalités de localisation géographique, comme les pays et les régions.',
    ],
    'permissions' => [
        'settings' => 'Gestion des pays',
    ],
    'location' => [
        'label' => 'Pays',
        'new' => 'Nouveau pays',
        'create_title' => 'Créer un pays',
        'update_title' => 'Modifier un pays',
        'preview_title' => 'Consulter un pays',
    ],
    'locations' => [
        'menu_label' => 'Pays',
        'menu_description' => 'Gestion des pays et régions disponibles pour les utilisateurs.',
        'disabled_label' => 'Pays désactivés',
        'enabled_label' => 'Activé',
        'enabled_help' => 'Désactiver les pays pour les rendre invisibles sur le Front-end.',
        'enable_or_disable_title' => 'Activer ou Désactiver les pays',
        'enable_or_disable' => 'Activer ou Désactiver',
        'selected_amount' => 'Pays sélectionné(s): :amount',
        'enable_success' => 'Ces pays ont été activés.',
        'disable_success' => 'Ces pays ont été désactivés.',
        'disable_confirm' => 'Confirmez-vous cette opération ?',
        'list_title' => 'Gérer les pays',
        'delete_confirm' => 'Confirmez-vous la suppression de ce pays ?',
        'return_to_list' => 'Retour à la liste des pays',
        'default_country' => 'Pays par défaut',
        'default_country_comment' => 'Si un utilisateur n\'indique pas son pays, ce pays sera choisi par défaut.',
        'default_state' => 'Région par défaut',
        'default_state_comment' => 'Si un utilisateur n\'indique pas sa région, cette région sera choisie par défaut.',
    ],
    'settings' => [
        'menu_label' => 'Paramètres de localisation géographique',
        'menu_description' => 'Gérer les paramètres liés aux lieux.',
        'google_maps_key' => 'Clé API Google Maps',
        'google_maps_key_comment' => 'Si vous utilisez les services Google Maps, entrez votre clé API ici.',
        'credentials_tab' => 'Authentification',
    ],
    'state' => [
        'label' => 'Région',
        'name' => 'Nom',
        'select' => '-- Choisissez une région --',
        'name_comment' => 'Entrez le nom de cette région.',
        'code' => 'Code',
        'code_comment' => 'Entrez un code unique pour identifier cette région.',
    ],
    'country' => [
        'label' => 'Pays',
        'name' => 'Nom',
        'select' => '-- Choisissez le pays --',
        'code' => 'Code',
        'code_comment' => 'Entrez un code unique pour identifier ce pays.',
        'enabled' => 'Activé',
    ],
];