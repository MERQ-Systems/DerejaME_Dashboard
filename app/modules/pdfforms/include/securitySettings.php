<?php
$securitySettings_var = array( 'providers' => array( array( 'type' => '%db',
'activationField' => '˂Create new˃',
'active' => true,
'code' => '00',
'codeField' => '',
'emailField' => 'email',
'extUserIdField' => '',
'fullnameField' => '',
'label' => array( 'text' => 'Database',
'type' => 0 ),
'name' => 'db',
'passwordField' => 'password',
'phoneField' => '',
'resetDateField' => 'reset_date',
'resetTokenField' => 'reset_token',
'table' => array( 'connId' => 'project_at_localhost',
'table' => 'pdf_users' ),
'twoFactorField' => '',
'userGroupField' => '',
'usernameField' => 'username',
'userpicField' => '' ) ),
'sessionControl' => array( 'lifeTime' => 15,
'sessionName' => 'erA7OCfk4LF8jaZTlxAQ',
'JWTSecret' => 'cqZclnupq1kVy2j5f4v5' ),
'registration' => array( 'passwordValidation' => array( 'strong' => false,
'minimumLength' => 8,
'uniqueCharacters' => 4,
'digitsAndSymbols' => 2,
'upperAndLowerCase' => false ),
'remindMethod' => 1,
'hashAlgorithm' => 0,
'adminEmail' => '',
'caseInsensitiveLogin' => false,
'changePasswordPage' => true,
'changePwdPage' => true,
'hashPassword' => true,
'notifyAdmin' => false,
'notifyUser' => false,
'registerPage' => true,
'remindPage' => true,
'remindPasswordPage' => true,
'sendActivationLink' => false ),
'captchaSettings' => array( 'captchaType' => 0,
'siteKey' => '',
'secretKey' => '',
'passesCount' => 5 ),
'emailSettings' => array( 'fromEmail' => '',
'usePHPDefinedSMTP' => true,
'useBuiltInMailer' => false,
'SMTPServer' => 'localhost',
'SMTPPort' => 25,
'SMTPUser' => '',
'SMTPPassword' => '',
'securityProtocol' => 0 ),
'advancedSecurity' => array( 'allowGuestLogin' => false,
'tables' => array( 'pdf_formfields' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'pdf_formoptions' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'pdf_forms' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'pdf_sqlfields' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'pdf_test' => array( 'mainOwnerIDField' => 'id',
'securityOption' => 0,
'userOwnerIDField' => 'id' ),
'pdf_users' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ) ) ),
'auditAndLocking' => array( 'loggingTable' => array( 'connId' => 'project_at_localhost',
'table' => '' ),
'lockingTable' => array( 'connId' => 'project_at_localhost',
'table' => '' ),
'tables' => array(  ),
'loggingMode' => 0,
'loggingFile' => 'audit.log',
'logSecurityActions' => false,
'lockAfterUnsuccessfulLogin' => false,
'enableLocking' => false ),
'twoFactorSettings' => array( 'available' => false,
'required' => false,
'enable' => true,
'remember' => true,
'types' => array( 'totp' => true ),
'twoFactorField' => '',
'emailField' => '',
'phoneField' => '',
'codeField' => '',
'projectName' => 'PDFForms' ),
'projectName' => 'Project211',
'loginDataSource' => 'pdf_users',
'loginForm' => 0,
'dynamicPermissions' => false,
'dpTablePrefix' => '',
'dpTableConnId' => 'project_at_localhost',
'hardcodedLogin' => false,
'enabled' => true,
'advancedSecurityAvailable' => true,
'userGroupsAvailable' => true,
'defaultProviderCode' => '00',
'adOnlyLogin' => false,
'dbProvider' => array( 'type' => '%db',
'activationField' => '˂Create new˃',
'active' => true,
'code' => '00',
'codeField' => '',
'emailField' => 'email',
'extUserIdField' => '',
'fullnameField' => '',
'label' => array( 'text' => 'Database',
'type' => 0 ),
'name' => 'db',
'passwordField' => 'password',
'phoneField' => '',
'resetDateField' => 'reset_date',
'resetTokenField' => 'reset_token',
'table' => array( 'connId' => 'project_at_localhost',
'table' => 'pdf_users' ),
'twoFactorField' => '',
'userGroupField' => '',
'usernameField' => 'username',
'userpicField' => '' ),
'adAdminGroups' => array(  ),
'showUserSource' => false,
'dbProviderCodes' => array( '00' ),
'notifications' => array(  ) );
?>