<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWUxWxOf\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWUxWxOf/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWUxWxOf.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWUxWxOf\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWUxWxOf\App_KernelDevDebugContainer([
    'container.build_hash' => 'WUxWxOf',
    'container.build_id' => '3454bd31',
    'container.build_time' => 1599161223,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWUxWxOf');