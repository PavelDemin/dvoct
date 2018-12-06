<?php

return [
    'plugin' => [
        'name' => 'Utilisateur',
        'description' => 'Gestion des utilisateurs Front-End.',
        'tab' => 'Utilisateur',
        'access_users' => 'Gérer les utilisateurs',
        'access_groups' => 'Gérer les groupes',
        'access_settings' => 'Gérer les paramètres',
    ],
    'users' => [
        'menu_label' => 'Utilisateurs',
        'all_users' => 'Tous les utilisateurs',
        'new_user' => 'Nouvel utilisateur',
        'list_title' => 'Gestion des utilisateurs',
        'trashed_hint_title' => 'L’utilisateur a désactivé son compte',
        'trashed_hint_desc' => 'Cet utilisateur a désactivé son compte ou ne souhaite plus apparaître sur le site. Il peut réactiver son compte à tout moment en se réinscrivant.',
        'banned_hint_title' => 'L’utilisateur a été banni',
        'banned_hint_desc' => 'Cet utilisateur a été banni par l’administrateur et ne pourra plus se réinscrire.',
        'guest_hint_title' => 'Ceci est un utilisteur invité',
        'guest_hint_desc' => 'Cette utilisateur est enregistré comme référence seulement, il doit s\'inscire avant de se connecter.',
        'activate_warning_title' => 'L’utilisateur n’est pas activé !',
        'activate_warning_desc' => 'Cet utilisateur n’a pas été activé et sera dans l’impossibilité de se connecter.',
        'activate_confirm' => 'Confirmez-vous l’activation de cet utilisateur ?',
        'activated_success' => 'L’utilisateur a été activé avec succès !',
        'activate_manually' => 'Activer cet utilisateur manuellement',
        'delete_confirm' => 'Confirmez-vous la suppression de cet utilisateur ?',
        'unban_user' => 'Lever le bannissement de cet utilisateur',
        'unban_confirm' => 'Confirmez-vous la levée du bannissement de cet utilisateur ?',
        'unbanned_success' => 'L’utilisateur n’est plus banni',
        'return_to_list' => 'Retour à la liste des utilisateurs',
        'update_details' => 'Mettre à jour les informations',
        'bulk_actions' => 'Actions groupées',
        'delete_selected' => 'Supprimer la sélection',
        'delete_selected_confirm' => 'Supprimer les utilisateurs sélectionnés ?',
        'delete_selected_empty' => 'Aucun utilisateur n’a été sélectionné pour la suppression.',
        'delete_selected_success' => 'Les utilisateurs sélectionnés ont été supprimés correctement.',
        'deactivate_selected' => 'Désactiver la sélection',
        'deactivate_selected_confirm' => 'Désactiver les utilisateurs sélectionnés ?',
        'deactivate_selected_empty' => 'Il n’y a aucun utilisateur sélectionné à désactiver.',
        'deactivate_selected_success' => 'Les utilisateurs sélectionnés ont été désactivés avec succès.',
        'restore_selected' => 'Activer la sélection',
        'restore_selected_confirm' => 'Activer les utilisateurs sélectionnés ?',
        'restore_selected_empty' => 'Il n’y a aucun utilisateur sélectionné à activer.',
        'restore_selected_success' => 'Les utilisateurs sélectionnés ont été activés avec succès.',
        'ban_selected' => 'Bannir la sélection',
        'ban_selected_confirm' => 'Bannir les utilisateurs sélectionnés ?',
        'ban_selected_empty' => 'Il n’y a aucun utilisateur sélectionné à bannir.',
        'ban_selected_success' => 'Les utilisateurs sélectionnés ont été bannis avec succès.',
        'unban_selected' => 'Lever le bannissement de la sélection',
        'unban_selected_confirm' => 'Lever le bannissement des utilisateurs sélectionnés ?',
        'unban_selected_empty' => 'Il n’y a aucun utilisateur sélectionné pour lesquels lever le bannissement.',
        'unban_selected_success' => 'Le bannissement des utilisateurs sélectionnés a été levé avec succès.',
        'activating' => 'Activation...',
    ],
    'settings' => [
        'users' => 'Utilisateurs',
        'menu_label' => 'Paramètres utilisateurs',
        'menu_description' => 'Gérer les paramètres liés aux utilisateurs.',
        'activation_tab' => 'Activation',
        'signin_tab' => 'Connexion',
        'registration_tab' => 'Enregistrement',
        'notifications_tab' => 'Notifications',
        'allow_registration' => 'Autoriser l\'inscription des utilisateurs',
        'allow_registration_comment' => 'Si désactivé, les utilisateurs ne peuvent être créés que par des administrateurs.',
        'activate_mode' => 'Mode d’activation',
        'activate_mode_comment' => 'Choisissez la méthode d’activation des comptes d’utilisateurs.',
        'activate_mode_auto' => 'Automatique',
        'activate_mode_auto_comment' => 'Activation automatique après inscription.',
        'activate_mode_user' => 'Utilisateur',
        'activate_mode_user_comment' => 'L’utilisateur active son compte par email.',
        'activate_mode_admin' => 'Administrateur',
        'activate_mode_admin_comment' => 'Seul un administrateur peut activer un utilisateur.',
        'welcome_template' => 'Gabarit de bienvenue',
        'welcome_template_comment' => 'Choisissez un modèle pour l’e-mail à envoyer aux utilisateurs lors de leur activation.',
        'require_activation' => 'Vérifier l’activation des comptes utilisateurs lors de la connexion',
        'require_activation_comment' => 'Si activé, les utilisateurs doivent avoir leur compte activé pour pouvoir se connecter.',
        'use_throttle' => 'Tentatives de connexion ratées',
        'use_throttle_comment' => 'En cas de tentatives répétées de connexion, l’utilisateur sera suspendu temporairement.',
        'login_attribute' => 'Attribut pour l’identifiant',
        'login_attribute_comment' => 'Choisissez l’attribut utilisateur à utiliser comme identifiant.',
        'no_mail_template' => 'Ne pas envoyer de notification',
        'hint_templates' => 'Vous pouvez modifier les modèles des e-mails en choisissant "E-Mail > Modèles des e-mails" à partir du menu "Réglages".',
    ],
    'user' => [
        'label' => 'Utilisateur',
        'id' => 'ID',
        'username' => 'Identifiant',
        'name' => 'Prénom',
        'surname' => 'Nom',
        'email' => 'E-mail',
        'created_at' => 'Enregistré le',
        'last_seen' => 'Dernière connexion',
        'joined' => 'Inscrit le',
        'is_online' => 'Est actuellement connecté',
        'is_offline' => 'N’est pas connecté',
        'create_password' => 'Créer un mot de passe',
        'create_password_comment' => 'Entrez un nouveau mot de passe de connexion.',
        'reset_password' => 'Réinitialiser le mot de passe',
        'reset_password_comment' => 'Pour effacer le mot de passe de cet utilisateur, entrez un nouveau mot de passe ici.',
        'confirm_password' => 'Confirmation du mot de passe',
        'confirm_password_comment' => 'Entrez à nouveau le mot de passe pour le confirmer.',
        'groups' => 'Groupes',
        'empty_groups' => 'Aucun groupe d\'utilisateurs disponible.',
        'avatar' => 'Avatar',
        'details' => 'Détails',
        'account' => 'Compte',
        'block_mail' => 'Bloquer tous les e-mails sortants à destination de cet utilisateur.',
    ],
    'login' => [
        'attribute_email' => 'Email',
        'attribute_username' => 'Pseudo',
    ],
    'account' => [
        'account' => 'Compte',
        'account_desc' => 'Gestion du compte utilisateur.',
        'redirect_to' => 'Rediriger vers',
        'redirect_to_desc' => 'Nom de la page de redirection après la mise à jour, la connexion ou l’enregistrement.',
        'code_param' => 'Paramètre code d’activation',
        'code_param_desc' => 'URL de la page utilisée pour l’enregistrement du code d’activation',
        'invalid_user' => 'Aucun utilisateur ne correspond aux identifiants fournis.',
        'invalid_activation_code' => 'Le code d’activation fourni est invalide.',
        'invalid_deactivation_pass' => 'Le mot de passe saisi est invalide.',
        'success_activation' => 'Votre compte a été activé avec succès !',
        'success_deactivation' => 'Votre compte a été désactivé avec succès. Nous somme navrés de vous voir partir !',
        'success_saved' => 'Vos paramètres ont été enregistrés avec succès !',
        'login_first' => 'Vous devez d’abord vous connecter !',
        'already_active' => 'Votre compte a déjà été activé !',
        'activation_email_sent' => 'Un e-mail d’activation a été envoyé sur votre adresse e-mail personnelle.',
        'registration_disabled' => 'La création de compte est désactivée pour le moment.',
        'sign_in' => 'Connexion',
        'register' => 'Créer un compte',
        'full_name' => 'Nom complet',
        'email' => 'E-mail',
        'password' => 'Mot de passe',
        'login' => 'Identifiant',
        'new_password' => 'Nouveau mot de passe',
        'new_password_confirm' => 'Confirmez le nouveau mot de passe',
    ],
    'reset_password' => [
        'reset_password' => 'Réinitialiser le mot de passe',
        'reset_password_desc' => 'Formulaire de récupération du mot de passe.',
        'code_param' => 'Code de réinitialisation',
        'code_param_desc' => 'URL de la page utilisée pour le code de réinitialisation',
    ],
    'session' => [
        'session' => 'Session',
        'session_desc' => 'Ajoute la session utilisateur à une page et permet de restreindre l’accès à la page.',
        'security_title' => 'Autorisations spéciales',
        'security_desc' => 'Personne(s) autorisée(s) à accéder à cette page.',
        'all' => 'Tous',
        'users' => 'Utilisateurs',
        'guests' => 'Invités',
        'redirect_title' => 'Rediriger vers',
        'redirect_desc' => 'Nom de la page de redirection au cas où l’accès est refusé.',
        'logout' => 'Vous avez été déconnecté avec succès.',
    ],
    'groups' => [
        'menu_label' => 'Groupes',
        'all_groups' => 'Tous les groupes',
        'new_group' => 'Nouveau groupe',
        'delete_selected_confirm' => 'Confirmez-vous la suppression des groupes sélectionnés ?',
        'list_title' => 'Groupes d’utilisateurs',
        'delete_confirm' => 'Confirmez-vous la suppression de ce groupe d’utilisateurs ?',
        'delete_selected_success' => 'Les groupes d’utilisateurs sélectionnés ont été supprimés avec succès.',
        'delete_selected_empty' => 'Il n’a aucun groupe d’utilisateurs sélectionné à supprimer.',
        'return_to_list' => 'Retour à la liste des groupes',
        'return_to_users' => 'Retour à la liste des utilisateurs',
        'create_title' => 'Nouveau groupe d’utilisateurs',
        'update_title' => 'Modifier un groupe d’utilisateurs',
        'preview_title' => 'Visualiser le groupe d\'utilisateurs',
    ],
    'group' => [
        'label' => 'Groupe d’utilisateurs',
        'id' => 'ID',
        'name' => 'Nom',
        'description_field' => 'Description',
        'code' => 'Code',
        'code_comment' => 'Entrez un code unique pour y accéder via l’API',
        'created_at' => 'Créé le',
        'users_count' => 'Nombre d’utilisateurs',
    ],
];
