<?php
/**
 * Note: If you decided to edit this template file you should also edit:
 *
 * /wp-content/plugins/plx-multienv/plx-multienv.php
 *
 * Change the Version number in the comment block at the top to 999.9.9
 * This will disable updates to the plugin from Wordpress.org and ensure
 * your changes don't get overwritten.
 *
 */

$plx_multienv_template_envs = <<<PLX
<?php
/**
 * AUTOGENERATED BY PLX MULTI-ENVIRONMENTS - DO NOT EDIT THIS FILE DIRECTLY
 *
 * Production environment config settings
 *
 * @package    PLX Multi-Environments
 * @version    1.0
 * @author     Purplex <matt@plx.mk>
 */

\$plx_multienv_hostname_dev = '$plx_multienv_config_dev_siteurl';
\$plx_multienv_hostname_stage = '$plx_multienv_config_stage_siteurl';
\$plx_multienv_hostname_prod = '$plx_multienv_config_prod_siteurl';
PLX;