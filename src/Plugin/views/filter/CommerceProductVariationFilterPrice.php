<?php
 
/**
  * @file
  * Definition of Drupal\mymodule\Plugin\views\filter\CommerceProductVariationFilterPrice.
  */

namespace Drupal\mymodule\Plugin\views\filter;

use Drupal\views\Plugin\views\display\DisplayPluginBase;
use Drupal\views\Plugin\views\filter\NumericFilter;
use Drupal\views\ViewExecutable;

/**
  * Filters price.
  *
  * @ingroup views_filter_handlers
  *
  * @ViewsFilter("commerce_product_variation_filter_price")
  */
class CommerceProductVariationFilterPrice extends NumericFilter {
}
