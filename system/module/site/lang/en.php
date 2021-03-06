<?php
/**
 * The site module zh-cn file of chanzhiEPS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPLV1.2 (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     site
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
$lang->site->common        = "Site";

$lang->site->type            = 'Site Type';
$lang->site->requestType     = 'Request Type';
$lang->site->status          = 'Site Status';
$lang->site->pauseTip        = 'Pause Tip';
$lang->site->name            = 'Site Name';
$lang->site->module          = 'Modules';
$lang->site->lang            = 'Site Language';
$lang->site->defaultLang     = 'Default Language';
$lang->site->domain          = 'Domain';
$lang->site->allowedDomain   = 'Allowed Domain';
$lang->site->keywords        = 'Keyword';
$lang->site->indexKeywords   = 'Index Keyword';
$lang->site->meta            = 'Meta Tag';
$lang->site->desc            = 'Site Description';
$lang->site->icpSN           = 'ICP SN';
$lang->site->icpLink         = 'icp Link';
$lang->site->policeSN        = 'Police Record Number';
$lang->site->policeTip       = 'Police Record Number';
$lang->site->policeLink      = 'Police Link';
$lang->site->slogan          = 'Slogan';
$lang->site->mission         = 'Site Mission';
$lang->site->copyright       = 'Created Date';
$lang->site->allowUpload     = 'Upload File ';
$lang->site->allowedFiles    = 'File Type';
$lang->site->setImageSize    = 'Thumbnail Size';
$lang->site->captcha         = 'Frontend List';
$lang->site->mailCaptcha     = 'Email Verification Code';
$lang->site->twContent       = 'Tranditional Content';
$lang->site->cn2tw           = 'Translate automaticly from the simplified';
$lang->site->cdn             = 'CDN Address';
$lang->site->sensitive       = 'Sensitive Word';
$lang->site->scheme          = 'Default Protocol';
$lang->site->saveDays        = 'Keep Log';
$lang->site->openCache       = 'Cache On';
$lang->site->cachePage       = 'Cache Page';
$lang->site->cacheExpired    = 'Cache Expiration';
$lang->site->hour            = 'Hour';
$lang->site->homeMenus       = 'Home Menu';

$lang->site->importantOption  = 'Key Actions';
$lang->site->resetPassword    = 'Reset Password';
$lang->site->checkIP          = 'Chech IP Whitelist';
$lang->site->checkLocation    = 'Admin Login Verification';
$lang->site->checkEmail       = 'Email Binding';
$lang->site->filterFunction   = 'Filter';
$lang->site->allowedLocation  = 'Check Login';
$lang->site->checkSessionIP   = 'Check IP';
$lang->site->forceYangcong    = 'Force login by Yangcong';
$lang->site->setsecurity      = 'Security Settings';
$lang->site->setsensitive     = 'Sensitive Word Settins';
$lang->site->filterSensitive  = 'Sensitive Word Filter';
$lang->site->setBlacklist     = 'Blacklist';
$lang->site->mobileTemplate   = 'Mobile Template';
$lang->site->score            = 'Points';
$lang->site->setCounts        = 'Point Rules';
$lang->site->front            = 'View Website';
$lang->site->useCDN           = 'Activate CDN';

$lang->site->setBasic      = "Basic Settings";
$lang->site->setSystem     = "System Settings";
$lang->site->setCache      = 'Cache Settings';
$lang->site->setCDN        = "CDN Settings";
$lang->site->setDomain     = "Domain Settings";
$lang->site->setLang       = "Language";
$lang->site->setFilter     = "Filter";
$lang->site->ipFilter      = "IP Filter";
$lang->site->accountFilter = "Account Filter";
$lang->site->setSecurity   = "ecurity Settings";
$lang->site->setUpload     = "Upload File";
$lang->site->setRobots     = "Robots Settings";
$lang->site->setOauth      = "Open Login";
$lang->site->setSinaOauth  = "Weibo Login Setting";
$lang->site->setYangcong   = "Yangcong Login Setting";
$lang->site->setQQOauth    = "QQ Login Setting";
$lang->site->oauthHelp     = "Help";
$lang->site->setRecPerPage = "List Settings";
$lang->site->useLocation   = "Use <span>%s</span>";
$lang->site->changeSetting = "Change Settings";
$lang->site->setStat       = "Traffic Statistics";
$lang->site->setHomeMenu   = "Home Menua";

$lang->site->typeList = new stdclass();
$lang->site->typeList->portal = 'Enterprise Portal';
$lang->site->typeList->blog   = 'Private Blog';

$lang->site->requestTypeList = array();
$lang->site->requestTypeList['GET']        = 'GET';
$lang->site->requestTypeList['PATH_INFO']  = 'PATH_INFO';
$lang->site->requestTypeList['PATH_INFO2'] = 'PATH_INFO2';

$lang->site->statusList = new stdclass();
$lang->site->statusList->normal = 'Normal';
$lang->site->statusList->pause  = 'Pause';

$lang->site->resetPasswordList = array();
$lang->site->resetPasswordList['open']  = 'On';
$lang->site->resetPasswordList['close'] = 'Off';

$lang->site->forceYangcongList = array();
$lang->site->forceYangcongList['open']  = 'On';
$lang->site->forceYangcongList['close'] = 'Off';

$lang->site->checkIPList = array();
$lang->site->checkIPList['open']  = 'On';
$lang->site->checkIPList['close'] = 'Off';

$lang->site->filterSensitiveList = array();
$lang->site->filterSensitiveList['open']  = 'On';
$lang->site->filterSensitiveList['close'] = 'Off';

$lang->site->checkLocationList = array();
$lang->site->checkLocationList['open']  = 'On';
$lang->site->checkLocationList['close'] = 'Off';

$lang->site->checkEmailList = array();
$lang->site->checkEmailList['open']  = 'On';
$lang->site->checkEmailList['close'] = 'Off';

$lang->site->sessionIpoptions = array();
$lang->site->sessionIpoptions[1] = 'Check';
$lang->site->sessionIpoptions[0] = 'Do not Check';

$lang->site->imageSize['s'] = 'small';
$lang->site->imageSize['m'] = 'medium';
$lang->site->imageSize['l'] = 'large';

$lang->site->image['width']  = 'Width';
$lang->site->image['height'] = 'Height';

$lang->site->captchaList = array();
$lang->site->captchaList['open']  = 'Always send verification code';
$lang->site->captchaList['auto']  = 'Activate verification if any sensitive words.';
$lang->site->captchaList['close'] = 'No verification code';

$lang->site->validateTypes = new stdclass();
$lang->site->validateTypes->okFile      = 'File verification';
$lang->site->validateTypes->email       = 'Email verification';
$lang->site->validateTypes->setSecurity = 'Security questions';

$lang->site->schemeList = array();
$lang->site->schemeList['http']  = 'http';
$lang->site->schemeList['https'] = 'https';

$lang->site->frontList = array();
$lang->site->frontList['login'] = 'Please login';
$lang->site->frontList['guest'] = 'Guest login';

$lang->site->mobileTemplateList['open']  = 'On';
$lang->site->mobileTemplateList['close'] = 'Off';

$lang->site->scoreList['open']  = 'On';
$lang->site->scoreList['close'] = 'Off';

$lang->site->cdnList['open']  = 'On';
$lang->site->cdnList['close'] = 'Off';

$lang->site->cacheTypes['close'] = 'Off';
$lang->site->cacheTypes['file']  = 'On';

$lang->site->cachePageOptions['close'] = 'Off';
$lang->site->cachePageOptions['open']  = 'On';

$lang->site->filterFunctionList['open']  = 'On';
$lang->site->filterFunctionList['close'] = 'Off';

$lang->site->moduleAvailable = array();
$lang->site->moduleAvailable['user']       = 'User';
$lang->site->moduleAvailable['article']    = 'Article';
$lang->site->moduleAvailable['blog']       = 'Blog';
$lang->site->moduleAvailable['product']    = 'Product';
$lang->site->moduleAvailable['book']       = 'Manual';
$lang->site->moduleAvailable['page']       = 'Page';
$lang->site->moduleAvailable['forum']      = 'Forum';
$lang->site->moduleAvailable['message']    = 'Message';
$lang->site->moduleAvailable['search']     = 'Search';
$lang->site->moduleAvailable['shop']       = 'Mall';
$lang->site->moduleAvailable['score']      = 'Points';
$lang->site->moduleAvailable['stat']       = 'Statistics';
$lang->site->moduleAvailable['submittion'] = 'Contribute';

$lang->site->metaHolder       = 'Tag <meta><script><style> and <link> applicable';
$lang->site->fileAllowedRole  = 'Use "," as place holder';
$lang->site->domainTip        = 'All visits will jump to this domain. Please ensure domain analysis is correct. Leave it blank if no jump is wanted.';
$lang->site->allowedDomainTip = "Only visits from certain domain is allowed. Use comma to separate more domains. Leave it blank if no restriction on IP.";
$lang->site->allowedIPTip     = 'Use comma to separate IPs such as 202.194.133.1,202.194.132.0/28. Leave it blank if no restriction on IP.';
$lang->site->wrongAllowedIP   = 'IP Error';
$lang->site->changeLocation   = 'Your login location is not allowed.';
$lang->site->sessionIpTip     = 'Once activated，auto logout is performed if IP changed.';
$lang->site->schemeTip        = 'All visits will jump to default access protocol.';
$lang->site->saveDaysTip      = 'Number of days that login log will be kept should be >0.';
$lang->site->yangcongTip      = 'After force login by yangcong, you can set the security question to open the security login as the backup';
$lang->site->closeScoreTip    = 'Once points deactivated, no more points will be recorded and users can keep their points.';
$lang->site->cdnFileLost      = 'The followings can not be accessed';
$lang->site->useDefaultCdn    = 'Use default address';
$lang->site->defaultTip       = 'Website in maintenance……';
$lang->site->icpTip           = 'Mainland China Only';
$lang->site->requestTypeTip   = 'Choose PATH_INFO for SEO.';

$lang->site->robots            = 'Robots';
$lang->site->robotsUnwriteable = 'Robots %s is not writable. Please update your permissions.';
$lang->site->reloadForRobots   = 'Refresh';

$lang->site->customizableList = new stdclass();
$lang->site->customizableList->article = 'Article List Count';
$lang->site->customizableList->product = 'Product List Count';
$lang->site->customizableList->blog    = 'Blog List Count';
$lang->site->customizableList->forum   = 'Forum List Count';
$lang->site->customizableList->reply   = 'Reply List Count';
$lang->site->customizableList->message = 'Message List Count';
$lang->site->customizableList->comment = 'Comment List Count';

$lang->site->yangcong = new stdclass();
$lang->site->yangcong->appID = 'APP ID';
$lang->site->yangcong->key   = 'APP KEY';
$lang->site->yangcong->auth  = 'Auth ID';

$lang->site->api = new stdclass();
$lang->site->api->common = 'Integration';
$lang->site->api->key    = 'Key';
$lang->site->api->ip     = 'IP List';
$lang->site->api->allip  = 'No Restriction';
$lang->site->api->ipTip  = 'Use comma to separate IPs allowed to visit. Ip segment is OK, such as 192.168.1.*';

$lang->site->menus = array();
$lang->site->menus['order']      = 'Order';
$lang->site->menus['message']    = 'Message';
$lang->site->menus['comment']    = 'Comment';
$lang->site->menus['reply']      = 'Reply';
$lang->site->menus['thread']     = 'Theme';
$lang->site->menus['forumreply'] = 'Reply';
$lang->site->menus['article']    = 'Article';
$lang->site->menus['page']       = 'Page';
$lang->site->menus['blog']       = 'Blog';
$lang->site->menus['book']       = 'Manual';
$lang->site->menus['submittion'] = 'Contribute';
$lang->site->menus['product']    = 'Product';
$lang->site->menus['user']       = 'User';
$lang->site->menus['wechat']     = 'Wechat';
$lang->site->menus['stat']       = 'Statistics';
$lang->site->menus['tag']        = 'Keyword';
$lang->site->menus['links']      = 'Links';
$lang->site->menus['site']       = 'Site';
$lang->site->menus['security']   = 'Security';

$lang->site->fileAuthority = 'Need to change the write authority of file，on linux, you should run the command<code>%s</code>';
$lang->site->fileRequired  = 'Need to create file, on Linux, you should run the command<code>%s</code>';
