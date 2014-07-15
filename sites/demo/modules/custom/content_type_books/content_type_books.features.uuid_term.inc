<?php
/**
 * @file
 * content_type_books.features.uuid_term.inc
 */

/**
 * Implements hook_uuid_features_default_terms().
 */
function content_type_books_uuid_features_default_terms() {
  $terms = array();

  $terms[] = array(
    'name' => 'Knopf',
    'description' => '',
    'format' => 'filtered_html',
    'weight' => 0,
    'uuid' => '0b2988e1-3b2a-47aa-b865-08b54f2176c0',
    'vocabulary_machine_name' => 'publisher',
  );
  $terms[] = array(
    'name' => 'Random House: Modern Library',
    'description' => '',
    'format' => 'filtered_html',
    'weight' => 0,
    'uuid' => '20fc6f26-e3f5-4a77-a3a9-019ac1894e7e',
    'vocabulary_machine_name' => 'publisher',
  );
  $terms[] = array(
    'name' => 'Houghton Mifflin',
    'description' => '',
    'format' => 'filtered_html',
    'weight' => 0,
    'uuid' => '534a816e-05da-49ba-a4c1-83e71ea79abc',
    'vocabulary_machine_name' => 'publisher',
  );
  $terms[] = array(
    'name' => 'Scholastic Press',
    'description' => '',
    'format' => 'filtered_html',
    'weight' => 0,
    'uuid' => '55563bf2-1e85-45ce-9256-7f4e8016b362',
    'vocabulary_machine_name' => 'publisher',
  );
  $terms[] = array(
    'name' => 'Putnam Adult',
    'description' => '',
    'format' => 'filtered_html',
    'weight' => 0,
    'uuid' => '6c3fffa2-c3cd-45ba-a89f-fda00665a697',
    'vocabulary_machine_name' => 'publisher',
  );
  $terms[] = array(
    'name' => 'Henry Holt and Co.',
    'description' => '',
    'format' => 'filtered_html',
    'weight' => 0,
    'uuid' => 'b109ad25-1b2c-473a-91e6-8b080e65e36f',
    'vocabulary_machine_name' => 'publisher',
  );
  $terms[] = array(
    'name' => 'Doubleday',
    'description' => '',
    'format' => 'filtered_html',
    'weight' => 0,
    'uuid' => 'e3f5d795-b85a-4365-a4e2-8b0e5ebbf416',
    'vocabulary_machine_name' => 'publisher',
  );
  $terms[] = array(
    'name' => 'Bantam',
    'description' => '',
    'format' => 'filtered_html',
    'weight' => 0,
    'uuid' => 'e8061b51-ee32-43f1-b6f9-94afb0d4a1b3',
    'vocabulary_machine_name' => 'publisher',
  );
  $terms[] = array(
    'name' => 'W.W. Norton & Company',
    'description' => '',
    'format' => 'filtered_html',
    'weight' => 0,
    'uuid' => 'ed58291c-7ecb-4d1d-9b18-065fb0b1bc56',
    'vocabulary_machine_name' => 'publisher',
  );
  $terms[] = array(
    'name' => 'Crown',
    'description' => '',
    'format' => 'filtered_html',
    'weight' => 0,
    'uuid' => 'fab6fcd2-3285-485c-ab4b-7c0504817ba6',
    'vocabulary_machine_name' => 'publisher',
  );
  return $terms;
}
