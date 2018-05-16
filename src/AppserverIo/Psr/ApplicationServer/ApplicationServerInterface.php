<?php

/**
 * AppserverIo\Psr\ApplicationServer\ApplicationServerInterface
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
 * @link      https://github.com/appserver-io-psr/application-server
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Psr\ApplicationServer;

use React\Socket\ConnectionInterface;
use AppserverIo\Psr\ApplicationServer\Configuration\SystemConfigurationInterface;

/**
 * Interface for the application server instance.

 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2018 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/application-server
 * @link      http://www.appserver.io
 */
interface ApplicationServerInterface
{

    /**
     * The available runlevels.
     *
     * @var integer
     */
    const SHUTDOWN       = 0;
    const ADMINISTRATION = 1;
    const DAEMON         = 2;
    const NETWORK        = 3;
    const SECURE         = 4;
    const FULL           = 5;
    const REBOOT         = 6;

    /**
     * Translates and returns a string representation of the passed runlevel.
     *
     * @param integer $runlevel The runlevel to return the string representation for
     *
     * @return string The string representation for the passed runlevel
     *
     * @throws \Exception Is thrown if the passed runlevel is not available
     */
    public function runlevelToString($runlevel);

    /**
     * Translates and returns the runlevel of the passed a string representation.
     *
     * @param string $runlevel The string representation of the runlevel to return
     *
     * @return integer The runlevel of the passed string representation
     *
     * @throws \Exception Is thrown if the passed string representation is not a valid runlevel
     */
    public function runlevelFromString($runlevel);

    /**
     * Returns the naming directory instance.
     *
     * @return \AppserverIo\Psr\Naming\NamingDirectoryInterface $namingDirectory The default naming directory
     */
    public function getNamingDirectory();

    /**
     * Sets the system configuration.
     *
     * @param \AppserverIo\Psr\ApplicationServer\Configuration\SystemConfigurationInterface $systemConfiguration The system configuration object
     *
     * @return null
     */
    public function setSystemConfiguration(SystemConfigurationInterface $systemConfiguration);

    /**
     * Returns the system configuration.
     *
     * @return \AppserverIo\Psr\ApplicationServer\Configuration\SystemConfigurationInterface The system configuration
     */
    public function getSystemConfiguration();

    /**
     * Sets the initial context instance.
     *
     * @param \AppserverIo\Psr\ApplicationServer\ContextInterface $initialContext The initial context instance
     *
     * @return void
     */
    public function setInitialContext(ContextInterface $initialContext);

    /**
     * Return's the initial context instance.
     *
     * @return \AppserverIo\Psr\ApplicationServer\ContextInterface The initial context instance
     */
    public function getInitialContext();

    /**
     * Set's the logger instances.
     *
     * @param array $loggers The logger instances to set
     *
     * @return void
     */
    public function setLoggers(array $loggers);

    /**
     * Returns the logger instances.
     *
     * @return array The logger instances
     */
    public function getLoggers();

    /**
     * Returns the requested logger instance.
     *
     * @param string $name Name of the requested logger instance
     *
     * @return \Psr\Log\LoggerInterface|null The requested logger instance
     */
    public function getLogger($name);

    /**
     * Return's the system logger instance.
     *
     * @return \Psr\Log\LoggerInterface The system logger instance
     */
    public function getSystemLogger();

    /**
     * Returns the name and the path of the system configuration file.
     *
     * @return string Name and path of the sytsem configuration file
     */
    public function getConfigurationFilename();

    /**
     * Returns the name and the path of the bootstrap configuration file.
     *
     * @return string Name and path of the bootstrap configuraiton file
     */
    public function getBootstrapConfigurationFilename();

    /**
     * Returns a new instance of the passed API service.
     *
     * @param string $className The API service class name to return the instance for
     *
     * @return \AppserverIo\Psr\ApplicationServer\ApplicationServerInterface The service instance
     */
    public function newService($className);

    /**
     * The runlevel to switch to.
     *
     * @param \React\Socket\ConnectionInterface $conn     The connection resource
     * @param integer                           $runlevel The new runlevel to switch to
     *
     * @return void
     */
    public function init(ConnectionInterface $conn = null, $runlevel = ApplicationServerInterface::FULL);

    /**
     * Switch to the passed mode, which can either be 'dev', 'prod' or 'install'.
     *
     * @param \React\Socket\ConnectionInterface $conn The connection resource
     * @param string                            $mode The setup mode to switch to
     *
     * @return void
     */
    public function mode(ConnectionInterface $conn, $mode);

    /**
     * Query whether the application server should keep running or not.
     *
     * @return boolean TRUE if the server should keep running, else FALSE
     */
    public function keepRunning();

    /**
     * Shutdown handler that checks for fatal/user errors.
     *
     * @return void
     */
    public function shutdown();

    /**
     * Returns the service for the passed runlevel and name.
     *
     * @param integer $runlevel The runlevel of the requested service
     * @param string  $name     The name of the requested service
     *
     * @return mixed The service instance
     */
    public function getService($runlevel, $name);

    /**
     * Unbind the service with the passed name and runlevel.
     *
     * @param integer $runlevel The runlevel of the service
     * @param string  $name     The name of the service
     *
     * @return void
     */
    public function unbindService($runlevel, $name);

    /**
     * Binds the passed service to the runlevel.
     *
     * @param integer $runlevel The runlevel to bound the service to
     * @param object  $service  The service to bound
     *
     * @return void
     */
    public function bindService($runlevel, $service);

    /**
     * Stops all services of the passed runlevel.
     *
     * @param integer $runlevel The runlevel to stop all services for
     *
     * @return void
     */
    public function stopServices($runlevel);
}
