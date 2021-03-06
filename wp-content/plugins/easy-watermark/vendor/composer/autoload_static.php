<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfc0147afb354c48a40c96eb7211d8b4a
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Micropackage\\Singleton\\' => 23,
        ),
        'E' => 
        array (
            'EasyWatermark\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Micropackage\\Singleton\\' => 
        array (
            0 => __DIR__ . '/..' . '/micropackage/singleton/src',
        ),
        'EasyWatermark\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/classes',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 
            array (
                0 => __DIR__ . '/..' . '/composer/installers/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Composer\\Installers\\AglInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AglInstaller.php',
        'Composer\\Installers\\AnnotateCmsInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AnnotateCmsInstaller.php',
        'Composer\\Installers\\BaseInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/BaseInstaller.php',
        'Composer\\Installers\\CakePHPInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CakePHPInstaller.php',
        'Composer\\Installers\\CodeIgniterInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CodeIgniterInstaller.php',
        'Composer\\Installers\\CroogoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CroogoInstaller.php',
        'Composer\\Installers\\DrupalInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DrupalInstaller.php',
        'Composer\\Installers\\FuelInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/FuelInstaller.php',
        'Composer\\Installers\\Installer' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Installer.php',
        'Composer\\Installers\\JoomlaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/JoomlaInstaller.php',
        'Composer\\Installers\\KohanaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/KohanaInstaller.php',
        'Composer\\Installers\\LaravelInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/LaravelInstaller.php',
        'Composer\\Installers\\LithiumInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/LithiumInstaller.php',
        'Composer\\Installers\\MODULEWorkInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MODULEWorkInstaller.php',
        'Composer\\Installers\\MagentoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MagentoInstaller.php',
        'Composer\\Installers\\MakoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MakoInstaller.php',
        'Composer\\Installers\\MediaWikiInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MediaWikiInstaller.php',
        'Composer\\Installers\\OxidInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/OxidInstaller.php',
        'Composer\\Installers\\PPIInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PPIInstaller.php',
        'Composer\\Installers\\PhpBBInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PhpBBInstaller.php',
        'Composer\\Installers\\SilverStripeInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SilverStripeInstaller.php',
        'Composer\\Installers\\Symfony1Installer' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Symfony1Installer.php',
        'Composer\\Installers\\TYPO3CmsInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TYPO3CmsInstaller.php',
        'Composer\\Installers\\TYPO3FlowInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TYPO3FlowInstaller.php',
        'Composer\\Installers\\WordPressInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/WordPressInstaller.php',
        'Composer\\Installers\\ZendInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ZendInstaller.php',
        'EasyWatermark\\AttachmentProcessor\\AttachmentProcessor' => __DIR__ . '/../..' . '/src/classes/AttachmentProcessor/AttachmentProcessor.php',
        'EasyWatermark\\AttachmentProcessor\\AttachmentProcessorGD' => __DIR__ . '/../..' . '/src/classes/AttachmentProcessor/AttachmentProcessorGD.php',
        'EasyWatermark\\AttachmentProcessor\\Manager' => __DIR__ . '/../..' . '/src/classes/AttachmentProcessor/Manager.php',
        'EasyWatermark\\Backup\\BackupperInterface' => __DIR__ . '/../..' . '/src/classes/Backup/BackupperInterface.php',
        'EasyWatermark\\Backup\\LocalBackupper' => __DIR__ . '/../..' . '/src/classes/Backup/LocalBackupper.php',
        'EasyWatermark\\Backup\\Manager' => __DIR__ . '/../..' . '/src/classes/Backup/Manager.php',
        'EasyWatermark\\Core\\Assets' => __DIR__ . '/../..' . '/src/classes/Core/Assets.php',
        'EasyWatermark\\Core\\Hooks' => __DIR__ . '/../..' . '/src/classes/Core/Hooks.php',
        'EasyWatermark\\Core\\Installer' => __DIR__ . '/../..' . '/src/classes/Core/Installer.php',
        'EasyWatermark\\Core\\Manager' => __DIR__ . '/../..' . '/src/classes/Core/Manager.php',
        'EasyWatermark\\Core\\Plugin' => __DIR__ . '/../..' . '/src/classes/Core/Plugin.php',
        'EasyWatermark\\Core\\View' => __DIR__ . '/../..' . '/src/classes/Core/View.php',
        'EasyWatermark\\Dashboard\\Dashboard' => __DIR__ . '/../..' . '/src/classes/Dashboard/Dashboard.php',
        'EasyWatermark\\Dashboard\\Page' => __DIR__ . '/../..' . '/src/classes/Dashboard/Page.php',
        'EasyWatermark\\Dashboard\\Permissions' => __DIR__ . '/../..' . '/src/classes/Dashboard/Permissions.php',
        'EasyWatermark\\Dashboard\\Settings' => __DIR__ . '/../..' . '/src/classes/Dashboard/Settings.php',
        'EasyWatermark\\Dashboard\\Tools' => __DIR__ . '/../..' . '/src/classes/Dashboard/Tools.php',
        'EasyWatermark\\Dashboard\\Watermarks' => __DIR__ . '/../..' . '/src/classes/Dashboard/Watermarks.php',
        'EasyWatermark\\Features\\AutoWatermarkSwitch' => __DIR__ . '/../..' . '/src/classes/Features/AutoWatermarkSwitch.php',
        'EasyWatermark\\Features\\CacheBusting' => __DIR__ . '/../..' . '/src/classes/Features/CacheBusting.php',
        'EasyWatermark\\Features\\SrcsetFilter' => __DIR__ . '/../..' . '/src/classes/Features/SrcsetFilter.php',
        'EasyWatermark\\Features\\WatermarkPreview' => __DIR__ . '/../..' . '/src/classes/Features/WatermarkPreview.php',
        'EasyWatermark\\Helpers\\Image' => __DIR__ . '/../..' . '/src/classes/Helpers/Image.php',
        'EasyWatermark\\Helpers\\Text' => __DIR__ . '/../..' . '/src/classes/Helpers/Text.php',
        'EasyWatermark\\Metaboxes\\AttachmentMetabox' => __DIR__ . '/../..' . '/src/classes/Metaboxes/AttachmentMetabox.php',
        'EasyWatermark\\Metaboxes\\Attachment\\Watermarks' => __DIR__ . '/../..' . '/src/classes/Metaboxes/Attachment/Watermarks.php',
        'EasyWatermark\\Metaboxes\\Metabox' => __DIR__ . '/../..' . '/src/classes/Metaboxes/Metabox.php',
        'EasyWatermark\\Metaboxes\\WatermarkMetabox' => __DIR__ . '/../..' . '/src/classes/Metaboxes/WatermarkMetabox.php',
        'EasyWatermark\\Metaboxes\\Watermark\\Alignment' => __DIR__ . '/../..' . '/src/classes/Metaboxes/Watermark/Alignment.php',
        'EasyWatermark\\Metaboxes\\Watermark\\ApplyingRules' => __DIR__ . '/../..' . '/src/classes/Metaboxes/Watermark/ApplyingRules.php',
        'EasyWatermark\\Metaboxes\\Watermark\\Placeholders' => __DIR__ . '/../..' . '/src/classes/Metaboxes/Watermark/Placeholders.php',
        'EasyWatermark\\Metaboxes\\Watermark\\Preview' => __DIR__ . '/../..' . '/src/classes/Metaboxes/Watermark/Preview.php',
        'EasyWatermark\\Metaboxes\\Watermark\\Scaling' => __DIR__ . '/../..' . '/src/classes/Metaboxes/Watermark/Scaling.php',
        'EasyWatermark\\Metaboxes\\Watermark\\Submitdiv' => __DIR__ . '/../..' . '/src/classes/Metaboxes/Watermark/Submitdiv.php',
        'EasyWatermark\\Metaboxes\\Watermark\\TextOptions' => __DIR__ . '/../..' . '/src/classes/Metaboxes/Watermark/TextOptions.php',
        'EasyWatermark\\Metaboxes\\Watermark\\WatermarkContent' => __DIR__ . '/../..' . '/src/classes/Metaboxes/Watermark/WatermarkContent.php',
        'EasyWatermark\\Placeholders\\Abstracts\\EmailPlaceholder' => __DIR__ . '/../..' . '/src/classes/Placeholders/Abstracts/EmailPlaceholder.php',
        'EasyWatermark\\Placeholders\\Abstracts\\IntegerPlaceholder' => __DIR__ . '/../..' . '/src/classes/Placeholders/Abstracts/IntegerPlaceholder.php',
        'EasyWatermark\\Placeholders\\Abstracts\\Placeholder' => __DIR__ . '/../..' . '/src/classes/Placeholders/Abstracts/Placeholder.php',
        'EasyWatermark\\Placeholders\\Abstracts\\StringPlaceholder' => __DIR__ . '/../..' . '/src/classes/Placeholders/Abstracts/StringPlaceholder.php',
        'EasyWatermark\\Placeholders\\Abstracts\\UrlPlaceholder' => __DIR__ . '/../..' . '/src/classes/Placeholders/Abstracts/UrlPlaceholder.php',
        'EasyWatermark\\Placeholders\\Attachment\\AttachmentDirectUrl' => __DIR__ . '/../..' . '/src/classes/Placeholders/Attachment/AttachmentDirectUrl.php',
        'EasyWatermark\\Placeholders\\Attachment\\AttachmentHeight' => __DIR__ . '/../..' . '/src/classes/Placeholders/Attachment/AttachmentHeight.php',
        'EasyWatermark\\Placeholders\\Attachment\\AttachmentID' => __DIR__ . '/../..' . '/src/classes/Placeholders/Attachment/AttachmentID.php',
        'EasyWatermark\\Placeholders\\Attachment\\AttachmentMimeType' => __DIR__ . '/../..' . '/src/classes/Placeholders/Attachment/AttachmentMimeType.php',
        'EasyWatermark\\Placeholders\\Attachment\\AttachmentPage' => __DIR__ . '/../..' . '/src/classes/Placeholders/Attachment/AttachmentPage.php',
        'EasyWatermark\\Placeholders\\Attachment\\AttachmentSize' => __DIR__ . '/../..' . '/src/classes/Placeholders/Attachment/AttachmentSize.php',
        'EasyWatermark\\Placeholders\\Attachment\\AttachmentTitle' => __DIR__ . '/../..' . '/src/classes/Placeholders/Attachment/AttachmentTitle.php',
        'EasyWatermark\\Placeholders\\Attachment\\AttachmentUploadDate' => __DIR__ . '/../..' . '/src/classes/Placeholders/Attachment/AttachmentUploadDate.php',
        'EasyWatermark\\Placeholders\\Attachment\\AttachmentWidth' => __DIR__ . '/../..' . '/src/classes/Placeholders/Attachment/AttachmentWidth.php',
        'EasyWatermark\\Placeholders\\Author\\AuthorDisplayName' => __DIR__ . '/../..' . '/src/classes/Placeholders/Author/AuthorDisplayName.php',
        'EasyWatermark\\Placeholders\\Author\\AuthorEmail' => __DIR__ . '/../..' . '/src/classes/Placeholders/Author/AuthorEmail.php',
        'EasyWatermark\\Placeholders\\Author\\AuthorFirstName' => __DIR__ . '/../..' . '/src/classes/Placeholders/Author/AuthorFirstName.php',
        'EasyWatermark\\Placeholders\\Author\\AuthorID' => __DIR__ . '/../..' . '/src/classes/Placeholders/Author/AuthorID.php',
        'EasyWatermark\\Placeholders\\Author\\AuthorLastName' => __DIR__ . '/../..' . '/src/classes/Placeholders/Author/AuthorLastName.php',
        'EasyWatermark\\Placeholders\\Author\\AuthorLogin' => __DIR__ . '/../..' . '/src/classes/Placeholders/Author/AuthorLogin.php',
        'EasyWatermark\\Placeholders\\Author\\AuthorNicename' => __DIR__ . '/../..' . '/src/classes/Placeholders/Author/AuthorNicename.php',
        'EasyWatermark\\Placeholders\\Author\\AuthorRole' => __DIR__ . '/../..' . '/src/classes/Placeholders/Author/AuthorRole.php',
        'EasyWatermark\\Placeholders\\Author\\AuthorUrl' => __DIR__ . '/../..' . '/src/classes/Placeholders/Author/AuthorUrl.php',
        'EasyWatermark\\Placeholders\\Blog\\AdminEmail' => __DIR__ . '/../..' . '/src/classes/Placeholders/Blog/AdminEmail.php',
        'EasyWatermark\\Placeholders\\Blog\\BlogName' => __DIR__ . '/../..' . '/src/classes/Placeholders/Blog/BlogName.php',
        'EasyWatermark\\Placeholders\\Blog\\BlogUrl' => __DIR__ . '/../..' . '/src/classes/Placeholders/Blog/BlogUrl.php',
        'EasyWatermark\\Placeholders\\DateTime\\Date' => __DIR__ . '/../..' . '/src/classes/Placeholders/DateTime/Date.php',
        'EasyWatermark\\Placeholders\\DateTime\\Time' => __DIR__ . '/../..' . '/src/classes/Placeholders/DateTime/Time.php',
        'EasyWatermark\\Placeholders\\Defaults' => __DIR__ . '/../..' . '/src/classes/Placeholders/Defaults.php',
        'EasyWatermark\\Placeholders\\Resolver' => __DIR__ . '/../..' . '/src/classes/Placeholders/Resolver.php',
        'EasyWatermark\\Placeholders\\User\\UserDisplayName' => __DIR__ . '/../..' . '/src/classes/Placeholders/User/UserDisplayName.php',
        'EasyWatermark\\Placeholders\\User\\UserEmail' => __DIR__ . '/../..' . '/src/classes/Placeholders/User/UserEmail.php',
        'EasyWatermark\\Placeholders\\User\\UserFirstName' => __DIR__ . '/../..' . '/src/classes/Placeholders/User/UserFirstName.php',
        'EasyWatermark\\Placeholders\\User\\UserID' => __DIR__ . '/../..' . '/src/classes/Placeholders/User/UserID.php',
        'EasyWatermark\\Placeholders\\User\\UserLastName' => __DIR__ . '/../..' . '/src/classes/Placeholders/User/UserLastName.php',
        'EasyWatermark\\Placeholders\\User\\UserLogin' => __DIR__ . '/../..' . '/src/classes/Placeholders/User/UserLogin.php',
        'EasyWatermark\\Placeholders\\User\\UserNicename' => __DIR__ . '/../..' . '/src/classes/Placeholders/User/UserNicename.php',
        'EasyWatermark\\Placeholders\\User\\UserRole' => __DIR__ . '/../..' . '/src/classes/Placeholders/User/UserRole.php',
        'EasyWatermark\\Placeholders\\User\\UserUrl' => __DIR__ . '/../..' . '/src/classes/Placeholders/User/UserUrl.php',
        'EasyWatermark\\Settings\\Field' => __DIR__ . '/../..' . '/src/classes/Settings/Field.php',
        'EasyWatermark\\Settings\\Fields\\Checkbox' => __DIR__ . '/../..' . '/src/classes/Settings/Fields/Checkbox.php',
        'EasyWatermark\\Settings\\Fields\\Dropdown' => __DIR__ . '/../..' . '/src/classes/Settings/Fields/Dropdown.php',
        'EasyWatermark\\Settings\\Fields\\Number' => __DIR__ . '/../..' . '/src/classes/Settings/Fields/Number.php',
        'EasyWatermark\\Settings\\Fields\\SwitchField' => __DIR__ . '/../..' . '/src/classes/Settings/Fields/SwitchField.php',
        'EasyWatermark\\Settings\\Fields\\Text' => __DIR__ . '/../..' . '/src/classes/Settings/Fields/Text.php',
        'EasyWatermark\\Settings\\Section' => __DIR__ . '/../..' . '/src/classes/Settings/Section.php',
        'EasyWatermark\\Settings\\Settings' => __DIR__ . '/../..' . '/src/classes/Settings/Settings.php',
        'EasyWatermark\\Traits\\Hookable' => __DIR__ . '/../..' . '/src/classes/Traits/Hookable.php',
        'EasyWatermark\\Watermark\\Ajax' => __DIR__ . '/../..' . '/src/classes/Watermark/Ajax.php',
        'EasyWatermark\\Watermark\\Handler' => __DIR__ . '/../..' . '/src/classes/Watermark/Handler.php',
        'EasyWatermark\\Watermark\\Hooks' => __DIR__ . '/../..' . '/src/classes/Watermark/Hooks.php',
        'EasyWatermark\\Watermark\\PostType' => __DIR__ . '/../..' . '/src/classes/Watermark/PostType.php',
        'EasyWatermark\\Watermark\\Preview' => __DIR__ . '/../..' . '/src/classes/Watermark/Preview.php',
        'EasyWatermark\\Watermark\\Watermark' => __DIR__ . '/../..' . '/src/classes/Watermark/Watermark.php',
        'Micropackage\\Singleton\\Singleton' => __DIR__ . '/..' . '/micropackage/singleton/src/Singleton.php',
        'underDEV_Requirements' => __DIR__ . '/..' . '/underdev/requirements/underDEV_Requirements.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfc0147afb354c48a40c96eb7211d8b4a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfc0147afb354c48a40c96eb7211d8b4a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfc0147afb354c48a40c96eb7211d8b4a::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitfc0147afb354c48a40c96eb7211d8b4a::$classMap;

        }, null, ClassLoader::class);
    }
}
