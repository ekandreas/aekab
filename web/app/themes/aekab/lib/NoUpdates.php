<?php
namespace EkAndreas;

class NoWPUpdates {

    private $pluginsFiles;
    private $themeFiles;

    function __construct() {
        add_action( 'admin_init', array(&$this, 'admin_init') );

        if( !function_exists( 'get_plugins' ) ) require_once ABSPATH . 'wp-admin/includes/plugin.php';
        foreach( get_plugins() as $file => $pl ) $this->pluginsFiles[$file] = $pl['Version'];
        foreach ( wp_get_themes() as $theme ) $this->themeFiles[$theme->get_stylesheet()] = $theme->get('Version');

        add_filter( 'pre_transient_update_themes', array($this, 'last_checked_themes') );
        add_filter( 'pre_site_transient_update_themes', array($this, 'last_checked_themes') );
        add_action( 'pre_transient_update_plugins', array(&$this, 'last_checked_plugins') );
        add_filter( 'pre_site_transient_update_plugins', array($this, 'last_checked_plugins') );
        add_filter( 'pre_transient_update_core', array($this, 'last_checked_core') );
        add_filter( 'pre_site_transient_update_core', array($this, 'last_checked_core') );
        add_filter( 'auto_update_translation', '__return_false' );
        add_filter( 'automatic_updater_disabled', '__return_true' );
        add_filter( 'allow_minor_auto_core_updates', '__return_false' );
        add_filter( 'allow_major_auto_core_updates', '__return_false' );
        add_filter( 'allow_dev_auto_core_updates', '__return_false' );
        add_filter( 'auto_update_core', '__return_false' );
        add_filter( 'wp_auto_update_core', '__return_false' );
        add_filter( 'auto_core_update_send_email', '__return_false' );
        add_filter( 'send_core_update_notification_email', '__return_false' );
        add_filter( 'auto_update_plugin', '__return_false' );
        add_filter( 'auto_update_theme', '__return_false' );
        add_filter( 'automatic_updates_send_debug_email', '__return_false' );
        add_filter( 'automatic_updates_is_vcs_checkout', '__return_true' );
        add_filter( 'automatic_updates_send_debug_email ', '__return_false', 1 );
        if( !defined( 'AUTOMATIC_UPDATER_DISABLED' ) ) define( 'AUTOMATIC_UPDATER_DISABLED', true );
        if( !defined( 'WP_AUTO_UPDATE_CORE') ) define( 'WP_AUTO_UPDATE_CORE', false );
    }

    function admin_init() {
        if ( !function_exists("remove_action") ) return;

        do_action( 'ekandreas/nowpupdates/pre_admin_init' );

        remove_action( 'load-themes.php', 'wp_update_themes' );
        remove_action( 'load-update.php', 'wp_update_themes' );
        remove_action( 'admin_init', '_maybe_update_themes' );
        remove_action( 'wp_update_themes', 'wp_update_themes' );
        wp_clear_scheduled_hook( 'wp_update_themes' );
        remove_action( 'load-update-core.php', 'wp_update_themes' );
        wp_clear_scheduled_hook( 'wp_update_themes' );
        remove_action( 'load-plugins.php', 'wp_update_plugins' );
        remove_action( 'load-update.php', 'wp_update_plugins' );
        remove_action( 'admin_init', '_maybe_update_plugins' );
        remove_action( 'wp_update_plugins', 'wp_update_plugins' );
        wp_clear_scheduled_hook( 'wp_update_plugins' );
        remove_action( 'load-update-core.php', 'wp_update_plugins' );
        wp_clear_scheduled_hook( 'wp_update_plugins' );
        add_action( 'init', create_function( '', 'remove_action( \'init\', \'wp_version_check\' );' ), 2 );
        add_filter( 'pre_option_update_core', '__return_null' );
        remove_action( 'wp_version_check', 'wp_version_check' );
        remove_action( 'admin_init', '_maybe_update_core' );
        wp_clear_scheduled_hook( 'wp_version_check' );
        wp_clear_scheduled_hook( 'wp_version_check' );
        remove_action( 'wp_maybe_auto_update', 'wp_maybe_auto_update' );
        remove_action( 'admin_init', 'wp_maybe_auto_update' );
        remove_action( 'admin_init', 'wp_auto_update_core' );
        wp_clear_scheduled_hook( 'wp_maybe_auto_update' );

        do_action( 'ekandreas/nowpupdates/post_admin_init' );
    }

    public function last_checked_core() {
        return (object) array(
            'last_checked'		=> time(),
            'updates'			=> array(),
            'version_checked'	=> get_bloginfo( 'version' )
        );
    }

    public function last_checked_themes() {
        global $wp_version;

        return (object) array(
            'last_checked'		=> time(),
            'updates'			=> array(),
            'version_checked'	=> $wp_version,
            'checked'			=> $this->themeFiles
        );
    }

    public function last_checked_plugins() {
        global $wp_version;

        return (object) array(
            'last_checked'		=> time(),
            'updates'			=> array(),
            'version_checked'	=> $wp_version,
            'checked'			=> $this->pluginsFiles
        );
    }
}

if ( class_exists('\EkAndreas\NoWPUpdates') ) {
    $no_updates = new \EkAndreas\NoWPUpdates();
}
