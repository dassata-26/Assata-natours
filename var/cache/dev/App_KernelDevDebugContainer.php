<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHsmVMc3\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHsmVMc3/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHsmVMc3.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHsmVMc3\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHsmVMc3\App_KernelDevDebugContainer([
    'container.build_hash' => 'HsmVMc3',
    'container.build_id' => 'e2e9e0b6',
    'container.build_time' => 1601572739,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHsmVMc3');
