<?php

namespace LrphptTest\DoctrineHydrationModule\Hydrator;

use Psr\Container\ContainerInterface;
use Lrphpt\DoctrineHydrationModule\Hydrator\DoctrineHydrator;
use Laminas\Hydrator\ArraySerializableHydrator;

final class CustomBuildHydratorFactory
{
    public function __invoke(
        ContainerInterface $container,
        $requestedName,
        array $options = null
    ) {
        return new ArraySerializableHydrator();
    }
}
