<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFcPIxvR\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFcPIxvR/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerFcPIxvR.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerFcPIxvR\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerFcPIxvR\App_KernelProdContainer([
    'container.build_hash' => 'FcPIxvR',
    'container.build_id' => 'e7a37c9e',
    'container.build_time' => 1667605868,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFcPIxvR');
