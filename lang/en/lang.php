<?php

return [
    'plugin_name' => 'Catalog',
    'plugin_description' => 'Provide a full catalog',
    'products'  =>  [
        'new_product' => 'New Product',
        'menu_label' => 'Products',
        'id' => 'ID',
        'title' => 'Title',
        'title_ph' => 'Title',
        'slug' => 'Slug',
        'slug_ph' => 'Slug',
        'published' => 'Published',
        'details_tab_title' => 'Details',
        'items_available' => 'Items available',
        'items_available_ph' => 'Items available',
        'description' => 'Description',
        'description_ph' => 'Description',
        'price' => 'Price',
        'price_ph' => 'Price',
        'discount_price' => 'Discount price',
        'discount_price_ph' => 'Discount price',
        'featured_images' => 'Featured images',
        'category' => 'Category',
        'category_tab_title' => 'Categories',
        'categories_cmt' => 'Select categories the product belongs to',
        'return_to_list' => 'Return to product list',
    ],
    'categories'  =>  [
        'new_category' => 'New Category',
        'reorder_category' => 'Manage Categories Order',
        'menu_label' => 'Categories',
        'return_to_list' => 'Return to categories',
    ],
    'custom_fields'  =>  [
        'new_category' => 'New Custom Field',
        'menu_label' => 'Custom Fields',
        'template_code_label' => 'Template Code',
        'display_name_label' => 'Display name',
        'default_value_label' => 'Default value',
        'template_code_ph' => 'Name for using in templates',
        'display_name_ph' => 'Display name for fromtend',
        'default_value_comment' => 'Default value will be added to products only on custom field creation. Updated value will only be added to the products created after this update.',
        'return_to_list' => 'Return to custom fields list',
    ],
    'custom_value'  =>  [
        'name_label' => 'Custom Value',
        'value_label' => 'Value',
    ],
    'groups'  =>  [
        'new_group' => 'New Group',
        'menu_label' => 'Groups',
        'return_to_list' => 'Return to groupd',
    ],
    'config' => [
        'form' => [
            'name' => 'Product',
            'create_title' => 'Create Product',
            'update_title' => 'Edit Product',
            'category_name' => 'Product',
            'category_create_title' => 'Create Category',
            'category_update_title' => 'Edit Category',
            'return_to_list' => 'Return to categories list',
            'customfields_name' => 'CustomField',
            'customfields_create' => 'Create CustomFields',
            'customfields_update' => 'Edit CustomFields',
            'customvalue_name' => 'CustomField',
            'customvalue_update' => 'Edit Custom Value',
            'group_name' => 'Group',
            'group_create_title' => 'Create Group',
            'group_update_title' => 'Edit Group',
        ],
        'list' => [
            'title' => 'Manage Products',
            'category_title' => 'Manage Categories',
            'customfields_title' => 'Manage CustomFields',
            'customvalue_title' => 'Manage CustomValues',
            'group_title' => 'Manage Groups',
        ],
    ],
    'settings' => [
        'access_categories' => 'Manage product categories',
        'access_products' => 'Manage products',
        'access_custom_fields' => 'Manage custom fields for products',
        'access_groups' => 'Manage groups',
    ],
    'catalog' => [
        'delete_confirm' => 'Do you really want to delete this product ?',
        'delete_custom_field_confirm' => 'Do you really want to delete this custom field ?',
        'delete_group_confirm' => 'Do you really want to delete this group ?',
        'delete_category_confirm' => 'Do you really want to delete this category ?',
    ],
    'component' => [
        'categories' => [
            'name' => 'Categories',
            'description' => 'Display a list of categories',
            'param' => [
                'idparam_title' => 'Slug param name',
                'idparam_desc' => 'The URL route parameter used for looking up the current category by its slug. This property is used by the default component partial for marking the currently active category.',
                'display_empty_title' => 'Display empty categories',
                'display_empty_desc' => 'When disabled, display only categories which have at least one product.',
                'no_products_title' => 'No categories message',
                'no_products_desc' => 'Message to display in the categories list in case if there are no categories. This property is used by the default component partial.',
                'subcategories_group' => '', // Translating groups does not work
                'subcategories_title' => 'Sub categories only',
                'subcategories_desc' => 'Display only subcategories of current category.',
                'subcategories_title_title' => 'Sub categories title',
                'subcategories_title_desc' => 'Display a title for sub categories.',
                'render_view_group' => '',
                'render_view_title' => 'View',
                'render_view_desc' => 'Indicate which partial file of the component should be used to render view.',
                'category_page_title' => 'Category page',
                'category_page_desc' => 'Name of the category page file for the category links. This property is used by the default component partial.',
            ],
        ],
        'product_list' => [
            'name' => 'Product List',
            'description' => 'Display a list of products',
            'param' => [
                'category_param_title' => 'Dynamic category',
                'category_param_desc' => 'Get the category from parameter.',
                'usecategoryfilter_param_title' => 'Use category filter',
                'usecategoryfilter_param_desc' => 'Check if you want to use the category filter function',
                'categoryfilter_param_title' => 'Category filter',
                'categoryfilter_param_desc' => 'Select a category to filter the product list by. Leave empty to show all products.',
                'product_page_title' => 'Product page',
                'product_page_desc' => 'Name of the product page file for the "Learn more" links. This property is used by the default component partial.',
                'product_page_id_title' => 'Product page param name',
                'product_page_id_desc' => 'The expected parameter name used when creating links to the product page.',
                'no_product_title' => 'No products message',
                'no_product_desc' => 'Message to display in the product list in case if there are no products. This property is used by the default component partial.',
                'products_per_page_title' => 'Products per page',
                'products_per_page_validation_message' => 'Invalid format of the products per page value',
                'page_param_title' => 'Pagination parameter name',
                'page_param_desc' => 'The expected parameter name used by the pagination pages.',
            ],
        ],
        'product_details' => [
            'name' => 'Product Details',
            'description' => 'Details of displayed product',
            'param' => [
                'id_param_title' => 'Slug param name',
                'id_param_desc' => 'The URL route parameter used for looking up the product by its slug.',
            ],
        ],
    ],
    'validation' => [
        'price_regex' => 'The price must be a valid monetary value.',
        'discount_price_regex' => 'The discount price must be a valid monetary value.',
    ]
];