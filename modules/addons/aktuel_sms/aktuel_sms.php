<?php
/* WHMCS SMS Addon with GNU/GPL Licence
 * AktuelHost - http://www.aktuelhost.com
 *
 * https://github.com/AktuelSistem/WHMCS-SmsModule
 *
 * Developed at Aktuel Sistem ve Bilgi Teknolojileri (www.aktuelsistem.com)
 * Licence: GPLv3 (http://www.gnu.org/licenses/gpl-3.0.txt)
 * */
if (!defined("WHMCS"))
	die("This file cannot be accessed directly");

function aktuel_sms_config() {
    $configarray = array(
        "name" => "SMS 短信服务平台",
        "description" => "WHMCS 短信服务平台中文版.QQ：4588130.",
        "version" => "1.1.8(20161021)",
        "author" => "imnpc",
		"language" => "chinese",
    );
    return $configarray;
}

function aktuel_sms_activate() {

    $query = "CREATE TABLE IF NOT EXISTS `mod_aktuelsms_messages` (`id` int(11) NOT NULL AUTO_INCREMENT,`sender` varchar(40) NOT NULL,`to` varchar(15) DEFAULT NULL,`text` text,`msgid` varchar(50) DEFAULT NULL,`status` varchar(10) DEFAULT NULL,`errors` text,`logs` text,`user` int(11) DEFAULT NULL,`datetime` datetime NOT NULL,PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";
	mysql_query($query);

    $query = "CREATE TABLE IF NOT EXISTS `mod_aktuelsms_settings` (`id` int(11) NOT NULL AUTO_INCREMENT,`api` varchar(40) CHARACTER SET utf8 NOT NULL,`apiparams` varchar(500) CHARACTER SET utf8 NOT NULL,`dateformat` varchar(12) CHARACTER SET utf8 DEFAULT NULL,`version` varchar(6) CHARACTER SET utf8 DEFAULT NULL,PRIMARY KEY (`id`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";
	mysql_query($query);

    $query = "INSERT INTO `mod_aktuelsms_settings` (`api`, `apiparams`,`dateformat`, `version`) VALUES ('', '','%y.%m.%d','1.1.8');";
	mysql_query($query);

    $query = "CREATE TABLE IF NOT EXISTS `mod_aktuelsms_templates` (`id` int(11) NOT NULL AUTO_INCREMENT,`name` varchar(50) CHARACTER SET utf8 NOT NULL,`type` enum('client','admin') CHARACTER SET utf8 NOT NULL,`admingsm` varchar(255) CHARACTER SET utf8 NOT NULL,`template` varchar(240) CHARACTER SET utf8 NOT NULL,`variables` varchar(500) CHARACTER SET utf8 NOT NULL,`active` tinyint(1) NOT NULL,`extra` varchar(3) CHARACTER SET utf8 NOT NULL,`description` text CHARACTER SET utf8,PRIMARY KEY (`id`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";
	mysql_query($query);

    //Creating hooks
	require_once("smsclass.php");
    $class = new AktuelSms();
    $class->checkHooks();

    return array('status'=>'success','description'=>'SMS 短信服务平台激活成功.');
}

function aktuel_sms_deactivate() {

    $query = "DROP TABLE `mod_aktuelsms_templates`";
	mysql_query($query);
    $query = "DROP TABLE `mod_aktuelsms_settings`";
    mysql_query($query);
    $query = "DROP TABLE `mod_aktuelsms_messages`";
    mysql_query($query);

    return array('status'=>'success','description'=>'SMS 短信服务平台已经禁用.');
}

function aktuel_sms_upgrade($vars) {
    $version = $vars['version'];

    switch($version){
        case "1":
        case "1.0.1":
            $sql = "ALTER TABLE `mod_aktuelsms_messages` ADD `errors` TEXT NULL AFTER `status` ;ALTER TABLE `mod_aktuelsms_templates` ADD `description` TEXT NULL ;ALTER TABLE `mod_aktuelsms_messages` ADD `logs` TEXT NULL AFTER `errors` ;";
            mysql_query($sql);
        case "1.1":
            $sql = "ALTER TABLE `mod_aktuelsms_settings` CHANGE `apiparams` `apiparams` VARCHAR( 500 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ;";
            mysql_query($sql);
        case "1.1.1":
        case "1.1.2":
            $sql = "UPDATE `mod_aktuelsms_settings` SET dateformat = '%y.%m.%d';";
            mysql_query($sql);
        case "1.1.3":
        case "1.1.4":
            $sql = "ALTER TABLE `mod_aktuelsms_templates` CHANGE `name` `name` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,CHANGE `type` `type` ENUM( 'client', 'admin' ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,CHANGE `admingsm` `admingsm` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,CHANGE `template` `template` VARCHAR( 240 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,CHANGE `variables` `variables` VARCHAR( 500 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,CHANGE `extra` `extra` VARCHAR( 3 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,CHANGE `description` `description` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ;";
            mysql_query($sql);
            $sql = "ALTER TABLE `mod_aktuelsms_settings` CHANGE `api` `api` VARCHAR( 40 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,CHANGE `apiparams` `apiparams` VARCHAR( 500 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,CHANGE `dateformat` `dateformat` VARCHAR( 12 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,CHANGE `version` `version` VARCHAR( 6 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ;";
            mysql_query($sql);
            $sql = "ALTER TABLE `mod_aktuelsms_messages` CHANGE `sender` `sender` VARCHAR( 40 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,CHANGE `to` `to` VARCHAR( 15 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,CHANGE `text` `text` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,CHANGE `msgid` `msgid` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,CHANGE `status` `status` VARCHAR( 10 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,CHANGE `errors` `errors` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,CHANGE `logs` `logs` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ;";
            mysql_query($sql);

            $sql = "ALTER TABLE `mod_aktuelsms_templates` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";
            mysql_query($sql);
            $sql = "ALTER TABLE `mod_aktuelsms_settings` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";
            mysql_query($sql);
            $sql = "ALTER TABLE `mod_aktuelsms_messages` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";
            mysql_query($sql);
        case "1.1.5":
        case "1.1.6":
        case "1.1.7":
            break;

    }

    $class = new AktuelSms();
    $class->checkHooks();
}

function aktuel_sms_output($vars){
	$modulelink = $vars['modulelink'];
	$version = $vars['version'];
	$LANG = $vars['_lang'];
	//putenv("TZ=Europe/Istanbul");

    $class = new AktuelSms();

    $tab = $_GET['tab'];
    echo '
    <div id="clienttabs">
        <ul class="nav nav-tabs admin-tabs">
            <li class="' . (($tab == "settings")?"active":"tab") . '"><a href="addonmodules.php?module=aktuel_sms&tab=settings">'.$LANG['settings'].'</a></li>
            <li class="' . ((@$_GET['type'] == "client")?"active":"tab") . '"><a href="addonmodules.php?module=aktuel_sms&tab=templates&type=client">'.$LANG['clientsmstemplates'].'</a></li>
            <li class="' . ((@$_GET['type'] == "admin")?"active":"tab") . '"><a href="addonmodules.php?module=aktuel_sms&tab=templates&type=admin">'.$LANG['adminsmstemplates'].'</a></li>
            <li class="' . (($tab == "sendbulk")?"active":"tab") . '"><a href="addonmodules.php?module=aktuel_sms&tab=sendbulk">'.$LANG['sendsms'].'</a></li>
            <li class="' . (($tab == "messages")?"active":"tab") . '"><a href="addonmodules.php?module=aktuel_sms&amp;tab=messages">'.$LANG['messages'].'</a></li>
        </ul>
    </div>
    ';
    if (!isset($tab) || $tab == "settings")
    {
        /* UPDATE SETTINGS */
        if ($_POST['params']) {
            $update = array(
                "api" => $_POST['api'],
                "apiparams" => json_encode($_POST['params']),
                'dateformat' => $_POST['dateformat']
            );
            update_query("mod_aktuelsms_settings", $update, "");
        }
        /* UPDATE SETTINGS */

        $settings = $class->getSettings();
        $apiparams = json_decode($settings['apiparams']);


        $classers = $class->getSenders();
        $classersoption = '';
        $classersfields = '';
        foreach($classers as $classer){
            $classersoption .= '<option value="'.$classer['value'].'" ' . (($settings['api'] == $classer['value'])?"selected=\"selected\"":"") . '>'.$classer['label'].'</option>';
            if($settings['api'] == $classer['value']){
                foreach($classer['fields'] as $field){
                    $classersfields .=
                        '<tr>
                            <td class="fieldlabel" width="30%">'.$LANG[$field].'</td>
                            <td class="fieldarea"><input type="text" name="params['.$field.']" size="40" value="' . $apiparams->$field . '"></td>
                        </tr>';
                }
            }
        }

        echo '
        <script type="text/javascript">
            $(document).ready(function(){
                $("#api").change(function(){
                    $("#form").submit();
                });
            });
        </script>
        <form action="" method="post" id="form">
        <input type="hidden" name="action" value="save" />
            <div style="text-align: left;background-color: whiteSmoke;margin: 0px;padding: 10px;border: 1px solid #ddd;">
                <table class="form" width="100%" border="0" cellspacing="2" cellpadding="3">
                    <tbody>
                        <tr>
                            <td class="fieldlabel" width="30%">'.$LANG['sender'].'</td>
                            <td class="fieldarea">
                                <select name="api" id="api">
                                    '.$classersoption.'
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fieldlabel" width="30%">'.$LANG['senderid'].'</td>
                            <td class="fieldarea"><input type="text" name="params[senderid]" size="40" value="' . $apiparams->senderid . '"> e.g:  WHMCS</td>
                        </tr>
                        '.$classersfields.'
                        <tr>
                            <td class="fieldlabel" width="30%">'.$LANG['signature'].'</td>
                            <td class="fieldarea"><input type="text" name="params[signature]" size="40" value="' . $apiparams->signature . '"> e.g:  www.whmcs.com</td>
                        </tr>
                        <tr>
                            <td class="fieldlabel" width="30%">'.$LANG['dateformat'].'</td>
                            <td class="fieldarea"><input type="text" name="dateformat" size="40" value="' . $settings['dateformat'] . '"> e.g:  %y.%m.%d (2016.01.18)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br/>
            <p align="center"><input type="submit" value="'.$LANG['save'].'" class="btn btn-primary" /></p>
        </form>
        ';
    }
    elseif ($tab == "templates")
    {
        if ($_POST['submit']) {
            $where = array("type" => array("sqltype" => "LIKE", "value" => $_GET['type']));
            $result = select_query("mod_aktuelsms_templates", "*", $where);
            while ($data = mysql_fetch_array($result)) {
                if ($_POST[$data['id'] . '_active'] == "on") {
                    $tmp_active = 1;
                } else {
                    $tmp_active = 0;
                }
                $update = array(
                    "template" => $_POST[$data['id'] . '_template'],
                    "active" => $tmp_active
                );

                if(isset($_POST[$data['id'] . '_extra'])){
                    $update['extra']= trim($_POST[$data['id'] . '_extra']);
                }
                if(isset($_POST[$data['id'] . '_admingsm'])){
                    $update['admingsm']= $_POST[$data['id'] . '_admingsm'];
                    $update['admingsm'] = str_replace(" ","",$update['admingsm']);
                }
                update_query("mod_aktuelsms_templates", $update, "id = " . $data['id']);
            }
        }

        echo '<form action="" method="post">
        <input type="hidden" name="action" value="save" />
            <div style="text-align: left;background-color: whiteSmoke;margin: 0px;padding: 10px;border: 1px solid #ddd;">
                <table class="form" width="100%" border="0" cellspacing="2" cellpadding="3">
                    <tbody>';
        $where = array("type" => array("sqltype" => "LIKE", "value" => $_GET['type']));
        $result = select_query("mod_aktuelsms_templates", "*", $where);

        while ($data = mysql_fetch_array($result)) {
            if ($data['active'] == 1) {
                $active = 'checked = "checked"';
            } else {
                $active = '';
            }
            $desc = json_decode($data['description']);
            if(isset($desc->$LANG['lang'])){
                $name = $desc->$LANG['lang'];
            }else{
                $name = $data['name'];
            }
            echo '
                <tr>
                    <td class="fieldlabel" width="30%">' . $name . '</td>
                    <td class="fieldarea">
                        <textarea cols="50" name="' . $data['id'] . '_template">' . $data['template'] . '</textarea>
                    </td>
                </tr>';
            echo '
            <tr>
                <td class="fieldlabel" width="30%" style="float:right;">'.$LANG['active'].'</td>
                <td><input type="checkbox" value="on" name="' . $data['id'] . '_active" ' . $active . '></td>
            </tr>
            ';
            echo '
            <tr>
                <td class="fieldlabel" width="30%" style="float:right;">'.$LANG['parameter'].'</td>
                <td>' . $data['variables'] . '</td>
            </tr>
            ';

            if(!empty($data['extra'])){
                echo '
                <tr>
                    <td class="fieldlabel" width="30%">'.$LANG['ekstra'].'</td>
                    <td class="fieldarea">
                        <input type="text" name="'.$data['id'].'_extra" value="'.$data['extra'].'">
                    </td>
                </tr>
                ';
            }
            if($_GET['type'] == "admin"){
                echo '
                <tr>
                    <td class="fieldlabel" width="30%">'.$LANG['admingsm'].'</td>
                    <td class="fieldarea">
                        <input type="text" name="'.$data['id'].'_admingsm" value="'.$data['admingsm'].'">
                        '.$LANG['admingsmornek'].'
                    </td>
                </tr>
                ';
            }
            echo '<tr>
                <td colspan="2"><hr></td>
            </tr>';
        }
        echo '
        </tbody>
                </table>
            </div>
            <br/>
            <p align="center"><input type="submit" name="submit" value="'.$LANG['save'].'" class="btn btn-primary" /></p>
        </form>';

    }
    elseif ($tab == "messages")
    {
        if(!empty($_GET['deletesms'])){
            $smsid = (int) $_GET['deletesms'];
            $sql = "DELETE FROM mod_aktuelsms_messages WHERE id = '$smsid'";
            mysql_query($sql);
        }
        echo  '
        <!--<script src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css" type="text/css">
        <link rel="stylesheet" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables_themeroller.css" type="text/css">
        <script type="text/javascript">
            $(document).ready(function(){
                $(".datatable").dataTable();
            });
        </script>-->

        <div style="text-align: left;background-color: whiteSmoke;margin: 0px;padding: 10px;border: 1px solid #ddd;">
        <table class="datatable" border="0" cellspacing="1" cellpadding="3">
        <thead>
            <tr>
                <th>#</th>
                <th>'.$LANG['client'].'</th>
                <th>'.$LANG['gsmnumber'].'</th>
                <th>'.$LANG['message'].'</th>
                <th>'.$LANG['datetime'].'</th>
                <th>'.$LANG['status'].'</th>
                <th width="20"></th>
            </tr>
        </thead>
        <tbody>
        ';

        // Getting pagination values.
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $limit = (isset($_GET['limit']) && $_GET['limit']<=50) ? (int)$_GET['limit'] : 10;
        $start  = ($page > 1) ? ($page*$limit)-$limit : 0;
        $order = isset($_GET['order']) ? $_GET['order'] : 'DESC';
        /* Getting messages order by date desc */
        $sql = "SELECT `m`.*,`user`.`firstname`,`user`.`lastname`
        FROM `mod_aktuelsms_messages` as `m`
        JOIN `tblclients` as `user` ON `m`.`user` = `user`.`id`
        ORDER BY `m`.`datetime` {$order} limit {$start},{$limit}";
        $result = mysql_query($sql);
        $i = 0;

        //Getting total records
        $total = "SELECT count(id) as toplam FROM `mod_aktuelsms_messages`";
        $sonuc = mysql_query($total);
        $sonuc = mysql_fetch_array($sonuc);
        $toplam = $sonuc['toplam'];

        //Page calculation
        $sayfa = ceil($toplam/$limit);

        while ($data = mysql_fetch_array($result)) {
            if($data['msgid'] && $data['status'] == ""){
                $status = $class->getReport($data['msgid']);
                mysql_query("UPDATE mod_aktuelsms_messages SET status = '$status' WHERE id = ".$data['id']."");
            }else{
                $status = $data['status'];
            }

            $i++;
            echo  '<tr>
            <td>'.$data['id'].'</td>
            <td><a href="clientssummary.php?userid='.$data['user'].'">'.$data['firstname'].' '.$data['lastname'].'</a></td>
            <td>'.$data['to'].'</td>
            <td>'.$data['text'].'</td>
            <td>'.$data['datetime'].'</td>
            <td>'.$LANG[$status].'</td>
            <td><a href="addonmodules.php?module=aktuel_sms&tab=messages&deletesms='.$data['id'].'" title="'.$LANG['delete'].'"><img src="images/delete.gif" width="16" height="16" border="0" alt="Delete"></a></td></tr>';
        }
        /* Getting messages order by date desc */

        echo '
        </tbody>
        </table>

        ';  
        $list="";
        for($a=1;$a<=$sayfa;$a++)
        {
            $selected = ($page==$a) ? 'selected="selected"' : '';
            $list.="<option value='addonmodules.php?module=aktuel_sms&tab=messages&page={$a}&limit={$limit}&order={$order}' {$selected}>{$a}</option>";
        }
        echo "<select  onchange=\"this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);\">{$list}</select></div>";

    }
    elseif($tab=="sendbulk")
    {
        $settings = $class->getSettings();

        if(!empty($_POST['client'])){
            $userinf = explode("_",$_POST['client']);
            $userid = $userinf[0];
            $gsmnumber = $userinf[1];

            $class->setGsmnumber($gsmnumber);
            $class->setMessage($_POST['message']);
            $class->setUserid($userid);

            $result = $class->send();
            if($result == false){
                echo $class->getErrors();
            }else{
                echo $LANG['smssent'].' '.$gsmnumber;
            }

            if($_POST["debug"] == "ON"){
                $debug = 1;
            }
        }

        $userSql = "SELECT `id`,`firstname`, `lastname`, `phonenumber` as `gsmnumber`
        FROM `tblclients` ORDER BY `tblclients`.`id` ASC";
        $clients = '';
        $result = mysql_query($userSql);
        while ($data = mysql_fetch_array($result)) {
            $clients .= '<option value="'.$data['id'].'_'.$data['gsmnumber'].'">'.$data['firstname'].' '.$data['lastname'].' (#'.$data['id'].')</option>';
        }
        echo '
        <script>
        jQuery.fn.filterByText = function(textbox, selectSingleMatch) {
          return this.each(function() {
            var select = this;
            var options = [];
            $(select).find("option").each(function() {
              options.push({value: $(this).val(), text: $(this).text()});
            });
            $(select).data("options", options);
            $(textbox).bind("change keyup", function() {
              var options = $(select).empty().scrollTop(0).data("options");
              var search = $.trim($(this).val());
              var regex = new RegExp(search,"gi");

              $.each(options, function(i) {
                var option = options[i];
                if(option.text.match(regex) !== null) {
                  $(select).append(
                     $("<option>").text(option.text).val(option.value)
                  );
                }
              });
              if (selectSingleMatch === true &&
                  $(select).children().length === 1) {
                $(select).children().get(0).selected = true;
              }
            });
          });
        };
        $(function() {
          $("#clientdrop").filterByText($("#textbox"), true);
        });
        </script>';
        echo '<form action="" method="post">
        <input type="hidden" name="action" value="save" />
            <div style="text-align: left;background-color: whiteSmoke;margin: 0px;padding: 10px;border: 1px solid #ddd;">
                <table class="form" width="100%" border="0" cellspacing="2" cellpadding="3">
                    <tbody>
                        <tr>
                            <td class="fieldlabel" width="30%">'.$LANG['client'].'</td>
                            <td class="fieldarea">
                                <input id="textbox" type="text" placeholder="请输入用户名筛选" style="width:498px;padding:5px"><br>
                                <select name="client" multiple id="clientdrop" style="width:512px;padding:5px">
                                    <option value="">'.$LANG['selectclient'].'</option>
                                    ' . $clients . '
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="fieldlabel" width="30%">'.$LANG['mesaj'].'</td>
                            <td class="fieldarea">
                               <textarea cols="70" rows="20" name="message" style="width:498px;padding:5px"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="fieldlabel" width="30%">'.$LANG['debug'].'</td>
                            <td class="fieldlabel"><input type="checkbox" name="debug" value="ON"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br/>
            <p align="center"><input type="submit" value="'.$LANG['send'].'" class="btn btn-primary" /></p>
        </form>';

        if(isset($debug)){
            echo $class->getLogs();
        }
    }
  

    $credit =  $class->getBalance();
    if($credit){
        echo '
            <div style="text-align: left;background-color: whiteSmoke;margin: 0px;padding: 10px;border: 1px solid #ddd;">
            <b>'.$LANG['credit'].':</b> '.$credit.'
            </div>';
    }

}
