<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOonNzz3\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOonNzz3/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOonNzz3.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOonNzz3\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOonNzz3\App_KernelDevDebugContainer([
    'container.build_hash' => 'OonNzz3',
    'container.build_id' => 'f1f62cbd',
    'container.build_time' => 1593555258,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOonNzz3');
