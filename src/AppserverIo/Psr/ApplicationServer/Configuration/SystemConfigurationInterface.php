<?php

/**
 * AppserverIo\Psr\ApplicationServer\Configuration\SystemConfigurationInterface
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
 * Interface common to all classes which represent an configuration for the complete appserver
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2018 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/application-server
 * @link      http://www.appserver.io
 */
interface SystemConfigurationInterface
{

    /**
     * Attaches the passed app node.
     *
     * @param \AppserverIo\Psr\ApplicationServer\Configuration\AppConfigurationInterface $app The app node to attach
     *
     * @return void
     */
    public function attachApp(AppConfigurationInterface $app);

    /**
     * Attaches the passed datasource node.
     *
     * @param \AppserverIo\Psr\ApplicationServer\Configuration\DatasourceConfigurationInterface $datasource The datasource node to attach
     *
     * @return void
     */
    public function attachDatasource(DatasourceConfigurationInterface $datasource);

    /**
     * Returns an array with the information about the deployed applications.
     *
     * @return array The array with the information about the deployed applications
     */
    public function getApps();

    /**
     * Returns the node with the base directory information.
     *
     * @return string The base directory information
     */
    public function getBaseDirectory();

    /**
     * Returns the array with all available containers.
     *
     * @return array The available containers
     */
    public function getContainers();

    /**
     * Returns an array with the information about the deployed datasources.
     *
     * @return array The array with the information about the deployed datasources
     */
    public function getDatasources();

    /**
     * Returns the array with registered extractors.
     *
     * @return array The registered extractors
     */
    public function getExtractors();

    /**
     * Returns the groupname configured in the system configuration.
     *
     * @return string The groupname
     */
    public function getGroup();

    /**
     * Returns the node containing information about the initial context.
     *
     * @return \AppserverIo\Psr\ApplicationServer\Configuration\InitialContextConfigurationInterface The initial context information
     */
    public function getInitialContext();

    /**
     * Returns the array with all available loggers.
     *
     * @return array The available loggers
     */
    public function getLoggers();

    /**
     * Returns the array with registered provisioners.
     *
     * @return array The registered provisioners
     */
    public function getProvisioners();

    /**
     * Returns the array with all available scanners.
     *
     * @return array The available scanners
     */
    public function getScanners();

    /**
     * Returns the umask configured in the system configuration.
     *
     * @return string The umask
     */
    public function getUmask();

    /**
     * Returns the username configured in the system configuration.
     *
     * @return string The username
     */
    public function getUser();

    /**
     * Array with the handler params to use.
     *
     * @return array
     */
    public function getParams();

    /**
     * Returns the param with the passed name casted to
     * the specified type.
     *
     * @param string $name The name of the param to be returned
     *
     * @return mixed The requested param casted to the specified type
     */
    public function getParam($name);

    /**
     * Returns the params casted to the defined type
     * as associative array.
     *
     * @return array The array with the casted params
     */
    public function getParamsAsArray();
}
