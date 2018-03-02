<?php

namespace Drupal\handlebars_theme_handler\Plugin\ThemeFieldProcessor;

use Drupal\handlebars_theme_handler\Plugin\ThemeFieldProcessorBase;

/**
 * Returns the (structured) data of a field.
 *
 * @ThemeFieldProcessor(
 *   id = "field_formatted_text",
 *   label = @Translation("Formatted text"),
 *   field_types = {
 *     "text",
 *     "text_long",
 *     "text_with_summary"
 *   }
 * )
 */
class FieldFormattedText extends ThemeFieldProcessorBase {

  /**
   * {@inheritdoc}
   */
  protected function getItemData($field, $options = array()) {
    return check_markup($field->value, $field->format);
  }

}