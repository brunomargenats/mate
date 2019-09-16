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
.update-nag, .updated, .error, .is-dismissible { display: none; }
.green {color:#50b83c}
.red {color:#c31720}
.blue {color:#00a0d2}
.yellow {color:#ffa100;}
.green, .red, .blue {font-style:italic; font-weight:700;}
.mate-plugin-item {margin-bottom:1em; padding:0.8rem; line-height:1.5em; 
}


.mate-plugin-category{padding-bottom:1em;}



    .mate-plugin-item {margin-right:20px!important;}


@media screen and (min-width: 480px) {
    .mate-plugin-item {max-width:300px; min-width:300px; flex: 1 0 20%;}
    .mate-plugin-list {
        display: -ms-flex;
        display: -webkit-flex;
        display: flex;
        flex-wrap:wrap;
    }
}
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

    //  notice-error notice-info notice-success
    if( is_plugin_active( $pathslug ) ) {
        $notice_class = "notice-success";
        $notice_color = "green";
        $notice_text = _( 'Installed and Active', 'mate' );
    }elseif( $isinstalled) {
        $notice_class = "notice-info";
        $notice_color = "blue";
        $notice_text = _( 'Installed but Inactive', 'mate' );
        $activate_link = wp_nonce_url(admin_url('plugins.php?action=activate&plugin='.$pathslug), 'activate-plugin_'.$pathslug);

    }else{
        $notice_class = "notice-error";
        $notice_color = "red";
        $notice_text = _( 'Not Installed', 'mate' );
        $install_link = wp_nonce_url(add_query_arg(array('action' => 'install-plugin','plugin' => $Pfolder),admin_url( 'update.php' )),'install-plugin'.'_'.$Pfolder);
    }?>


    <div class="mate-plugin-item inline notice <?php echo $notice_class;?>">
        <strong><?php echo $Pname;?><?php if ($pOffsite){?>&nbsp;-&nbsp;<span class="yellow"><?php _e( 'Premium plugin', 'mate' ); ?></span><?php }?></strong><br />
        

        <div class="<?php echo $notice_color;?>"><?php echo $notice_text;?></div>

            <?php
            /* INSTALLED AND ACTIVE */
            if( is_plugin_active( $pathslug ) ) {}

            /* INSTALLED BUT INACTIVE */
            elseif( $isinstalled ) {?>
            <a target="_blank" href="<?php echo $activate_link;?>"><?php _e( 'Activate it!', 'mate' ); ?></a>&nbsp;-&nbsp;

            <?php
            /* NOT INSTALLED */
            }else {
                if ($pOffsite){?>
                    <?php _e( 'Visit the official web site to download this plugin', 'mate' ); ?><br />
                    <?php }else{?>
                    <a target="_blank" href="<?php echo $install_link;?>"><?php _e( 'Install', 'mate' ); ?></a>&nbsp;-&nbsp;
                    <?php }?>
            <?php }?>

        <?php if ($pOffsite){
            $more_info = $pOffsite;
            }else{$more_info = 'plugin-install.php?tab=plugin-information&plugin='.$Pfolder;} ?>

           <a target="_blank" href="<?php echo $more_info;?>"><?php _e( 'More Info', 'mate' ); ?></a>

    </div>


        <?php
    }/* END OF FUNCTION */
?>


<?php require_once('plugins-list.php');?>
</div>
    <?php
    }/* END OF PAGE CONTENTS */