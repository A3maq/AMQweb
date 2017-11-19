<?php

    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
    
    class WPH_module_rewrite_root_files extends WPH_module_component
        {
            
            function get_component_title()
                {
                    return "Root Files";
                }
                                                
            function get_module_settings()
                {
                                      
                    
                    $this->module_settings[]                  =   array(
                                                                    'id'            =>  'block_license_txt',
                                                                    'label'         =>  __('Block license.txt',    'wp-hide-security-enhancer'),
                                                                    'description'   =>  __('Block access to license.txt root file',    'wp-hide-security-enhancer'),
                                                                    
                                                                    'input_type'    =>  'radio',
                                                                    'options'       =>  array(
                                                                                                'yes'       =>  __('Yes',    'wp-hide-security-enhancer'),
                                                                                                'no'        =>  __('No',     'wp-hide-security-enhancer'),
                                                                                                ),
                                                                    'default_value' =>  'no',
                                                                    
                                                                    'sanitize_type' =>  array('sanitize_title', 'strtolower'),
                                                                    'processing_order'  =>  55
                                                                    );
                                                                    
                    $this->module_settings[]                  =   array(
                                                                    'id'            =>  'block_readme_html',
                                                                    'label'         =>  __('Block readme.html',    'wp-hide-security-enhancer'),
                                                                    'description'   =>  __('Block access to readme.html root file',    'wp-hide-security-enhancer'),
                                                                    
                                                                    'input_type'    =>  'radio',
                                                                    'options'       =>  array(
                                                                                                'yes'       =>  __('Yes',    'wp-hide-security-enhancer'),
                                                                                                'no'        =>  __('No',     'wp-hide-security-enhancer'),
                                                                                                ),
                                                                    'default_value' =>  'no',
                                                                    
                                                                    'sanitize_type' =>  array('sanitize_title', 'strtolower'),
                                                                    'processing_order'  =>  55
                                                                    );
                                                                    
                    $this->module_settings[]                  =   array(
                                                                    'id'            =>  'block_wp_activate_php',
                                                                    'label'         =>  __('Block wp-activate.php',    'wp-hide-security-enhancer'),
                                                                    'description'   =>  __('Block access to wp-activate.php file. This file confirms that the activation key that is sent in an email after a user signs up for a new blog matches the key for that user. If <b>anyone can register</b> on your site, you shold keep this off.',    'wp-hide-security-enhancer'),
                                                                    
                                                                    'input_type'    =>  'radio',
                                                                    'options'       =>  array(
                                                                                                'yes'       =>  __('Yes',    'wp-hide-security-enhancer'),
                                                                                                'no'        =>  __('No',     'wp-hide-security-enhancer'),
                                                                                                ),
                                                                    'default_value' =>  'no',
                                                                    
                                                                    'sanitize_type' =>  array('sanitize_title', 'strtolower'),
                                                                    'processing_order'  =>  55
                                                                    );
                    
                    $this->module_settings[]                  =   array(
                                                                    'id'            =>  'block_wp_cron_php',
                                                                    'label'         =>  __('Block wp-cron.php',    'wp-hide-security-enhancer'),
                                                                    'description'   =>  __('Block access to wp-cron.php file. If remote cron calls not being used this can be set to Yes.',    'wp-hide-security-enhancer'),
                                                                    
                                                                    'input_type'    =>  'radio',
                                                                    'options'       =>  array(
                                                                                                'yes'       =>  __('Yes',    'wp-hide-security-enhancer'),
                                                                                                'no'        =>  __('No',     'wp-hide-security-enhancer'),
                                                                                                ),
                                                                    'default_value' =>  'no',
                                                                    
                                                                    'sanitize_type' =>  array('sanitize_title', 'strtolower'),
                                                                    'processing_order'  =>  55
                                                                    );
                                                                    
                    $this->module_settings[]                  =   array(
                                                                    'id'            =>  'block_default_wp_signup_php',
                                                                    'label'         =>  'Block wp-signup.php',
                                                                    'description'   =>  __('Block default wp-signup.php file. If <b>anyone can register</b> on your site, you shold keep this off.',  'wp-hide-security-enhancer'),
                                                                    
                                                                    'input_type'    =>  'radio',
                                                                    'options'       =>  array(
                                                                                                'yes'       =>  __('Yes',    'wp-hide-security-enhancer'),
                                                                                                'no'        =>  __('No',     'wp-hide-security-enhancer'),
                                                                                                ),
                                                                    'default_value' =>  'no',
                                                                    
                                                                    'sanitize_type' =>  array('sanitize_title', 'strtolower'),
                                                                    'processing_order'  =>  55
                                                                    
                                                                    );
                                                                    
                    $this->module_settings[]                  =   array(
                                                                    'id'            =>  'block_default_wp_register_php',
                                                                    'label'         =>  'Block wp-register.php',
                                                                    'description'   =>  __('Block default wp-register.php file. This file is now deprecated however still exists within code and redirected to /register page.',  'wp-hide-security-enhancer'),
                                                                    
                                                                    'input_type'    =>  'radio',
                                                                    'options'       =>  array(
                                                                                                'yes'       =>  __('Yes',    'wp-hide-security-enhancer'),
                                                                                                'no'        =>  __('No',     'wp-hide-security-enhancer'),
                                                                                                ),
                                                                    'default_value' =>  'no',
                                                                    
                                                                    'sanitize_type' =>  array('sanitize_title', 'strtolower'),
                                                                    'processing_order'  =>  55
                                                                    
                                                                    );
                                                                    
                    $this->module_settings[]                  =   array(
                                                                    'id'            =>  'block_other_wp_files',
                                                                    'label'         =>  'Block other wp-*.php files',
                                                                    'description'   =>  __('Block other wp-*.php files. E.g. wp-blog-header.php, wp-config.php, wp-cron.php. Those files are used internally, blocking those will not affect any functionality. Other root files (wp-activate.php, wp-login.php, wp-signup.php) are ignored, they can be controlled through own setting.',  'wp-hide-security-enhancer'),
                                                                    
                                                                    'input_type'    =>  'radio',
                                                                    'options'       =>  array(
                                                                                                'yes'       =>  __('Yes',    'wp-hide-security-enhancer'),
                                                                                                'no'        =>  __('No',     'wp-hide-security-enhancer'),
                                                                                                ),
                                                                    'default_value' =>  'no',
                                                                    
                                                                    'sanitize_type' =>  array('sanitize_title', 'strtolower'),
                                                                    'processing_order'  =>  55
                                                                    
                                                                    );
                                                                    
                    return $this->module_settings;   
                }
                
         
                
            function _callback_saved_block_license_txt($saved_field_data)
                {
                    $processing_response    =   array();
                    
                    if(empty($saved_field_data) ||  $saved_field_data   ==  'no')
                        return FALSE;
                    
                    $rewrite_file_base  =   !empty($this->wph->default_variables['wordpress_directory']) ? trailingslashit( $this->wph->default_variables['wordpress_directory'] ) . 'license.txt' : 'license.txt';
                                                            
                    if($this->wph->server_htaccess_config   === TRUE)
                        {
                            $text   =   "RewriteCond %{ENV:REDIRECT_STATUS} ^$\n";
                            $text   .=   "RewriteRule ^" . $rewrite_file_base ." ".  $this->wph->default_variables['site_wordpress_relative_path'] ."index.php [L]";
                        }
                    
                    if($this->wph->server_web_config   === TRUE)
                            $text   = '
                                        <rule name="wph-block_license_txt" stopProcessing="true">
                                            <match url="^' . $rewrite_file_base . '"  />
                                            <action type="Rewrite" url="'.  $this->wph->default_variables['site_wordpress_relative_path'] .'index.php" />  
                                        </rule>
                                                            ';
                               
                    $processing_response['rewrite'] = $text;            
                                
                    return  $processing_response;     
                    
                    
                }
                
            function _callback_saved_block_readme_html($saved_field_data)
                {
                    $processing_response    =   array();
                    
                    if(empty($saved_field_data) ||  $saved_field_data   ==  'no')
                        return FALSE;
                    
                    $rewrite_file_base  =   !empty($this->wph->default_variables['wordpress_directory']) ? trailingslashit( $this->wph->default_variables['wordpress_directory'] ) . 'readme.html' : 'readme.html';
                    
                    if($this->wph->server_htaccess_config   === TRUE)
                        {                                        
                            $text   =   "RewriteCond %{ENV:REDIRECT_STATUS} ^$\n";
                            $text   .=   "RewriteRule ^" . $rewrite_file_base ." ".  $this->wph->default_variables['site_wordpress_relative_path'] ."index.php [L]";
                        }
                    
                    if($this->wph->server_web_config   === TRUE)
                            $text   = '
                                        <rule name="wph-block_readme_html" stopProcessing="true">
                                            <match url="^' . $rewrite_file_base . '"  />
                                            <action type="Rewrite" url="'.  $this->wph->default_variables['site_wordpress_relative_path'] .'index.php" />  
                                        </rule>
                                                            ';
                               
                    $processing_response['rewrite'] = $text;            
                                
                    return  $processing_response;     
                    
                    
                }
                
            function _callback_saved_block_wp_activate_php($saved_field_data)
                {
                    $processing_response    =   array();
                    
                    if(empty($saved_field_data) ||  $saved_field_data   ==  'no')
                        return FALSE;
                    
                    $rewrite_file_base  =   !empty($this->wph->default_variables['wordpress_directory']) ? trailingslashit( $this->wph->default_variables['wordpress_directory'] ) . 'wp-activate.php' : 'wp-activate.php';
                    
                    if($this->wph->server_htaccess_config   === TRUE)
                        {                                        
                            $text   =   "RewriteCond %{ENV:REDIRECT_STATUS} ^$\n";
                            $text   .=   "RewriteRule ^" . $rewrite_file_base ." ".  $this->wph->default_variables['site_wordpress_relative_path'] ."index.php [L]";
                        }
                    
                    if($this->wph->server_web_config   === TRUE)
                            $text   = '
                                        <rule name="wph-block_wp_activate_php" stopProcessing="true">
                                            <match url="^' . $rewrite_file_base . '"  />
                                            <action type="Rewrite" url="'.  $this->wph->default_variables['site_wordpress_relative_path'] .'index.php" />  
                                        </rule>
                                                            ';
                               
                    $processing_response['rewrite'] = $text;            
                                
                    return  $processing_response;     
                    
                    
                }
                
                
            function _callback_saved_block_wp_cron_php($saved_field_data)
                {
                    $processing_response    =   array();
                    
                    if(empty($saved_field_data) ||  $saved_field_data   ==  'no')
                        return FALSE;
                    
                    $rewrite_file_base  =   !empty($this->wph->default_variables['wordpress_directory']) ? trailingslashit( $this->wph->default_variables['wordpress_directory'] ) . 'wp-cron.php' : 'wp-cron.php';
                    
                    if($this->wph->server_htaccess_config   === TRUE)
                        {                                        
                            $text   =   "RewriteCond %{ENV:REDIRECT_STATUS} ^$\n";
                            $text   .=   "RewriteRule ^" . $rewrite_file_base ." ".  $this->wph->default_variables['site_wordpress_relative_path'] ."index.php [L]";
                        }
                    
                    if($this->wph->server_web_config   === TRUE)
                            $text   = '
                                        <rule name="wph-block_wp_cron_php" stopProcessing="true">
                                            <match url="^' . $rewrite_file_base . '"  />
                                            <action type="Rewrite" url="'.  $this->wph->default_variables['site_wordpress_relative_path'] .'index.php" />  
                                        </rule>
                                                            ';
                               
                    $processing_response['rewrite'] = $text;            
                                
                    return  $processing_response;     
                    
                    
                }
                
            function _callback_saved_block_default_wp_signup_php($saved_field_data)
                {
                    $processing_response    =   array();
                    
                    if(empty($saved_field_data) ||  $saved_field_data   ==  'no')
                        return  $processing_response;
                    
                    $rewrite_file_base  =   !empty($this->wph->default_variables['wordpress_directory']) ? trailingslashit( $this->wph->default_variables['wordpress_directory'] ) . 'wp-signup.php' : 'wp-signup.php';
                    
                    if($this->wph->server_htaccess_config   === TRUE)
                        {                              
                            $text   =       "RewriteCond %{ENV:REDIRECT_STATUS} ^$\n";
                            $text   .=      "RewriteRule ^" . $rewrite_file_base ." ".  $this->wph->default_variables['site_wordpress_relative_path'] ."index.php [L]";
                        }
                        
                    if($this->wph->server_web_config   === TRUE)
                            $text   = '
                                        <rule name="wph-block_default_wp_signup_php" stopProcessing="true">
                                            <match url="^' . $rewrite_file_base . '"  />
                                            <action type="Rewrite" url="'.  $this->wph->default_variables['site_wordpress_relative_path'] .'index.php" />  
                                        </rule>
                                                            ';
                               
                    $processing_response['rewrite'] = $text;    
                                                    
                    return  $processing_response;   
                }
                
                
            function _callback_saved_block_default_wp_register_php( $saved_field_data )
                {
                    $processing_response    =   array();
                    
                    if(empty($saved_field_data) ||  $saved_field_data   ==  'no')
                        return  $processing_response;
                    
                    $rewrite_file_base  =   !empty($this->wph->default_variables['wordpress_directory']) ? trailingslashit( $this->wph->default_variables['wordpress_directory'] ) . 'wp-register.php' : 'wp-register.php';
                    
                    if($this->wph->server_htaccess_config   === TRUE)
                        {                              
                            $text   =       "RewriteCond %{ENV:REDIRECT_STATUS} ^$\n";
                            $text   .=      "RewriteRule ^" . $rewrite_file_base ." ".  $this->wph->default_variables['site_wordpress_relative_path'] ."index.php [L]";
                        }
                        
                    if($this->wph->server_web_config   === TRUE)
                            $text   = '
                                        <rule name="wph-block_default_wp_register_php" stopProcessing="true">
                                            <match url="^wp-register.php"  />
                                            <action type="Rewrite" url="'.  $this->wph->default_variables['site_wordpress_relative_path'] .'index.php" />  
                                        </rule>
                                                            ';
                               
                    $processing_response['rewrite'] = $text;    
                                                    
                    return  $processing_response;   
                }

            function _callback_saved_block_other_wp_files($saved_field_data)
                {
                    $processing_response    =   array();
                    
                    if(empty($saved_field_data) ||  $saved_field_data   ==  'no')
                        return  $processing_response;
                    
                    $rewrite_base  =   !empty($this->wph->default_variables['wordpress_directory']) ? trailingslashit( $this->wph->default_variables['wordpress_directory'] ) : '';
                                        
                    if($this->wph->server_htaccess_config   === TRUE)
                        {                              
                            $text   =       "RewriteCond %{ENV:REDIRECT_STATUS} ^$\n";
                            $text   .=       "RewriteCond %{REQUEST_FILENAME} -f\n";

                            $text   .=       "RewriteCond %{REQUEST_FILENAME} !wp-activate.php [NC]\n";
                            $text   .=       "RewriteCond %{REQUEST_FILENAME} !wp-cron.php [NC]\n";
                            $text   .=       "RewriteCond %{REQUEST_FILENAME} !wp-signup.php [NC]\n";
                            $text   .=       "RewriteCond %{REQUEST_FILENAME} !wp-register.php [NC]\n";
                            $text   .=       "RewriteCond %{REQUEST_FILENAME} !wp-comments-post.php [NC]\n";
                            $text   .=       "RewriteCond %{REQUEST_FILENAME} !wp-login.php [NC]\n";
                            
                            $text   .=      "RewriteRule ^" . $rewrite_base . "wp-([a-z-])+.php ".  $this->wph->default_variables['site_wordpress_relative_path'] ."index.php [L]";
                        }
                        
                    if($this->wph->server_web_config   === TRUE)
                        $text = '
                            <rule name="wph-block_other_wp_files" stopProcessing="true">  
                                    <match url="^'. $rewrite_base .'wp-([a-z-])+.php" />  
                                    <conditions>  
                                        <add input="{REQUEST_FILENAME}" matchType="IsFile" ignoreCase="true" />
                                        <add input="{REQUEST_FILENAME}" pattern="wp-activate.php" ignoreCase="true" negate="true" />
                                        <add input="{REQUEST_FILENAME}" pattern="wp-cron.php" ignoreCase="true" negate="true" />
                                        <add input="{REQUEST_FILENAME}" pattern="wp-signup.php" ignoreCase="true" negate="true" />
                                        <add input="{REQUEST_FILENAME}" pattern="wp-register.php" ignoreCase="true" negate="true" />
                                        <add input="{REQUEST_FILENAME}" pattern="wp-comments-post.php" ignoreCase="true" negate="true" />
                                        <add input="{REQUEST_FILENAME}" pattern="wp-login.php" ignoreCase="true" negate="true" />
                                    </conditions>  
                                    <action type="Rewrite" url="'.  $this->wph->default_variables['site_wordpress_relative_path'] .'index.php" />  
                                </rule>
                                                            ';
                               
                    $processing_response['rewrite'] = $text;    
                                                    
                    return  $processing_response;   
                }
        }
?>