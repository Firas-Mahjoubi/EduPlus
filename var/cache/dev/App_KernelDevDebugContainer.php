<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVZ4SGRz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVZ4SGRz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVZ4SGRz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVZ4SGRz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVZ4SGRz\App_KernelDevDebugContainer([
    'container.build_hash' => 'VZ4SGRz',
    'container.build_id' => '85752641',
    'container.build_time' => 1732139903,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVZ4SGRz');
