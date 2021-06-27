<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/includes/database.inc-1624732867',
   'data' => 
  array (
    '025827fcb25c7d399f2833740dac789c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @file
 * Core systems for the database layer.
 *
 * Classes required for basic functioning of the database system should be
 * placed in this file.  All utility functions should also be placed in this
 * file only, as they cannot auto-load the way classes can.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f901bae0b00686276787c3e1c3e5913b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Executes an arbitrary query string against the active database.
 *
 * Use this function for SELECT queries if it is just a simple query string.
 * If the caller or other modules need to change the query, use
 * \\Drupal::database()->select() instead.
 *
 * Do not use this function for INSERT, UPDATE, or DELETE queries. Those should
 * be handled via \\Drupal::database()->insert(), \\Drupal::database()->update(),
 * \\Drupal::database()->merge()and \\Drupal::database()->delete().
 *
 * @param string|\\Drupal\\Core\\Database\\StatementInterface $query
 *   The prepared statement query to run. Although it will accept both named and
 *   unnamed placeholders, named placeholders are strongly preferred as they are
 *   more self-documenting. If the argument corresponding to a placeholder is
 *   an array of values to be expanded (for example, with an IN query), the
 *   placeholder should be named with a trailing bracket like :example[].
 * @param array $args
 *   An array of values to substitute into the query. If the query uses named
 *   placeholders, this is an associative array in any order. If the query uses
 *   unnamed placeholders (?), this is an indexed array and the order must match
 *   the order of placeholders in the query string.
 * @param array $options
 *   An array of options to control how the query operates.
 *
 * @return \\Drupal\\Core\\Database\\StatementInterface
 *   A prepared statement object, already executed.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container
 *   and call query() on it. For example,
 *   $injected_database->query($query, $args, $options);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Connection::query()
 * @see \\Drupal\\Core\\Database\\Connection::defaultOptions()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_query',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a38671944b968132c5aba0f5563e0c41' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Executes a query against the active database, restricted to a range.
 *
 * @param string $query
 *   The prepared statement query to run. Although it will accept both named and
 *   unnamed placeholders, named placeholders are strongly preferred as they are
 *   more self-documenting.
 * @param $from
 *   The first record from the result set to return.
 * @param $count
 *   The number of records to return from the result set.
 * @param array $args
 *   An array of values to substitute into the query. If the query uses named
 *   placeholders, this is an associative array in any order. If the query uses
 *   unnamed placeholders (?), this is an indexed array and the order must match
 *   the order of placeholders in the query string.
 * @param array $options
 *   An array of options to control how the query operates.
 *
 * @return \\Drupal\\Core\\Database\\StatementInterface
 *   A prepared statement object, already executed.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container
 *   and call queryRange() on it. For example,
 *   $injected_database->queryRange($query, $from, $count, $args, $options);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Connection::queryRange()
 * @see \\Drupal\\Core\\Database\\Connection::defaultOptions()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_query_range',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3cb74f9507b053b4931301fea28b56f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Executes a SELECT query string and saves the result set to a temporary table.
 *
 * The execution of the query string happens against the active database.
 *
 * @param string $query
 *   The prepared SELECT statement query to run. Although it will accept both
 *   named and unnamed placeholders, named placeholders are strongly preferred
 *   as they are more self-documenting.
 * @param array $args
 *   An array of values to substitute into the query. If the query uses named
 *   placeholders, this is an associative array in any order. If the query uses
 *   unnamed placeholders (?), this is an indexed array and the order must match
 *   the order of placeholders in the query string.
 * @param array $options
 *   An array of options to control how the query operates.
 *
 * @return string
 *   The name of the temporary table.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container
 *   and call queryTemporary() on it. For example,
 *   $injected_database->queryTemporary($query, $args, $options);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Connection::queryTemporary()
 * @see \\Drupal\\Core\\Database\\Connection::defaultOptions()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_query_temporary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '67b6a9281e5470e5a3bfa6a494ed6e7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns a new InsertQuery object for the active database.
 *
 * @param string $table
 *   The table into which to insert.
 * @param array $options
 *   An array of options to control how the query operates.
 *
 * @return \\Drupal\\Core\\Database\\Query\\Insert
 *   A new Insert object for this connection.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead, get
 *   a database connection injected into your service from the container and
 *   call insert() on it. For example,
 *   $injected_database->insert($table, $options);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Connection::insert()
 * @see \\Drupal\\Core\\Database\\Connection::defaultOptions()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_insert',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8124dc4ef0f4bb846e6132f436b74df6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns a new MergeQuery object for the active database.
 *
 * @param string $table
 *   Name of the table to associate with this query.
 * @param array $options
 *   An array of options to control how the query operates.
 *
 * @return \\Drupal\\Core\\Database\\Query\\Merge
 *   A new Merge object for this connection.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead, get
 *   a database connection injected into your service from the container and
 *   call merge() on it. For example,
 *   $injected_database->merge($table, $options);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Connection::merge()
 * @see \\Drupal\\Core\\Database\\Connection::defaultOptions()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_merge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2bc4977c910e8a28b429ce44b894313e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns a new UpdateQuery object for the active database.
 *
 * @param string $table
 *   The table to update.
 * @param array $options
 *   An array of options to control how the query operates.
 *
 * @return \\Drupal\\Core\\Database\\Query\\Update
 *   A new Update object for this connection.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead, get
 *   a database connection injected into your service from the container and
 *   call update() on it. For example,
 *   $injected_database->update($table, $options);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Connection::update()
 * @see \\Drupal\\Core\\Database\\Connection::defaultOptions()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_update',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '55de392a84904be6e019c947bba34729' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns a new DeleteQuery object for the active database.
 *
 * @param string $table
 *   The table from which to delete.
 * @param array $options
 *   An array of options to control how the query operates.
 *
 * @return \\Drupal\\Core\\Database\\Query\\Delete
 *   A new Delete object for this connection.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead, get
 *   a database connection injected into your service from the container and
 *   call delete() on it. For example,
 *   $injected_database->delete($table, $options);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Connection::delete()
 * @see \\Drupal\\Core\\Database\\Connection::defaultOptions()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_delete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7040cd9f6304e82739b67b2d0d0a9b39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns a new TruncateQuery object for the active database.
 *
 * @param string $table
 *   The table from which to truncate.
 * @param array $options
 *   An array of options to control how the query operates.
 *
 * @return \\Drupal\\Core\\Database\\Query\\Truncate
 *   A new Truncate object for this connection.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead, get
 *   a database connection injected into your service from the container and
 *   call truncate() on it. For example,
 *   $injected_database->truncate($table, $options);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Connection::truncate()
 * @see \\Drupal\\Core\\Database\\Connection::defaultOptions()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_truncate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3dfb769735500f1bb89c624cca862941' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns a new SelectQuery object for the active database.
 *
 * @param string|\\Drupal\\Core\\Database\\Query\\SelectInterface $table
 *   The base table for this query. May be a string or another SelectInterface
 *   object. If a SelectInterface object is passed, it will be used as a
 *   subselect.
 * @param string $alias
 *   (optional) The alias for the base table of this query.
 * @param array $options
 *   (optional) An array of options to control how the query operates.
 *
 * @return \\Drupal\\Core\\Database\\Query\\Select
 *   A new Select object for this connection.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead, get
 *   a database connection injected into your service from the container and
 *   call select() on it. For example,
 *   $injected_database->select($table, $alias, $options);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Connection::select()
 * @see \\Drupal\\Core\\Database\\Connection::defaultOptions()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_select',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '80b1cea9069ac8662f7931d3db355e35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns a new transaction object for the active database.
 *
 * @param string $name
 *   Optional name of the transaction.
 * @param array $options
 *   An array of options to control how the transaction operates:
 *   - target: The database target name.
 *
 * @return \\Drupal\\Core\\Database\\Transaction
 *   A new Transaction object for this connection.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead, get
 *   a database connection injected into your service from the container and
 *   call startTransaction() on it. For example,
 *   $injected_database->startTransaction($name);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Connection::startTransaction()
 * @see \\Drupal\\Core\\Database\\Connection::defaultOptions()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_transaction',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'dbb3f5ea8ea62eeb798f42adeccc6410' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Sets a new active database.
 *
 * @param $key
 *   The key in the $databases array to set as the default database.
 *
 * @return string|null
 *   The key of the formerly active database.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use
 * \\Drupal\\Core\\Database\\Database::setActiveConnection().
 *
 * @see https://www.drupal.org/node/2993033
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_set_active',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '967826c43e8ceb8e39285d487a38547e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Restricts a dynamic table name to safe characters.
 *
 * Only keeps alphanumeric and underscores.
 *
 * @param $table
 *   The table name to escape.
 *
 * @return string
 *   The escaped table name as a string.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container
 *   and call escapeTable() on it. For example,
 *   $injected_database->escapeTable($table);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Connection::escapeTable()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_escape_table',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6ec6771912cb975d2dd9d81a9e563a47' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Restricts a dynamic column or constraint name to safe characters.
 *
 * Only keeps alphanumeric and underscores.
 *
 * @param string $field
 *   The field name to escape.
 *
 * @return string
 *   The escaped field name as a string.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container
 *   and call escapeField() on it. For example,
 *   $injected_database->escapeField($field);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Connection::escapeField()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_escape_field',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '33c782b66b0d38c4572d0d0a2bb26434' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Escapes characters that work as wildcard characters in a LIKE pattern.
 *
 * The wildcard characters "%" and "_" as well as backslash are prefixed with
 * a backslash. Use this to do a search for a verbatim string without any
 * wildcard behavior.
 *
 * You must use a query builder like \\Drupal::database()->select() in order to
 * use \\Drupal::database()->escapeLike() on all supported database systems. Using
 * \\Drupal::database()->escapeLike() with \\Drupal::database()->query() or
 * \\Drupal::database()->queryRange() is not supported.
 *
 * For example, the following does a case-insensitive query for all rows whose
 * name starts with $prefix:
 * @code
 * $result = \\Drupal::database()->select(\'person\', \'p\')
 *   ->fields(\'p\')
 *   ->condition(\'name\', db_like($prefix) . \'%\', \'LIKE\')
 *   ->execute()
 *   ->fetchAll();
 * @endcode
 *
 * Backslash is defined as escape character for LIKE patterns in
 * DatabaseCondition::mapConditionOperator().
 *
 * @param string $string
 *   The string to escape.
 *
 * @return string
 *   The escaped string.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container
 *   and call escapeLike() on it. For example,
 *   $injected_database->escapeLike($string);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Connection::escapeLike()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_like',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '17609cef5a99b64ea66e9f6739377d45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Retrieves the name of the currently active database driver.
 *
 * @return string
 *   The name of the currently active database driver.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container
 *   and call driver() on it. For example, $injected_database->driver($string);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Connection::driver()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_driver',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a5fc91c11089255588babc49b859c8f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Closes the active database connection.
 *
 * @param array $options
 *   An array of options to control which connection is closed. Only the target
 *   key has any meaning in this case.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use
 *   \\Drupal\\Core\\Database\\Database::closeConnection($target).
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Database::closeConnection()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_close',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '40196f0ff31f5050aebb0b393b43d47a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Get target helper.
 *
 * Helps get "target" database from the query options.
 *
 * @param array $options
 *   An array of options to control how the query operates. The array is passed
 *   by reference, and its \'target\' key is removed from it during the process,
 *   so that it will not leak in calls to methods in the Database class.
 * @param bool $allow_replica
 *   (Optional) When false, \'replica\' connection will be redirected to the
 *   \'default\' one. Defaults to TRUE.
 *
 * @return string
 *   The target database key for the database connection.
 *
 * @internal
 *
 * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. There is
 *   no replacement, this function should not be used. It was introduced in
 *   Drupal 8.8.0 only as a byproduct of the deprecation of the db_* procedural
 *   functions.
 *
 * @see https://www.drupal.org/node/2993033
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => '_db_get_target',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e1b9ab750bd8e8c9cec74b6b93b27d63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Retrieves a unique id.
 *
 * Use this function if for some reason you can\'t use a serial field. Using a
 * serial field is preferred, and InsertQuery::execute() returns the value of
 * the last ID inserted.
 *
 * @param int $existing_id
 *   After a database import, it might be that the sequences table is behind, so
 *   by passing in a minimum ID, it can be assured that we never issue the same
 *   ID.
 *
 * @return int
 *   An integer number larger than any number returned before for this sequence.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container
 *   and call nextId() on it.
 *   For example, $injected_database->nextId($existing_id);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Connection::nextId()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_next_id',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ab157f2c49d7b8934489dd95bab835eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns a new DatabaseCondition, set to "OR" all conditions together.
 *
 * @return \\Drupal\\Core\\Database\\Query\\Condition
 *   A new Condition object, set to "OR" all conditions together.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Create
 *   a \\Drupal\\Core\\Database\\Query\\Condition object, specifying an OR
 *   conjunction: new Condition(\'OR\');
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Query\\Condition
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_or',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8ca62ffed4ba26e3be984a97ffced6a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns a new DatabaseCondition, set to "AND" all conditions together.
 *
 * @return \\Drupal\\Core\\Database\\Query\\Condition
 *   A new Condition object, set to "AND" all conditions together.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Create
 *   a \\Drupal\\Core\\Database\\Query\\Condition object, specifying an AND
 *   conjunction: new Condition(\'AND\');
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Query\\Condition
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_and',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7bd05cb840eecc855fdf1a36aa14bbbf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns a new DatabaseCondition, set to "XOR" all conditions together.
 *
 * @return \\Drupal\\Core\\Database\\Query\\Condition
 *   A new Condition object, set to "XOR" all conditions together.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Create
 *   a \\Drupal\\Core\\Database\\Query\\Condition object, specifying a XOR
 *   conjunction: new Condition(\'XOR\');
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Query\\Condition
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_xor',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '31e092f8f76459cbc10484d7f651d65e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns a new DatabaseCondition, set to the specified conjunction.
 *
 * Internal API function call.  Creating a
 * \\Drupal\\Core\\Database\\Query\\Condition object, specifying the desired
 * conjunction (\'AND\', \'OR\' or \'XOR\'), is preferred.
 *
 * @param string $conjunction
 *   The conjunction to use for query conditions (AND, OR or XOR).
 *
 * @return \\Drupal\\Core\\Database\\Query\\Condition
 *   A new Condition object, set to the specified conjunction.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Create
 *   a \\Drupal\\Core\\Database\\Query\\Condition object, specifying the desired
 *   conjunction: new Condition($conjunction);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Query\\Condition
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_condition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '28d4232806e976ddc28755703e11f589' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Creates a new table from a Drupal table definition.
 *
 * @param string $name
 *   The name of the table to create.
 * @param array $table
 *   A Schema API table definition array.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container,
 *   get its schema driver, and call createTable() on it. For example,
 *   $injected_database->schema()->createTable($name, $table);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Schema::createTable()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_create_table',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'bb39cb343e2c4ba910904bbea8363456' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns an array of field names from an array of key/index column specifiers.
 *
 * This is usually an identity function but if a key/index uses a column prefix
 * specification, this function extracts just the name.
 *
 * @param array $fields
 *   An array of key/index column specifiers.
 *
 * @return array
 *   An array of field names.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container,
 *   get its schema driver, and call fieldNames() on it. For example,
 *   $injected_database->schema()->fieldNames($fields);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Schema::fieldNames()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_field_names',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8b3f8680be5320dac4cad79a16d34fdb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Checks if an index exists in the given table.
 *
 * @param string $table
 *   The name of the table in drupal (no prefixing).
 * @param string $name
 *   The name of the index in drupal (no prefixing).
 *
 * @return bool
 *   TRUE if the given index exists, otherwise FALSE.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container,
 *   get its schema driver, and call indexExists() on it. For example,
 *   $injected_database->schema()->indexExists($table, $name);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Schema::indexExists()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_index_exists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f322b3281c4890466c9dd9de676314bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Checks if a table exists.
 *
 * @param string $table
 *   The name of the table in drupal (no prefixing).
 *
 * @return bool
 *   TRUE if the given table exists, otherwise FALSE.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container,
 *   get its schema driver, and call tableExists() on it. For example,
 *   $injected_database->schema()->tableExists($table);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Schema::tableExists()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_table_exists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '82cbad6eb4ded123cf30695fbaca9b3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Checks if a column exists in the given table.
 *
 * @param $table
 *   The name of the table in drupal (no prefixing).
 * @param $field
 *   The name of the field.
 *
 * @return bool
 *   TRUE if the given column exists, otherwise FALSE.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container,
 *   get its schema driver, and call fieldExists() on it. For example,
 *   $injected_database->schema()->fieldExists($table, $field);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Schema::fieldExists()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_field_exists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6cdb2bc850fe1edf7a36921e71f9073d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Finds all tables that are like the specified base table name.
 *
 * @param string $table_expression
 *   An SQL expression, for example "simpletest%" (without the quotes).
 *
 * @return array
 *   Array, both the keys and the values are the matching tables.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container,
 *   get its schema driver, and call findTables() on it. For example,
 *   $injected_database->schema()->findTables($table_expression);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Schema::findTables()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_find_tables',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '78bbe3c85f23b2646e4351b991d22ca5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Renames a table.
 *
 * @param $table
 *   The current name of the table to be renamed.
 * @param $new_name
 *   The new name for the table.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container,
 *   get its schema driver, and call renameTable() on it. For example,
 *   $injected_database->schema()->renameTable($table, $new_name);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Schema::renameTable()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_rename_table',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0bdda562b1e21bdcd362c1413d73419f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Drops a table.
 *
 * @param $table
 *   The table to be dropped.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container,
 *   get its schema driver, and call dropTable() on it. For example,
 *   $injected_database->schema()->dropTable($table);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Schema::dropTable()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_drop_table',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1ca981c69226a3a5066300c994a0967d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Adds a new field to a table.
 *
 * @param $table
 *   Name of the table to be altered.
 * @param $field
 *   Name of the field to be added.
 * @param array $spec
 *   The field specification array, as taken from a schema definition. The
 *   specification may also contain the key \'initial\'; the newly-created field
 *   will be set to the value of the key in all rows. This is most useful for
 *   creating NOT NULL columns with no default value in existing tables.
 * @param array $keys_new
 *   (optional) Keys and indexes specification to be created on the table along
 *   with adding the field. The format is the same as a table specification, but
 *   without the \'fields\' element. If you are adding a type \'serial\' field, you
 *   MUST specify at least one key or index including it in this array. See
 *   \\Drupal\\Core\\Database\\Schema::changeField() for more explanation why.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container,
 *   get its schema driver, and call addField() on it. For example,
 *   $injected_database->schema()->addField($table, $field, $spec, $keys_new);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Schema::addField()
 * @see \\Drupal\\Core\\Database\\Schema::changeField()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_add_field',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8a9f3906a2c4da0b48ec284d71734cce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Drops a field.
 *
 * @param $table
 *   The table to be altered.
 * @param $field
 *   The field to be dropped.
 *
 * @return bool
 *   TRUE if the field was successfully dropped, FALSE if there was no field by
 *   that name to begin with.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container,
 *   get its schema driver, and call dropField() on it. For example,
 *   $injected_database->schema()->dropField($table, $field);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Schema::dropField()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_drop_field',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'fa8a4b79866ba160633e5232c53812f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Sets the default value for a field.
 *
 * @param $table
 *   The table to be altered.
 * @param $field
 *   The field to be altered.
 * @param $default
 *   Default value to be set. NULL for \'default NULL\'.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container,
 *   get its schema driver, and call changeField() on it, passing a full field
 *   specification. For example,
 *   $injected_database->schema()
 *     ->changeField($table, $field, $field_new, $spec, $keys_new);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Schema::changeField()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_field_set_default',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '590ad22ce14876aef6b0aafd2f226cc9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Sets a field to have no default value.
 *
 * @param $table
 *   The table to be altered.
 * @param $field
 *   The field to be altered.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container,
 *   get its schema driver, and call changeField() on it, passing a full field
 *   specification. For example,
 *   $injected_database->schema()
 *     ->changeField($table, $field, $field_new, $spec, $keys_new);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Schema::changeField()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_field_set_no_default',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd40565721ce51cc91d3cf23a70957a94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Adds a primary key to a database table.
 *
 * @param $table
 *   Name of the table to be altered.
 * @param $fields
 *   Array of fields for the primary key.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container,
 *   get its schema driver, and call addPrimaryKey() on it. For example,
 *   $injected_database->schema()->addPrimaryKey($table, $fields);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Schema::addPrimaryKey()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_add_primary_key',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7f374279287de352a9519df8b25d9004' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Drops the primary key of a database table.
 *
 * @param $table
 *   Name of the table to be altered.
 *
 * @return bool
 *   TRUE if the primary key was successfully dropped, FALSE if there was no
 *   primary key on this table to begin with.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container,
 *   get its schema driver, and call dropPrimaryKey() on it. For example,
 *   $injected_database->schema()->dropPrimaryKey($table);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Schema::dropPrimaryKey()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_drop_primary_key',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '08cb0ee63017fbdb4465ca11fc38da6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Adds a unique key.
 *
 * @param $table
 *   The table to be altered.
 * @param $name
 *   The name of the key.
 * @param array $fields
 *   An array of field names.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container,
 *   get its schema driver, and call addUniqueKey() on it. For example,
 *   $injected_database->schema()->addUniqueKey($table, $name, $fields);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Schema::addUniqueKey()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_add_unique_key',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd7b1a71dec599bf9927cd87261fe9348' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Drops a unique key.
 *
 * @param $table
 *   The table to be altered.
 * @param $name
 *   The name of the key.
 *
 * @return bool
 *   TRUE if the key was successfully dropped, FALSE if there was no key by
 *   that name to begin with.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container,
 *   get its schema driver, and call dropUniqueKey() on it. For example,
 *   $injected_database->schema()->dropUniqueKey($table, $name);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Schema::dropUniqueKey()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_drop_unique_key',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a3d8fcf3379d05f8517dd362711244db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Adds an index.
 *
 * @param $table
 *   The table to be altered.
 * @param $name
 *   The name of the index.
 * @param array $fields
 *   An array of field names.
 * @param array $spec
 *   The table specification of the table to be altered, as taken from a schema
 *   definition. See \\Drupal\\Core\\Database\\Schema::addIndex() for how to obtain
 *   this specification.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container,
 *   get its schema driver, and call addIndex() on it. For example,
 *   $injected_database->schema()->addIndex($table, $name, $fields, $spec);
 *
 * @see https://www.drupal.org/node/2993033
 * @see hook_schema()
 * @see schemaapi
 * @see \\Drupal\\Core\\Database\\Schema::addIndex()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_add_index',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'dafb53729e2bd44001a2b3591bc651f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Drops an index.
 *
 * @param $table
 *   The table to be altered.
 * @param $name
 *   The name of the index.
 *
 * @return bool
 *   TRUE if the index was successfully dropped, FALSE if there was no index
 *   by that name to begin with.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container,
 *   get its schema driver, and call dropIndex() on it. For example,
 *   $injected_database->schema()->dropIndex($table, $name);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Schema::dropIndex()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_drop_index',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0a583c9fcdd1e4bf5dfd5285a05f0a2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Changes a field definition.
 *
 * IMPORTANT NOTE: To maintain database portability, you have to explicitly
 * recreate all indices and primary keys that are using the changed field.
 *
 * That means that you have to drop all affected keys and indexes with
 * \\Drupal::database()->schema()->drop{PrimaryKey,UniqueKey,Index}() before
 * calling \\Drupal\\Core\\Database\\Schema::changeField().
 * To recreate the keys and indices, pass the key definitions as the optional
 * $keys_new argument directly to \\Drupal\\Core\\Database\\Schema::changeField().
 *
 * For example, suppose you have:
 * @code
 * $schema[\'foo\'] = array(
 *   \'fields\' => array(
 *     \'bar\' => array(\'type\' => \'int\', \'not null\' => TRUE)
 *   ),
 *   \'primary key\' => array(\'bar\')
 * );
 * @endcode
 * and you want to change foo.bar to be type serial, leaving it as the primary
 * key. The correct sequence is:
 * @code
 * $schema = \\Drupal::database()->schema();
 * $schema->dropPrimaryKey(\'foo\');
 * $schema->changeField(\'foo\', \'bar\', \'bar\',
 *   array(\'type\' => \'serial\', \'not null\' => TRUE),
 *   array(\'primary key\' => array(\'bar\')));
 * @endcode
 *
 * The reasons for this are due to the different database engines:
 *
 * On PostgreSQL, changing a field definition involves adding a new field and
 * dropping an old one which causes any indices, primary keys and sequences
 * (from serial-type fields) that use the changed field to be dropped.
 *
 * On MySQL, all type \'serial\' fields must be part of at least one key or index
 * as soon as they are created. You cannot use
 * \\Drupal::database()->schema()->add{PrimaryKey,UniqueKey,Index}() for this
 * purpose because the ALTER TABLE command will fail to add the column without
 * a key or index specification. The solution is to use the optional $keys_new
 * argument to create the key or index at the same time as field.
 *
 * You could use
 * \\Drupal::database()->schema()->add{PrimaryKey,UniqueKey,Index}() in all
 * cases unless you are converting a field to be type serial. You can use the
 * $keys_new argument in all cases.
 *
 * @param $table
 *   Name of the table.
 * @param $field
 *   Name of the field to change.
 * @param $field_new
 *   New name for the field (set to the same as $field if you don\'t want to
 *   change the name).
 * @param $spec
 *   The field specification for the new field.
 * @param array $keys_new
 *   (optional) Keys and indexes specification to be created on the table along
 *   with changing the field. The format is the same as a table specification
 *   but without the \'fields\' element.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Instead,
 *   get a database connection injected into your service from the container,
 *   get its schema driver, and call changeField() on it. For example,
 *   $injected_database->schema()
 *     ->changeField($table, $field, $field_new, $spec, $keys_new);
 *
 * @see https://www.drupal.org/node/2993033
 * @see \\Drupal\\Core\\Database\\Schema::changeField()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_change_field',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8f3b070df8b779f8694fd2ecaa62fdc9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Sets a session variable specifying the lag time for ignoring a replica
 * server (A replica server is traditionally referred to as
 * a "slave" in database server documentation).
 *
 * @deprecated in drupal:8.7.0 and is removed from drupal:9.0.0. Use
 *   \\Drupal::service(\'database.replica_kill_switch\')->trigger() instead.
 *
 * @see https://www.drupal.org/node/2997500
 * @see https://www.drupal.org/node/2275877
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => NULL,
         'functionName' => 'db_ignore_replica',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
  ),
));