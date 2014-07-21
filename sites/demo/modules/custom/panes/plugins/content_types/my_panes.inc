<?php
/**
 * @file
 * This is the file with parameters for Module My Panes.
 *
 * Plugins are described by creating a $plugin array which will be used
 * by the system that includes this file.
 */
$plugin = array(
  'title' => t('My panes plugin'), // Название плагина, отображаемое при его выборе.
  'description' => t('My panes plugin'), // Описание плагина, отображаемое при его выборе.
  'category' => t('My panes'), // Категория, в которой будет находиться плагин.
  'edit form' => 'my_panes_edit_form', // Форма с настройками плагина.
  'render callback' => 'my_panes_content_type_render', // Функция, которая будет формировать и выводить содержимое плагина.
  'admin info' => 'my_panes_admin_info',
  'all contexts' => TRUE, // Флаг, указывающий, что плагину будут доступны все контексты.
  'single' => TRUE, // Флаг, указывающий является ли плагин подтипом другого.
);

/**
 * 'Edit form' callback for the content type.
 */
function my_panes_edit_form($form, &$form_state) {
  // Получаем ранее введенные настройки.
  $conf = $form_state['conf'];

  $form['text'] = array(
    '#type' => 'textarea',
    '#title' => t('Body'),
    '#default_value' => $conf['text'],
  );

  $form['radio'] = array(
    '#type' =>'checkbox',
    '#title' => t('Add radio!'),
    '#default_value' => $conf['radio'],
  );

  return $form;
}

/**
 * Submit callback for the example_text_edit_form().
 */
function my_panes_edit_form_submit($form, &$form_state) {
  foreach (array('text', 'radio') as $key) {
    $form_state['conf'][$key] = $form_state['values'][$key];
  }
}

/**
 * Render callback for the content type.
 */
function my_panes_content_type_render($subtype, $conf, $args, $context){
  if (!empty($conf)) {
    $block = new stdClass();
    $description = $conf['text'];
    $radio = $conf['radio'];
    if ($radio == 1) {
      $radio_cont = '<iframe src="http://www.partyviberadio.com/player/embed-auto-cassette/reggae.html" style="border:0px #FFFFFF none;" name="embed-cassette" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="170px" width="200px">
      </iframe>';
    }
    else {
      $radio_cont = 'Sad without music :( <br/> <b>Turn on radio!</b>';
    }
  $block->content = $description . '<hr>' . $radio_cont;
  return $block;
  }
}

/**
 * 'admin info' callback for panel pane.
 */
function my_panes_admin_info($subtype, $conf, $contexts) {
  if (!empty($conf)) {
    $block = new stdClass;
    $block->title = $conf['override_title'] ? $conf['override_title_text'] : '';
    $block->content = $conf['text'];
    return $block;
  }
}
