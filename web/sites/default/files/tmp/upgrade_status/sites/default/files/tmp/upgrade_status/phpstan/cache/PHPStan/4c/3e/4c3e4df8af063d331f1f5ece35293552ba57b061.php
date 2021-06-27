<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:40:"Defines the ConfigurableLanguage entity.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:17:"@ConfigEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:1139:"(
  id = "configurable_language",
  label = @Translation("Language"),
  label_collection = @Translation("Languages"),
  label_singular = @Translation("language"),
  label_plural = @Translation("languages"),
  label_count = @PluralTranslation(
    singular = "@count language",
    plural = "@count languages",
  ),
  handlers = {
    "list_builder" = "Drupal\\language\\LanguageListBuilder",
    "access" = "Drupal\\language\\LanguageAccessControlHandler",
    "form" = {
      "add" = "Drupal\\language\\Form\\LanguageAddForm",
      "edit" = "Drupal\\language\\Form\\LanguageEditForm",
      "delete" = "Drupal\\language\\Form\\LanguageDeleteForm"
    }
  },
  admin_permission = "administer languages",
  config_prefix = "entity",
  entity_keys = {
    "id" = "id",
    "label" = "label",
    "weight" = "weight"
  },
  config_export = {
    "id",
    "label",
    "direction",
    "weight",
    "locked"
  },
  links = {
    "delete-form" = "/admin/config/regional/language/delete/{configurable_language}",
    "edit-form" = "/admin/config/regional/language/edit/{configurable_language}",
    "collection" = "/admin/config/regional/language",
  }
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));