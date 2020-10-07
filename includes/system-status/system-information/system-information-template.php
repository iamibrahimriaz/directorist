<?php
global $wpdb;
$environment          = $this->get_environment_info();
$database             = $this->get_database_info();
$post_type_counts   = $this->get_post_type_counts();
$security            = $this->get_security_info();
$active_plugins        = $this->get_active_plugins();
$theme                  = $this->get_Theme_info();
$php_information     = $this->php_information();

$atbdp_option       = get_option('atbdp_option');
?>
<div class="tab-pane active show" id="atbds_system-info">
    <div class="card atbds_card">
        <div class="card-head">
            <h4>System Information</h4>
        </div>
        <div class="card-body">
            <div class="atbds_content__tab">
                <div class="atbds_c-t-menu">
                    <ul class="nav" id="atbds_ststus-tab" role="tablist">
                        <li class="nav-item">
                            <a href="#atbds_system-wp" class="nav-link active" id="atbds_system-info-tab" data-tabArea="atbds_system-info-tab">Wordpress Environment</a>
                        </li>
                        <li class="nav-item">
                            <a href="#atbds_php" class="nav-link" id="atbds_php-tab" data-tabArea="atbds_system-info-tab">PHP</a>
                        </li>
                        <li class="nav-item">
                            <a href="#atbds_server" class="nav-link" id="atbds_server-tab" data-tabArea="atbds_system-info-tab">Server Environment</a>
                        </li>
                        <li class="nav-item">
                            <a href="#atbds_platform" class="nav-link" id="atbds_platform-tab" data-tabArea="atbds_system-info-tab">User Platform</a>
                        </li>
                        <li class="nav-item">
                            <a href="#atbds_setting" class="nav-link" id="atbds_setting-tab" data-tabArea="atbds_system-info-tab">Settings</a>
                        </li>
                        <li class="nav-item">
                            <a href="#atbds_database" class="nav-link" id="atbds_database-tab" data-tabArea="atbds_system-info-tab">Database</a>
                        </li>
                        <li class="nav-item">
                            <a href="#atbds_p-count" class="nav-link" id="atbds_p-count-tab" data-tabArea="atbds_system-info-tab">Post Type Counts</a>
                        </li>
                        <li class="nav-item">
                            <a href="#atbds_sequrity" class="nav-link" id="atbds_sequrity-tab" data-tabArea="atbds_system-info-tab">Sequrity</a>
                        </li>
                        <li class="nav-item">
                            <a href="#atbds_plugins" class="nav-link" id="atbds_plugins-tab" data-tabArea="atbds_system-info-tab">Active Plugins <span class="atbds__pl-count">(2)</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#atbds_theme" class="nav-link" id="atbds_theme-tab" data-tabArea="atbds_system-info-tab">Theme</a>
                        </li>
                        <li class="nav-item">
                            <a href="#atbds_template" class="nav-link" id="atbds_template-tab" data-tabArea="atbds_system-info-tab">Templates</a>
                        </li>
                    </ul>
                </div><!-- ends: .atbds_c-t-menu -->
                <div class="atbds_c-t__details">
                    <div class="tab-content" data-tabArea="atbds_system-info-tab">





                        <div class="tab-pane active show" id="atbds_system-wp">
                            <div class="atbds_system-table-wrap">
                                <table class="atbds_system-table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('Home URL', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="<?php _e('The homepage URL of your site.', 'directorist'); ?>">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span class="atbds_url"><?php echo esc_html($environment['home_url']) ?></span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('Site URL', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="<?php _e('The root URL of your site.', 'directorist'); ?>">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span class="atbds_url"><?php echo esc_html($environment['site_url']) ?></span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('Directorist version', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="<?php _e('The version of GeoDirectory installed on your site.', 'directorist'); ?>">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span><?php echo esc_html($environment['version']) ?></span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('WP version', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="<?php _e('The version of WordPress installed on your site.', 'directorist'); ?>">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span><?php echo esc_html($environment['wp_version']) ?></span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('WP Multisite', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="<?php _e('Whether or not you have WordPress Multisite enabled.', 'directorist'); ?>">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><?php echo ($environment['wp_multisite']) ? '<span class="dashicons dashicons-yes"></span>' : '&ndash;'; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('WP Memory Limit', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="<?php _e('The maximum amount of memory (RAM) that your site can use at one time.', 'directorist'); ?>">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><?php
                                                if ($environment['wp_memory_limit'] < 67108864) {
                                                    echo '<mark class="error"><span class="dashicons dashicons-warning"></span> ' . sprintf(__('%1$s - We recommend setting memory to at least 64MB. See: %2$s', 'directorist'), size_format($environment['wp_memory_limit']), '<a href="https://codex.wordpress.org/Editing_wp-config.php#Increasing_memory_allocated_to_PHP" target="_blank">' . __('Increasing memory allocated to PHP', 'directorist') . '</a>') . '</mark>';
                                                } else {
                                                    echo '<span class="atbds_color-success">' . size_format($environment['wp_memory_limit']) . '</span>';
                                                }
                                                ?></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('WP debug mode', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="<?php _e('Displays whether or not WordPress is in Debug Mode.', 'directorist'); ?>">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><?php if ($environment['wp_debug_mode']) : ?>
                                                    <mark class="yes"><span class="dashicons dashicons-yes"></span></mark>
                                                <?php else : ?>
                                                    <span class="no">-</span>
                                                <?php endif; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('WP cron', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="<?php _e('Displays whether or not WP Cron Jobs are enabled.', 'directorist'); ?>">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td>
                                                <?php if ($environment['wp_cron']) : ?>
                                                    <span class="atbds_color-success"><i class="fa fa-check"></i></span>
                                                <?php else : ?>
                                                    <mark class="no">&ndash;</mark>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('Language', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="<?php _e('The current language used by WordPress. Default = English', 'directorist'); ?>">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><?php echo esc_html($environment['language']) ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- ends: .tab-pane -->






                        <div class="tab-pane" id="atbds_php">
                            <div class="atbds_system-table-wrap">
                                <table class="atbds_system-table table-responsive">
                                    <tbody>
                                        <?php foreach ($php_information as $item => $value) { ?>
                                            <tr>
                                                <td class="atbds_table-title"><?php echo $item; ?>:</td>
                                                <td><?php echo $value; ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>



                        <div class="tab-pane" id="atbds_server">
                            <div class="atbds_system-table-wrap">
                                <table class="atbds_system-table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('Server environment', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="<?php _e('Information about the web server that is currently hosting your site.', 'directorist'); ?>">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><?php echo esc_html($environment['server_info']); ?></td>
                                        </tr>
                                        <?php
                                        if ($wpdb->use_mysqli) {
                                            $ver = mysqli_get_server_info($wpdb->dbh);
                                        } elseif (function_exists('mysql_get_server_info')) {
                                            $ver = mysql_get_server_info();
                                        } else {
                                            $ver = '';
                                        }
                                        if (!empty($wpdb->is_mysql) && !stristr($ver, 'MariaDB')) : ?>
                                            <tr>
                                                <td class="atbds_table-title"><?php _e('MySQL version', 'directorist'); ?>:</td>
                                                <td class="atbds_table-pointer">
                                                    <span class="atbd_tooltip" aria-label="<?php _e('The version of MySQL installed on your hosting server.', 'directorist'); ?>">
                                                        <i class="fa fa-question-circle"></i>
                                                        <span class="atbd_tooltip__text"></span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <?php
                                                    if (version_compare($environment['mysql_version'], '5.6', '<')) {
                                                        echo '<mark class="error"><span class="dashicons dashicons-warning"></span> ' . sprintf(__('%1$s - We recommend a minimum MySQL version of 5.6. See: %2$s', 'directorist'), esc_html($environment['mysql_version']), '<a href="https://wordpress.org/about/requirements/" target="_blank">' . __('WordPress requirements', 'directorist') . '</a>') . '</mark>';
                                                    } else {
                                                        echo '<span>' . esc_html($environment['mysql_version']) . '</span>';
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('Max upload size', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="<?php _e('The largest filesize that can be uploaded to your WordPress installation.', 'directorist'); ?>">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span><?php echo size_format($environment['max_upload_size']) ?></span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('Default timezone is UTC', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="<?php _e('The default timezone for your server.', 'directorist'); ?>">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td>
                                                <?php
                                                if ('UTC' !== $environment['default_timezone']) {
                                                    echo '<mark class="error"><span class="dashicons dashicons-warning"></span> ' . sprintf(__('Default timezone is %s - it should be UTC', 'directorist'), $environment['default_timezone']) . '</mark>';
                                                } else {
                                                    echo '<span class="atbds_color-success"><i class="fa fa-check"></i></span>';
                                                } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('fsockopen/cURL', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="<?php _e('Payment gateways can use cURL to communicate with remote servers to authorize payments, other plugins may also use it when communicating with remote services.', 'directorist'); ?>">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><?php
                                                if ($environment['fsockopen_or_curl_enabled']) {
                                                    echo '<span class="atbds_color-success"><i class="fa fa-check"></i></span>';
                                                } else {
                                                    echo '<mark class="error"><span class="dashicons dashicons-warning"></span> ' . __('Your server does not have fsockopen or cURL enabled - PayPal IPN and other scripts which communicate with other servers will not work. Contact your hosting provider.', 'directorist') . '</mark>';
                                                } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('SoapClient', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="<?php _e('Payment gateways can use cURL to communicate with remote servers to authorize payments, other plugins may also use it when communicating with remote services.', 'directorist'); ?>">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><?php
                                                if ($environment['soapclient_enabled']) {
                                                    echo '<span class="atbds_color-success"><i class="fa fa-check"></i></span>';
                                                } else {
                                                    echo '<mark class="error"><span class="dashicons dashicons-warning"></span> ' . sprintf(__('Your server does not have the %s class enabled - some gateway plugins which use SOAP may not work as expected.', 'directorist'), '<a href="https://php.net/manual/en/class.soapclient.php">SoapClient</a>') . '</mark>';
                                                } ?></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('DOMDocument', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="<?php _e('HTML/Multipart emails use DOMDocument to generate inline CSS in templates.', 'directorist'); ?>">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td>
                                                <?php
                                                if ($environment['domdocument_enabled']) {
                                                    echo '<span class="atbds_color-success"><i class="fa fa-check"></i></span>';
                                                } else {
                                                    echo '<mark class="error"><span class="dashicons dashicons-warning"></span> ' . sprintf(__('Your server does not have the %s class enabled - HTML/Multipart emails, and also some extensions, will not work without DOMDocument.', 'directorist'), '<a href="https://php.net/manual/en/class.domdocument.php">DOMDocument</a>') . '</mark>';
                                                } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('GZip', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="<?php _e('GZip (gzopen) is used to open the GEOIP database from MaxMind.', 'directorist'); ?>">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><?php
                                                if ($environment['gzip_enabled']) {
                                                    echo '<span class="atbds_color-success"><i class="fa fa-check"></i></span>';
                                                } else {
                                                    echo '<mark class="error"><span class="dashicons dashicons-warning"></span> ' . sprintf(__('Your server does not support the %s function - this is required to use the GeoIP database from MaxMind.', 'directorist'), '<a href="https://php.net/manual/en/zlib.installation.php">gzopen</a>') . '</mark>';
                                                } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('Multibyte string', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="<?php _e('Multibyte String (mbstring) is used to convert character encoding, like for emails or converting characters to lowercase.', 'directorist'); ?>">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td>
                                                <?php
                                                if ($environment['mbstring_enabled']) {
                                                    echo '<span class="atbds_color-success"><i class="fa fa-check"></i></span>';
                                                } else {
                                                    echo '<mark class="error"><span class="dashicons dashicons-warning"></span> ' . sprintf(__('Your server does not support the %s functions - this is required for better character encoding. Some fallbacks will be used instead for it.', 'directorist'), '<a href="https://php.net/manual/en/mbstring.installation.php">mbstring</a>') . '</mark>';
                                                } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('Remote post', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="<?php _e('PayPal uses this method of communicating when sending back transaction information.', 'directorist'); ?>">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td>
                                                <?php
                                                if ($environment['remote_post_successful']) {
                                                    echo '<span class="atbds_color-success"><i class="fa fa-check"></i></span>';
                                                } else {
                                                    echo '<mark class="error"><span class="dashicons dashicons-warning"></span> ' . sprintf(__('%s failed. Contact your hosting provider.', 'directorist'), 'wp_remote_post()') . ' ' . esc_html($environment['remote_post_response']) . '</mark>';
                                                } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('Remote get', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="<?php _e('Directorist plugin may use this method of communication when checking for plugin updates.', 'directorist'); ?>">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td>
                                                <?php
                                                if ($environment['remote_get_successful']) {
                                                    echo '<span class="atbds_color-success"><i class="fa fa-check"></i></span>';
                                                } else {
                                                    echo '<mark class="error"><span class="dashicons dashicons-warning"></span> ' . sprintf(__('%s failed. Contact your hosting provider.', 'directorist'), 'wp_remote_get()') . ' ' . esc_html($environment['remote_get_response']) . '</mark>';
                                                } ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- ends: .tab-pane -->


                        <div class="tab-pane" id="atbds_platform">
                            <div class="atbds_system-table-wrap">
                                <table class="atbds_system-table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('Platform', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip">
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><?php echo esc_html($environment['platform']); ?></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('Browser name', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip">
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td>
                                                <?php echo esc_html($environment['browser_name']); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('Browser version', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip">
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span><?php echo esc_html($environment['browser_version']); ?></span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('User agent', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip">
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span><?php echo esc_html($environment['user_agent']); ?></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- ends: .tab-pane -->
                        <div class="tab-pane" id="atbds_setting">
                            <div class="atbds_system-table-wrap">
                                <table class="atbds_system-table table-responsive">
                                    <tbody>
                                        <?php
                                        if (!empty($atbdp_option)) :
                                            foreach ($atbdp_option as $name => $value) {
                                        ?>
                                                <tr>
                                                    <td class="atbds_table-title"><?php echo !empty($name) ? $name : ''; ?>:</td>
                                                    <td class="atbds_table-pointer">
                                                        <span class="atbd_tooltip">
                                                            <span class="atbd_tooltip__text"></span>
                                                        </span>
                                                    </td>
                                                    <td><?php print_r($value) ?></td>
                                                </tr>
                                        <?php
                                            }
                                        endif;
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- ends: .tab-pane -->
                        <div class="tab-pane" id="atbds_database">
                            <div class="atbds_system-table-wrap">
                                <table class="atbds_system-table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('Database prefix', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip">
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><?php
                                                if (strlen($database['database_prefix']) > 20) {
                                                    echo '<mark class="error"><span class="dashicons dashicons-warning"></span> ' . sprintf(__('%1$s - We recommend using a prefix with less than 20 characters.', 'directorist'), esc_html($database['database_prefix'])) . '</mark>';
                                                } else {
                                                    echo '<span class="atbds_color-success">' . esc_html($database['database_prefix']) . '</span>';
                                                }
                                                ?></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('Total Database Size', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip">
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td>
                                                <?php printf('%.2fMB', $database['database_size']['data'] + $database['database_size']['index']); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('Database Data Size', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip">
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span><?php printf('%.2fMB', $database['database_size']['data']); ?></span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title"><?php _e('Database Index Size', 'directorist'); ?>:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip">
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span><?php printf('%.2fMB', $database['database_size']['index']); ?></span></td>
                                        </tr>
                                        <?php foreach ($database['database_tables']['directorist'] as $table => $table_data) { ?>
                                            <tr>
                                                <td class="atbds_table-title"><?php echo esc_html($table); ?>:</td>
                                                <td class="atbds_table-pointer">
                                                    <span class="atbd_tooltip">
                                                        <span class="atbd_tooltip__text"></span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <?php if (!$table_data) {
                                                        echo '<mark class="error"><span class="dashicons dashicons-warning"></span> ' . __('Table does not exist', 'directorist') . '</mark>';
                                                    } else {
                                                        printf(__('Data: %.2fMB + Index: %.2fMB', 'directorist'), $this->directorist_help_tip($table_data['data'], 2), $this->directorist_help_tip($table_data['index'], 2));
                                                    } ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        <?php foreach ($database['database_tables']['other'] as $table => $table_data) { ?>
                                            <tr>
                                                <td class="atbds_table-title"><?php echo esc_html($table); ?>:</td>
                                                <td class="atbds_table-pointer">
                                                    <span class="atbd_tooltip">
                                                        <span class="atbd_tooltip__text"></span>
                                                    </span>
                                                </td>
                                                <td><?php printf(__('Data: %.2fMB + Index: %.2fMB', 'directorist'), $this->directorist_help_tip($table_data['data'], 2), $this->directorist_help_tip($table_data['index'], 2)); ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- ends: .tab-pane -->
                        <div class="tab-pane" id="atbds_p-count">
                            <div class="atbds_system-table-wrap">
                                <table class="atbds_system-table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td class="atbds_table-title">Home URL:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span class="atbds_url">Http://Masudr.Com/Arman/Directorist</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">Site URL:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span class="atbds_url">Http://Masudr.Com/Arman/Directorist</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">Directorist Version:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span>6.5.1</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Version:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span>5.5.1</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Multisite:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span>-</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Memory Limit:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span class="atbds_color-success">1GB</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Multisite:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span>-</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Cron:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span class="atbds_color-success"><i class="fa fa-check"></i></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- ends: .tab-pane -->
                        <div class="tab-pane" id="atbds_sequrity">
                            <div class="atbds_system-table-wrap">
                                <table class="atbds_system-table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td class="atbds_table-title">Home URL:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span class="atbds_url">Http://Masudr.Com/Arman/Directorist</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">Site URL:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span class="atbds_url">Http://Masudr.Com/Arman/Directorist</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">Directorist Version:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span>6.5.1</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Version:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span>5.5.1</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Multisite:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span>-</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Memory Limit:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span class="atbds_color-success">1GB</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Multisite:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span>-</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Cron:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span class="atbds_color-success"><i class="fa fa-check"></i></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- ends: .tab-pane -->
                        <div class="tab-pane" id="atbds_plugins">
                            <div class="atbds_system-table-wrap">
                                <table class="atbds_system-table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td class="atbds_table-title">Home URL:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span class="atbds_url">Http://Masudr.Com/Arman/Directorist</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">Site URL:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span class="atbds_url">Http://Masudr.Com/Arman/Directorist</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">Directorist Version:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span>6.5.1</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Version:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span>5.5.1</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Multisite:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span>-</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Memory Limit:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span class="atbds_color-success">1GB</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Multisite:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span>-</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Cron:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span class="atbds_color-success"><i class="fa fa-check"></i></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- ends: .tab-pane -->
                        <div class="tab-pane" id="atbds_theme">
                            <div class="atbds_system-table-wrap">
                                <table class="atbds_system-table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td class="atbds_table-title">Home URL:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span class="atbds_url">Http://Masudr.Com/Arman/Directorist</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">Site URL:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span class="atbds_url">Http://Masudr.Com/Arman/Directorist</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">Directorist Version:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span>6.5.1</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Version:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span>5.5.1</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Multisite:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span>-</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Memory Limit:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span class="atbds_color-success">1GB</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Multisite:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span>-</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Cron:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span class="atbds_color-success"><i class="fa fa-check"></i></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- ends: .tab-pane -->
                        <div class="tab-pane" id="atbds_template">
                            <div class="atbds_system-table-wrap">
                                <table class="atbds_system-table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td class="atbds_table-title">Home URL:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span class="atbds_url">Http://Masudr.Com/Arman/Directorist</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">Site URL:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span class="atbds_url">Http://Masudr.Com/Arman/Directorist</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">Directorist Version:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span>6.5.1</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Version:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span>5.5.1</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Multisite:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span>-</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Memory Limit:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span class="atbds_color-success">1GB</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Multisite:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span>-</span></td>
                                        </tr>
                                        <tr>
                                            <td class="atbds_table-title">WP Cron:</td>
                                            <td class="atbds_table-pointer">
                                                <span class="atbd_tooltip" aria-label="Whether or not you have WordPress Multisite enabled.">
                                                    <i class="fa fa-question-circle"></i>
                                                    <span class="atbd_tooltip__text"></span>
                                                </span>
                                            </td>
                                            <td><span class="atbds_color-success"><i class="fa fa-check"></i></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- ends: .tab-pane -->
                    </div>
                </div><!-- ends: .atbds_c-t__details -->
            </div>
        </div>
    </div>
</div>