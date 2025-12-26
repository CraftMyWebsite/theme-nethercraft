<?php

namespace CMW\Theme\Nethercraft;

use CMW\Manager\Theme\IThemeConfigV2;

class Theme implements IThemeConfigV2
{
    public function name(): string
    {
        return "Nethercraft";
    }

    public function version(): string
    {
        return "0.1.2";
    }

    public function cmwVersion(): string
    {
        return "beta-01";
    }

    public function authors(): array
    {
        return ['Zomb'];
    }

    public function compatiblesPackages(): array
    {
        return [
            "Core", "Pages", "Users"
        ];
    }

    public function requiredPackages(): array
    {
        return ["Core", "Users"];
    }

    public function imageLink(): ?string
    {
        return null;
    }

}