<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXLEquGf\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXLEquGf/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXLEquGf.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXLEquGf\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXLEquGf\App_KernelDevDebugContainer([
    'container.build_hash' => 'XLEquGf',
    'container.build_id' => '94ef7e16',
    'container.build_time' => 1724712064,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXLEquGf');
