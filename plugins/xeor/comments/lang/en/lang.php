<?php

return [
    'plugin' => [
        'name' => 'Comments',
        'description' => 'Allows users to comment on and discuss published content.'
    ],
    'comments' => [
        'comment' => 'Comment',
        'comments' => 'Comments',
        'comments_description' => 'Outputs the comments and the comment form.',
        'created' => 'Created',
        'updated' => 'Updated',
        'published' => 'Published',
        'cancel' => 'Cancel',
        'access_other_comments' => 'Access other comments.'
    ],
    'settings' => [
        'label' => 'Discussion Settings',

        'notifications' => 'Email me whenever',
        'comments_notify' => 'Anyone posts a comment',
        'moderation_notify' => 'A comment is held for moderation',

        'before_a_comment_appears' => 'Before a comment appears',
        'comment_moderation' => 'Comment must be manually approved',
        'comment_whitelist' => 'Comment author must have a previously approved comment',

        'other_comment_settings' => 'Other comment settings',

//        'comment_moderation' => 'Comment Moderation',
//        'comment_moderation_description' => 'When a comment contains any of these words in its content, name, URL, email,
//         or IP, it will be held in the moderation queue. One word or IP per line. It will match inside words, so “cms” will match “OctoberCMS”.',
//
//        'comment_blacklist' => 'Comment Blacklist',
//        'comment_blacklist_description' => 'When a comment contains any of these words in its content, name, URL, email,
//        or IP, it will be put in the trash. One word or IP per line. It will match inside words, so “cms” will match “OctoberCMS”.',


        'slug' => 'Slug',
        'slug_description' => 'Look up the comments using the supplied slug value.',
        'menu_label' => 'Comments settings',
        'menu_description' => 'Manage comments settings',
        'comments' => 'Comments',
        'css' => 'Default CSS',
        'styles_tab' => 'Styles',
        'appearance_tab' => 'Appearance',
        'hide_reply_form' => 'Hide reply form',
        'hide_reply_form_description' => 'Hide reply form after send button is clicked.',
        'hide_main_form' => 'Hide main form',
        'hide_main_form_description' => 'Hide main form after reply button is clicked.',
        'depth' => 'Depth',
        'depth_description' => 'Comment Reply Depth.',
        'depth_validation_message' => 'The Depth property can contain only numeric symbols',
        'comments_mode' => 'Threading',
        'comments_mode_description' => 'Show comment replies in a threaded list.',
        'comments_pagination' => 'Page number',
        'comments_pagination_description' => 'This value is used to determine what page the user is on.',
        'comments_per_page' => 'Comments per page',
        'comments_per_page_validation' => 'Invalid format of the comments per page value',
        'comments_rate_type' => 'Rate',
        'comments_rate_type_description' => 'Rate Type',
        'comments_rate_type_validation' => 'Select Rate Type',
        'comments_rate_type_none' => 'None',
        'comments_rate_type_number' => 'Number up / down',
        'comments_rate_type_fivestar' => 'Fivestar',
    ],
    'messages' => [
        'success' => 'Your comment has been posted.',
        'error' => 'Error!',
        'edit_success' => 'Your comment has been updated!',
        'edit_error' => 'Error!',
    ],
    'backend' => [
        'author' => 'Author',
        'content' => 'Comment',
        'name' => 'Name',
        'created' => 'Submitted On',
        'hide' => 'Hide',
        'published' => 'Published',
        'show' => 'Show',
        'delete_confirm' => 'Are you sure?',
        'chart_total' => 'Total',
        'chart_hidden' => 'Hidden',
        'chart_published' => 'Published',
        'guest' => 'Guest',
        'rate' => 'Rate',
    ]
];