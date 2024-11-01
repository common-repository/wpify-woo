<?php

declare (strict_types=1);
namespace WpifyWooDeps\Endroid\QrCode\Builder;

interface BuilderRegistryInterface
{
    public function getBuilder(string $name) : BuilderInterface;
    public function addBuilder(string $name, BuilderInterface $builder) : void;
}
