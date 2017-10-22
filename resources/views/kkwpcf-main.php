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
                                            <label for="kkwpcfClassName">Class</label>
                                            <input type="text" name="kkwpcfClassName" id="kkwpcfClassName" placeholder="Class">
                                        </div>
                                        <div class="input-field">
                                            <label for="kkwpcfIdName">Id</label>
                                            <input type="text" name="kkwpcfIdName" id="kkwpcfIdName" placeholder="Id">
                                        </div>
                                        <div class="input-field">
                                            <label for="kkwpcfMaxlenName">Max length</label>
                                            <input type="number" min="1" max="99" name="kkwpcfMaxlenName" id="kkwpcfMaxlenName" placeholder="Max length">
                                        </div>
                                        <div class="input-field">
                                            <label for="kkwpcfPlaceholderName">Placeholder</label>
                                            <input type="text" name="kkwpcfPlaceholderName" id="kkwpcfPlaceholderName" placeholder="Placeholder">
                                        </div>
                                    </div>

                                    <div id="two" class="form-field-group">
                                        <h4>Email field:</h4>
                                        <div class="input-field">
                                            <label for="kkwpcfClassEmail">Class</label>
                                            <input type="text" name="kkwpcfClassEmail" id="kkwpcfClassEmail" placeholder="Class">
                                        </div>
                                        <div class="input-field">
                                            <label for="kkwpcfIdEmail">Id</label>
                                            <input type="text" name="kkwpcfIdEmail" id="kkwpcfIdEmail" placeholder="Id">
                                        </div>
                                        <div class="input-field">
                                            <label for="kkwpcfMaxlenEmail">Max length</label>
                                            <input type="number" min="1" max="99" name="kkwpcfMaxlenEmail" id="kkwpcfMaxlenEmail" placeholder="Max length">
                                        </div>
                                        <div class="input-field">
                                            <label for="kkwpcfPlaceholderEmail">Placeholder</label>
                                            <input type="text" name="kkwpcfPlaceholderEmail" id="kkwpcfPlaceholderEmail" placeholder="Placeholder">
                                        </div>
                                    </div>

                                    <div id="three" class="form-field-group">
                                        <h4>Subject field:</h4>
                                        <div class="input-field">
                                            <label for="kkwpcfClassSubject">Class</label>
                                            <input type="text" name="kkwpcfClassSubject" id="kkwpcfClassSubject" placeholder="Class">
                                        </div>
                                        <div class="input-field">
                                            <label for="kkwpcfIdSubject">Id</label>
                                            <input type="text" name="kkwpcfIdSubject" id="kkwpcfIdSubject" placeholder="Id">
                                        </div>
                                        <div class="input-field">
                                            <label for="kkwpcfMaxlenSubject">Max length</label>
                                            <input type="number" min="1" max="99" name="kkwpcfMaxlenSubject" id="kkwpcfMaxlenSubject" placeholder="Max length">
                                        </div>
                                        <div class="input-field">
                                            <label for="kkwpcfPlaceholderSubject">Placeholder</label>
                                            <input type="text" name="kkwpcfPlaceholderSubject" id="kkwpcfPlaceholderSubject" placeholder="Placeholder">
                                        </div>
                                    </div>

                                    <div id="four" class="form-field-group">
                                        <h4>Message field:</h4>
                                        <div class="input-field">
                                            <label for="kkwpcfClassMessage">Class</label>
                                            <input type="text" name="kkwpcfClassMessage" id="kkwpcfClassMessage" placeholder="Class">
                                        </div>
                                        <div class="input-field">
                                            <label for="kkwpcfIdMessage">Id</label>
                                            <input type="text" name="kkwpcfIdMessage" id="kkwpcfIdMessage" placeholder="Id">
                                        </div>
                                        <div class="input-field">
                                            <label for="kkwpcfMaxlenMessage">Max length</label>
                                            <input type="number" min="1" max="99" name="kkwpcfMaxlenMessage" id="kkwpcfMaxlenMessage" placeholder="Max length">
                                        </div>
                                        <div class="input-field">
                                            <label for="kkwpcfPlaceholderMessage">Placeholder</label>
                                            <input type="text" name="kkwpcfPlaceholderMessage" id="kkwpcfPlaceholderMessage" placeholder="Placeholder">
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