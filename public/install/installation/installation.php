<?php

  /**
  * Main installation file. Load specific steps and prepare the installation
  *
  * @package ScriptInstaller
  * @subpackage AC installation
  * @version 1.0
  * @author Ilija Studen <ilija.studen@gmail.com>
  */
  
  // Include steps
  require_once INSTALLER_PATH . '/installation/steps/WelcomeStep.class.php';
  require_once INSTALLER_PATH . '/installation/steps/ChecksStep.class.php';
  require_once INSTALLER_PATH . '/installation/steps/SystemConfigStep.class.php';
  require_once INSTALLER_PATH . '/installation/steps/FinishStep.class.php';
  
  // Construct installer
  $installer = new ScriptInstaller('Feng Office installation', 'This wizard will guide you through the Feng Office installation process');
  
  // Add steps
  define('ACI_WELCOME', $installer->addStep(new WelcomeStep()));
  define('ACI_CHECKS', $installer->addStep(new ChecksStep()));
  define('ACI_SYSTEM_CONFIG', $installer->addStep(new SystemConfigStep()));
  define('ACI_FINISH', $installer->addStep(new FinishStep()));
  
?>