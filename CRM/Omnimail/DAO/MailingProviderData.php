<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from org.wikimedia.omnimail/xml/schema/CRM/Omnimail/MailingProviderData.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:dcddba9a3c3cee5b2f7b0f36020959ef)
 */
use CRM_Omnimail_ExtensionUtil as E;

/**
 * Database access object for the MailingProviderData entity.
 */
class CRM_Omnimail_DAO_MailingProviderData extends CRM_Core_DAO {
  const EXT = E::LONG_NAME;
  const TABLE_ADDED = '';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_mailing_provider_data';

  /**
   * Primary key field(s).
   *
   * @var string[]
   */
  public static $_primaryKey = ['contact_identifier', 'recipient_action_datetime', 'event_type'];

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * External reference for the contact
   *
   * @var string
   */
  public $contact_identifier;

  /**
   * External Reference for the mailing
   *
   * @var string
   */
  public $mailing_identifier;

  /**
   * Email Address
   *
   * @var string
   */
  public $email;

  /**
   * Type of action
   *
   * @var string
   */
  public $event_type;

  /**
   * When the action happened
   *
   * @var timestamp
   */
  public $recipient_action_datetime;

  /**
   * Contact in CiviCRM
   *
   * @var int
   */
  public $contact_id;

  /**
   * Has the action been synchronised through to CiviCRM
   *
   * @var bool
   */
  public $is_civicrm_updated;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_mailing_provider_data';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? E::ts('Mailing Provider Data') : E::ts('Mailing Provider Data');
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contact_id', 'civicrm_contact', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'contact_identifier' => [
          'name' => 'contact_identifier',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Contact Identifier'),
          'description' => E::ts('External reference for the contact'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_mailing_provider_data.contact_identifier',
          'table_name' => 'civicrm_mailing_provider_data',
          'entity' => 'MailingProviderData',
          'bao' => 'CRM_Omnimail_DAO_MailingProviderData',
          'localizable' => 0,
          'add' => NULL,
        ],
        'mailing_identifier' => [
          'name' => 'mailing_identifier',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Mailing Identifier'),
          'description' => E::ts('External Reference for the mailing'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_mailing_provider_data.mailing_identifier',
          'table_name' => 'civicrm_mailing_provider_data',
          'entity' => 'MailingProviderData',
          'bao' => 'CRM_Omnimail_DAO_MailingProviderData',
          'localizable' => 0,
          'add' => NULL,
        ],
        'email' => [
          'name' => 'email',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Email'),
          'description' => E::ts('Email Address'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_mailing_provider_data.email',
          'table_name' => 'civicrm_mailing_provider_data',
          'entity' => 'MailingProviderData',
          'bao' => 'CRM_Omnimail_DAO_MailingProviderData',
          'localizable' => 0,
          'add' => NULL,
        ],
        'event_type' => [
          'name' => 'event_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Event Type'),
          'description' => E::ts('Type of action'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_mailing_provider_data.event_type',
          'table_name' => 'civicrm_mailing_provider_data',
          'entity' => 'MailingProviderData',
          'bao' => 'CRM_Omnimail_DAO_MailingProviderData',
          'localizable' => 0,
          'add' => NULL,
        ],
        'recipient_action_datetime' => [
          'name' => 'recipient_action_datetime',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => E::ts('Recipient Action Datetime'),
          'description' => E::ts('When the action happened'),
          'where' => 'civicrm_mailing_provider_data.recipient_action_datetime',
          'table_name' => 'civicrm_mailing_provider_data',
          'entity' => 'MailingProviderData',
          'bao' => 'CRM_Omnimail_DAO_MailingProviderData',
          'localizable' => 0,
          'add' => NULL,
        ],
        'contact_id' => [
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => E::ts('Contact in CiviCRM'),
          'where' => 'civicrm_mailing_provider_data.contact_id',
          'table_name' => 'civicrm_mailing_provider_data',
          'entity' => 'MailingProviderData',
          'bao' => 'CRM_Omnimail_DAO_MailingProviderData',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'add' => NULL,
        ],
        'is_civicrm_updated' => [
          'name' => 'is_civicrm_updated',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'description' => E::ts('Has the action been synchronised through to CiviCRM'),
          'where' => 'civicrm_mailing_provider_data.is_civicrm_updated',
          'table_name' => 'civicrm_mailing_provider_data',
          'entity' => 'MailingProviderData',
          'bao' => 'CRM_Omnimail_DAO_MailingProviderData',
          'localizable' => 0,
          'add' => NULL,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'mailing_provider_data', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'mailing_provider_data', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
