<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUyNbyRe\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUyNbyRe/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUyNbyRe.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUyNbyRe\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUyNbyRe\App_KernelDevDebugContainer([
    'container.build_hash' => 'UyNbyRe',
    'container.build_id' => '2e6314c3',
    'container.build_time' => 1730942730,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUyNbyRe');
