<?php

namespace Installer\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class ModuleInstaller extends LibraryInstaller
{
    public function getInstallPath(PackageInterface $package)
    {
        return '.';
/*
        $extra = $package->getExtra();
        if (isset($extra['moduleName']) && $extra['moduleName'] != '') {
            return 'module/'.$extra['moduleName'];
        }
        return 'module';
*/
    }

    public function supports($packageType)
    {
        return 'qcovery-module' === $packageType;
    }
}
© 2022 GitHub, Inc.
Terms
