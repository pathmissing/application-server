<?php

/**
 * AppserverIo\Psr\ApplicationServer\Configuration\ContainerConfigurationInterface
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
 * Interface for a container configuration implementation.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2018 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/application-server
 * @link      http://www.appserver.io
 */
interface ContainerConfigurationInterface
{

    /**
     * Returns the unique container name.
     *
     * @return string The unique container name
     */
    public function getName();

    /**
     * Returns the container's class name.
     *
     * @return string The container's class name
     */
    public function getType();

    /**
     * Returns the thread class name that start's the containere.
     *
     * @return string The thread class name that start's the container
     */
    public function getThreadType();

    /**
     * Returns TRUE if application provisioning for the container is enabled, else FALSE.
     *
     * @return boolean TRUE if application provisioning is enabled, else FALSE
     */
    public function getProvisioning();

    /**
     * Returns the receiver description.
     *
     * @return \AppserverIo\Configuration\Interfaces\NodeValueInterface The receiver description
     */
    public function getDescription();

    /**
     * Returns the host configuration information.
     *
     * @return \AppserverIo\Psr\ApplicationServer\Configuration\HostConfigurationInterface The host configuration information
     */
    public function getHost();

    /**
     * Returns the deployment configuration information.
     *
     * @return \AppserverIo\Psr\ApplicationServer\Configuration\DeploymentConfigurationInterface The deployment configuration information
     */
    public function getDeployment();

    /**
     * Return's all server nodes.
     *
     * @return array
     */
    public function getServers();

    /**
     * Return's all upstream nodes.
     *
     * @return array
     */
    public function getUpstreams();

    /**
     * Sets the contexts class loader configuration.
     *
     * @param array $classLoaders The contexts class loader configuration
     *
     * @return void
     */
    public function setClassLoaders($classLoaders);

    /**
     * Returns the contexts class loader configuration.
     *
     * @return array The contexts class loader configuration
     */
    public function getClassLoaders();
}
