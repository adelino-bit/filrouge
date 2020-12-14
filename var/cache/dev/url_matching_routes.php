<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/admin/users' => [
            [['_route' => 'add_user', '_controller' => 'App\\Controller\\UserController::addUser'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_users_get_users_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get_users'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/profils/{id }/users' => [[['_route' => 'api_profils_get_profil_users_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get_profil_users', 'id' => null], null, ['GET' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api(?'
                    .'|/admin/users/([^/]++)(*:70)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:105)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:136)'
                        .'|c(?'
                            .'|ontexts/(.+)(?:\\.([^/]++))?(*:175)'
                            .'|ms(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:206)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:244)'
                                .')'
                            .')'
                        .')'
                        .'|a(?'
                            .'|dmin(?'
                                .'|s(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:288)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:326)'
                                    .')'
                                .')'
                                .'|/(?'
                                    .'|users/([^/]++)(?'
                                        .'|(*:357)'
                                    .')'
                                    .'|profils(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:394)'
                                        .')'
                                        .'|/(?'
                                            .'|(\\d+)(?'
                                                .'|(*:415)'
                                            .')'
                                            .'|([^/]++)/users(?:\\.([^/]++))?(*:453)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|pprenants(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:495)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:533)'
                                .')'
                            .')'
                        .')'
                        .'|formateurs(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:575)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:613)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        70 => [[['_route' => 'update', '_controller' => 'App\\Controller\\UserController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        105 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        136 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        175 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        206 => [
            [['_route' => 'api_cms_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Cm', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_cms_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Cm', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        244 => [
            [['_route' => 'api_cms_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Cm', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_cms_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Cm', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_cms_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Cm', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_cms_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Cm', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        288 => [
            [['_route' => 'api_admins_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_admins_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        326 => [
            [['_route' => 'api_admins_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_admins_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_admins_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_admins_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Admin', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        357 => [
            [['_route' => 'api_users_get_user_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get_user'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_update_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'update'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        394 => [
            [['_route' => 'api_profils_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        415 => [
            [['_route' => 'api_profils_get_profil_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get_profil'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_update_profil_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'update_profil'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_profils_delete_profil_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'delete_profil'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        453 => [[['_route' => 'api_profils_users_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_profils_users_get_subresource', '_api_subresource_context' => ['property' => 'users', 'identifiers' => [['id', 'App\\Entity\\Profil', true]], 'collection' => true, 'operationId' => 'api_profils_users_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        495 => [
            [['_route' => 'api_apprenants_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        533 => [
            [['_route' => 'api_apprenants_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        575 => [
            [['_route' => 'api_formateurs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        613 => [
            [['_route' => 'api_formateurs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
