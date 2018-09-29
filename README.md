# commerce_ext
Some commerce extensions/modifications.

!!! Drupal-8.6.0 and above has a breaking change (taxonomy_update_8502 move table taxonomy_term_hierarchy to taxonomy_term__parent). Last compatible version is 8.5.7.

Module add some missing (taxonomy term depth in commerce_product)
or not well working (filter price) things for commerce2 for drupal8.

* views relationship and filter for commerce_product taxonomy term with depth
** more or less copy/paste from node implementation. (for new installation,
for existing should presave all products containing terms with hierarhy in order to use)

* views filter plugin for commerce_product_variation price - extend standart numeric filter. 
(should have commerce_product_variation in views product)
