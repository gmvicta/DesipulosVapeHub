<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQBH8wqc\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQBH8wqc/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerQBH8wqc.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerQBH8wqc\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerQBH8wqc\appAppKernelProdContainer([
    'container.build_hash' => 'QBH8wqc',
    'container.build_id' => 'b0e8b3f3',
    'container.build_time' => 1728744101,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQBH8wqc');
