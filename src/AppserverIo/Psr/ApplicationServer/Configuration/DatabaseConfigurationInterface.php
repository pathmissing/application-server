<?php

/**
 * AppserverIo\Psr\ApplicationServer\Configuration\DatabaseConfigurationInterface
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2018 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/application-server
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Psr\ApplicationServer\Configuration;

/**
 * Interface for a database configuration implementation.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2018 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/application-server
 * @link      http://www.appserver.io
 */
interface DatabaseConfigurationInterface
{

    /**
     * Returns the database driver information.
     *
     * @return \AppserverIo\Configuration\Interfaces\NodeValueInterface The database driver information
     */
    public function getDriver();

    /**
     * Returns the database user information.
     *
     * @return \AppserverIo\Configuration\Interfaces\NodeValueInterface The database user information
     */
    public function getUser();

    /**
     * Returns the database password information.
     *
     * @return \AppserverIo\Configuration\Interfaces\NodeValueInterface The database password information
     */
    public function getPassword();

    /**
     * Returns the database name information.
     *
     * @return \AppserverIo\Configuration\Interfaces\NodeValueInterface The database name information
     */
    public function getDatabaseName();

    /**
     * Returns the database path information (when using sqlite for example).
     *
     * @return \AppserverIo\Configuration\Interfaces\NodeValueInterface The database path information
     */
    public function getPath();

    /**
     * Returns the flag to run Sqlite in memory (mutually exclusive with the path option).
     *
     * @return \AppserverIo\Configuration\Interfaces\NodeValueInterface The flag to run Sqlite in memory
     */
    public function getMemory();

    /**
     * Returns the database host information.
     *
     * @return \AppserverIo\Configuration\Interfaces\NodeValueInterface The database host information
     */
    public function getDatabaseHost();

    /**
     * Returns the database port information.
     *
     * @return \AppserverIo\Configuration\Interfaces\NodeValueInterface The database port information
     */
    public function getDatabasePort();

    /**
     * Returns the database charset to use.
     *
     * @return \AppserverIo\Configuration\Interfaces\NodeValueInterface The database charset
     */
    public function getCharset();

    /**
     * Returns the database driver options.
     *
     * @return \AppserverIo\Configuration\Interfaces\NodeValueInterface The database driver options
     */
    public function getDriverOptions();

    /**
     * Returns the name of the socket used to connect to the database.
     *
     * @return \AppserverIo\Configuration\Interfaces\NodeValueInterface The name of the socket
     */
    public function getUnixSocket();

    /**
     * Returns the server version we want to connect to.
     *
     * @return \AppserverIo\Configuration\Interfaces\NodeValueInterface The server version to connect to
     */
    public function getServerVersion();

    /**
     * Returns the DB platform.
     *
     * @return \AppserverIo\Configuration\Interfaces\NodeValueInterface The DB platform
     */
    public function getPlatform();
}
