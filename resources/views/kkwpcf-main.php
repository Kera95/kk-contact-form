<div id="kkwpcf-wrap" class="wrap">

    <h1 class="kkwpcf-heading">KKCF Contact Form</h1>
    <div id="kkcfSaveOrderNotice" class="notice notice-success"><p><?php echo __( 'Save order saved!', KKCF_TEXTDOMAIN ); ?></p></div>

    <hr>

    <?php

    use KKCForm\Admin\Router;

    ?>

    <div id="poststuff">
        <div id="post-body" class="metabox-holder columns-2">
            <!-- main content -->
            <div id="post-body-content">
                <div class="meta-box-sortables ui-sortable">

                    <div class="postbox main-box">
                        <?php /**<button type="button" class="handlediv" aria-expanded="true">
                            <span class="screen-reader-text">Toggle panel: At a Glance</span>
                            <span class="toggle-indicator" aria-hidden="true"></span>
                        </button> **/ ?>
                        <!-- Toggle -->
                        <h2 class="hndle">
                            <span><?php esc_attr_e( 'Form fields', KKCF_TEXTDOMAIN ); ?></span>
                            <span class="save-order" title="Save order" style="background: url( <?php echo Router::getImg('save-order', 'png'); ?> ) center no-repeat;"></span>
                        </h2>
                        <div class="inside">
                            <form class="kkwpcf-form-fields" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">

                                <input type="hidden" name="action" value="kkcf_form_fields_save">
                                <?php wp_nonce_field( 'kkcf_form_fields_validate', 'kkcf_form_fields_refferer' ); ?>

                                <div class="form-group">
                                    <div id="one" class="form-field-group">
                                        <h4>Name field:</h4>
                                        <div class="input-field">
                                            <label for="kkwpcf_class_name">Class</label>
                                            <input type="text" name="kkwpcf_class_name" id="kkwpcf_class_name" placeholder="Class">
                                        </div>
                                        <div class="input-field">
                                            <label for="kkwpcf_id_name">Id</label>
                                            <input type="text" name="kkwpcf_id_name" id="kkwpcf_id_name" placeholder="Id">
                                        </div>
                                        <div class="input-field">
                                            <label for="kkwpcf_maxlen_name">Max length</label>
                                            <input type="number" min="1" max="99" name="kkwpcf_maxlen_name" id="kkwpcf_maxlen_name" placeholder="Max length">
                                        </div>
                                        <div class="input-field">
                                            <label for="kkwpcf_placeholder_name">Placeholder</label>
                                            <input type="text" name="kkwpcf_placeholder_name" id="kkwpcf_placeholder_name" placeholder="Placeholder">
                                        </div>
                                    </div>

                                    <div id="two" class="form-field-group">
                                        <h4>Email field:</h4>
                                        <div class="input-field">
                                            <label for="kkwpcf_class_email">Class</label>
                                            <input type="text" name="kkwpcf_class_email" id="kkwpcf_class_email" placeholder="Class">
                                        </div>
                                        <div class="input-field">
                                            <label for="kkwpcf_id_email">Id</label>
                                            <input type="text" name="kkwpcf_id_email" id="kkwpcf_id_email" placeholder="Id">
                                        </div>
                                        <div class="input-field">
                                            <label for="kkwpcf_maxlen_email">Max length</label>
                                            <input type="number" min="1" max="99" name="kkwpcf_maxlen_email" id="kkwpcf_maxlen_email" placeholder="Max length">
                                        </div>
                                        <div class="input-field">
                                            <label for="kkwpcf_placeholder_email">Placeholder</label>
                                            <input type="text" name="kkwpcf_placeholder_email" id="kkwpcf_placeholder_email" placeholder="Placeholder">
                                        </div>
                                    </div>

                                    <div id="three" class="form-field-group">
                                        <h4>Subject field:</h4>
                                        <div class="input-field">
                                            <label for="kkwpcf_class_subject">Class</label>
                                            <input type="text" name="kkwpcf_class_subject" id="kkwpcf_class_subject" placeholder="Class">
                                        </div>
                                        <div class="input-field">
                                            <label for="kkwpcf_id_subject">Id</label>
                                            <input type="text" name="kkwpcf_id_subject" id="kkwpcf_id_subject" placeholder="Id">
                                        </div>
                                        <div class="input-field">
                                            <label for="kkwpcf_maxlen_subject">Max length</label>
                                            <input type="number" min="1" max="99" name="kkwpcf_maxlen_subject" id="kkwpcf_maxlen_subject" placeholder="Max length">
                                        </div>
                                        <div class="input-field">
                                            <label for="kkwpcf_placeholder_subject">Placeholder</label>
                                            <input type="text" name="kkwpcf_placeholder_subject" id="kkwpcf_placeholder_subject" placeholder="Placeholder">
                                        </div>
                                    </div>

                                    <div id="four" class="form-field-group">
                                        <h4>Message field:</h4>
                                        <div class="input-field">
                                            <label for="kkwpcf_class_message">Class</label>
                                            <input type="text" name="kkwpcf_class_message" id="kkwpcf_class_message" placeholder="Class">
                                        </div>
                                        <div class="input-field">
                                            <label for="kkwpcf_id_message">Id</label>
                                            <input type="text" name="kkwpcf_id_message" id="kkwpcf_id_message" placeholder="Id">
                                        </div>
                                        <div class="input-field">
                                            <label for="kkwpcf_maxlen_message">Max length</label>
                                            <input type="number" min="1" name="kkwpcf_maxlen_message" id="kkwpcf_maxlen_message" placeholder="Max length">
                                        </div>
                                        <div class="input-field">
                                            <label for="kkwpcf_placeholder_message">Placeholder</label>
                                            <input type="text" name="kkwpcf_placeholder_message" id="kkwpcf_placeholder_message" placeholder="Placeholder">
                                        </div>
                                    </div>
                                </div>
                                <?php submit_button('Save Changes', 'primary', 'kkwpcf_admin_submit', false, null); ?>
                            </form>
                        </div>
                        <!-- .inside -->
                    </div>
                    <!-- .postbox -->

                </div>
                <!-- .meta-box-sortables .ui-sortable -->
            </div>
            <!-- post-body-content -->

            <!-- sidebar -->
            <div id="postbox-container-1" class="postbox-container">
                <div class="meta-box-sortables">
                    <div class="postbox side-box">
                        <?php /** <div class="handlediv" title="Click to toggle"><br></div> */ ?>
                        <!-- Toggle -->
                        <h2 class="hndle">
                            <span><?php esc_attr_e("What's new?", KKCF_TEXTDOMAIN); ?></span>
                        </h2>
                        <div class="inside">
                            <p><?php esc_attr_e( 'Everything you see here, from the documentation to the code itself, was created by and for the community. WordPress is an Open Source project, which means there are hundreds of people all over the world working on it. (More than most commercial platforms.) It also means you are free to use it for anything from your cat’s home page to a Fortune 500 web site without paying anyone a license fee and a number of other important freedoms.',
                                    'WpAdminStyle' ); ?></p>
                        </div>
                        <!-- .inside -->
                    </div>
                    <!-- .postbox -->
                </div>
                <!-- .meta-box-sortables -->
            </div>
            <!-- #postbox-container-1 .postbox-container -->
        </div>
        <!-- #post-body .metabox-holder .columns-2 -->
        <br class="clear">
    </div>
    <!-- #poststuff -->

</div> <!-- .wrap -->