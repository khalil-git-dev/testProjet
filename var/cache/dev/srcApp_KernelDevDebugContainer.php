<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPxqRbEG\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPxqRbEG/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPxqRbEG.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPxqRbEG\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerPxqRbEG\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'PxqRbEG',
    'container.build_id' => '2658efc4',
    'container.build_time' => 1619787546,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPxqRbEG');
