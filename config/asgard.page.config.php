<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Partials to include on page views
    |--------------------------------------------------------------------------
    | List the partials you wish to include on the different type page views
    | The content of those fields well be caught by the PageWasCreated and PageWasEdited events
    */
    'partials' => [
        'translatable' => [
            // 'create' => ['pageextension::admin.fields.sub-title-create'],
            // 'edit' => ['pageextension::admin.fields.sub-title-update'],
        ],
        'normal' => [
            // 'create' => ['pageextension::admin.fields.author-create'],
            // 'edit' => ['pageextension::admin.fields.author-update'],
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Dynamic relations
    |--------------------------------------------------------------------------
    | Add relations that will be dynamically added to the Page entity
    */
    'relations' => [
//        'extension' => function ($self) {
//            return $self->belongsTo(PageExtension::class, 'id', 'page_id')->first();
//        }
    ],
];
