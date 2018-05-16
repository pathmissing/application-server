<?php

/**
 * AppserverIo\Psr\ApplicationServer\Configuration\InitialContextConfigurationInterface
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
 * Interface for a initial context configuration implementation.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2018 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/application-server
 * @link      http://www.appserver.io
 */
interface InitialContextConfigurationInterface
{

    /**
     * Returns the nodes primary key, the name by default.
     *
     * @return string The nodes primary key
     * @see \AppserverIo\Configuration\Interfaces\NodeInterface::getPrimaryKey()
     */
    public function getPrimaryKey();

    /**
     * Returns information about the initial context's class name.
     *
     * @return string The initial context's class name
     */
    public function getType();

    /**
     * Returns the initial context description.
     *
     * @return \AppserverIo\Configuration\Interfaces\NodeValueInterface The initial context description
     */
    public function getDescription();

    /**
     * Returns the storage configuration information.
     *
     * @return \AppserverIo\Psr\ApplicationServer\Configuration\StorageConfigurationInterface The node with the storage information
     */
    public function getStorage();
}
