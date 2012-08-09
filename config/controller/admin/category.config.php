<?php
return array (
    'controller_url'  => 'admin/noviusos_blognews/cateogry',
    'model' => 'Nos\\BlogNews\\Model_Category',
    'messages' => array(
        'successfully added' => __('Categorie successfully added.'),
        'successfully saved' => __('Categorie successfully saved.'),
        'successfully deleted' => __('The categorie has successfully been deleted!'),
        'you are about to delete, confim' => __('You are about to delete the categorie <span style="font-weight: bold;">":title"</span>. Are you sure you want to continue?'),
        'you are about to delete' => __('You are about to delete the categorie <span style="font-weight: bold;">":title"</span>.'),
        'exists in multiple lang' => __('This categorie exists in <strong>{count} languages</strong>.'),
        'delete in the following languages' => __('Delete this categorie in the following languages:'),
        'item deleted' => __('This categorie has been deleted.'),
        'not found' => __('categorie not found'),
        'blank_state_item_text' => __('categorie'),
    ),
    'tab' => array(
        'iconUrl' => 'static/apps/noviusosdev_blognews/img/16/post.png',
        'labels' => array(
            'insert' => __('Add a categorie'),
            'blankSlate' => __('Translate a categorie'),
        ),
    ),
    'layout' => array(
        'title' => 'cat_title',
        'large' => true,
        'content' => array(
            'expander' => array(
                'view' => 'nos::form/expander',
                'params' => array(
                    'title'   => 'Propriétés',
                    'nomargin' => true,
                    'options' => array(
                        'allowExpand' => false,
                    ),
                    'content' => array(
                        'view' => 'nos::form/fields',
                        'params' => array(
                            'begin' => '<table class="fieldset">',
                            'fields' => array(
                                'cat_virtual_name',
                                'cat_parent_id'
                            ),
                            'end' => '</table>',
                        ),
                    ),
                ),
            ),
        ),
        'save' => 'save',
    ),
    'fields' => array(
        'cat_title' => array (
            'label' => __('categorie'),
            'form' => array(
                'type' => 'text',
            ),
            'validation' => array(
                'required',
                'min_length' => array(2),
            ),
        ),
        'cat_virtual_name' => array(
            'label' => __('URL: '),
            'form' => array(
                'type' => 'text',
            ),
            'validation' => array(
                'required',
                'min_length' => array(2),
            ),
        ),
        'cat_parent_id' => array(
            'label' => __('Dans la catégorie: '),
            'widget' => 'Nos\BlogNews\Widget_Category_Selector',
            'widget_options' => array(
                'width'                 => '100%',
                'height'                => '350px',
                'namespace'             => 'overide_me',
                'sortable'              => true,
                'application_name'      => 'overide_me'
            ),
        ),
        'save' => array(
            'label' => '',
            'form' => array(
                'type' => 'submit',
                'tag' => 'button',
                'value' => __('Save'),
                'class' => 'primary',
                'data-icon' => 'check',
            ),
        ),
    ),
);