<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2zUVQlT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2zUVQlT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2zUVQlT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2zUVQlT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container2zUVQlT\App_KernelDevDebugContainer([
    'container.build_hash' => '2zUVQlT',
    'container.build_id' => 'c03ac8b8',
    'container.build_time' => 1592676330,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2zUVQlT');
