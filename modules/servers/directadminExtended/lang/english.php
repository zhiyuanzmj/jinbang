<?php

$_LANG['all']['close'] = "Close";
$_LANG['all']['confirm'] = "Confirm";
$_LANG['all']['delete_confirmation'] = "Delete Confirmation";
$_LANG['all']['search_results_empty_js'] = "There are no search results, try once again";
$_LANG['all']['json_parse_error'] = "Something went wrong. Please try again later";
$_LANG['all']['search_placeholder'] = "Search...";
$_LANG['all']['strength'] = 'Strength';
$_LANG['all']['save_changes'] = 'Save Changes';
$_LANG['all']['save'] = 'Save';
$_LANG['all']['delete'] = 'Delete';
$_LANG['all']['add'] = 'Add';
$_LANG['all']['edit'] = 'Edit';
$_LANG['all']['action'] = 'Actions';

$_LANG['jsvalidator']['invalid_domain_name'] = "Invalid domain name";
$_LANG['jsvalidator']['field_required'] = "This field is required";
$_LANG['jsvalidator']['min_5_chars'] = "Password must be at least 5 characters long";
$_LANG['jsvalidator']['field_not_match'] = "Whoops, these don't match";
$_LANG['jsvalidator']['invalid'] = "The value of this field is not correct";
$_LANG['jsvalidator']['very_weak'] = "Very Weak";
$_LANG['jsvalidator']['weak'] = "Weak";
$_LANG['jsvalidator']['adequate'] = "Moderate";
$_LANG['jsvalidator']['pretty_good'] = "Good";
$_LANG['jsvalidator']['excellent'] = "Strong";
$_LANG['jsvalidator']['invalidemail'] = "This is not a valid email address";
$_LANG['jsvalidator']['required'] = "This field is required";
$_LANG['jsvalidator']['number'] = "Value of this field has to be an integer";
$_LANG['jsvalidator']['same_as'] = "Value of this field is different";
$_LANG['jsvalidator']['minlen'] = "This field must be at least :length: characters long";
$_LANG['jsvalidator']['maxlen'] = "This field cannot be longer than :length: characters";
$_LANG['jsvalidator']['minval'] = "Value of this field has to be greater than :number:";
$_LANG['jsvalidator']['maxval'] = "Value of this field cannot be greater than :number:";

/**************************
 * 
 *       MAIN SITE
 * 
 **************************/

$_LANG['mainsite']['main_header'] = 'Your Account';
$_LANG['mainsite']['main_header3'] = 'Email Management';
$_LANG['mainsite']['main_header4'] = 'Advanced Features';
$_LANG['mainsite']['main_header2'] = 'Log In To';
$_LANG['mainsite']['menu_main_header'] = 'Management:';
$_LANG['mainsite']['menu_back_link'] = 'Back To Summary';
$_LANG['mainsite']['ftp_link'] = 'FTP Accounts';
$_LANG['mainsite']['emails_link'] = 'Emails';
$_LANG['mainsite']['emails_forwarders_link'] = 'Email Forwarders';
$_LANG['mainsite']['databases_link'] = 'Databases';
$_LANG['mainsite']['cron_link'] = 'Cron Jobs';
$_LANG['mainsite']['subdomains_link'] = 'Subdomains';
$_LANG['mainsite']['addon_domains_link'] = 'Addon Domains';
$_LANG['mainsite']['parked_domains_link'] = 'Domain Pointers';
$_LANG['mainsite']['forward_domains_link'] = 'Site Redirections';
$_LANG['mainsite']['install_app_link'] = 'Install Applications!';
$_LANG['mainsite']['clientareadirectadmin_link'] = 'DirectAdmin';
$_LANG['mainsite']['parkeddomains_link'] = "Domain Pointers";
$_LANG['mainsite']['clientareawhmlink'] = 'WHMpanel';
$_LANG['mainsite']['clientareawebmaillink'] = 'Webmail';
$_LANG['mainsite']['clientareaphpmyadminlink'] = 'phpMyAdmin';
$_LANG['mainsite']['dns_management_link'] = 'DNS Management';
$_LANG['mainsite']['backups_link'] = 'Backups';
$_LANG['mainsite']['ssl_link'] = "SSL Certificates";
$_LANG['mainsite']['perlmodules_link'] = 'Perl Modules';
$_LANG['mainsite']['no_features'] = "No features configured yet";

$_LANG['mainsite']['autoresponders_link'] = "Autoresponders";
$_LANG['mainsite']['vacation_link'] = "Vacation Messages";
$_LANG['mainsite']['apachehandlers_link'] = "Apache Handlers";
$_LANG['mainsite']['emailfilters_link'] = "SPAM Filters";
$_LANG['mainsite']['mailinglists_link'] = "Mailing Lists";
$_LANG['mainsite']['filemanager_link'] = "File Manager";
$_LANG['mainsite']['errorpages_link'] = "Custom Error Pages";
$_LANG['mainsite']['stats_link'] = "Site Summary";
$_LANG['mainsite']['spamassasin_link'] = "Spamassassin Setup";
$_LANG['mainsite']['managmentTitle'] = "Manage Account";
$_LANG['mainsite']['dedicated_ip'] = "Dedicated IP Address";

/*********************************
 * 
 *      FTP MANAGEMENT
 * 
 *********************************/

$_LANG['json']['error1'] = 'Incorrect data format';
$_LANG['json']['error2'] = 'Unknown error. Try again';

### CREATE FTP ACCOUNT
$_LANG['ftp']['main_hint'] = 'FTP accounts allow you to access your website\'s files through a protocol called FTP. You will need a third-party FTP program to access your files. You can connect to server via FTP by using a previously created account details.';
$_LANG['ftp']['main_header'] = 'FTP Accounts';
$_LANG['ftp']['add_header'] = 'Add FTP Accounts';
$_LANG['ftp']['login_label'] = 'Login:';
$_LANG['ftp']['password_old_label'] = 'Current Password:';
$_LANG['ftp']['password_label'] = 'Password:';
$_LANG['ftp']['password2_label'] = 'Password (Again):';
$_LANG['ftp']['directory_label'] = 'Directory';
$_LANG['ftp']['quota_label'] = 'Quota:';
$_LANG['ftp']['quota_unlimited'] = 'Unlimited';
$_LANG['ftp']['add_submit_text'] = 'Create FTP Account';
$_LANG['ftp']['add_loader_text'] = 'Creating...'; // CHANGED IN 1.6.0 VERSION
$_LANG['ftp']['add_ftp_result_info'] = 'Account has been created successfully';
$_LANG['ftp']['add_ftp_result_error'] = 'A problem has occurred during the account creation';

### EDIT FTP ACCOUNT
$_LANG['ftp']['chg_account_label'] = 'Account:';
$_LANG['ftp']['chg_account_cancel_text'] = 'Cancel';
$_LANG['ftp']['chg_password_bookmark'] = 'Change Password';
$_LANG['ftp']['chg_password_loader_text'] = 'Changing account password...';
$_LANG['ftp']['chg_password_info_text'] = 'Account password changed';
$_LANG['ftp']['chg_password_error_text'] = 'A problem has occurred during the password change: ';
$_LANG['ftp']['chg_quota_bookmark'] = 'Change Quota';
$_LANG['ftp']['chg_quota_submit_text'] = 'Change Quota';
$_LANG['ftp']['chg_quota_loader_text'] = 'Changing account quota...';
$_LANG['ftp']['chg_quota_info_text'] = 'Account quota changed';
$_LANG['ftp']['chg_quota_error_text'] = 'A problem has occurred during the account quota change: ';
$_LANG['ftp']['chg_quota_error2_text'] = 'Account quota cannot be changed';
$_LANG['ftp']['del_account_bookmark'] = 'Delete';
$_LANG['ftp']['del_account_label'] = 'Delete account:';
$_LANG['ftp']['del_account_submit_text'] = 'Delete'; // CHANGED IN 1.6.0 VERSION
$_LANG['ftp']['del_files_submit_text'] = 'Delete Account And Files';
$_LANG['ftp']['del_account_loader_text'] = 'Deleting...'; // CHANGED IN 1.6.0 VERSION
$_LANG['ftp']['del_account_info_text'] = 'Account deleted';
$_LANG['ftp']['del_account_error_text'] = 'A problem has occurred during the account deletion:';
$_LANG['ftp']['del_account_error2_text'] = 'Account cannot be removed';
$_LANG['ftp']['valid_login_error1'] = 'Sorry, the FTP username cannot be longer than 25 characters.';
$_LANG['ftp']['valid_login_error2'] = 'Only letters, numbers, -, and _ are allowed.';
$_LANG['ftp']['valid_quota_error1'] = 'Quota has to be a positive integer.';
$_LANG['ftp']['valid_directory_error1'] = 'Directory paths cannot be empty or contain the following characters: \ ? % * : | " < >';
$_LANG['ftp']['valid_password_error1'] = 'Password cannot be empty.';
$_LANG['ftp']['valid_password_error2'] = 'Password cannot include spaces.';
$_LANG['ftp']['valid_password_error3'] = 'Passwords do not match.';

### SEARCH FTP
$_LANG['ftp']['search_header'] = 'FTP Accounts';
$_LANG['ftp']['search_input_value'] = 'Search Accounts';
$_LANG['ftp']['search_submit_text'] = 'Search Accounts';
$_LANG['ftp']['search_select_rows'] = 'Results per page:';

### EDIT FTP TABLE
$_LANG['ftp']['edit_tblhead_login'] = 'Login';
$_LANG['ftp']['edit_tblhead_path'] = 'Path';
$_LANG['ftp']['edit_tblhead_actions'] = 'Actions';
$_LANG['ftp']['search_results_error'] = 'The results cannot be displayed. Try again.';
$_LANG['ftp']['search_results_empty'] = 'No accounts have been found.';
$_LANG['ftp']['generate_password'] = 'Generate Password';
$_LANG['ftp']['domain_label'] = 'Domain';
$_LANG['ftp']['domain_info_label'] = 'FTP account with the root directory in the domain\'s home directory (one level up from the public_html)';
$_LANG['ftp']['ftp_label'] = 'FTP';
$_LANG['ftp']['ftp_info_label'] = 'FTP account with the root directory in the domain\'s public_ftp directory';
$_LANG['ftp']['user_label'] = 'User';
$_LANG['ftp']['user_info_label'] = 'FTP account with the root directory as the user\'s name in the public_html directory';
$_LANG['ftp']['custom_label'] = 'Custom';

$_LANG['ftp']['delete_ftp_result_info']             =   'FTP account has been deleted successfully';
$_LANG['ftp']['delete_ftp_result_error']            =   'A problem has occurred during the account deletion'.
$_LANG['ftp']['delete_confirmation_title']          =   'Delete Confirmation'; 
$_LANG['ftp']['delete_confirmation_body']           =  'Are you sure that you want to remove this item?'; 

$_LANG['ftp']['change_ftp_password_result_info']    =   'FTP password has been changed ';
/*********************************
 * 
 *          EMAILS
 * 
 *********************************/

### CREATE EMAIL ACCOUNT
$_LANG['emails']['main_header'] = 'Emails';
$_LANG['emails']['main_hint'] = 'In this area, you can manage the email accounts associated with your domains.';
$_LANG['emails']['add_header'] = 'Add Email Accounts';
$_LANG['emails']['email_label'] = 'Email:'; // CHANGED IN 1.6.0 VERSION
$_LANG['emails']['password_label'] = 'Password:';
$_LANG['emails']['password2_label'] = 'Password (Again):';
$_LANG['emails']['quota_label'] = 'Quota:';
$_LANG['emails']['quota_unlimited'] = 'Unlimited';
$_LANG['emails']['add_submit_text'] = 'Create Email Account';
$_LANG['emails']['add_loader_text'] = 'Creating...'; // CHANGED IN 1.6.0 VERSION
$_LANG['emails']['add_result_info'] = 'Account has been created successfully';
$_LANG['emails']['add_result_error'] = 'A problem has occurred during the account creation: ';

### EDIT EMAIL ACCOUNT
$_LANG['emails']['chg_account_label'] = 'Account:';
$_LANG['emails']['chg_account_cancel_text'] = 'Cancel';

### SEARCH EMAIL
$_LANG['emails']['search_header'] = 'Search Email Accounts';
$_LANG['emails']['search_input_value'] = 'Search Accounts';
$_LANG['emails']['search_submit_text'] = 'Search Accounts';
$_LANG['emails']['search_select_rows'] = 'Results per page:';
$_LANG['emails']['search_loader_text'] = 'Loading...'; // CHANGED IN 1.6.0 VERSION
$_LANG['emails']['search_loader2_text'] = 'Searching...'; // CHANGED IN 1.6.0 VERSION

### EDIT EMAIL TABLE
$_LANG['emails']['edit_tblhead_account'] = 'Account @ Domain';
$_LANG['emails']['edit_tblhead_quota'] = 'Quota';
$_LANG['emails']['edit_tblhead_actions'] = 'Actions';
$_LANG['emails']['search_results_error'] = 'No result to display.';
$_LANG['emails']['search_results_empty'] = 'No accounts have been found.';
$_LANG['emails']['chg_password_bookmark'] = 'Change Password';
$_LANG['emails']['chg_password_submit_text'] = 'Save Options';
$_LANG['emails']['chg_password_loader_text'] = 'Changing...'; // CHANGED IN 1.6.0 VERSION
$_LANG['emails']['chg_password_info_text'] = 'Options have been saved';
$_LANG['emails']['chg_password_error_text'] = 'A problem has occurred during the account password change: ';
$_LANG['emails']['chg_quota_bookmark'] = 'Change Options';
$_LANG['emails']['chg_quota_submit_text'] = 'Change Quota';
$_LANG['emails']['chg_quota_loader_text'] = 'Changing...'; // CHANGED IN 1.6.0 VERSION
$_LANG['emails']['chg_quota_info_text'] = 'Account quota has been changed';
$_LANG['emails']['chg_quota_error_text'] = 'A problem has occurred during the account quota change: ';
$_LANG['emails']['chg_quota_error2_text'] = 'Account quota could not be unchanged';
$_LANG['emails']['del_account_bookmark'] = 'Delete';
$_LANG['emails']['del_account_label'] = 'Delete account:';
$_LANG['emails']['del_account_submit_text'] = 'Delete'; // CHANGED IN 1.6.0 VERSION
$_LANG['emails']['del_files_submit_text'] = 'Delete Account And Files';
$_LANG['emails']['del_account_loader_text'] = 'Deleting...'; // CHANGED IN 1.6.0 VERSION
$_LANG['emails']['delete_email_result_info'] = 'Account has been deleted successfully';
$_LANG['emails']['delete_email_result_error'] = 'A problem has occurred during the account deletion.';
$_LANG['emails']['del_account_error2_text'] = 'Account cannot be removed';
$_LANG['emails']['valid_email_error1'] = 'Email address cannot be longer than 128 characters.';
$_LANG['emails']['valid_email_error2'] = 'That is not a valid email address.';
$_LANG['emails']['valid_quota_error1'] = 'Quota has to be a positive integer.';
$_LANG['emails']['valid_directory_error1'] = 'Directory paths cannot be empty or contain the following characters: \ ? % * : | " < >';
$_LANG['emails']['valid_password_error1'] = 'Password cannot be empty.';
$_LANG['emails']['valid_password_error2'] = 'Password cannot include spaces.';
$_LANG['emails']['valid_password_error3'] = 'Passwords do not match.';
$_LANG['emails']['generate_password'] = 'Generate Password';

$_LANG['emails']['add_email_result_info']   =   'Account has been created successfully';
$_LANG['emails']['add_email_result_error']   =   'Account cannot be created';
$_LANG['emails']['delete_confirmation_title']         =   'Delete Confirmation';
$_LANG['emails']['delete_confirmation_body']           =  'Are you sure that you want to remove this item?'; 
$_LANG['emails']['change_email_password_result_info']   =   'Account password has been updated successfully';
$_LANG['emails']['chg_account']                         =   'Modify account';
$_LANG['emails']['update_result_error']                 =   'Account cannot be updated';
$_LANG['emails']['update_result_info']                  =   'Account has been updated successfully';

/*********************************
 * 
 *         SUBDOMAINS
 * 
 *********************************/

### CREATE SUBDOMAIN
$_LANG['subdomains']['main_hint'] = 'Subdomains are URLs for different sections of your website. They use your main domain name and a prefix. For example, if your domain is dlipski.com, a sub-domain of your domain might be support.dlipski.com.';
$_LANG['subdomains']['main_hint2'] = 'Subdomains are relative to your account\'s home directory.';
$_LANG['subdomains']['main_header'] = 'Subdomains';
$_LANG['subdomains']['add_header'] = 'Create Subdomain';
$_LANG['subdomains']['subdomain_label'] = 'Subdomain:';
$_LANG['subdomains']['root_label'] = 'Document Root:';
$_LANG['subdomains']['add_submit_text'] = 'Create Subdomain';
$_LANG['subdomains']['add_loader_text'] = 'Creating...'; // CHANGED IN 1.6.0 VERSION
$_LANG['subdomains']['add_result_info'] = 'has been created.';
$_LANG['subdomains']['add_result_error'] = 'A problem has occurred during the subdomain creation:';

### SEARCH SUBDOMAINS
$_LANG['subdomains']['search_header'] = 'Modify Subdomain';
$_LANG['subdomains']['search_input_value'] = 'Search Domains';
$_LANG['subdomains']['search_submit_text'] = 'Go';
$_LANG['subdomains']['search_select_rows'] = 'Results per page:';
$_LANG['subdomains']['search_loader_text'] = 'Loading...'; // CHANGED IN 1.6.0 VERSION
$_LANG['subdomains']['search_loader2_text'] = 'Searching...'; // CHANGED IN 1.6.0 VERSION

### EDIT SUBDOMAIN TABLE
$_LANG['subdomains']['edit_tblhead_domain'] = 'Subdomains.Root Domain';
$_LANG['subdomains']['edit_tblhead_root'] = 'Document Root';
$_LANG['subdomains']['edit_tblhead_redirect'] = 'Redirection';
$_LANG['subdomains']['edit_tblhead_actions'] = 'Actions';
$_LANG['subdomains']['search_results_error'] = 'The results cannot be displayed. Try again.';
$_LANG['subdomains']['search_results_empty'] = 'No subdomains are configured.';
$_LANG['not_redirected_text'] = 'not redirected';
$_LANG['subdomains']['chg_sub_cancel_text'] = 'Cancel';
$_LANG['subdomains']['remove_bookmark'] = 'Remove';
$_LANG['subdomains']['remove_sub_label'] = 'Remove Subdomain:';
$_LANG['subdomains']['remove_sub_submit_text'] = 'Remove'; // CHANGED IN 1.6.0 VERSION
$_LANG['subdomains']['remove_sub_loader_text'] = 'Removing...'; // CHANGED IN 1.6.0 VERSION
$_LANG['subdomains']['remove_sub_info_text'] = 'Subdomain has been removed:';
$_LANG['subdomains']['remove_sub_error_text'] = 'A problem has occurred during the subdomain removal:';
$_LANG['subdomains']['chg_directon_bookmark'] = 'Manage Direction';
$_LANG['subdomains']['redirects to'] = 'redirects to';
$_LANG['subdomains']['dis_redirect_sub_submit_text'] = 'Disable Redirection';
$_LANG['subdomains']['redirect_sub_submit_text'] = 'Redirect';
$_LANG['subdomains']['redirect_sub_loader_text'] = 'Redirecting...'; // CHANGED IN 1.6.0 VERSION
$_LANG['subdomains']['redirect_sub_info_text'] = 'Subdomain has been redirected:';
$_LANG['subdomains']['redirect_sub_error_text'] = 'A problem has occurred during the subdomain redirection:';
$_LANG['subdomains']['dis_redirect_sub_loader_text'] = 'Disabling...'; // CHANGED IN 1.6.0 VERSION
$_LANG['subdomains']['dis_redirect_sub_info_text'] = 'Redirection for subdomain has been disabled:';
$_LANG['subdomains']['dis_redirect_sub_error_text'] = 'A problem has occurred when disabling the subdomain redirection.';
$_LANG['subdomains']['dis_redirect_sub_error_text2'] = 'An error has occurred. The operation could not be performed correctly. Refresh this page.';
$_LANG['subdomains']['valid_domain_error1'] = 'Subdomain cannot be empty.';
$_LANG['subdomains']['valid_domain_error2'] = 'That is not a valid subdomain.';
$_LANG['subdomains']['valid_directory_error1'] = 'Directory paths cannot be empty or contain the following characters: \ ~ ` ? % * : | " < >';

$_LANG['subdomains']['delete_confirmation_title'] = "Delete Confirmation";
$_LANG['subdomains']['delete_confirmation_body'] = "Are you sure that you want to remove this item?";

$_LANG['subdomains']['add_result_info'] = "Subdomain has been added successfully";
$_LANG['subdomains']['add_result_error'] = "Subdomain cannot be added";
$_LANG['subdomains']['del_result_info'] = "Subdomain has been deleted successfully";
$_LANG['subdomains']['del_result_error'] = "Subdomain cannot be deleted";


/****************************
 * 
 *      ADDON DOMAIN
 * 
 ****************************/

### CREATE ADDONDOMAIN
$_LANG['addondomains']['add_addondomain_main_header'] = 'Addon Domains';
$_LANG['addondomains']['add_addondomain_hint'] = 'An addon domain allows visitors to reach a subdomain of your site by typing the addon domain\'s URL into a browser. This means that you can host additional domains from your account, if allowed by your hosting provider. Addon Domains Subdomains are relative to your account\'s home directory.';
$_LANG['addondomains']['add_addondomain_sub_main_header'] = 'Create an addon domain';
$_LANG['addondomains']['add_addondomain_domain_label'] = 'New Domain Name:';
$_LANG['addondomains']['add_addondomain_username_label'] = 'Subdomain/FTP Username:';
$_LANG['addondomains']['add_addondomain_password_label'] = 'Password:';
$_LANG['addondomains']['add_addondomain_password2_label'] = 'Password (Again):';
$_LANG['addondomains']['add_addondomain_directory_label'] = 'Document Root:';
$_LANG['addondomains']['add_addondomain_submit_text'] = 'Add Domain';
$_LANG['addondomains']['add_addondomain_loader_text'] = 'Creating...'; // CHANGED IN 1.6.0 VERSION
$_LANG['addondomains']['add_addondomain_result_info1'] = 'The addon domain'; 
$_LANG['addondomains']['add_addondomain_result_info2'] = 'has been created.';
$_LANG['addondomains']['add_addondomain_result_info'] = 'Addon domain has been created successfully';
$_LANG['addondomains']['add_addondomain_result_error'] = 'A problem has occurred during the addon domain creation: ';
$_LANG['addondomains']['add_addondomain_hint'] = 'Hint: This featurehas to be enabled for your account before you can use it. Addon domains will not work unless the domain name is registered with a valid registrar and configured to point to the correct DNS servers.';
$_LANG['addondomains']['add_bandwidth_label']  = 'Bandwidth:'; // CHANGED IN 1.6.0 VERSION
$_LANG['addondomains']['add_diskspace_label']  = 'Disk space:'; // CHANGED IN 1.6.0 VERSION
$_LANG['addondomains']['add_ssl_label']  = 'Secure SSL:'; // CHANGED IN 1.6.0 VERSION
$_LANG['addondomains']['add_cgi_label']  = 'CGI Access:'; // CHANGED IN 1.6.0 VERSION
$_LANG['addondomains']['add_php_label']  = 'PHP Access:'; // CHANGED IN 1.6.0 VERSION
$_LANG['addondomains']['add_ignored_label']  = '(Ignored if not allowed)';
$_LANG['addondomains']['quota_unlimited']  = 'Unlimited';

### SEARCH ADDONDOMAINS
$_LANG['addondomains']['search_header'] = 'Modify Addon Domain';
$_LANG['addondomains']['search_input_value'] = 'Search Domains';
$_LANG['addondomains']['search_submit_text'] = 'Go';
$_LANG['addondomains']['search_select_rows'] = 'Results per page:';
$_LANG['addondomains']['search_loader_text'] = 'Loading...';
$_LANG['addondomains']['search_loader2_text'] = 'Searching...';

### EDIT ADDONDOMAIN
$_LANG['addondomains']['modify_addondomain_tblhead_domain'] = ' Addon Domains';
$_LANG['addondomains']['modify_addondomain_tblhead_document'] = 'Document Root';
$_LANG['addondomains']['modify_addondomain_tblhead_ver'] = 'PHP Version';
$_LANG['addondomains']['modify_addondomain_tblhead_username'] = 'Username';
$_LANG['addondomains']['modify_addondomain_tblhead_redirect'] = 'Redirect To';
$_LANG['addondomains']['modify_addondomain_tblhead_actions'] = 'Actions';
$_LANG['addondomains']['modify_addondomain_search_results_error'] = 'The results cannot be displayed. Try again.';
$_LANG['addondomains']['modify_addondomain_search_results_empty'] = 'No addon domains are configured.';

### VALID ADDONDOMAIN
$_LANG['addondomains']['valid_domainname_error1']   = 'That is not a valid domain.';
$_LANG['addondomains']['valid_bandwidth_error1']    = 'That is not a valid value.';
$_LANG['addondomains']['valid_disk_error1']         = 'That is not a valid value.';
$_LANG['addondomains']['valid_subdomain_user_error1'] = 'That is not a valid subdomain/FTP username.';
$_LANG['addondomains']['valid_directory_error1'] = 'That is not a valid document root name.';
$_LANG['addondomains']['valid_password_error1'] = 'Password cannot be empty.';
$_LANG['addondomains']['valid_password_error2'] = 'Password cannot include spaces.';
$_LANG['addondomains']['valid_password_error3'] = 'Passwords do not match.';
$_LANG['addondomains']['valid_password_error4'] = 'Password strength has to be at least 1.';

### EDIT BOOKMARKS
$_LANG['addondomains']['modify_addondomain_cancel_text'] = 'Cancel';
$_LANG['addondomains']['modify_addondomain_remove_bookmark'] = 'Remove';
$_LANG['addondomains']['modify_addondomain_remove_label'] = 'Remove addon domain:';
$_LANG['addondomains']['modify_addondomain_remove_submit_text'] = 'Remove'; // CHANGED IN 1.6.0 VERSION
$_LANG['addondomains']['modify_addondomain_remove_loader_text'] = 'Removing...'; // CHANGED IN 1.6.0 VERSION
$_LANG['addondomains']['modify_addondomain_remove_info_text1'] = 'The addon domain';
$_LANG['addondomains']['modify_addondomain_remove_info_text2'] = 'has been removed.';
$_LANG['addondomains']['modify_addondomain_remove_error_text'] = 'A problem has occurred during the addon domain removal:';
$_LANG['addondomains']['modify_addondomain_redirecton_bookmark'] = 'Manage Redirection';
$_LANG['addondomains']['modify_addondomain_redirects to'] = 'redirects to';
$_LANG['addondomains']['modify_addondomain_disable_submit_text'] = 'Disable Redirection';
$_LANG['addondomains']['modify_addondomain_redirect_submit_text'] = 'Redirect';
$_LANG['addondomains']['modify_addondomain_redirect_loader_text'] = 'Redirecting...'; // CHANGED IN 1.6.0 VERSION
$_LANG['addondomains']['modify_addondomain_redirect_info_text'] = 'is now being redirected to';
$_LANG['addondomains']['modify_addondomain_redirect_error_text'] = 'A problem has occurred during the addon domain redirection:';
$_LANG['addondomains']['modify_addondomain_disable_loader_text'] = 'Disabling...'; // CHANGED IN 1.6.0 VERSION
$_LANG['addondomains']['modify_addondomain_disable_info_text'] = 'Redirection for addon domain has been disabled:';
$_LANG['addondomains']['modify_addondomain_disable_error_text'] = 'A problem has occurred when disabling the addon domain redirection.';
$_LANG['addondomains']['generate_password'] = 'Generate Password';


### DELETE ADDONDOMAINS
$_LANG['addondomains']['delete_addondomain_result_info']    =   'Addon domain has been removed successfully';
$_LANG['addondomains']['delete_addondomain_result_error']   =   'A problem has occurred during the addon domain removal.';
$_LANG['addondomains']['delete_confirmation_title']         =   'Delete Confirmation';
$_LANG['addondomains']['delete_confirmation_body']           =  'Are you sure that you want to remove this item?'; 

/****************************
 * 
 *   PARKED DOMAIN
 * 
 ****************************/

### CREATE PARKED DOMAIN FORM
$_LANG['parkeddomains']['add_parkeddomain_main_header'] = 'Domain Pointers';
$_LANG['parkeddomains']['add_parkeddomain_hint'] = 'Domain Pointers allow you to "point" or "park" additional domain names to your existing hosting account. This will allow users to also reach your website when entering the "parked" or "pointed" domain into their browsers.';
$_LANG['parkeddomains']['add_parkeddomain_sub_main_header'] = 'Create New Domain Pointer';
$_LANG['parkeddomains']['add_parkeddomain_domain_label'] = 'http://www.';
$_LANG['parkeddomains']['add_parkeddomain_submit_text'] = 'Add Domain';
$_LANG['parkeddomains']['add_parkeddomain_add_loader_text'] = 'Creating...';
$_LANG['parkeddomains']['add_parkeddomain_add_result_info'] = 'Domain pointer has been successfully added.';
$_LANG['parkeddomains']['add_parkeddomain_result_error'] = 'A problem has occurred during the domain pointer addition:';
$_LANG['parkeddomains']['add_parkeddomain_add_hint'] = 'Hint: Domains have to be registered with a valid registrar before they can be pointed. In addition, they will not be functional unless they are configured to point to your DNS servers.';
$_LANG['parkeddomains']['add_parkeddomain_select_type'] = 'Select type:';
$_LANG['parkeddomains']['add_parkeddomain_stype_alias'] = 'Alias'; // CHANGED IN 1.6.0 VERSION
$_LANG['parkeddomains']['add_parkeddomain_stype_pointer'] = 'Pointer'; // CHANGED IN 1.6.0 VERSION
$_LANG['parkeddomains']['valid_domainname_error1'] = 'That is not a valid domain.';

### VALID PARKED DOMAIN FORM
$_LANG['parkeddomains']['valid_domainname_error1'] = 'That is not a valid domain.';
$_LANG['parkeddomains']['add_loader_text'] = 'Creating...'; // CHANGED IN 1.6.0 VERSION

### PARKEDDOMAINS SEARCH FORM
$_LANG['parkeddomains']['search_parkeddomain_header'] = 'Search Domain Pointers';
$_LANG['parkeddomains']['search_parkeddomain_input_value'] = 'Search';
$_LANG['parkeddomains']['search_parkeddomain_submit_text'] = 'Go';
$_LANG['parkeddomains']['search_parkeddomain_count_select'] = 'Results per page:';

### MODIFY PARKED DOMAINS (TABLE)
$_LANG['parkeddomains']['modify_parkeddomain_tblhead_domain'] = 'Source Domain'; // CHANGED IN 1.6.0 VERSION
$_LANG['parkeddomains']['modify_parkeddomain_tblhead_targer_domain'] = 'Target Domain';
$_LANG['parkeddomains']['modify_parkeddomain_tblhead_type'] = 'Type';
$_LANG['parkeddomains']['search_loader_searching_text'] = 'Searching...';
$_LANG['parkeddomains']['search_parked_domains_noresult'] = 'No domain pointers are configured.';
$_LANG['parkeddomains']['search_parked_domains_error'] = 'The results cannot be displayed. Try again.';
$_LANG['parkeddomains']['modify_parkeddomain_tblhead_action'] = 'Actions';
$_LANG['parkeddomains']['modify_parkeddomain_tbl_remove_link'] = 'Remove';
$_LANG['parkeddomains']['modify_parkeddomain_tbl_redirect_link'] = 'Manage Redirection';
$_LANG['parkeddomains']['modify_parkeddomain_tbl_results_error'] = 'The results cannot be displayed. Try again.';
$_LANG['parkeddomains']['modify_parkeddomain_tbl_results_empty'] = 'No domain pointers are present.';
$_LANG['parkeddomains']['modify_parkeddomain_load_list'] = 'Loading...';
$_LANG['parkeddomains']['modify_parkeddomain_search_list'] = 'Searching...';

### MODIFY PARKED DOMAINS (TABLE BOOKMARKS)
$_LANG['parkeddomains']['modify_parkeddomain_cancel_text'] = 'Cancel';

### remove
$_LANG['parkeddomains']['modify_parkeddomain_delete_button_label'] = 'Delete'; // CHANGED IN 1.6.0 VERSION
$_LANG['parkeddomains']['modify_parkeddomain_remove_label'] = 'Remove domain pointer:';
$_LANG['parkeddomains']['modify_parkeddomain_remove_submit_text'] = 'Remove Domain Pointer';
$_LANG['parkeddomains']['modify_parkeddomain_remove_loader_text'] = 'Removing...'; // CHANGED IN 1.6.0 VERSION
$_LANG['parkeddomains']['modify_parkeddomain_remove_info_text1'] = 'The domain pointer has been removed.';
$_LANG['parkeddomains']['modify_parkeddomain_remove_info_text2'] = 'has been removed.';
$_LANG['parkeddomains']['modify_parkeddomain_remove_error_text'] = 'A problem has occurred during the domain pointer removal:';

### manage redirection
$_LANG['parkeddomains']['modify_parkeddomain_redirects to'] = 'redirects to';
$_LANG['parkeddomains']['modify_parkeddomain_disable_submit_text'] = 'Disable Redirection';
$_LANG['parkeddomains']['modify_parkeddomain_redirect_submit_text'] = 'Redirect';
$_LANG['parkeddomains']['modify_parkeddomain_redirect_loader_text'] = 'Redirecting...'; // CHANGED IN 1.6.0 VERSION
$_LANG['parkeddomains']['modify_parkeddomain_redirect_info_text'] = 'is now being redirected to';
$_LANG['parkeddomains']['modify_parkeddomain_redirect_error_text'] = 'A problem has occurred during the domain pointer redirection:';
$_LANG['parkeddomains']['modify_parkeddomain_disable_loader_text'] = 'Disabling...'; // CHANGED IN 1.6.0 VERSION
$_LANG['parkeddomains']['modify_parkeddomain_disable_info_text'] = 'is now being redirected to nowhere (Redirection Disabled!)';
$_LANG['parkeddomains']['modify_parkeddomain_disable_error_text'] = 'A problem has occurred when disabling the domain pointer redirection.';

$_LANG['parkeddomains']['add_result_info']      =   'Domain pointer has been added successfully';
$_LANG['parkeddomains']['add_result_error']     =   'Domain pointer cannot be added';
$_LANG['parkeddomains']['del_result_info']      =   'Domain pointer has been deleted successfully ';
$_LANG['parkeddomains']['del_result_error']     =   'Domain pointer cannot be deleted';

$_LANG['parkeddomains']['delete_confirmation_title'] = "Delete Confirmation";
$_LANG['parkeddomains']['delete_confirmation_body'] = "Are you sure that you want to remove this item?";



/*********************************
 * 
 *        DATABSASES
 * 
 *********************************/

### CREATE DB
$_LANG['databases']['main_hint'] = 'MySQL Databases allow you to store lots of information in an easy to access manner. The databases themselves are not easily read by humans. MySQL databases are required by many web applications including some bulletin boards, content management systems, and others. To use a database, you\'ll need to create it. Only MySQL Users (different than mail or other users) that have privileges to access a database can read from or write to that database.';
$_LANG['databases']['main_header'] = 'Databases';
$_LANG['databases']['add_header'] = 'Create New Database';
$_LANG['databases']['new_db_label'] = 'New Database:';
$_LANG['databases']['new_db_submit_text'] = 'Create Database';
$_LANG['databases']['new_db_loader_text'] = 'Creating...'; // CHANGED IN 1.6.0 VERSION
$_LANG['databases']['new_db_info_text'] = 'Database has been created successfully.';
$_LANG['databases']['new_db_error_text'] = 'A problem has occurred during the database creation:';
$_LANG['databases']['new_db_error1'] = 'Unknown error. Try again!';
$_LANG['databases']['new_db_error2'] = 'Database cannot be created';
$_LANG['databases']['new_db_error3'] = 'The database';
$_LANG['databases']['new_db_error4'] = 'already exists!';
$_LANG['databases']['new_db_priv_loader_text'] = 'Loading...'; // CHANGED IN 1.6.0 VERSION
$_LANG['databases']['manage_user_privileges'] = 'Manage privileges for user';
$_LANG['databases']['new_db_priv_submit'] = 'Change Privileges';
$_LANG['databases']['new_db_del_priv_submit'] = 'Delete';
$_LANG['databases']['new_db_priv_cancel'] = 'Cancel';
$_LANG['databases']['new_db_priv_loader'] = 'Changing...'; // CHANGED IN 1.6.0 VERSION
$_LANG['databases']['new_db_priv_info'] = 'Privileges have been updated.';
$_LANG['databases']['new_db_priv_error'] = 'A problem has occurred during the user privileges change:';
$_LANG['databases']['new_db_del_priv_loader'] = 'Deleting...'; // CHANGED IN 1.6.0 VERSION
$_LANG['databases']['new_db_del_priv_info'] = 'User has been deleted from database.';
$_LANG['databases']['new_db_del_priv_error'] = 'A problem has occurred during the user deletion from the database:';
$_LANG['databases']['new_db_del_db_label'] = 'Delete database:';
$_LANG['databases']['new_db_del_db_submit'] = 'Delete';
$_LANG['databases']['new_db_del_db_cancel'] = 'Cancel';
$_LANG['databases']['new_db_del_db_loader'] = 'Deleting...'; // CHANGED IN 1.6.0 VERSION
$_LANG['databases']['new_db_del_db_info'] = 'Database has been deleted successfully.';
$_LANG['databases']['new_db_del_db_error'] = 'There are no databases associated with your account.';
$_LANG['databases']['chg_sub_cancel_text'] = 'Cancel';

$_LANG['databases']['add_database_result_info'] = 'Database has been created successfully.';
$_LANG['databases']['add_database_result_error'] = 'A problem has occurred during the database creation.';

$_LANG['databases']['delete_database_result_info'] = 'Database has been deleted successfully.';
$_LANG['databases']['delete_database_result_error'] = 'A problem has occurred during the database deletion.';

$_LANG['databases']['add_user_result_info']     =   'User added.';
$_LANG['databases']['add_user_result_error']     =   'A problem has occurred during the user creation.';

$_LANG['databases']['delete_user_result_info']  =   'User has been deleted from database.';
$_LANG['databases']['delete_user_result_error'] =   'A problem has occurred during the user deletion from the database.';



$_LANG['databases']['set_user_privilages_result_info'] = 'Privileges have been updated.';
$_LANG['databases']['set_user_privilages_result_error'] =   'A problem has occurred during the user privileges change.';
$_LANG['databases']['delete_confirmation_title'] = "Delete Confirmation";
$_LANG['databases']['delete_confirmation_body'] = "Are you sure that you want to remove this item?";

### CURRENT DB
$_LANG['databases']['current_db_header'] = 'Current Databases';
$_LANG['databases']['current_db_input_value'] = 'Search Databases';
$_LANG['databases']['current_db_submit_text'] = 'Search Databases';
$_LANG['databases']['current_db_select_rows'] = 'Results per page:';
$_LANG['databases']['current_db_loader_text'] = 'Loading...'; // CHANGED IN 1.6.0 VERSION
$_LANG['databases']['current_db_loader2_text'] = 'Searching...'; // CHANGED IN 1.6.0 VERSION
$_LANG['databases']['current_db_head_db'] = 'Database';
$_LANG['databases']['current_db_head_size'] = 'Size';
$_LANG['databases']['current_db_head_users'] = 'Users';
$_LANG['databases']['current_db_head_actions'] = 'Actions';
$_LANG['databases']['current_db_search_error'] = 'No result to display';
$_LANG['databases']['current_db_search_empty'] = 'There are no databases associated with your account.';
$_LANG['databases']['current_db_bookmark_delete'] = 'Delete';

### CREATE DB USER
$_LANG['databases']['add_user_header'] = 'Add New Mysql User';
$_LANG['databases']['add_user_label_username'] = 'Username:';
$_LANG['databases']['add_user_label_password'] = 'Password:';
$_LANG['databases']['add_user_label_password2'] = 'Password (Again):';
$_LANG['databases']['add_user_submit_text'] = 'Create User';
$_LANG['databases']['add_user_loader_text'] = 'Creating...'; // CHANGED IN 1.6.0 VERSION
$_LANG['databases']['add_user_info'] = 'Added the user';
$_LANG['databases']['add_user_error'] = 'A problem has occurred during the user addition:';

### ADD USER TO DB
$_LANG['databases']['add_userdb_header'] = 'Add User To Database';
$_LANG['databases']['add_userdb_label_database'] = 'Database:';
$_LANG['databases']['add_userdb_label_user'] = 'User:';
$_LANG['databases']['add_userdb_label_privileges'] = 'Privileges:';
$_LANG['databases']['add_userdb_priv_submit_text'] = 'Add Privileges';
$_LANG['databases']['add_userdb_set_submit_text'] = 'Set Privileges';
$_LANG['databases']['add_userdb_loader_text'] = 'Adding user to database...';
$_LANG['databases']['add_userdb_info'] = 'User has been added to the database.';
$_LANG['databases']['add_userdb_error'] = 'A problem has occurred during the user addition to the database:';

### CURRENT USERS
$_LANG['databases']['current_users_header'] = 'Current Users';
$_LANG['databases']['current_users_input_value'] = 'Search Users';
$_LANG['databases']['current_users_submit_text'] = 'Search Accounts';
$_LANG['databases']['current_users_select_rows'] = 'Results per page:';
$_LANG['databases']['current_users_loader_text'] = 'Loading databases list...';
$_LANG['databases']['current_users_loader2_text'] = 'Searching...'; // CHANGED IN 1.6.0 VERSION
$_LANG['databases']['current_users_head_users'] = 'Users';
$_LANG['databases']['current_users_head_actions'] = 'Actions';
$_LANG['databases']['current_users_search_error'] = 'No results to display';
$_LANG['databases']['current_users_search_empty'] = 'There are no users associated with your account.';
$_LANG['databases']['current_users_bookmark_delete'] = 'Delete';
$_LANG['databases']['current_users_lbl_delete'] = 'Delete user:'; // CHANGED IN 1.6.0 VERSION
$_LANG['databases']['current_users_delete_submit'] = 'Delete'; // CHANGED IN 1.6.0 VERSION
$_LANG['databases']['current_users_delete_cancel'] = 'Cancel';
$_LANG['databases']['current_users_delete_loader'] = 'Deleting...'; // CHANGED IN 1.6.0 VERSION
$_LANG['databases']['current_users_delete_info'] = 'User deleted';
$_LANG['databases']['current_users_delete_error'] = 'A problem has occurred during the user deletion:';
$_LANG['databases']['dbname_valid1'] = 'The maximum input length for this field is 56 characters.';
$_LANG['databases']['dbname_valid2'] = 'Database name has to contain alphanumeric characters.';
$_LANG['databases']['username_valid1'] = 'Username cannot be longer than 8 characters.';
$_LANG['databases']['username_valid2'] = 'Username has to contain alphanumeric characters.';
$_LANG['databases']['password_valid1'] = 'Password cannot be empty.';
$_LANG['databases']['password_valid2'] = 'Password strength has to be at least 5.';
$_LANG['databases']['password_valid3'] = 'Password cannot include spaces.';
$_LANG['databases']['password_valid4'] = 'Passwords do not match.';
$_LANG['databases']['generate_password'] = 'Generate Password';

$_LANG['databases']['database_delete_confirmation_title']   =   'database_delete_confirmation_title';
$_LANG['databases']['database_delete_confirmation_body']    =   'database_delete_confirmation_body';
$_LANG['databases']['user_delete_confirmation_title']       =   'user_delete_confirmation_title';
$_LANG['databases']['user_delete_confirmation_body']        =   'user_delete_confirmation_body';

$_LANG['databases']['field_required'] = "This field is required";


/*********************************
 * 
 *          FORWARD DOMAINS
 * 
 *********************************/

### MANAGING SELECT
$_LANG['forwarddomains']['page_header'] = 'Site Redirections';
$_LANG['forwarddomains']['managing_select_label'] = 'Managing:';
$_LANG['forwarddomains']['managing_submit_text'] = 'Go';

### CREATE EMAIL ACCOUNT FORWARDES
$_LANG['forwarddomains']['add_aforward_main_header'] = 'Email Forwarders';
$_LANG['forwarddomains']['add_aforward_hint'] = 'Redirects allow you to make a specific web page redirect to another page and display the contents of that page. This way you can make a page with a long URL accessible by a page which has a shorter and easier to remember URL.';
$_LANG['forwarddomains']['add_aforward_sub_main_header'] = 'Add Redirection';
$_LANG['forwarddomains']['add_aforward_address_header'] = 'Address';
$_LANG['forwarddomains']['add_aforward_label'] = 'Local URL Path:'; // CHANGED IN 1.6.0 VERSION
$_LANG['forwarddomains']['add_aforward_dest_header'] = 'Destination';
$_LANG['forwarddomains']['add_aforward_dest_email'] = 'Forward to email address:';
$_LANG['forwarddomains']['add_aforward_dest_discard1'] = 'Discard with error to sender (at SMTP time):';
$_LANG['forwarddomains']['add_aforward_dest_discard2'] = 'Failure Message (seen by sender):';
$_LANG['forwarddomains']['add_aforward_dest_discard3'] = 'No such person at this address';
$_LANG['forwarddomains']['add_aforward_submit_text'] = 'Add Redirection';
$_LANG['forwarddomains']['add_aforward_advanced_link'] = 'Advanced Options';
$_LANG['forwarddomains']['add_aforward_advanced_system'] = 'Forward to a system account:';
$_LANG['forwarddomains']['add_aforward_advanced_pipe'] = 'Pipe to a Program:';
$_LANG['forwarddomains']['add_aforward_advanced_pipe_hint'] = 'When piping to a program, you should enter a path relative to your home directory. If the script requires an interpreter such as Perl or PHP, you should omit the /usr/bin/perl or /usr/bin/php portion. Make sure that your script is executable and has the appropriate hashbang at the top of the script. If you do not know how to add the hashbang, just make sure to name your script file with the correct extension and you will be prompted to have the hashbang added automatically. ';
$_LANG['forwarddomains']['add_aforward_advanced_discard'] = 'Discard (Not Recommended) ';
$_LANG['forwarddomains']['add_aforward_loader'] = 'Creating...'; // CHANGED IN 1.6.0 VERSION
$_LANG['forwarddomains']['add_aforward_info_text'] = 'New site redirection has been created';
$_LANG['forwarddomains']['add_aforward_error_text1'] = 'A problem has occurred during the new email forwarder creation.';
$_LANG['forwarddomains']['add_aforward_error_text2'] = 'A problem has probably occurred during the new email forwarder creation. Check the table of forwards.';

### CREATE EMAIL ACCOUNT FORWARDES VALIDATION
$_LANG['forwarddomains']['valid_aforward_email'] = 'That is not a valid directory.';
$_LANG['forwarddomains']['valid_aforward_destination_email'] = 'That is not a valid email address.';
$_LANG['forwarddomains']['valid_aforward_destination_discard'] = 'Failure message cannot be empty.';
$_LANG['forwarddomains']['valid_aforward_destination_sustemuser'] = 'Username invalid.';
$_LANG['forwarddomains']['valid_aforward_destination_pipe'] = 'Directory paths cannot be empty or contain the following characters: \ ? % * : | " < >';

### EMAIL ACCOUNT FORWARDES SEARCH
$_LANG['forwarddomains']['search_aforward_header'] = 'Search Account Redirections';
$_LANG['forwarddomains']['search_aforward_value'] = 'Search';
$_LANG['forwarddomains']['search_aforward_submit'] = 'Go';
$_LANG['forwarddomains']['search_aforward_count'] = 'Results per page:';

### MODIFY EMAIL ACCOUNT FORWARDES (TABLE)
$_LANG['forwarddomains']['modify_aforward_tblhead_address'] = 'Address';
$_LANG['forwarddomains']['modify_aforward_tblhead_forward'] = 'Forward To';
$_LANG['forwarddomains']['modify_aforward_tblhead_action'] = 'Actions';
$_LANG['forwarddomains']['modify_aforward_tbl_delete_link'] = 'Delete';
$_LANG['forwarddomains']['modify_aforward_tbl_to_text'] = 'to';
$_LANG['forwarddomains']['modify_aforward_tbl_results_error'] = 'The results cannot be displayed. Try again.';
$_LANG['forwarddomains']['modify_aforward_tbl_results_empty'] = 'There are no forwarders configured for the current domain.';
$_LANG['forwarddomains']['modify_aforward_load_list'] = 'Loading...';
$_LANG['forwarddomains']['modify_aforward_search_list'] = 'Searching...';

### MODIFY EMAIL ACCOUNT FORWARDES (TABLE, DELETE BUTTON)
$_LANG['forwarddomains']['modify_aforward_delete_label'] = 'Delete this site redirection';
$_LANG['forwarddomains']['modify_aforward_delete_button'] = 'Delete Forwarder';
$_LANG['forwarddomains']['modify_aforward_delete_cancel'] = 'Cancel';
$_LANG['forwarddomains']['modify_aforward_delete_loader'] = 'Deleting...'; // CHANGED IN 1.6.0 VERSION
$_LANG['forwarddomains']['modify_aforward_info_text'] = 'The site redirection has been deleted';
$_LANG['forwarddomains']['modify_aforward_error_text'] = 'A problem has occurred during the site redirection deletion. Try Again!';
$_LANG['forwarddomains']['modify_aforward_error_text2'] = 'The site redirection cannot be deleted. Refresh the page';

### CREATE EMAIL DOMAIN FORWARDES
$_LANG['forwarddomains']['add_dforward_main_header'] = 'Email Domain Forwarders';
$_LANG['forwarddomains']['add_dforward_hint1'] = 'In addition to forwarding individual mail accounts, you can forward all emails from one domain to another. Forwarding a domain\'s email will override the default address for that domain.';
$_LANG['forwarddomains']['add_dforward_hint2'] = 'Warning:';
$_LANG['forwarddomains']['add_dforward_hint3'] = 'Forwarding a domain\'s email will override the default address for that domain.';
$_LANG['forwarddomains']['add_dforward_sub_main_header'] = 'Add New Domain Forwarder';
$_LANG['forwarddomains']['add_dforward_address_header'] = 'Address';
$_LANG['forwarddomains']['add_dforward_label'] = 'Address to be forwarded:';
$_LANG['forwarddomains']['add_dforward_label'] = 'Domain to be forwarded:';
$_LANG['forwarddomains']['add_dforward_submit_text'] = 'Add Domain Forwarder';
$_LANG['forwarddomains']['add_dforward_label'] = 'Domain to be forwarded:';
$_LANG['forwarddomains']['add_dforward_label'] = 'Domain to be forwarded:';
$_LANG['forwarddomains']['add_destination_info_label'] = 'Destination URL';
$_LANG['forwarddomains']['add_result_info'] = 'Success';

### EMAIL DOMAIN FORWARDES SEARCH
$_LANG['forwarddomains']['search_dforward_header'] = 'Search Account Redirections';
$_LANG['forwarddomains']['search_dforward_value'] = 'Search';
$_LANG['forwarddomains']['search_dforward_submit'] = 'Go';
$_LANG['forwarddomains']['search_dforward_count'] = 'Results per page:';

### MODIFY EMAIL DOMAIN FORWARDES (TABLE)
$_LANG['forwarddomains']['modify_dforward_tblhead_address'] = 'Domain';
$_LANG['forwarddomains']['modify_dforward_tblhead_forward'] = 'Forward To';
$_LANG['forwarddomains']['modify_dforward_tblhead_action'] = 'Actions';
$_LANG['forwarddomains']['modify_dforward_tbl_delete_link'] = 'Delete';
$_LANG['forwarddomains']['modify_dforward_tbl_to_text'] = 'to';
$_LANG['forwarddomains']['modify_dforward_tbl_results_error'] = 'The results cannot be displayed. Try again.';
$_LANG['forwarddomains']['modify_dforward_tbl_results_empty'] = 'There are no domain forwarders set for this domain.';
$_LANG['forwarddomains']['modify_dforward_load_list'] = 'Loading...';
$_LANG['forwarddomains']['modify_dforward_search_list'] = 'Searching...';

### MODIFY EMAIL DOMAIN FORWARDES (TABLE, DELETE BUTTON)
$_LANG['forwarddomains']['modify_dforward_delete_label'] = 'Delete domain forwarder:'; // CHANGED IN 1.6.0 VERSION
$_LANG['forwarddomains']['modify_dforward_delete_button'] = 'Delete'; // CHANGED IN 1.6.0 VERSION
$_LANG['forwarddomains']['modify_dforward_delete_cancel'] = 'Cancel';
$_LANG['forwarddomains']['modify_dforward_delete_loader'] = 'Deleting...'; // CHANGED IN 1.6.0 VERSION
$_LANG['forwarddomains']['modify_dforward_info_text'] = 'The domain forwarder has been deleted';
$_LANG['forwarddomains']['modify_dforward_error_text'] = 'A problem has occurred during the domain forwarder deletion. Try Again!';
$_LANG['forwarddomains']['modify_dforward_error_text2'] = 'The domain forwarder cannot be deleted. Refresh the page';

### CREATE DOMAIN FORWARDES SUBMIT
$_LANG['forwarddomains']['add_dforward_loader'] = 'New site redirection has been created';
$_LANG['forwarddomains']['add_dforward_info_text'] = 'New site redirection has been created';
$_LANG['forwarddomains']['add_dforward_error_text1'] = 'A problem has occurred during the new forwarder creation.';
$_LANG['forwarddomains']['add_dforward_error_text2'] = 'A problem has probably occurred during the new forwarder creation. Check the table of forwards.';

### CREATE DOMAIN FORWARDES VALIDATION
$_LANG['forwarddomains']['valid_dforward_email'] = 'Please enter a hostname (ie$_LANG: domain.com).';
$_LANG['forwarddomains']['lbl_type'] = 'Type:';
$_LANG['forwarddomains']['lbl_pernament'] = 'Permanent (301)';
$_LANG['forwarddomains']['lbl_temporary'] = 'Temporary (302)';
$_LANG['forwarddomains']['lbl_redirection'] = 'www. redirection';
$_LANG['forwarddomains']['lbl_only_www'] = 'Only redirect with www.';
$_LANG['forwarddomains']['lbl_without_www'] = 'Redirect with or without www.';
$_LANG['forwarddomains']['lbl_not_www'] = 'Do Not Redirect www.';
$_LANG['forwarddomains']['lbl_wildcard'] = 'Wild Card Redirect';

$_LANG['forwarddomains']['add_result_info'] = 'Site redirection has been added successfully';
$_LANG['forwarddomains']['del_result_info'] = 'Site redirection has been deleted successfully';

$_LANG['forwarddomains']['delete_confirmation_title'] = "Delete Confirmation";
$_LANG['forwarddomains']['delete_confirmation_body'] = "Are you sure that you want to remove this item?";

$_LANG['emailsforwarders']['edit_forwarder'] = 'Edit Forwarder';
$_LANG['emailsforwarders']['add_forwarder_header'] = 'Add Forwarder';
$_LANG['emailsforwarders']['label_email'] = 'Email name:';
$_LANG['emailsforwarders']['label_forwarder_email'] = 'Destination Email:';
$_LANG['emailsforwarders']['modify_dforward_delete_cancel'] = 'Cancel';
$_LANG['emailsforwarders']['add_loader_text'] = 'Creating...'; // CHANGED IN 1.6.0 VERSION
$_LANG['emailsforwarders']['mod_loader_text'] = 'Saving...'; // CHANGED IN 1.6.0 VERSION
$_LANG['emailsforwarders']['add_result_info'] = 'Forwarder has been added successfully';
$_LANG['emailsforwarders']['add_result_error'] = 'A problem has occurred during the forwarder addition.';
$_LANG['emailsforwarders']['add_already_exists_error'] = 'Forwarder already exists.';
$_LANG['emailsforwarders']['edit_tblhead_account'] = 'User';
$_LANG['emailsforwarders']['edit_tblhead_actions'] = 'Actions';
$_LANG['emailsforwarders']['edit_tblhead_from'] = 'From';
$_LANG['emailsforwarders']['edit_tblhead_to'] = 'To';
$_LANG['emailsforwarders']['edit_table_modify'] = 'Modify';
$_LANG['emailsforwarders']['edit_table_delete'] = 'Delete';
$_LANG['emailsforwarders']['del_forwarder_submit_text'] = 'Delete'; // CHANGED IN 1.6.0 VERSION
$_LANG['emailsforwarders']['del_forwarder_label'] = 'Delete Forwarder:';
$_LANG['emailsforwarders']['chg_forwarder_cancel_text'] = 'Cancel';
$_LANG['emailsforwarders']['del_forwarder_loader_text'] = 'Deleting...'; // CHANGED IN 1.6.0 VERSION
$_LANG['emailsforwarders']['del_forwardert_info_text'] = 'Account deleted';
$_LANG['emailsforwarders']['search_results_empty'] = 'No forwarders have been found.';
$_LANG['emailsforwarders']['del_forwarder_error_text'] = 'A problem has occurred during the forwarder deletion:';
$_LANG['emailsforwarders']['mod_forwarder_label'] = 'Forwarder name:';
$_LANG['emailsforwarders']['refresh_loader_text'] = 'Loading...'; // CHANGED IN 1.6.0 VERSION
$_LANG['emailsforwarders']['mod_forwarder_btn_save'] = 'Save changes';
$_LANG['emailsforwarders']['valid_email_name_long_error'] = 'Email address cannot be longer than 128 characters.';
$_LANG['emailsforwarders']['valid_email_name_error'] = 'That is not a valid name part of email address.';
$_LANG['emailsforwarders']['add_forwarder'] = 'Add a New Forwarder';
$_LANG['emailsforwarders']['valid_email_address_long_error'] = 'Email address cannot be longer than 128 characters.';
$_LANG['emailsforwarders']['valid_email_address_error'] = 'That is not a valid email address.';
$_LANG['emailsforwarders']['add_aforward_main_header'] = 'Email Forwarders';
$_LANG['emailsforwarders']['add_aforward_hint'] = 'Forwarders allow you to send a copy of all mail from one email address to another. For example, if you have two different email accounts, joe@example.com and joseph@example.com, you could forward joe@example.com to joseph@example.com so that you do not need to check both accounts. Note that the forwarded mail will still be delivered to the original address as well.';
$_LANG['emailsforwarders']['modify_dforward_nodify_info'] = 'The domain forwarder has been modified';
$_LANG['emailsforwarders']['modify_dforward_delete_loader'] = 'Deleting...'; // CHANGED IN 1.6.0 VERSION
$_LANG['emailsforwarders']['modify_dforward_info_text'] = 'The domain forwarder has been deleted';
$_LANG['emailsforwarders']['modify_dforward_error_text'] = 'A problem has occurred during the domain forwarder deletion. Try Again!';
$_LANG['emailsforwarders']['modify_dforward_error_text2'] = 'The domain forwarder cannot be deleted. Refresh the page';
$_LANG['emailsforwarders']['search_header'] = 'Search Forwarders';
$_LANG['emailsforwarders']['search_input_value'] = 'Search';
$_LANG['emailsforwarders']['search_submit_text'] = 'Go';
$_LANG['emailsforwarders']['search_loader_text'] = 'Searching...'; // CHANGED IN 1.6.0 VERSION
$_LANG['emailsforwarders']['search_no_result'] = 'No forwarders are configured';
$_LANG['emailsforwarders']['search_error'] = 'The results cannot be displayed. Try again.';
$_LANG['emailsforwarders']['chg_result_info']       =   'Forwarder has been changed successfully';
$_LANG['emailsforwarders']['chg_result_error']      =   'Unknown error. Please try again later.';
$_LANG['emailsforwarders']['delete_confirmation_title'] = "Delete Confirmation";
$_LANG['emailsforwarders']['delete_confirmation_body'] = "Are you sure that you want to remove this item?";
$_LANG['emailsforwarders']['field_required'] = "This field is required";
$_LANG['emailsforwarders']['del_result_info'] = "Forwarder has been deleted successfully";

$_LANG['cron']['main_header'] = 'Cron Jobs';
$_LANG['cron']['main_hint'] = 'Cron jobs allow you to automate certain commands or scripts on your site. You can set a command or script to run at a specific time every day, week, etc. For example, you could set a cron job to delete temporary files every week to free up disk space.';
$_LANG['cron']['main_hint2'] = 'Warning:';
$_LANG['cron']['main_hint3'] = 'You need to have a good knowledge of Linux commands before you can use cron jobs effectively. Check your script with your hosting administrator before adding a cron job.';
$_LANG['cron']['chg_sub_cancel_text'] = 'Cancel';
$_LANG['cron']['cron_main_header'] = 'Cron Jobs';
$_LANG['cron']['add_header'] = 'Add New Cron Job';
$_LANG['cron']['common_label'] = 'Common Settings:';
$_LANG['cron']['common_label1'] = 'Common Settings';
$_LANG['cron']['common_label2'] = 'Every minute';
$_LANG['cron']['common_label3'] = 'Every 5 minutes';
$_LANG['cron']['common_label4'] = 'Twice an hour';
$_LANG['cron']['common_label5'] = 'Once an hour';
$_LANG['cron']['common_label6'] = 'Twice a day';
$_LANG['cron']['common_label7'] = 'Once a day';
$_LANG['cron']['common_label8'] = 'Once a week';
$_LANG['cron']['common_label9'] = '1st and 15th';
$_LANG['cron']['common_label10'] = 'Once a month';
$_LANG['cron']['common_label11'] = 'Once a year';
$_LANG['cron']['min_label'] = 'Minute:';
$_LANG['cron']['min_label1'] = 'Common Settings';
$_LANG['cron']['min_label2'] = 'Every minute';
$_LANG['cron']['min_label3'] = 'Every other minute';
$_LANG['cron']['min_label4'] = 'Every 5 minutes';
$_LANG['cron']['min_label5'] = 'Every 10 minutes';
$_LANG['cron']['min_label6'] = 'Every 15 minutes';
$_LANG['cron']['min_label7'] = 'Every 30 minutes';
$_LANG['cron']['min_label8'] = 'Minutes';
$_LANG['cron']['min_label9'] = 'top of the hour';
$_LANG['cron']['min_label10'] = 'quarter past';
$_LANG['cron']['min_label11'] = 'half past';
$_LANG['cron']['min_label12'] = 'quarter till';
$_LANG['cron']['hour_label'] = 'Hour:';
$_LANG['cron']['hour_label1'] = 'Common Settings';
$_LANG['cron']['hour_label2'] = 'Every hour';
$_LANG['cron']['hour_label3'] = 'Every other hour';
$_LANG['cron']['hour_label4'] = 'Every 3 hours';
$_LANG['cron']['hour_label5'] = 'Every 4 hours';
$_LANG['cron']['hour_label6'] = 'Every 6 hours';
$_LANG['cron']['hour_label7'] = 'Every 12 hours';
$_LANG['cron']['hour_label8'] = 'Hours';
$_LANG['cron']['hour_label9'] = '12:00 a.m. midnight (0)';
$_LANG['cron']['hour_label10'] = '12:00 p.m. noon (12)';
$_LANG['cron']['hour_label11'] = 'a.m.';
$_LANG['cron']['hour_label12'] = 'p.m.';
$_LANG['cron']['day_label'] = 'Day:';
$_LANG['cron']['day_label1'] = 'Common Settings';
$_LANG['cron']['day_label2'] = 'Every day';
$_LANG['cron']['day_label3'] = 'Every other day';
$_LANG['cron']['day_label4'] = '1st and 15th';
$_LANG['cron']['day_label5'] = 'Days';
$_LANG['cron']['day_label6'] = '1st (1)';
$_LANG['cron']['day_label7'] = '2nd (2)';
$_LANG['cron']['day_label8'] = '3rd (3)';
$_LANG['cron']['day_label9'] = '4th (4)';
$_LANG['cron']['day_label10'] = '5th (5)';
$_LANG['cron']['day_label11'] = '6th (6)';
$_LANG['cron']['day_label12'] = '7th (7)';
$_LANG['cron']['day_label13'] = '8th (8)';
$_LANG['cron']['day_label14'] = '9th (9)';
$_LANG['cron']['day_label15'] = '10th (10)';
$_LANG['cron']['day_label16'] = '11th (11)';
$_LANG['cron']['day_label17'] = '12th (12)';
$_LANG['cron']['day_label18'] = '13th (13)';
$_LANG['cron']['day_label19'] = '14th (14)';
$_LANG['cron']['day_label20'] = '15th (15)';
$_LANG['cron']['day_label21'] = '16th (16)';
$_LANG['cron']['day_label22'] = '17th (17)';
$_LANG['cron']['day_label23'] = '18th (18)';
$_LANG['cron']['day_label24'] = '19th (19)';
$_LANG['cron']['day_label25'] = '20th (20)';
$_LANG['cron']['day_label26'] = '21st (21)';
$_LANG['cron']['day_label27'] = '22nd (22)';
$_LANG['cron']['day_label28'] = '23rd (23)';
$_LANG['cron']['day_label29'] = '24th (24)';
$_LANG['cron']['day_label30'] = '25th (25)';
$_LANG['cron']['day_label31'] = '26th (26)';
$_LANG['cron']['day_label32'] = '27th (27)';
$_LANG['cron']['day_label33'] = '28th (28)';
$_LANG['cron']['day_label34'] = '29th (29)';
$_LANG['cron']['day_label35'] = '30th (30)';
$_LANG['cron']['day_label36'] = '31st (31)';
$_LANG['cron']['month_label'] = 'Month:';
$_LANG['cron']['month_label1'] = 'Common Settings';
$_LANG['cron']['month_label2'] = 'Every month';
$_LANG['cron']['month_label3'] = 'Every other month';
$_LANG['cron']['month_label4'] = 'Every 3 months';
$_LANG['cron']['month_label5'] = 'Every 6 months';
$_LANG['cron']['month_label6'] = 'Months';
$_LANG['cron']['month_label7'] = 'January';
$_LANG['cron']['month_label8'] = 'February';
$_LANG['cron']['month_label9'] = 'March';
$_LANG['cron']['month_label10'] = 'April';
$_LANG['cron']['month_label11'] = 'May';
$_LANG['cron']['month_label12'] = 'June';
$_LANG['cron']['month_label13'] = 'July';
$_LANG['cron']['month_label14'] = 'August';
$_LANG['cron']['month_label15'] = 'September';
$_LANG['cron']['month_label16'] = 'October';
$_LANG['cron']['month_label17'] = 'November';
$_LANG['cron']['month_label18'] = 'December';
$_LANG['cron']['weekday_label'] = 'Weekday:';
$_LANG['cron']['weekday_label1'] = 'Common Settings';
$_LANG['cron']['weekday_label2'] = 'Every weekday';
$_LANG['cron']['weekday_label3'] = 'Mon till Fri';
$_LANG['cron']['weekday_label4'] = 'Sat and Sun';
$_LANG['cron']['weekday_label5'] = 'Mon, Wed, Fri';
$_LANG['cron']['weekday_label6'] = 'Tues, Thurs';
$_LANG['cron']['weekday_label7'] = 'Weekdays';
$_LANG['cron']['weekday_label8'] = 'Sunday';
$_LANG['cron']['weekday_label9'] = 'Monday';
$_LANG['cron']['weekday_label10'] = 'Tuesday';
$_LANG['cron']['weekday_label11'] = 'Wednesday';
$_LANG['cron']['weekday_label12'] = 'Thursday';
$_LANG['cron']['weekday_label13'] = 'Friday';
$_LANG['cron']['weekday_label14'] = 'Saturday';
$_LANG['cron']['command_label'] = 'Command:';
$_LANG['cron']['add_submit_text'] = 'Add New Cron Job';
$_LANG['cron']['add_loader_text'] = 'Creating a new cron job...';
$_LANG['cron']['add_result_info'] = 'Cron job has been created successfully';
$_LANG['cron']['add_result_error'] = 'A problem has occurred during the cron job creation:';

### CURRENT CRON JOBS
$_LANG['cron']['current_header'] = 'Current Cron Jobs';
$_LANG['cron']['current_tblheader_minute'] = 'Minute';
$_LANG['cron']['current_tblheader_hour'] = 'Hour';
$_LANG['cron']['current_tblheader_day'] = 'Day';
$_LANG['cron']['current_tblheader_month'] = 'Month';
$_LANG['cron']['current_tblheader_weekday'] = 'Weekday';
$_LANG['cron']['current_tblheader_command'] = 'Command';
$_LANG['cron']['current_tblheader_actions'] = 'Actions';
$_LANG['cron']['current_tblheader_error'] = 'The results cannot be displayed. Try again';
$_LANG['cron']['current_tblheader_empty'] = 'No cron jobs have been found.';
$_LANG['cron']['current_bookmark_edit'] = 'Edit';
$_LANG['cron']['chg_job_submit_text'] = 'Edit Line';
$_LANG['cron']['chg_job_loader_text'] = 'Changing cron job...';
$_LANG['cron']['chg_job_info_text'] = 'Cron job has been changed successfully';
$_LANG['cron']['chg_job_error_text'] = 'A problem has occurred during the cron job change:';
$_LANG['cron']['current_bookmark_delete'] = 'Delete';
$_LANG['cron']['del_job_label_text'] = 'Delete this cron job?';
$_LANG['cron']['del_job_submit_text'] = 'Delete';
$_LANG['cron']['del_job_loader_text'] = 'Deleting the cron job...';
$_LANG['cron']['del_result_info'] = 'Cron job has been deleted successfully';
$_LANG['cron']['del_result_error'] = 'A problem has occurred during the cron job deletion:';
$_LANG['cron']['valid_field'] = 'Cron field has not been formatted correctly.';

$_LANG['cron']['edit_cron'] = "Edit Cron";
$_LANG['cron']['confirmation_title'] = "Delete Confirmation";
$_LANG['cron']['confirmation_body'] = "Are you sure that you want to remove this job?";

/********************************************************************************************************************************************
 * 
 * SINCE 1.6.0 version
 * 
 ********************************************************************************************************************************************/

/*********************************
 * 
 *      INSTALL APPS
 * 
 *********************************/

$_LANG['installapp']['softaculous_catname']['cms'] = 'cms';
$_LANG['installapp']['softaculous_catname']['forums'] = 'forums';
$_LANG['installapp']['softaculous_catname']['blogs'] = 'blogs';
$_LANG['installapp']['softaculous_catname']['admanager'] = 'admanager';
$_LANG['installapp']['softaculous_catname']['galleries'] = 'galleries';
$_LANG['installapp']['softaculous_catname']['calendars'] = 'calendars';
$_LANG['installapp']['softaculous_catname']['wikis'] = 'wikis';
$_LANG['installapp']['softaculous_catname']['projectman'] = 'projectman';
$_LANG['installapp']['softaculous_catname']['mail'] = 'mail';
$_LANG['installapp']['softaculous_catname']['polls'] = 'polls';
$_LANG['installapp']['softaculous_catname']['ecommerce'] = 'ecommerce';
$_LANG['installapp']['softaculous_catname']['guestbooks'] = 'guestbooks';
$_LANG['installapp']['softaculous_catname']['customersupport'] = 'customersupport';
$_LANG['installapp']['softaculous_catname']['others'] = 'others';
$_LANG['installapp']['softaculous_catname']['educational'] = 'educational';
$_LANG['installapp']['softaculous_catname']['music'] = 'music';
$_LANG['installapp']['softaculous_catname']['games'] = 'games';
$_LANG['installapp']['softaculous_catname']['files'] = 'files';
$_LANG['installapp']['softaculous_catname']['erp'] = 'erp';
$_LANG['installapp']['softaculous_catname']['socialnetworking'] = 'socialnetworking';
$_LANG['installapp']['softaculous_catname']['frameworks'] = 'frameworks';
$_LANG['installapp']['softaculous_catname']['video'] = 'video';
$_LANG['installapp']['softaculous_catname']['rss'] = 'rss';
$_LANG['installapp']['softaculous_catname']['microblogs'] = 'microblogs';
$_LANG['installapp']['softaculous_catname']['dbtools'] = 'dbtools';
$_LANG['installapp']['choseProtocolInfo'] = 'If your site has SSL, then please choose the HTTPS protocol.';
$_LANG['installapp']['choseProtocol'] = 'Choose Protocol';
$_LANG['installapp']['softsettingsheader'] = 'Software Setup';
$_LANG['installapp']['install_app_main_header'] = 'Install Applications With';  
$_LANG['installapp']['install_app_main_label'] = 'Install Application';         
$_LANG['installapp']['install_app_main_header_backups'] = 'Backups';            
$_LANG['installapp']['install_app_main_header_manage'] = 'Manage apps';         
$_LANG['installapp']['install_app_your_softaculous_apps'] = 'Your Softaculous Apps';
$_LANG['installapp']['install_app_your_installatron_apps'] = 'Your Installatron Apps';
$_LANG['installapp']['install_app_main_header_delete'] = 'Delete Application';
$_LANG['installapp']['install_app_main_header_edit'] = 'Edit Application';      
$_LANG['installapp']['install_app_setup_header'] = 'Application Setup';
$_LANG['installapp']['install_app_new'] = 'Install new';
$_LANG['installapp']['install_app_now'] = 'Install Now!';    
$_LANG['installapp']['install_app_apps'] = '&lt;&lt; Back to your apps';
$_LANG['installapp']['install_app_softaculous_all'] = 'All softaculous app';
$_LANG['installapp']['install_app_installatron_all'] = 'All installatron app';
$_LANG['installapp']['install_app_back'] = 'Back';
$_LANG['installapp']['install_app_edit'] = 'Edit';        
$_LANG['installapp']['install_app_delete'] = 'Delete';    
$_LANG['installapp']['install_app_restore'] = 'Restore';  
$_LANG['installapp']['install_app_create_backup'] = 'Create Backup';   
$_LANG['installapp']['install_app_cancel'] = 'Cancel';                 
$_LANG['installapp']['install_app_field_name'] = 'Name';
$_LANG['installapp']['install_app_field_version'] = 'Version';
$_LANG['installapp']['install_app_field_description'] = 'Description';
$_LANG['installapp']['install_app_field_size'] = 'Size';
$_LANG['installapp']['install_app_field_action'] = 'Action';
$_LANG['installapp']['install_app_field_date'] = 'Date';
$_LANG['installapp']['install_app_field_create_date'] = 'Create Date';    
$_LANG['installapp']['install_app_field_protocol'] = 'Choose Protocol';
$_LANG['installapp']['install_app_field_protocol_description'] = 'If your site has SSL, then please choose the HTTPS protocol.';
$_LANG['installapp']['install_app_field_domain'] = 'Domain';
$_LANG['installapp']['install_app_field_domain_description'] = 'Please choose the domain to install the software.';
$_LANG['installapp']['install_app_field_directory'] = 'Directory';
$_LANG['installapp']['install_app_field_datadir'] = 'Data directory';
$_LANG['installapp']['install_app_field_directory_description'] = 'The directory is relative to your domain and should not exist. e.g. To install at http://mydomain/dir/ just type dir. To install only in http://mydomain/ leave this empty.';
$_LANG['installapp']['install_app_field_datadir_description'] = 'This script requires to store its data in a folder not accessible via the web. It will be created in your home folder. i.e. if you specify datadir, the following will be created - /home/username/datadir';
$_LANG['installapp']['install_app_field_database'] = 'Database Name';
$_LANG['installapp']['install_app_field_database_dbuser'] = "Database username";   
$_LANG['installapp']['install_app_field_database_dbpass'] = "Database password";   
$_LANG['installapp']['install_app_field_database_description'] = 'Type the name of the database to be created for the installation';
$_LANG['installapp']['install_app_field_table'] = "Table prefix";
$_LANG['installapp']['install_app_field_sitename'] = "Site name";
$_LANG['installapp']['install_app_field_sitetitle'] = "Site title";
$_LANG['installapp']['install_app_field_siteshotrname'] = "Site short name"; 
$_LANG['installapp']['install_app_field_sitedescription'] = "Site description";
$_LANG['installapp']['install_app_field_fname'] = "First name";      
$_LANG['installapp']['install_app_field_lname'] = "Last name";       
$_LANG['installapp']['install_app_field_realname'] = "Admin real name";       
$_LANG['installapp']['install_app_field_adminname'] = "Admin username";
$_LANG['installapp']['install_app_field_adminpass'] = "Admin password";
$_LANG['installapp']['install_app_field_adminemail'] = "Admin email";
$_LANG['installapp']['install_app_field_noreply'] = "No-Reply Email";
$_LANG['installapp']['install_app_field_overwrite'] = 'Overwrite Existing';  
$_LANG['installapp']['install_app_field_autoupdate'] = "Auto update";   
$_LANG['installapp']['install_app_btn_install'] = "Install";
$_LANG['installapp']['install_app_results_error'] = "No application has been installed yet";
$_LANG['installapp']['install_app_results_nothing'] = "Nothing to display!";   
$_LANG['installapp']['install_app_delete_text'] = "Are you sure you want to uninstall this application?";
$_LANG['installapp']['install_app_cancel_btn'] = "Cancel";  
$_LANG['installapp']['install_app_nodomains_lbl'] = "No domains";   
$_LANG['installapp']['install_app_backup_btn'] = "Backups";   
$_LANG['installapp']['install_app_create_backup_link'] = "Create Backup";   
$_LANG['installapp']['install_app_create_manage_link'] = "Manage";   
$_LANG['installapp']['install_app_delete_link'] = "Delete";     
$_LANG['installapp']['install_app_delete_btn'] = "Delete";  
$_LANG['installapp']['install_app_remove_dir_lbl'] = 'Remove Directory';    
$_LANG['installapp']['install_app_remove_db_lbl'] = 'Remove Database';  
$_LANG['installapp']['install_app_remove_datadir_lbl'] = 'Remove Data Directory';   
$_LANG['installapp']['install_app_remove_wwwdir_lbl'] = 'Remove WWW Directory'; 
$_LANG['installapp']['install_app_progressbar_del_bckp'] = 'Deleting Backup'; 
$_LANG['installapp']['install_app_progressbar_rest_bckp'] = 'Restoring Backup'; 
$_LANG['installapp']['install_app_progressbar_processing'] = 'Processing...'; 
$_LANG['installapp']['install_app_progressbar_completed'] = 'Completed'; 
$_LANG['installapp']['install_app_success_install'] = 'Success'; 
$_LANG['installapp']['install_app_progressbar_error_install'] = 'Error:'; 
$_LANG['installapp']['install_app_progressbar_creat_bckp'] = 'Creating Backup'; 
$_LANG['installapp']['install_app_progressbar_uninstall'] = 'Uninstalling'; 
$_LANG['installapp']['install_app_progressbar_install'] = 'Installing'; 
$_LANG['installapp']['installatron_catname']['content management'] = 'content management';
$_LANG['installapp']['installatron_catname']['e-commerce and business'] = 'e-commerce and business';
$_LANG['installapp']['installatron_catname']['surveys and statistics'] = 'surveys and statistics';
$_LANG['installapp']['installatron_catname']['miscellaneous'] = 'miscellaneous';
$_LANG['installapp']['installatron_catname']['community building'] = 'community building';
$_LANG['installapp']['installatron_catname']['photos and files'] = 'photos and files';
$_LANG['installapp']['install_app_field_lang'] = 'Language'; 
$_LANG['installapp']['install_app_field_content'] = 'Content'; 
$_LANG['installapp']['install_app_field_content_demo'] = 'Demo Content'; 
$_LANG['installapp']['install_app_field_content_clean'] = 'Clean Install';
$_LANG['installapp']['install_app_hint_databease'] = 'Leave blank when it has to be set automatically';
$_LANG['installapp']['install_app_hint_databease21'] = 'Note:';
$_LANG['installapp']['install_app_hint_databease22'] = 'To install application your hosting account has to come with at least one database available';
$_LANG['installapp']['softaculous_fields']['site_name'] = 'Site Name';
$_LANG['installapp']['softaculous_fields']['site_desc'] = 'Site Description';
$_LANG['installapp']['softaculous_fields']['dbprefix'] = 'Table Prefix';
$_LANG['installapp']['softaculous_fields']['sample_data'] = 'Import Sample Data';
$_LANG['installapp']['softaculous_fields']['admin_username'] = 'Admin Username';
$_LANG['installapp']['softaculous_fields']['admin_pass'] = 'Admin Password';
$_LANG['installapp']['softaculous_fields']['admin_realname'] = 'Real Name';
$_LANG['installapp']['softaculous_fields']['admin_email'] = 'Admin Email';
$_LANG['installapp']['softaculous_fields']['language'] = 'Language';
$_LANG['installapp']['softaculous_fields']['multisite'] = 'Enable Multisite (WPMU)';
$_LANG['installapp']['softaculous_fields']['admin_fname'] = 'First Name';
$_LANG['installapp']['softaculous_fields']['admin_lname'] = 'Last Name';
$_LANG['installapp']['softaculous_fields']['cron_job'] = 'CRON Job';
$_LANG['installapp']['softaculous_fields']['cron_min'] = 'Min';
$_LANG['installapp']['softaculous_fields']['cron_hour'] = 'Hour';
$_LANG['installapp']['softaculous_fields']['cron_day'] = 'Day';
$_LANG['installapp']['softaculous_fields']['cron_month'] = 'Month';
$_LANG['installapp']['softaculous_fields']['cron_weekday'] = 'Weekday';
$_LANG['installapp']['softaculous_fields']['admin_folder'] = 'Admin Folder';
$_LANG['installapp']['softaculous_fields']['site_email'] = 'Company Email';
$_LANG['installapp']['softaculous_fields']['license_key'] = 'Valid License Key';
$_LANG['installapp']['softaculous_fields']['admin_language'] = 'Select Admin Language';
$_LANG['installapp']['softaculous_fields']['end_language'] = 'Select Site Language';
$_LANG['installapp']['softaculous_fields']['datadir'] = 'Data Directory';

/**************************
 * 
 *       Backups
 * 
 **************************/

$_LANG['backups']['createBackup'] = 'Create User Backup';
$_LANG['backups']['createBackupBtn'] = 'Backup';
$_LANG['backups']['userBackups'] = 'User Backups';
$_LANG['backups']['ftpBackups'] = 'FTP Backups';
$_LANG['backups']['adminBackups'] = 'Admin / Reseller Backups';
$_LANG['backups']['noresult'] = 'No result to display';
$_LANG['backups']['useListFiles'] = 'List files to see result';
$_LANG['backups']['restore'] = 'Restore';
$_LANG['backups']['remove'] = 'Remove';
$_LANG['backups']['listFiles'] = 'List files';
$_LANG['backups']['recreate'] = 'Recreate';
$_LANG['backups']['tblHeadFile'] = 'Backup File';
$_LANG['backups']['restoreFromFtp'] = 'Restore from FTP';
$_LANG['backups']['restoreFtpEndpoints'] = 'Restore FTP Endpoints:';
$_LANG['backups']['tblHeadActions'] = 'Actions';
$_LANG['backups']['noBackupsFound'] = 'No backups have been found';
$_LANG['backups']['restoreOk'] = 'Restoring has been added to queue.';
$_LANG['backups']['recreateOk'] = 'Recreating has been added to queue.';
$_LANG['backups']['restoreError'] = 'Cannot restore...';
$_LANG['backups']['recreateError'] = 'Cannot recreate...';
$_LANG['backups']['recreateInfo'] = 'Recreating account will take a lot of time. During that time, you should not make any actions in the client area.\nDo you want to continue?';
$_LANG['backups']['restoring'] = 'Restoring...';
$_LANG['backups']['recreating'] = 'Recreating...';
$_LANG['backups']['downloading'] = 'Downloading files...';
$_LANG['backups']['creating'] = "Creating..."; 
$_LANG['backups']['createOk'] = 'Backup creation has been added to queue. Refresh this page in a few seconds';
$_LANG['backups']['createError'] = 'Backup has been created successfully.';
$_LANG['backups']['removing'] = 'Removing...';
$_LANG['backups']['removeOk'] = 'Backup has been removed successfully.';
$_LANG['backups']['removeError'] = 'Cannot remove ...';
$_LANG['backups']['ipAddress'] = 'IP Address:';
$_LANG['backups']['username'] = 'Username:';
$_LANG['backups']['password'] = 'Password:';
$_LANG['backups']['remotePath'] = 'Remote Path:';
$_LANG['backups']['port'] = 'Port:';
$_LANG['backups']['cannotListFiles'] = 'Cannot list files: ';
$_LANG['backups']['cannotListFiles2'] = 'No files have been found';
$_LANG['backups']['successListFiles'] = 'File list has been received successfully';
$_LANG['backups']['cannotLoadSettings'] = 'Cannot load settings: ';
$_LANG['backups']['loadingSettings'] = 'Loading settings... ';
$_LANG['backups']['usr_level_backup_option']["select0"] = "Domain";
$_LANG['backups']['usr_level_backup_option']["select1"] = "Subdomain";
$_LANG['backups']['usr_level_backup_option']["select2"] = "Email";
$_LANG['backups']['usr_level_backup_option']["select3"] = "Forwarder";
$_LANG['backups']['usr_level_backup_option']["select4"] = "Autoresponder";
$_LANG['backups']['usr_level_backup_option']["select5"] = "Vacation";
$_LANG['backups']['usr_level_backup_option']["select6"] = "List";
$_LANG['backups']['usr_level_backup_option']["select7"] = "Email Settings";
$_LANG['backups']['usr_level_backup_option']["select8"] = "FTP";
$_LANG['backups']['usr_level_backup_option']["select9"] = "FTP Settings";
$_LANG['backups']['usr_level_backup_option']["select10"] = "Database";
$_LANG['backups']['usr_level_backup_option']["select11"] = "Database Data";
$_LANG['backups']['adminBackupLocation'] = "Admin / reseller backups location:";
$_LANG['backups']['remove_user_bck_warning'] = 'Are you sure you want to delete this backup?';

/**************************
 * 
 *      SSL Managment
 * 
 **************************/

$_LANG['ssl']['main_header'] = 'SSL Certificates';
$_LANG['ssl']['main_hint'] = 'In this area you can conveniently manage all the aspects of your SSL Certificates. You can manage SSL certificates when you own the IP you are using. Info for admins: Assign an owned IP.';
$_LANG['ssl']['current_ssl'] = 'Current SSL Certificate';
$_LANG['ssl']['current_status'] = 'Current SSL Status';
$_LANG['ssl']['change_ssl'] = 'Change SSL Certificate';
$_LANG['ssl']['add_ssl'] = 'Certificate Authority SSL Certificate';
$_LANG['ssl']['save_ssl'] = 'Save CA Certificate';

$_LANG['ssl']['error1'] = 'Action cannot be completed. Please try again later.';

$_LANG['ssl']['listHead']     = 'Current SSL Certificate';
$_LANG['ssl']['addHead']      = 'Change SSL Certificate';
$_LANG['ssl']['addButton']    = 'Add';
$_LANG['ssl']['changeButton'] = 'Change';
$_LANG['ssl']['delete']       = 'Delete';
$_LANG['ssl']['edit']         = 'Edit';
$_LANG['ssl']['cancel']       = 'Cancel';
$_LANG['ssl']['type']         = 'Type';
$_LANG['ssl']['login']        = 'Login';
$_LANG['ssl']['path']         = 'Path';
$_LANG['ssl']['genPass']      = 'Generate Password';
$_LANG['ssl']['deleteSuccess']= 'Account has been deleted successfully.';
$_LANG['ssl']['editSuccess']  = 'Account has been changed successfully.';

$_LANG['ssl']['editHead']     = 'Edit Account';
$_LANG['ssl']['editButton']   = 'Save';
$_LANG['ssl']['deleteSure']   = 'Are you sure that you want to delete this cron job?';


$_LANG['ssl']['minute']   = 'Minute';
$_LANG['ssl']['hour']     = 'Hour';
$_LANG['ssl']['daym']     = 'Day of Month';
$_LANG['ssl']['month']    = 'Month';
$_LANG['ssl']['dayw']     = 'Day of Week';
$_LANG['ssl']['comm']     = 'Command';

$_LANG['ssl']['sslStatusLbl']         = 'SSL Status';
$_LANG['ssl']['sslStatus']['yes']     = 'Active';
$_LANG['ssl']['sslStatus']['no']      = 'Inactive';


$_LANG['ssl']['sslInfo']              = 'The domain has been modified';
$_LANG['ssl']['caInfo']               = 'CA Certificate is OK. Your site should be secure within a few minutes';
$_LANG['ssl']['servInfo']             = 'Certificate and key have been saved successfully.';
$_LANG['ssl']['useSSlLbl']            = 'Currently Used SSL';
$_LANG['ssl']['useSSl']['yes']        = 'Server Shared';
$_LANG['ssl']['useSSl']['no']         = 'Private';

$_LANG['ssl']['rsaPrivateKey']        = 'RSA Private Key';
$_LANG['ssl']['privateCert']          = 'Certificate';

$_LANG['ssl']['requestSucces']        = 'Successfully Created Certificate Request';

$_LANG['ssl']['certreq']              = 'Certificate Request';

$_LANG['ssl']['changeLbl']            = 'Select SSL Action';
$_LANG['ssl']['change']['info']           = 'Select Change Option';
$_LANG['ssl']['change']['self']       = 'Create Your Own Self Signed Certificate';
$_LANG['ssl']['change']['request']    = 'Create A Certificate Request';
$_LANG['ssl']['change']['paste']      = 'Paste A Pre-generated Certificate And Key';
$_LANG['ssl']['change']['server']     = 'Use The Server\'s Certificate';
        
            
$_LANG['ssl']['addfield']['country']       = '2-Letter Country Code';
$_LANG['ssl']['addfield']['country']       = '2-Letter Country Code';
$_LANG['ssl']['addfield']['state']         = 'State/Province';	
$_LANG['ssl']['addfield']['city']          = 'City';	
$_LANG['ssl']['addfield']['company']       = 'Company';	
$_LANG['ssl']['addfield']['division']      = 'Company Division';	
$_LANG['ssl']['addfield']['common']        = 'Common Name';	
$_LANG['ssl']['addfield']['email']         = 'Email';	
$_LANG['ssl']['addfield']['keyLbl']        = 'Key Size (bits)';

$_LANG['ssl']['addfield']['key'][1024]     = '1024';
$_LANG['ssl']['addfield']['key'][2048]     = '2048';
$_LANG['ssl']['addfield']['key'][4096]     = '4096';

$_LANG['ssl']['addfield']['pasteKey']      = 'Paste a pre-generated key';
$_LANG['ssl']['addfield']['pasteCrt']      = 'Paste a pre-generated certificate';

$_LANG['ssl']['caCertHead']           = 'Certificate Authority SSL Certificate';
$_LANG['ssl']['useCaCert']            = 'Use CA Certificate';
$_LANG['ssl']['caCert']               = 'CA Certificate';
$_LANG['ssl']['saveCAButton']         = 'Save CA Certificate';




$_LANG['ssl']['encrypt']                    = 'Encrypt';
$_LANG['ssl']['letsencrypt']                = 'Let\'s Encrypt';
$_LANG['ssl']['letsencryptdesc']            = 'Let\'s Encrypt is a free SSL tool that will allow you to install a basic SSL certificate with a single click.  It is compatible with multiple domains and subdomains, and will be automatically renewed before it expires after the 90-day period of validity.';
$_LANG['ssl']['key_on_server']              = 'Private Keys';
$_LANG['ssl']['csr_on_server']              = 'CSR Keys';
$_LANG['ssl']['crt_on_server']              = 'SSL Certificates';
$_LANG['ssl']['no_keys_in_table'] = "There is no key to show";

$_LANG['ssl']['key_desc']                   = 'A private key is used to decrypt information transmitted over SSL. When you create an SSL certificate, the first step is to generate a private key file associated with that SSL certificate. You should generate a private key for each SSL certificate you create. This private key is very important and should be kept confidential. A copy of each private key should be kept in a safe place; there is no way to recover a lost private key.';
$_LANG['ssl']['csr_desc']                   = 'If you obtain a certificate from a trusted SSL provider, you must complete the Certificate Signing Request form to provide the information needed to generate your SSL certificate.';
$_LANG['ssl']['crt_desc']                   = 'You can use a self-signed certificate or a trusted certificate from an SSL Certificate Authority. If you plan to use a self-signed certificate for one of your sites, you can generate it below. To use a trusted certificate, upload or provide the certificate below, after you have received the SSL certificate from your trusted provider.';

$_LANG['ssl']['install']                    = 'Install';
$_LANG['ssl']['generate']                   = 'Generate';
$_LANG['ssl']['upload']                     = 'Upload';

$_LANG['ssl']['domain']                     = 'Domain';
$_LANG['ssl']['action']                     = 'Action';

$_LANG['ssl']['keys_upload']                = 'Upload Your Private Keys';
$_LANG['ssl']['keys_generate']              = 'Generate Your Private Keys';
$_LANG['ssl']['csr_generate']               = 'Generate SSL Certificate Signing Requests';
$_LANG['ssl']['crt_generate']               = 'Generate Certificates';
$_LANG['ssl']['crt_upload']                 = 'Upload Certificates';
$_LANG['ssl']['selectedentries']            = 'Selected Entries';
$_LANG['ssl']['entries']                    = 'Entries';
$_LANG['ssl']['select']                     = 'Select';
$_LANG['ssl']['emptyentries']               = 'There are no entries.';

$_LANG['ssl']['fields']['country']          = 'Country';
$_LANG['ssl']['fields']['state']            = 'State';
$_LANG['ssl']['fields']['city']             = 'City';
$_LANG['ssl']['fields']['company']          = 'Company';
$_LANG['ssl']['fields']['comp_divi']        = 'Company Division';
$_LANG['ssl']['fields']['email']            = 'Email';
$_LANG['ssl']['fields']['pass']             = 'Pass Phrase';
$_LANG['ssl']['fields']['key4domain']       = 'Domain For Key:';
$_LANG['ssl']['fields']['cert4domain']      = 'Domain for certificate:';
$_LANG['ssl']['fields']['choose_key']       = 'Choose a .key file:';
$_LANG['ssl']['fields']['paste_key']        = 'Paste The Key:';
$_LANG['ssl']['fields']['select_domain']    = 'Select A Domain';
$_LANG['ssl']['fields']['key_size']         = 'Key Size:';
$_LANG['ssl']['fields']['key_domain']       = 'Domain key is for: ';
$_LANG['ssl']['fields']['host']             = 'Host: ';
$_LANG['ssl']['fields']['or']               = 'OR';
$_LANG['ssl']['fields']['select_key_domain'] = 'Domain With A Key';
$_LANG['ssl']['fields']['encryption']        = 'Encryption';
$_LANG['ssl']['fields']['encryption_types']['sha256']        = 'SHA256';
$_LANG['ssl']['fields']['encryption_types']['sha1']        = 'SHA1';


$_LANG['ssl']['key_sizes'][2048]            = '2,048 bits';
$_LANG['ssl']['key_sizes'][4096]            = '4,096 bits';
$_LANG['ssl']['expDate']                    = 'Expire Date';
$_LANG['ssl']['view']                       = 'View';
$_LANG['ssl']['certlbl']                    = 'Contents Of The SSL Certificate';
$_LANG['ssl']['keylbl']                     = 'Encoded Private Key';
$_LANG['ssl']['content_ssl']                = 'Contents Of The SSL Certificate';
$_LANG['ssl']['content_key']                = 'Key File Associated With The Certificate';
$_LANG['ssl']['key_not_avaible']            = 'Keys and certificate are not available';
$_LANG['ssl']['key_not_awaible_desc']       = 'When the certificate is not installed, try directly in cPanel';


/**************************
 * 
 *        OTHER
 * 
 **************************/

$_LANG['mainsite']['account_usage_header'] = 'Account Details:';
$_LANG['mainsite']['head_used'] = 'Used';
$_LANG['mainsite']['head_max'] = 'Max';
$_LANG['mainsite']['lbl_disk'] = 'Disk Space (MB)';
$_LANG['mainsite']['lbl_bandwidth'] = 'Bandwidth (MB)';
$_LANG['mainsite']['lbl_email'] = 'Emails';
$_LANG['mainsite']['lbl_ftp'] = 'FTP Accounts';
$_LANG['mainsite']['lbl_database'] = 'Databases';
$_LANG['mainsite_errors']['error1'] = 'No results to display: Wrong hostname or ip value';
$_LANG['mainsite_errors']['error2'] = 'No results to display: Wrong serverusername value';
$_LANG['mainsite_errors']['error3'] = 'No results to display: Wrong password or accesskey value';
$_LANG['mainsite_errors']['error4'] = 'No results to display: Wrong username value';
$_LANG['mainsite_errors']['error5'] = 'No results to display: Invalid username or password';
$_LANG['mainsite_errors']['error6'] = 'No results to display: Unable to load connection module';
$_LANG['mainsite_errors']['error7'] = 'No results to display: User or domain not found';
$_LANG['mainsite_errors']['error8'] = 'No results to display: Connection problem';
$_LANG['mainsite_errors']['error9'] = 'No results to display:';
$_LANG['mainsite_errors']['error10'] = 'No results to display: Unknown error';
$_LANG['mainsite_errors']['error11'] = 'Unable to load the page file';
$_LANG['mainsite_errors']['error12'] = 'You cannot view this page. No permission';
$_LANG['ftp']['search_loader_info'] = 'Searching...'; // CHANGED IN 1.6.0 VERSION
$_LANG['ftp']['load_loader_info'] = 'Loading...'; // CHANGED IN 1.6.0 VERSION
$_LANG['backups']['get_backups_loader'] = 'Getting backup list...';
$_LANG['backups']['get_backups_error'] = 'A problem has occurred while getting the backups file list .';
$_LANG['backups']['get_backups_empty'] = 'No backup files have been found';
$_LANG['forwarddomains']['lbl_replaced'] = 'Replaced (303)';
$_LANG['parkeddomains']['remove_confirm'] = 'Are you sure you want to delete these domains?';
$_LANG['cron']['remove_confirm'] = 'Are you sure you want to delete these cron jobs?';
$_LANG['mainsite']['val_unlimited'] = 'unlimited';



$_LANG['autoresponders']['main_header'] = "Autoresponders";
$_LANG['autoresponders']['main_hint'] = "On this page you can set up your autoresponders.";
$_LANG['autoresponders']['user'] = "User";
$_LANG['autoresponders']['cc_email'] = "CC Email";
$_LANG['autoresponders']['actions'] = "Actions";
$_LANG['autoresponders']['no_autoresponders'] = "List is empty";
$_LANG['autoresponders']['delete'] = "Delete";
$_LANG['autoresponders']['edit'] = "Edit";
$_LANG['autoresponders']['cannot_load_list'] = "Cannot load autoresponders list";
$_LANG['autoresponders']['create_new_autoresponder'] = "Create new autoresponder";
$_LANG['autoresponders']['responder_address'] = "Responder Address";
$_LANG['autoresponders']['responder_message'] = "Responder Message";
$_LANG['autoresponders']['send_cc_to'] = "Send a CC to";
$_LANG['autoresponders']['auto_reponders_list'] = "Auto Responders List";
$_LANG['autoresponders']['add_submit_text'] = "Create Autoresponder";
$_LANG['autoresponders']['delete_confirmation_label'] = "Delete Confirmation";
$_LANG['autoresponders']['delete_confirmation_text'] = "Are you sure that you want to remove this item?";
$_LANG['autoresponders']['confirm'] = "Confirm";
$_LANG['autoresponders']['save'] = "Save";
$_LANG['autoresponders']['cancel'] = "Cancel";
$_LANG['autoresponders']['edit_label'] = "Edit Autoresponder";
$_LANG['autoresponders']['domain'] = "Domain";
$_LANG['autoresponders']['edit_result_info']    = "Autoresponder has been updated successfully";
$_LANG['autoresponders']['delete_result_info']  = "Autoresponder has been removed successfully";
$_LANG['autoresponders']['add_result_info']     = "Autoresponder has been created successfully";




$_LANG['vacation']['invalid_dates_range'] = "End date has to be a later date";
$_LANG['vacation']['main_header'] = "Vacation Messages";
$_LANG['vacation']['main_hint'] = "On this page you can set up your vacation messages.";
$_LANG['vacation']['set_new_vacation_message'] = "Create new vacation message";
$_LANG['vacation']['vacation_account'] = "Vacation Account";
$_LANG['vacation']['vacation_message'] = "Vacation Message";
$_LANG['vacation']['vacation_start'] = "Vacation Start";
$_LANG['vacation']['vacation_end'] = "Vacation End";
$_LANG['vacation']['of'] = "of";
$_LANG['vacation']['morning'] = "Morning";
$_LANG['vacation']['afternoon'] = "Afternoon";
$_LANG['vacation']['evening'] = "Evening";
$_LANG['vacation']['01'] = "January";
$_LANG['vacation']['02'] = "February";
$_LANG['vacation']['03'] = "March";
$_LANG['vacation']['04'] = "April";
$_LANG['vacation']['05'] = "May";
$_LANG['vacation']['06'] = "June";
$_LANG['vacation']['07'] = "July";
$_LANG['vacation']['08'] = "August";
$_LANG['vacation']['09'] = "September";
$_LANG['vacation']['10'] = "October";
$_LANG['vacation']['11'] = "November";
$_LANG['vacation']['12'] = "December";
$_LANG['vacation']['start_time'] = "Start Time";
$_LANG['vacation']['end_time'] = "End Time";
$_LANG['vacation']['user'] = "User";
$_LANG['vacation']['actions'] = "Actions";
$_LANG['vacation']['no_vacations'] = "List is empty";
$_LANG['vacation']['delete'] = "Delete";
$_LANG['vacation']['edit'] = "Edit";
$_LANG['vacation']['cannot_load_list'] = "Cannot load vacation list";
$_LANG['vacation']['vacations_list'] = "Vacation Messages List";
$_LANG['vacation']['add_submit_text'] = "Create";
$_LANG['vacation']['delete_confirmation_label'] = "Delete Confirmation";
$_LANG['vacation']['delete_confirmation_text'] = "Are you sure that you want to remove this item?";
$_LANG['vacation']['confirm'] = "Confirm";
$_LANG['vacation']['save'] = "Save";
$_LANG['vacation']['cancel'] = "Cancel";
$_LANG['vacation']['edit_label'] = "Edit Vacation Message";

$_LANG['vacation']['add_result_info'] = "Vacation message has been created successfully";
$_LANG['vacation']['delete_result_info'] = "Vacation message has been deleted successfully";
$_LANG['vacation']['edit_result_info'] = "Vacation message has been updated successfully";

$_LANG['apachehandlers']['main_header'] = "Apache Handlers";
$_LANG['apachehandlers']['main_hint'] = "On this page you can set up your apache handlers.";
$_LANG['apachehandlers']['add_apache_handler'] = "Add Apache Handler";
$_LANG['apachehandlers']['handler'] = "Handler";
$_LANG['apachehandlers']['extension'] = "Extension";
$_LANG['apachehandlers']['extensions'] = "Extensions (click to remove)";
$_LANG['apachehandlers']['add_submit_text'] = "Add";
$_LANG['apachehandlers']['handlers_list'] = "User Installed Apache Handlers";
$_LANG['apachehandlers']['actions'] = "Actions";
$_LANG['apachehandlers']['delete_confirmation_label'] = "Delete Confirmation";
$_LANG['apachehandlers']['delete_confirmation_text'] = "Are you sure that you want to remove this item?";
$_LANG['apachehandlers']['delete_extension_confirmation_label'] = "Delete Extension Confirmation";
$_LANG['apachehandlers']['delete_extension_confirmation_text'] = "Are you sure that you want to remove this extension?";
$_LANG['apachehandlers']['delete'] = "Delete Handler";
$_LANG['apachehandlers']['cancel'] = "Cancel";
$_LANG['apachehandlers']['confirm'] = "Confirm";
$_LANG['apachehandlers']['no_handlers'] = "Na Data In Table";

$_LANG['apachehandlers']['add_result_info'] = "Handler has been added successfully";
$_LANG['apachehandlers']['del_result_info'] = "Handler has been removed successfully";
$_LANG['apachehandlers']['del_ext_result_info'] = "Extension has been removed successfully";



$_LANG['emailfilters']['main_header'] = "SPAM Filters";
$_LANG['emailfilters']['main_hint'] = "On this page you can configure your SPAM filters.";
$_LANG['emailfilters']['create_new_filter'] = "Create New Filter";
$_LANG['emailfilters']['filter_type'] = "Filter Type";
$_LANG['emailfilters']['email'] = "Block a specific email address";
$_LANG['emailfilters']['domain'] = "Block email from an entire domain";
$_LANG['emailfilters']['word'] = "Block all emails containing the word";
$_LANG['emailfilters']['size'] = "Block all emails larger than (KB)";
$_LANG['emailfilters']['value'] = "Value";
$_LANG['emailfilters']['add_submit_text'] = "Block";
$_LANG['emailfilters']['adult_filter'] = "Adult Filter";
$_LANG['emailfilters']['email_filters_list'] = "Filters List";
$_LANG['emailfilters']['filter'] = "Filter";
$_LANG['emailfilters']['action'] = "Actions";
$_LANG['emailfilters']['emailfilter_delete_confirmation_title'] = "Delete Confirmation";
$_LANG['emailfilters']['emailfilter_delete_confirmation_body'] = "Are you sure that you want to remove this item?";
$_LANG['emailfilters']['cancel'] = "Cancel";
$_LANG['emailfilters']['confirm'] = "Confirm";
$_LANG['emailfilters']['cannot_load_list'] = "Cannot load email filters list";
$_LANG['emailfilters']['no_filters'] = "There are no filters specified";
$_LANG['emailfilters']['delete'] = "Delete";
$_LANG['emailfilters']['disable'] = "Disable";
$_LANG['emailfilters']['enable'] = "Enable";
$_LANG['emailfilters']['action_after_match'] = "Action for filter matches";
$_LANG['emailfilters']['drop_email'] = "Drop Email";
$_LANG['emailfilters']['spambox'] = "Send to spambox";
$_LANG['emailfilters']['save'] = "Save";
$_LANG['emailfilters']['filter_options']    =   'Filter Options';

$_LANG['emailfilters']['action_result_info']       =   'Filter action has been saved successfully.';
$_LANG['emailfilters']['adult_result_info']        =   'Adult filter has been enabled/disabled successfully.';
$_LANG['emailfilters']['delete_result_info']       =   'Filter has been removed successfully';
$_LANG['emailfilters']['add_result_info']          =   'Filter has been set successfully.';





$_LANG['mailinglists']['main_header'] = "Mailing Lists";
$_LANG['mailinglists']['main_hint'] = "On this page you can configure your mailing lists.";
$_LANG['mailinglists']['add_mailing_list'] = "Add Mailing List";
$_LANG['mailinglists']['list_name'] = "List Name";
$_LANG['mailinglists']['add_list_submit'] = "Add List";
$_LANG['mailinglists']['mailing_lists'] = "Mailing Lists";
$_LANG['mailinglists']['mailing_list'] = "Mailing List";
$_LANG['mailinglists']['subscribers'] = "Subscribers";
$_LANG['mailinglists']['digest_subscribers'] = "Digest Subscribers";
$_LANG['mailinglists']['actions'] = "Actions";
$_LANG['mailinglists']['add_email_to_list'] = "Add Email To List";
$_LANG['mailinglists']['email'] = "Email";
$_LANG['mailinglists']['subscriber_type'] = "Subscriber Type";
$_LANG['mailinglists']['add_to'] = "add to";
$_LANG['mailinglists']['digest'] = "digest";
$_LANG['mailinglists']['add_email_submit'] = "Add Email";
$_LANG['mailinglists']['subscribers_list'] = "Subscribers List";
$_LANG['mailinglists']['modify_mailing_list'] = "Modify Mailing List";
$_LANG['mailinglists']['admin_password'] = "Admin Password";
$_LANG['mailinglists']['approve_password'] = "Approve Password";
$_LANG['mailinglists']['reply_to'] = "Reply To";
$_LANG['mailinglists']['restrict_post'] = "Restrict Post";
$_LANG['mailinglists']['description'] = "Description";
$_LANG['mailinglists']['digest_issue'] = "Digest Issue";
$_LANG['mailinglists']['digest_volume'] = "Digest Volume";
$_LANG['mailinglists']['digest_maxdays'] = "Digest Maxdays";
$_LANG['mailinglists']['digest_maxlines'] = "Digest Maxlines";
$_LANG['mailinglists']['precedence'] = "Precedence";
$_LANG['mailinglists']['moderator'] = "Moderator";
$_LANG['mailinglists']['subject_prefix'] = "Subject Prefix";
$_LANG['mailinglists']['maxlength'] = "Max Length";
$_LANG['mailinglists']['taboo_body'] = "Taboo Body";
$_LANG['mailinglists']['taboo_headers'] = "Taboo Headers";
$_LANG['mailinglists']['message_footer'] = "Message Footer";
$_LANG['mailinglists']['message_fronter'] = "Message Fronter";
$_LANG['mailinglists']['message_headers'] = "Message Headers";
$_LANG['mailinglists']['save_settings'] = "Save Settings";
$_LANG['mailinglists']['delete_confirmation_label'] = "Delete Confirmation";
$_LANG['mailinglists']['delete_confirmation_text'] = "Are you sure that you want to remove this item?";
$_LANG['mailinglists']['cancel'] = "Cancel";
$_LANG['mailinglists']['confirm'] = "Confirm";
$_LANG['mailinglists']['digest_subscribers'] = "Digest Subscribers";
$_LANG['mailinglists']['actions'] = "Actions";
$_LANG['mailinglists']['cannot_load_list'] = "Cannot Load List";
$_LANG['mailinglists']['no_data'] = "No Data";
$_LANG['mailinglists']['delete'] = "Delete";
$_LANG['mailinglists']['view'] = "View";
$_LANG['mailinglists']['settings'] = "Settings";
$_LANG['mailinglists']['subscriber'] = "Subscriber";
$_LANG['mailinglists']['type'] = "Type";
$_LANG['mailinglists']['back'] = "Back";
$_LANG['mailinglists']['yes'] = "Yes";
$_LANG['mailinglists']['no'] = "No";
$_LANG['mailinglists']['invalid_chars'] = "List name contains invalid characters (numeric and alphabetical characters are allowed‏ only)";

$_LANG['mailinglists']['save_result_info'] = "Mailing list has been modified successfully";
$_LANG['mailinglists']['add_result_info'] = "Email has been added to the list successfully";
$_LANG['mailinglists']['view_result_info'] = "";
$_LANG['mailinglists']['delete_result_info'] = "Mailing list has been removed successfully";
$_LANG['mailinglists']['create_result_info'] = "Mailing list has been added successfully";
$_LANG['mailinglists']['delete_acc_result_info'] = "Email has been removed from the list successfully";



$_LANG['filemanager']['main_header'] = "File Manager";
$_LANG['filemanager']['main_hint'] = "On this page you can manage your files.";
$_LANG['filemanager']['file_name'] = "File Name";
$_LANG['filemanager']['file_size'] = "File Size";
$_LANG['filemanager']['modified'] = "Modified";
$_LANG['filemanager']['permissions'] = "Permissions";
$_LANG['filemanager']['uid'] = "Uid";
$_LANG['filemanager']['gid'] = "Gid";
$_LANG['filemanager']['actions'] = "Actions";
$_LANG['filemanager']['upload'] = "Upload";
$_LANG['filemanager']['select_file'] = "Select File";
$_LANG['filemanager']['upload_path'] = "Upload Path";
$_LANG['filemanager']['cancel'] = "Cancel";
$_LANG['filemanager']['create_dir'] = "Create Directory";
$_LANG['filemanager']['dir_name'] = "Directory Name";
$_LANG['filemanager']['create_in'] = "Create In";
$_LANG['filemanager']['create'] = "Create";
$_LANG['filemanager']['delete'] = "Delete";
$_LANG['filemanager']['are_you_sure_delete'] = "Are you sure that you want to remove this item?";
$_LANG['filemanager']['yes'] = "Yes";
$_LANG['filemanager']['copy'] = "Copy";
$_LANG['filemanager']['replace_warning_text'] = "Replace Warning Text";
$_LANG['filemanager']['copy_to'] = "Copy To";
$_LANG['filemanager']['overwrite'] = "Overwrite";
$_LANG['filemanager']['rename'] = "Rename";
$_LANG['filemanager']['rename_to'] = "Rename To";
$_LANG['filemanager']['change_permissions'] = "Change Permissions";
$_LANG['filemanager']['owner'] = "Owner";
$_LANG['filemanager']['group'] = "Group";
$_LANG['filemanager']['others'] = "Others";
$_LANG['filemanager']['read'] = "Read";
$_LANG['filemanager']['write'] = "Write";
$_LANG['filemanager']['execute'] = "Execute";
$_LANG['filemanager']['change'] = "Change";
$_LANG['filemanager']['no_files_are_available'] = "No Files Are Available";
$_LANG['filemanager']['chmod'] = "Permissions";
$_LANG['filemanager']['ok'] = "OK";
$_LANG['filemanager']['file_req'] = "File Required";
$_LANG['filemanager']['file_req_desc'] = "It is required to choose at least one file.";
$_LANG['filemanager']['filenames_warning'] = "Note: Using special characters in file names is not supported by DirectAdmin server.‏";

$_LANG['filemanager']['create_dir_result_info']     = "Directory has been created successfully‏";
$_LANG['filemanager']['delete_result_info']         = "Files have been deleted successfully‏";
$_LANG['filemanager']['copy_result_info']           = "File has been copied successfully";
$_LANG['filemanager']['chmod_result_info']          = "Permissions have been set successfully‏";
$_LANG['filemanager']['rename_result_info']         = "File has been renamed successfully‏";
$_LANG['filemanager']['upload_result_info']         = "File has been uploaded successfully";

$_LANG['filemanager']['your_files'] = "Your Files";
$_LANG['filemanager']['maximum_file_size'] = "Maximum file size is";
$_LANG['filemanager']['file_is_to_big'] = "File size limit has been exceeded";


$_LANG['errorpages']['main_header'] = "Custom Error Pages";
$_LANG['errorpages']['main_hint'] = "On this page you can edit apache error pages.";
$_LANG['errorpages']['error_pages_list'] = "Error Pages List";
$_LANG['errorpages']['page_name'] = "Page Name";
$_LANG['errorpages']['file'] = "File";
$_LANG['errorpages']['actions'] = "Actions";
$_LANG['errorpages']['code401'] = "401 Unauthorized";
$_LANG['errorpages']['code403'] = "403 Forbidden";
$_LANG['errorpages']['code404'] = "404 Not Found";
$_LANG['errorpages']['code500'] = "500 Internal Server Error";
$_LANG['errorpages']['view'] = "View";
$_LANG['errorpages']['edit'] = "Edit";
$_LANG['errorpages']['edit_label'] = "Error Page Edit";
$_LANG['errorpages']['error_page'] = "Error Page";
$_LANG['errorpages']['edit_a_file'] = "Edit A File";
$_LANG['errorpages']['cancel'] = "Cancel";
$_LANG['errorpages']['preview'] = "Preview";
$_LANG['errorpages']['save'] = "Save";
$_LANG['errorpages']['edit_result_info'] = "Page has been updated successfully";

$_LANG['stats']['main_header'] = "Site Summary";
$_LANG['stats']['main_hint'] = "On this page you can check your site summary.";
$_LANG['stats']['settings'] = "Settings";
$_LANG['stats']['setting'] = "Setting";
$_LANG['stats']['current_usage'] = "Current Usage";
$_LANG['stats']['maximum_usage'] = "Maximum Usage";
$_LANG['stats']['bandwidth'] = "Bandwidth (MB)";
$_LANG['stats']['quota'] = "Total Disk Usage (MB)";
$_LANG['stats']['email_disk_usage'] = "Email Disk Usage";
$_LANG['stats']['database_disk_usage'] = "Database Disk Usage";
$_LANG['stats']['inodes'] = "Inodes";
$_LANG['stats']['domains'] = "Domains";
$_LANG['stats']['subdomains'] = "SubDomains";
$_LANG['stats']['pop_email_acounts'] = "POP Email Accounts";
$_LANG['stats']['email_forwarders'] = "Email Forwarders";
$_LANG['stats']['mailing_list'] = "Mailing List";
$_LANG['stats']['autoresponders'] = "AutoResponders";
$_LANG['stats']['emails_usage'] = "Emails Usage";
$_LANG['stats']['day'] = "Day";
$_LANG['stats']['sent_emials'] = "Sent Emails";
$_LANG['stats']['recived_emails'] = "Received Emails";
$_LANG['stats']['mysql_databases'] = "MySQL Databases";
$_LANG['stats']['domain_pointers'] = "Domain Pointers";
$_LANG['stats']['ftp_acounts'] = "FTP Accounts";
$_LANG['stats']['email'] = "Email";
$_LANG['stats']['name'] = "Name";
$_LANG['stats']['language'] = "Language";
$_LANG['stats']['ip'] = "IP";
$_LANG['stats']['name_server_1'] = "Name Server 1";
$_LANG['stats']['name_server_2'] = "Name Server 2";
$_LANG['stats']['shell_access'] = "Shell Access (SSH)";
$_LANG['stats']['secure_socket_layer'] = "Secure Socket Layer (SSL)";
$_LANG['stats']['cgibin'] = "CGI-Bin";
$_LANG['stats']['php'] = "PHP";
$_LANG['stats']['spamassasin'] = "SpamAssasin";
$_LANG['stats']['catch_all_email'] = "Catch-All Email";
$_LANG['stats']['anonymous_ftp'] = "Anonymous Ftp";
$_LANG['stats']['cron_jobs'] = "Cron Jobs";
$_LANG['stats']['system_info'] = "System Info";
$_LANG['stats']['login_keys'] = "Login Keys";
$_LANG['stats']['dns_control'] = "DNS Control";
$_LANG['stats']['suspend_at_limit'] = "Suspend At Limit";

$_LANG['spamassasin']['main_header'] = "Spamassassin Setup";
$_LANG['spamassasin']['main_hint'] = "On this page you can configure your Spamassasin.";
$_LANG['spamassasin']['spamassasin_is_not_currently_enabled'] = "SpamAssassin is not currently enabled.";
$_LANG['spamassasin']['click_save_to_enable_it'] = 'Click "Save" below to enable it. ';
$_LANG['spamassasin']['spamassasin_is_currently_enabled'] = "SpamAssassin is currently enabled.";
$_LANG['spamassasin']['disable'] = "Disable";
$_LANG['spamassasin']['where_do_you_want_the_spam_go_to'] = "Where do you want the spam to go?";
$_LANG['spamassasin']['inbox'] = "Inbox (don't block it)";
$_LANG['spamassasin']['redirect_to_catchall'] = "Redirect it to the catch-all spam folder in your main imap account.";
$_LANG['spamassasin']['send_the_spam_to_the_user_spam_folder'] = "Send the spam to the user's spam folder.";
$_LANG['spamassasin']['delete_the_spam'] = "Delete the spam.";
$_LANG['spamassasin']['what_score_threshold_do_you_wish_to_use'] = "What score threshold do you wish to use?";
$_LANG['spamassasin']['a_lower_threshold_will_block_more_spam'] = "A lower threshold will block more spam, but can potentially tag a legitimate mail.";
$_LANG['spamassasin']['a_higher_threshold_will_let_more_spam_through'] = "A higher threshold will let more spam through, but is less likely to tag a legitimate mail.";
$_LANG['spamassasin']['low_threshold'] = "Low Threshold (5.0)";
$_LANG['spamassasin']['medium_threshold'] = "Medium Threshold (7.5)";
$_LANG['spamassasin']['high_threshold'] = "High Threshold (10.0)";
$_LANG['spamassasin']['custom_threshold'] = "Custom Threshold";
$_LANG['spamassasin']['would_toy_like_to_delete_high_scoring_spam'] = "Would you like to delete the high scoring spam?";
$_LANG['spamassasin']['yes_block_all_spam_scoring_higher_than'] = "Yes, block all spam scoring higher than";
$_LANG['spamassasin']['no_decimals'] = "(1-50, no decimals)";
$_LANG['spamassasin']['no_do_not_block_high_scoring_spam'] = "No, do not block the high scoring spam. Use only the threshold from the previous section.";
$_LANG['spamassasin']['do_you_wish_to_rewrite_the_subject'] = "Do you wish to rewrite the subject of a spam email?";
$_LANG['spamassasin']['yes_set_the_subject_to_the_following'] = "Yes, set the subject to the following";
$_LANG['spamassasin']['no_leave_the_subject_unchanged'] = "No, leave the subject unchanged.";
$_LANG['spamassasin']['how_should_the_spam_be_delivered'] = "How should the spam be delivered?";
$_LANG['spamassasin']['how_deliver_info'] = "Attachments will separate the spam into its own messages, preventing scripts from being run.<br />Text-only attachments are used for increased safety.<br />Not using attachments will leave the spam unaltered except for spam headers.";
$_LANG['spamassasin']['dont_use_attachments'] = "Don't use attachments (dangerous).";
$_LANG['spamassasin']['use_attachments'] = "Use attachments.";
$_LANG['spamassasin']['use_textonly_attachments'] = "Use text-only attachments.";
$_LANG['spamassasin']['email_blacklist'] = "Email Blacklist";
$_LANG['spamassasin']['email_blacklist_info'] = "This is the list of email addresses that will be blocked.<br />Any email from these addresses will automatically be tagged as spam.<br />One email per line, no commas, etc. * and ? are both valid.<br />eg: *@domain.com";
$_LANG['spamassasin']['email_whitelist'] = "Email Whitelist";
$_LANG['spamassasin']['email_whitelist_info'] = "This is the list of email addresses that will be allowed through, regardless of content.<br />The format is the same as for the Email Blacklist";
$_LANG['spamassasin']['save'] = "Save";
$_LANG['spamassasin']['turned_off'] = "Your administrator has turned off Spamassasin for your account.";
$_LANG['spamassasin']['save_result_error'] = "Something has gone wrong. Please try again later";
$_LANG['spamassasin']['save_result_info'] = "Configuration has been saved successfully";
$_LANG['spamassasin']['spamassasin_disabled']   =   'Spamassasin is disabled on your account';
$_LANG['spamassasin']['spamassasin_unknown_error']   =   'Unknown error';
$_LANG['spamassasin']['invalid_high_score']   =   'High score needs to be a number between 1 and 50';
$_LANG['spamassasin']['invalid_required_hits_custom']   =   'Custom threshold needs to be a positive number';



$_LANG['installapp']['main_header'] = "Applications";  
$_LANG['installapp']['main_hint'] = "Manage your applications here. View the already set up applications and backups, install new ones.";
$_LANG['installapp']['installed_apps'] = "Installed Applications";
$_LANG['installapp']['backups'] = "Backups";
$_LANG['installapp']['your_installed_apps'] = "List Of Installed Applications";
$_LANG['installapp']['your_apps_backups'] = "List Of Applications Backups";
$_LANG['installapp']['sorry_no_applicatons_in_this_group'] = "Sorry, there are no applications in this group";
$_LANG['installapp']['sorry_no_applicatons_to_install'] = "Sorry, there are no applications available to install";
$_LANG['installapp']['delete_confirmation'] = "Delete Confirmation";  
$_LANG['installapp']['path'] = "Path"; 
$_LANG['installapp']['confirm'] = "Confirm";
$_LANG['installapp']['generate_backup_title'] = "Generate Backup";
$_LANG['installapp']['generate_backup_body'] = "Are you sure that you want to generate backup of this application?";
$_LANG['installapp']['delete_backup_title'] = "Delete Confirmation";
$_LANG['installapp']['delete_backup_body'] = "Are you sure that you want to remove this backup?";
$_LANG['installapp']['restore_backup_title'] = "Restore Confirmation";
$_LANG['installapp']['restore_backup_body'] = "Are you sure that you want to restore this backup?";
$_LANG['installapp']['delete_app_title'] = "Delete Confirmation";
$_LANG['installapp']['delete_app_body'] = "Are you sure that you want to remove this application?";
$_LANG['installapp']['new_task_added_to_queue'] = "New task has been added to queue";
$_LANG['installapp']['create_backup'] = "Create Backup";
$_LANG['installapp']['restore_backup'] = "Restore Backup";
$_LANG['installapp']['delete_backup'] = "Delete Backup";
$_LANG['installapp']['edit_application'] = "Edit Application";
$_LANG['installapp']['delete_application'] = "Delete Application";
$_LANG['installapp']['install_application'] = "Install Application";
$_LANG['installapp']['processing'] = "Processing...";
$_LANG['installapp']['completed'] = "Completed";
$_LANG['installapp']['error'] = "Error";
$_LANG['installapp']['cannot_update_task_list'] = 'Task list cannot be updated';
$_LANG['installapp']['info_backup_created'] = "Backup has been created successfully";
$_LANG['installapp']['info_backup_restored'] = "Backup has been restored successfully";
$_LANG['installapp']['info_backup_deleted'] = "Backup has been deleted successfully";
$_LANG['installapp']['info_app_uinstalled'] = "Your application has been removed successfully";
$_LANG['installapp']['info_app_installed'] = "Your application has been installed successfully";
$_LANG['installapp']['toggle_all'] = "Toggle All";

$_LANG['backups']['main_header']            = 'Backups';
$_LANG['backups']['main_hint']              = 'Download a zipped copy of your entire site or a part of your site that you can save to your computer. When you backup your website, you have an extra copy of your information in case something happens to your host. For more information, read the documentation.';

$_LANG['backups']['delete_confirmation_label'] = 'Delete Backup';
$_LANG['backups']['delete_confirmation_text'] = 'Are you sure that you want to delete this backup?';
$_LANG['backups']['remove_success'] = 'Backup has been removed successfully';
$_LANG['backups']['restore_success'] = 'Backup has been restored successfully';
$_LANG['backups']['no_setting_info'] = 'There is no option to check';
$_LANG['backups']['resotre_backup'] = 'Restore Backup';

$_LANG['perlmodules']['main_header'] = 'Perl Modules';
$_LANG['perlmodules']['main_hint'] = 'On this page you can check Perl Modules.';
$_LANG['perlmodules']['perl_modules_list'] = 'Perl Modules List';

$_LANG['all']['switch_domain'] = 'Switch Domain';
$_LANG['ssl']['certificateRequestTitle']   = 'Certificate Request Body';
