<div class="module-header ftp-header">
    <i class="icon-header icon-graphsstats"></i>
    <h1>{$lang.main_header}</h1>
    <p>{$lang.main_hint}</p>
</div>
<div class="module-body">
    <div class="section">
        <h4>{$lang.settings}</h4>
        <table id="settings-list" class="table table-condensed table-striped">
            <thead>
                <tr>
                    <th>{$lang.setting}</th>
                    <th>{$lang.current_usage}</th>
                    <th>{$lang.maximum_usage}</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>{$lang.bandwidth}</td><td>{$stats.bandwidth}</td><td>{$config.bandwidth}</td></tr>
                <tr><td>{$lang.quota}</td><td>{$stats.quota}</td><td>{$config.quota}</td></tr>
                <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$lang.email_disk_usage}</td><td>{$stats.email_quota/1024} KB</td><td></td></tr>
                <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$lang.database_disk_usage}</td><td>{$stats.db_quota/1} B</td><td></td></tr>
                <tr><td>{$lang.inodes}</td><td>{$stats.inode}</td><td>{$config.inode}</td></tr>
                <tr><td>{$lang.domains}</td><td>{$stats.vdomains}</td><td>{$config.vdomains}</td></tr>
                <tr><td>{$lang.subdomains}</td><td>{$stats.nsubdomains}</td><td>{$config.nsubdomains}</td></tr>
                <tr><td>{$lang.pop_email_acounts}</td><td>{$stats.nemails}</td><td>{$config.nemails}</td></tr>
                <tr><td>{$lang.email_forwarders}</td><td>{$stats.nemailf}</td><td>{$config.nemailf}</td></tr>
                <tr><td>{$lang.mailing_list}</td><td>{$stats.nemailml}</td><td>{$config.nemailml}</td></tr>
                <tr><td>{$lang.autoresponders}</td><td>{$stats.nemailr}</td><td>{$config.nemailr}</td></tr>
                <tr><td>{$lang.emails_usage}</td><td>{$stats.email_deliveries}</td><td>{$config.email_limit} / {$lang.day}</td></tr>
                <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$lang.sent_emials}</td><td>{$stats.email_deliveries_incoming}</td><td></td></tr>
                <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$lang.recived_emails}</td><td>{$stats.email_deliveries_outgoing}</td><td></td></tr>
                <tr><td>{$lang.mysql_databases}</td><td>{$stats.mysql}</td><td>{$config.mysql}</td></tr>
                <tr><td>{$lang.domain_pointers}</td><td>{$stats.domainptr}</td><td>{$config.domainptr}</td></tr>
                <tr><td>{$lang.ftp_acounts}</td><td>{$stats.ftp}</td><td>{$config.ftp}</td></tr>
                <tr><td>{$lang.email}</td><td>{$config.email}</td><td></td></tr>
                <tr><td>{$lang.name}</td><td>{$config.name}</td><td></td></tr>
                <tr><td>{$lang.language}</td><td>{$config.language}</td><td></td></tr>
                <tr><td>{$lang.ip}</td><td>{$config.ip}</td><td></td></tr>
                <tr><td>{$lang.name_server_1}</td><td>{$config.ns1}</td><td></td></tr>
                <tr><td>{$lang.name_server_2}</td><td>{$config.ns2}</td><td></td></tr>
                <tr><td>{$lang.shell_access}</td><td>{$config.ssh}</td><td></td></tr>
                <tr><td>{$lang.secure_socket_layer}</td><td>{$config.ssl}</td><td></td></tr>
                <tr><td>{$lang.cgibin}</td><td>{$config.cgi}</td><td></td></tr>
                <tr><td>{$lang.php}</td><td>{$config.php}</td><td></td></tr>
                <tr><td>{$lang.spamassasin}</td><td>{$config.spam}</td><td></td></tr>
                <tr><td>{$lang.catch_all_email}</td><td>{$config.catchall}</td><td></td></tr>
                <tr><td>{$lang.anonymous_ftp}</td><td>{$config.aftp}</td><td></td></tr>
                <tr><td>{$lang.cron_jobs}</td><td>{$config.cron}</td><td></td></tr>
                <tr><td>{$lang.system_info}</td><td>{$config.sysinfo}</td><td></td></tr>
                <tr><td>{$lang.login_keys}</td><td>{$config.login_keys}</td><td></td></tr>
                <tr><td>{$lang.dns_control}</td><td>{$config.dnscontrol}</td><td></td></tr>
                <tr><td>{$lang.suspend_at_limit}</td><td>{$config.suspend_at_limit}</td><td></td></tr>
            </tbody>
        </table>
    </div>
    
</div>