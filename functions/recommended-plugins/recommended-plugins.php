<?php
/**
 * FUNCTIONS: SHOW RECOMMENDED PLUGINS IN ADMINISTRATION
 * Description: A quick way to install recommended plugins.
 * @link https://themes.artbees.net/blog/wordpress-custom-admin-pages/
 */
/*


*/

function mate_add_admin_submenu() {
add_submenu_page( 'plugins.php', __( 'Recommended', 'mate' ), __( 'Recommended', 'mate' ),
    'install_plugins', 'recommended-plugins.php', 'recommended_plugins_page_contents');
}

add_action( 'admin_menu', 'mate_add_admin_submenu' );



function recommended_plugins_page_contents() {
?>
<style>
.green {color:#50b83c}
.red {color:#c31720}
.yellow {color:#ffa100}
.green, .red, .yellow {font-style:italic; font-weight:700;}
.mate-plugin-item {margin-bottom:1em;}
</style>

<div class="wrap">
<h1 class="wp-heading-inline">
<?php _e( 'Recommended Plugins', 'mate' ); ?>
</h1>

<?php
//}

    function mate_checkplugin($Pname, $Pfolder, $pFile, $pOffsite) {
       // echo "Folder: $Pfolder. File $pFile <br>";
    /* Check if plugin is installed */
    $pathpluginurl = WP_PLUGIN_DIR . '/'.$Pfolder.'/'.$pFile.'';
    $isinstalled = file_exists( $pathpluginurl );
    $pathslug = $Pfolder.'/'.$pFile;
    echo '<div class="mate-plugin-item"><strong>'.$Pname.':</strong>';
        if( is_plugin_active( $pathslug ) ) {//is active?>
           <span class="green"><?php _e( 'Installed and active', 'mate' ); ?></span><br />
        <?php }
        elseif( $isinstalled) {?>
            <span class="yellow"><?php _e( 'Installed but inactive', 'mate' ); ?></span> - 
            <a target="_blank" href="
            <?php
            $link = wp_nonce_url(admin_url('plugins.php?action=activate&plugin='.$pathslug), 'activate-plugin_'.$pathslug); echo $link;
            ?>"><?php _e( 'Activate it!', 'mate' ); ?></a><br />
            <?php
        }else{
            $link = wp_nonce_url(add_query_arg(array('action' => 'install-plugin','plugin' => $Pfolder),admin_url( 'update.php' )),'install-plugin'.'_'.$Pfolder);?>
            <span class="red"><?php _e( 'Not Installed', 'mate' ); ?></span> - 
            <?php if ($pOffsite){?>
                <?php _e( 'Visit official web site to download this plugin', 'mate' ); ?><br />
            <?php }else{?>
                <a target="_blank" href="<?php echo $link;?>"><?php _e( 'Install', 'mate' ); ?></a> - 
            <?php }
        }?>
        <?php if ($pOffsite){$more_info = $pOffsite;}else{$more_info = 'plugin-install.php?tab=plugin-information&plugin='.$Pfolder;} ?>
            <a target="_blank" href="<?php echo $more_info;?>"><?php _e( 'More Info', 'mate' ); ?></a></div>
        <?php
    }/* END OF FUNCTION */
?>


<?php require_once('plugins-list.php');?>
</div>
    <?php
    }/* END OF PAGE CONTENTS */