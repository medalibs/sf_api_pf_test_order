<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'api_genid' => [['id'], ['_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/.well-known/genid']], [], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '[^.]+', '_format' => 'jsonld'], [['variable', '.', 'jsonld', '_format', true], ['variable', '/', '[^.]+', 'shortName', true], ['text', '/api/contexts']], [], [], []],
    '_api_/orders/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_operation_name' => '_api_/orders/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/orders']], [], [], []],
    '_api_/orders{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_operation_name' => '_api_/orders{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/orders']], [], [], []],
    '_api_/orders{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_operation_name' => '_api_/orders{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/orders']], [], [], []],
    '_api_/orders/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_operation_name' => '_api_/orders/{id}{._format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/orders']], [], [], []],
    '_api_/orders/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_operation_name' => '_api_/orders/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/orders']], [], [], []],
    '_api_/orders/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_operation_name' => '_api_/orders/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/orders']], [], [], []],
    '_api_/products/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_operation_name' => '_api_/products/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/products']], [], [], []],
    '_api_/products{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_operation_name' => '_api_/products{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/products']], [], [], []],
    '_api_/products{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_operation_name' => '_api_/products{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/products']], [], [], []],
    '_api_/products/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_operation_name' => '_api_/products/{id}{._format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/products']], [], [], []],
    '_api_/products/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_operation_name' => '_api_/products/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/products']], [], [], []],
    '_api_/products/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_operation_name' => '_api_/products/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/products']], [], [], []],
    '_api_/users/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_api_/users{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/users']], [], [], []],
    '_api_/users{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/users']], [], [], []],
    '_api_/users/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_api_/users/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_api_/users/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];
