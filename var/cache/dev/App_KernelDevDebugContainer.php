<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0xSSF2n\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0xSSF2n/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container0xSSF2n.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container0xSSF2n\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container0xSSF2n\App_KernelDevDebugContainer([
    'container.build_hash' => '0xSSF2n',
    'container.build_id' => '4765c3dc',
    'container.build_time' => 1592159728,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0xSSF2n');