<?php

return [
    'auth' => [
        'title' => 'Администраторски Панел'
    ],
    'field' => [
        'invalid_type' => 'Използвано невалиден тип поле :type.',
        'options_method_not_exists' => "Моделът клас :model трябва да се определя метод :method() връщайки настройки за ':field' поле."
    ],
    'widget' => [
        'not_registered' => "Името на класът за джаджата ':name' не е било регистрирано",
        'not_bound' => "Джаджата с име на класът ':name' не е бил свързан към контролера"
    ],
    'page' => [
        'untitled' => 'Неозаглавен',
        'access_denied' => [
            'label' => 'Отказан достъп',
            'help' => "Вие нямате нужните права за да видите тази страница.",
            'cms_link' => 'Върни се към администраторския-панел'
        ],
        'invalid_token' => [
            'label' => 'Невалиден код за сигурност (token)'
        ]
    ],
    'partial' => [
        'not_found_name' => "Частичната страница ':name' не е намерена."
    ],
    'account' => [
        'sign_out' => 'Изход',
        'login' => 'Вход',
        'reset' => 'Нулиране',
        'restore' => 'Възстановяване',
        'login_placeholder' => 'вход',
        'password_placeholder' => 'парола',
        'forgot_password' => 'Забравена парола?',
        'enter_email' => 'Напиши своя имейл',
        'enter_login' => 'Напиши своя акаунт',
        'email_placeholder' => 'имейл',
        'enter_new_password' => 'Въведи нова парола',
        'password_reset' => 'Смяна на паролата',
        'restore_success' => 'Беше изпратен имейл до вашата поща със инструкций за въстановяване на паролата.',
        'restore_error' => "Не е намерен акаунт със име ':login'",
        'reset_success' => 'Вашата парола е  успешно нулирана. Сега може да се логнете.',
        'reset_error' => 'Невалиден данни за нулиране на паролата. Моля, опитайте отново!',
        'reset_fail' => 'Неуспешно нулиране на паролата!',
        'apply' => 'Приложи',
        'cancel' => 'Отказ',
        'delete' => 'Изтрии',
        'ok' => 'Потвърди'
    ],
    'dashboard' => [
        'menu_label' => 'Табло',
        'widget_label' => 'Джаджа',
        'widget_width' => 'Широчина',
        'full_width' => 'Пълна ширина',
        'add_widget' => 'Добави джаджа',
        'widget_inspector_title' => 'Настойка на джаджи',
        'widget_inspector_description' => 'Конфигуриране на джаджите за доклад',
        'widget_columns_label' => 'Ширина :columns',
        'widget_columns_description' => 'Ширина на джаджата, число между 1 и 10.',
        'widget_columns_error' => 'Моля, въведете ширината на джаджа като число между 1 и 10.',
        'columns' => '{1} column|[2,Inf] columns',
        'widget_new_row_label' => 'Принудително добави нов ред',
        'widget_new_row_description' => 'Поставете джаджа в нов ред.',
        'widget_title_label' => 'Заглавие на джаджа',
        'widget_title_error' => 'Заглавие на джаджа се изисква.',
        'status' => [
            'widget_title_default' => 'Състояние на системата',
            'online' => 'на линия',
            'maintenance' => 'в поддръжка',
            'update_available' => '{0} актуализации налични!|{1} актуализация налична!|[2,Inf] актуализации налични!'
        ]
    ],
    'user' => [
        'name' => 'Администратор',
        'menu_label' => 'Администратори',
        'menu_description' => 'Управление на админ-панелана: администратори, групи и разрешения.',
        'list_title' => 'Управление на администратори',
        'new' => 'Нов администратор',
        'login' => 'Вход',
        'first_name' => 'Име',
        'last_name' => 'Фамилия',
        'full_name' => 'Пълно име',
        'email' => 'Имейл',
        'groups' => 'Група',
        'groups_comment' => 'Укажете към коя група принадлежи този акаунт.',
        'avatar' => 'Картинка на профила',
        'password' => 'Парола',
        'password_confirmation' => 'Потвърди паролата',
        'permissions' => 'Разрешения',
        'account' => 'Потребителски профил',
        'superuser' => 'Супер Потребител',
        'superuser_comment' => 'Даване на този профил на неограничен достъп (права) до всички райони. ',
        'send_invite' => 'Изпрати покана по имейл',
        'send_invite_comment' => 'Изпраща приветствено съобщение, съдържащо информация за име и парола за вход.',
        'delete_confirm' => 'Наистина ли искате да изтриете този администратор?',
        'return' => 'Назад към списъка с администратори',
        'allow' => 'Позволи',
        'inherit' => 'Наследи',
        'deny' => 'Откажи',
        'group' => [
            'name' => 'Група',
            'name_field' => 'Име',
            'description_field' => 'Описание',
            'is_new_user_default_field' => 'Добавяне на нови администратори към тази група по подразбиране.',
            'code_field' => 'Код',
            'code_comment' => 'Въведете уникален код, ако искате да получите достъп до него с API.',
            'menu_label' => 'Групи',
            'list_title' => 'Управление на групи',
            'new' => 'Нова група',
            'delete_confirm' => 'Наистина ли искате да изтриете тази администраторска група?',
            'return' => 'Назад към списъка с групи',
            'users_count' => 'Потребители'
        ],
        'preferences' => [
            'not_authenticated' => 'Няма удостоверен потребител, за да се зареди или запишат предпочитанията му.'
        ]
    ],
    'list' => [
        'default_title' => 'Списък',
        'search_prompt' => 'Търсене...',
        'no_records' => 'Не са открити записи в тази гледка.',
        'missing_model' => 'Режим на работа на списък в :class не разполага с дефиниран модел.',
        'missing_column' => 'Все още няма дефиниции на колони за :columns.',
        'missing_columns' => 'Списък използван в :class все още няма дефиниран списък колони',
        'missing_definition' => "Режим на работа на списък не съдържа колони за ':field'.",
        'behavior_not_ready' => 'Режим на работа на списък не беше зареден, проверете дали викате makeLists() във вашия контролер.',
        'invalid_column_datetime' => "Стойността на колона ':column' не е дата/тайм обект, да не би да пропускате \$dates препратка в Модела?",
        'pagination' => 'Показаните записи: :from-:to от :total',
        'prev_page' => 'Предишна страница',
        'next_page' => 'Следваща страница',
        'refresh' => 'Обнови',
        'updating' => 'Обновяване...',
        'loading' => 'Зареждане...',
        'setup_title' => 'Настройка на списък',
        'setup_help' => 'Използвайте тикчетата, за да изберете колони, които искате да видите в списъка. Можете да промените позицията на колони, като ги плъзнете нагоре или надолу.',
        'records_per_page' => 'Записи на страница',
        'records_per_page_help' => 'Изберете брой на записи за показване на страница. Моля, имайте предвид, че голям брой записи на една страница може да забави работата на страницата.',
        'delete_selected' => 'Изтрии избраните',
        'delete_selected_empty' => 'Не са избрани записи за изтриване.',
        'delete_selected_confirm' => 'Изтриване на избраните записи?',
        'delete_selected_success' => 'Успешно изтрити избраните записи.',
        'column_switch_true' => 'Да',
        'column_switch_false' => 'Не'
    ],
    'fileupload' => [
        'attachment' => 'Прикачен файл',
        'help' => 'Добавете заглавие и описание за този прикачен файл.',
        'title_label' => 'Заглавие',
        'description_label' => 'Описание',
        'default_prompt' => 'Кликнете на %s или плъзнете файла тук, за да го качите',
        'attachment_url' => 'Адрес на прикачен файл',
        'upload_file' => 'Качи файл',
        'upload_error' => 'Грешка при качване',
        'remove_confirm' => 'Сигурни ли сте?',
        'remove_file' => 'Премахни файл'
    ],
    'form' => [
        'create_title' => 'Ново :name',
        'update_title' => 'Промени :name',
        'preview_title' => 'Прегледай :name',
        'create_success' => 'Това :name беше създадено успешно.',
        'update_success' => 'Това :name беше актуализирано успешно.',
        'delete_success' => 'Това :name беше изтрито успешно.',
        'missing_id' => 'Форма ID на запис не е посочено.',
        'missing_model' => 'Режим на работа на форма в :class не разполага с дефиниран модел.',
        'missing_definition' => "Режим на работа на форма не съдържа поле за ':field'.",
        'not_found' => 'Форма запис с ID на :id не може да бъде намерен.',
        'action_confirm' => 'Сигурни ли сте?',
        'create' => 'Създай',
        'create_and_close' => 'Създай и затвори',
        'creating' => 'Създаване...',
        'creating_name' => 'Създаване :name...',
        'save' => 'Запази',
        'save_and_close' => 'Запази и затвори',
        'saving' => 'Запазване...',
        'saving_name' => 'Запазване :name...',
        'delete' => 'Изтрии',
        'deleting' => 'Изтриване...',
        'confirm_delete' => 'Наистина ли искате да изтриете този запис?',
        'confirm_delete_multiple' => 'Наистина ли искате да изтриете избраните записи?',
        'deleting_name' => 'Изтриване :name...',
        'reset_default' => 'Възстанови по подразбиране',
        'resetting' => 'Възстановяване',
        'resetting_name' => 'Възстановяване :name',
        'undefined_tab' => 'Разни',
        'field_off' => 'Изключен',
        'field_on' => 'Включен',
        'add' => 'Добави',
        'apply' => 'Приложи',
        'cancel' => 'Отказ',
        'close' => 'Затвори',
        'confirm' => 'Потвърди',
        'reload' => 'Презареди',
        'complete' => 'Завърши',
        'ok' => 'ОК',
        'or' => 'или',
        'confirm_tab_close' => 'Наистина ли искате да затворите раздела? Незапазените промени ще бъдат загубени.',
        'behavior_not_ready' => 'Режим на работа на форма не беше зареден, проверете дали викате initForm() във вашия контролер.',
        'preview_no_files_message' => 'Все още няма качени файлове.',
        'preview_no_record_message' => 'Не е избран запис.',
        'select' => 'Избери',
        'select_all' => 'всичко',
        'select_none' => 'нищо',
        'select_placeholder' => 'моля изберете',
        'insert_row' => 'Вмъкни ред',
        'insert_row_below' => 'Вмъкни ред По-долу',
        'delete_row' => 'Изтрии ред',
        'concurrency_file_changed_title' => 'Файлът беше променен',
        'concurrency_file_changed_description' => "Файлът, който редактирате е бил променен на диска от друг потребител. Можете да презаредите файла и да загубите вашите промени или замени файла на диска.",
        'return_to_list' => 'Назад към списъка'
    ],
    'recordfinder' => [
        'find_record' => 'Намери запис'
    ],
    'relation' => [
        'missing_config' => "Режим на работа на връзки няма никакви настройки за ':config'.",
        'missing_definition' => "Режим на работа на връзки няма дефиниция за ':field'.",
        'missing_model' => 'Режим на работа на връзки използван в :class не разполага с дефиниран модел.',
        'invalid_action_single' => 'Това действие не може да се извърши на единствена връзка',
        'invalid_action_multi' => 'Това действие не може да се извърши на множество връзки.',
        'help' => 'Щракнете върху елемент за добавяне',
        'related_data' => 'Свързани :name данни',
        'add' => 'Добави',
        'add_selected' => 'Добави избрани',
        'add_a_new' => 'Добави ново :name',
        'link_selected' => 'Вържи избрани',
        'link_a_new' => 'Вържи ново :name',
        'cancel' => 'Отказ',
        'close' => 'Затвори',
        'add_name' => 'Добави :name',
        'create' => 'Създай',
        'create_name' => 'Създай :name',
        'update' => 'Актуализация',
        'update_name' => 'Актуализация :name',
        'preview' => 'Предварителен преглед',
        'preview_name' => 'Предварителен преглед :name',
        'remove' => 'Премахване',
        'remove_name' => 'Премахване :name',
        'delete' => 'Изтривам',
        'delete_name' => 'Изтривам :name',
        'delete_confirm' => 'Сигурни ли сте?',
        'link' => 'Вържи',
        'link_name' => 'Вържи :name',
        'unlink' => 'Прекратяване на връзката',
        'unlink_name' => 'Прекратяване на връзката :name',
        'unlink_confirm' => 'Сигурни ли сте?'
    ],
    'reorder' => [
        'default_title' => 'Пренареждане на записи',
        'no_records' => 'Не са налични записи, за да сортирате.',
    ],
    'model' => [
        'name' => 'Модел',
        'not_found' => "Модел ':class' със ИД :id не може д абъде намерено.",
        'missing_id' => 'Не е посочено ИД за търсене на записи в Модел ID.',
        'missing_relation' => "Модел ':class' не съдържа определение за ':relation'.",
        'missing_method' => "Модел ':class'не съдържа метод ':method'.",
        'invalid_class' => "Модел :model използван в :class не е валиден, той трябва да наследи \Model клас.",
        'mass_assignment_failed' => "Масовото назначаване Mass assignment се провали за Модела атрибут ':attribute'."
    ],
    'warnings' => [
        'tips' => 'Съвети за конфигурацията на системата',
        'tips_description' => 'Има проблематични въпроси, на които трябва да се обърне внимание, за да конфигурирате системата правилно.',
        'permissions'  => 'Директория :name или нейните поддиректории не е достъпна за писане от PHP (Няма права). Моля, задайте съответните разрешения за уеб сървъра на тази директория (папка).',
        'extension' => 'Разширението на PHP :name не е инсталирано. Моля инсталирайте тази библиотека и активирайте разширението.'
    ],
    'editor' => [
        'menu_label' => 'Редактор Код предпочитания и настройки',
        'menu_description' => 'Персонализирайте вашите предпочитания на редактора на код, като например размера на шрифта и цветова схема.',
        'font_size' => 'Размер шрифт',
        'tab_size' => 'Размер на табулацията',
        'use_hard_tabs' => 'Отстъпи използващи раздели',
        'code_folding' => 'Код сгъване',
        'word_wrap' => 'Събиране (разгъване) на текста',
        'highlight_active_line' => 'Маркирайте активната линия',
        'auto_closing' => 'Автоматично затваряне на тагове и специални символи',
        'show_invisibles' => 'Покажи невидими знаци',
        'show_gutter' => 'Покажи gutter',
        'theme' => 'Цветова схема'
    ],
    'tooltips' => [
        'preview_website' => 'Преглед на сайта'
    ],
    'mysettings' => [
        'menu_label' => 'Моите Настройки',
        'menu_description' => 'Настройки свързани с вашия администраторски профил'
    ],
    'myaccount' => [
        'menu_label' => 'Моят профил',
        'menu_description' => 'Обнови данните на профила ви, като име, имейл адрес и парола.',
        'menu_keywords' => 'вход за сигурност'
    ],
    'branding' => [
        'menu_label' => 'Персонализирайте администраторския-панел',
        'menu_description' => 'Персонализирайте администраторския-панел, като име, цветове и лого.',
        'brand' => 'Марка',
        'logo' => 'Лого',
        'logo_description' => 'Качете ваше лого което да използвате за администраторския-панел.',
        'app_name' => 'Име',
        'app_name_description' => 'Това име се показва в областта за заглавието на администраторския-панел.',
        'app_tagline' => 'Лозунг',
        'app_tagline_description' => 'Това име се показва на екрана за вход в администраторския-панел.',
        'colors' => 'Цветове',
        'primary_light' => 'Първичен (Светъл)',
        'primary_dark' => 'Първичен (Тъмен)',
        'secondary_light' => 'Вторичен (Светъл)',
        'secondary_dark' => 'Вторичен (Тъмен)',
        'styles' => 'Стилове',
        'custom_stylesheet' => 'Персонализиран стилове'
    ],
    'backend_preferences' => [
        'menu_label' => 'Администраторски-панел предпочитания',
        'menu_description' => 'Управлявайте предпочитанията на профила си като например желания език.',
        'locale' => 'Език',
        'locale_comment' => 'Изберете желаното местоположение за използване на език.'
    ],
    'access_log' => [
        'hint' => 'Този дневник показва списък на успешните опити за влизане от администраторите. Записите се съхраняват в продължение на общо :days дни.',
        'menu_label' => 'Дневник (регистър) на влизанията',
        'menu_description' => 'Преглед на списък с успешни влизания на потребители в администраторския-панел.',
        'created_at' => 'Дата и Час',
        'login' => 'Влизане',
        'ip_address' => 'ИП адрес',
        'first_name' => 'Име',
        'last_name' => 'Фамилия name',
        'email' => 'Имейл'
    ],
    'filter' => [
        'all' => 'всичко'
    ],
    'import_export' => [
        'upload_csv_file' => '1. Качи CSV файл',
        'import_file' => 'Внеси файл',
        'first_row_contains_titles' => 'Първия ред съдържа заглавията на колините ',
        'first_row_contains_titles_desc' => 'Оставете това тикче ако на първия ред в CSV се използват като заглавията на колоните.',
        'match_columns' => '2. Съчетайте колоните от файла с полетата на базата',
        'file_columns' => 'Колони от файла',
        'database_fields' => 'Полета на базата',
        'set_import_options' => '3. Задаване на опции за внасяне',
        'export_output_format' => '1. Изнесете изходен формат',
        'file_format' => 'Формат за файла',
        'standard_format' => 'Стандартен формат',
        'custom_format' => 'Персонализиран формат',
        'delimiter_char' => 'Разделителeн знак',
        'enclosure_char' => 'Затварящ знак',
        'escape_char' => 'Специален знак за избягване',
        'select_columns' => '2. Изберете колони за изнасяне',
        'column' => 'Колона',
        'columns' => 'Колони',
        'set_export_options' => '3. Задайте опций за изнасяне',
        'show_ignored_columns' => 'Покажи игнорираните колони',
        'auto_match_columns' => 'Автоматично обединяване на колони',
        'created' => 'Създаден',
        'updated' => 'Обновен',
        'skipped' => 'Пропуснат',
        'warnings' => 'Предупреждения',
        'errors' => 'Грешки',
        'skipped_rows' => 'Пропуснати редове',
        'import_progress' => 'Прогрес на внасянето',
        'processing' => 'Обработване',
        'import_error' => 'Грешка при внасяне',
        'upload_valid_csv' => 'Моля, качете валиден CSV файл',
        'drop_column_here' => 'Пуснете колоната тук...',
        'ignore_this_column' => 'Игнорирай тази колона',
        'processing_successful_line1' => 'Процес при износ на файла завърши успешно!',
        'processing_successful_line2' => 'Браузърът трябва да ви пренасочи автоматично за да свалите файла.',
        'export_progress' => 'Прогрес на изнасянето',
        'export_error' => 'Грешка при изнасяне',
        'column_preview' => 'Преглед колона',
        'file_not_found_error' => 'Файлът не е намерен',
        'empty_error' => 'Няма предоставени данни за изнасяне',
    ],
    'permissions' => [
        'manage_media' => 'Управление на медия'
    ],
    'mediafinder' => [
        'label' => 'Медия',
        'default_prompt' => 'Кликнете върху %s бутон за да намерите медия'
    ],
    'media' => [
        'menu_label' => 'Медия',
        'upload' => 'Качи',
        'move' => 'Премести',
        'delete' => 'Изтрии',
        'add_folder' => 'Добави папка',
        'search' => 'Търсене',
        'display' => 'Показване',
        'filter_everything' => 'Всичко',
        'filter_images' => 'Изображения',
        'filter_video' => 'Видео',
        'filter_audio' => 'Аудио',
        'filter_documents' => 'Документи',
        'library' => 'Библиотека',
        'size' => 'Размер',
        'title' => 'Заглавие',
        'last_modified' => 'Последно модифициран',
        'public_url' => 'Обществен URL',
        'click_here' => 'Натисни тук',
        'thumbnail_error' => 'Грешка при генериране на умалено изображение.',
        'return_to_parent' => 'Върнете се към основната папка',
        'return_to_parent_label' => 'Нагоре ..',
        'nothing_selected' => 'Нищо не е избрано.',
        'multiple_selected' => 'Множество предмети избрани.',
        'uploading_file_num' => 'Качване: брой на файл(ове)...',
        'uploading_complete' => 'Качването завършено',
        'uploading_error' => 'Качването неуспешно',
        'order_by' => 'Подредени по',
        'folder' => 'Папка',
        'no_files_found' => 'Не са намерени файлове по заявката ви.',
        'delete_empty' => 'Моля изберете елементи, за които да бъдат изтрити.',
        'delete_confirm' => 'Наистина ли искате да изтриете избрания елемент(и)?',
        'error_renaming_file' => 'Грешка при преименуването на елемента.',
        'new_folder_title' => 'Нова папка',
        'folder_name' => 'Име на папка',
        'error_creating_folder' => 'Грешка при създаване на папка',
        'folder_or_file_exist' => 'Папка или файл с посоченото име вече съществува.',
        'move_empty' => 'Моля изберете елементи които да бъдат преместени.',
        'move_popup_title' => 'Преместване на файлове или папки',
        'move_destination' => 'Дестинационна папка',
        'please_select_move_dest' => 'Моля изберете папка за дестинация.',
        'move_dest_src_match' => 'Моля, изберете друга папка за дестинация.',
        'empty_library' => 'Медийната библиотека е празна. Качете файлове, или създайте папки, за да започнете.',
        'insert' => 'Вмъквам',
        'crop_and_insert' => 'Отрежи и вмъкни',
        'select_single_image' => 'Моля, изберете едно изображение.',
        'selection_not_image' => 'Избраният елемент не е изображение.',
        'restore' => 'Отмяна на всички промени',
        'resize' => 'Преоразмеряване...',
        'selection_mode_normal' => 'Normal',
        'selection_mode_fixed_ratio' => 'Фиксиран  съотношение',
        'selection_mode_fixed_size' => 'Фиксиран  размер',
        'height' => 'Височина',
        'width' => 'Широчина',
        'selection_mode' => 'Режимът на избиране (селекция)',
        'resize_image' => 'Преоразмеряване изображение',
        'image_size' => 'Размер на изображение:',
        'selected_size' => 'Избран:'
    ]
];
