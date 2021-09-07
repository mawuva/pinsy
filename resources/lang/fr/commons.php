<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Common actions performed on resources.
    |--------------------------------------------------------------------------
    |
    | The following language lines are used for various / commons actions that
    | can be performed on resources.
    |
    */

    'actions' => [
        'create'        => 'Create',
        'create_new'    => 'Create New :Entity',

        'save'          => 'Save',

        'read'          => 'Read',
        'read_this'     => 'Read This :Entity',

        'show'          => 'Show',
        'show_this'     => 'Show This :Entity',
        'show_deleted'  => 'Show Deleted :Entity',
        'show_infos'    => 'Show :Entity Infos',
        'show_details'  => 'Show :Entity Details',

        'edit'          => 'Edit',
        'edit_this'     => 'Edit This :Entity',
        
        'update'        => 'Update',
        'update_this'   => 'Update This :Entity',

        'delete'        => 'Delete',
        'delete_this'   => 'Delete This :Entity',

        'restore'       => 'Restore',
        'restore_this'  => 'Restore This :Entity',

        'back'          => 'Back',
        'back_to'       => 'Back to :Entity',
    ],

    /*
    |--------------------------------------------------------------------------
    | Common messages that can be displayed to users.
    |--------------------------------------------------------------------------
    |
    | The following language lines are used for various / commons messages that
    | can be dispalyed to users.
    |
    */

    'messages' => [
        'successfully' => [
            'created'   => [
                'entity'    => ':Entity created successfully.',
            ],

            'saved'     => [
                'entity'    => ':Entity saved successfully.',
            ],
            
            'retrieved'  => [
                'entity'    => 'Retrieved :Entity successfully.',
                'records'   => 'Retrieved records successfully.',
                'searched'  => 'Retrieved searched records successfully.',
                'deleted'   => 'Retrieved deleted records successfully.',
            ],

            'updated'   => [
                'entity'    => ':Entity updated successfully.',
            ],

            'deleted'   => [
                'entity'                => ':Entity deleted successfully.',
                'entity_permanently'    => ':Entity permanently deleted successfully.',
            ],

            'restored'  => [
                'entity'    => ':Entity restored successfully.',
            ],
        ],

        'records'   => [
            'not_available'     => 'No records available yet.',
            'not_found'         => 'No records found for this request.',
            'not_found_trashed' => 'Trashed records not found.',
        ],

        'resource'  => [
            'not_found'                     => 'The requested resource was not found.',
            'already_exists'                => 'The resource you are trying to create already exists.',
            'attribute_already_exists'      => 'This :attribute already exists.',
        ],

        'not_matching' => [
            'credentials'   => 'The provided credentials do not match our records.',
            'email'         => 'The provided email do not match our records.',
            'password'      => 'The provided password does not match our records.',
        ],

        'invalid' => [
            'attribute'     => 'Invalid :attribute',
            'identifiant'   => 'Invalid identifiant',
            'email'         => 'Invalid email address',
            'phone_number'  => 'Invalid phone number',
            'password'      => 'Invalid password',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'avatar'                => 'Avatar',
        'cover_picture'         => 'Photo de courverture',
        'background_picture'    => 'Photo d\'arrière plan',
        'slug'                  => 'Slug',
        'model'                 => 'Modele',
        'address'               => 'Adresse',
        'age'                   => 'Age',
        'available'             => 'Disponible',
        'city'                  => 'Ville',
        'content'               => 'Contenu',
        'country'               => 'Pays',
        'current_password'      => 'Mot de passe actuel',
        'date'                  => 'Date',
        'day'                   => 'Jour',
        'description'           => 'Description',
        'email'                 => 'Adresse email',
        'excerpt'               => 'Extrait',
        'first_name'            => 'Prénom',
        'gender'                => 'Genre',
        'hour'                  => 'Heure',
        'last_name'             => 'Nom',
        'minute'                => 'Minute',
        'mobile'                => 'Portable',
        'month'                 => 'Mois',
        'name'                  => 'Nom',
        'password'              => 'Mot de passe',
        'password_confirmation' => 'Confirmation du mot de passe',
        'confirm_password'      => 'Confirmer le mot de passe',
        'phone'                 => 'Téléphone',
        'phone_number'          => 'Numéro de téléphone',
        'second'                => 'Seconde',
        'sex'                   => 'Sexe',
        'size'                  => 'Taille',
        'time'                  => 'Heure',
        'title'                 => 'Titre',
        'username'              => 'Nom d\'utilisateur',
        'year'                  => 'Année',
        'code'                  => 'Code',
        'created_at'            => 'Créé(e) à',
        'creation_date'         => 'Date de création',
        'updated_at'            => 'Modifié(e) à',
        'update_date'           => 'Date de mise à jour',
        'modification_date'     => 'Date de modification',
        'user_profile'          => 'Profil utilisateur',
        'profile'               => 'Profil',
        'identifiants'          => [
            'all'               => 'Identifiant (Adresse Email, Téléphone ou Pseudo)',
            'only'              => [
                'email_or_phone'    => 'Identifiant (Adresse Email ou Téléphone)',
                'email_or_username' => 'Identifiant (Adresse Email ou Pseudo)',
                'phone_or_username' => 'Identifiant (Téléphone ou Pseudo)',
            ],
        ],
    ],
];
