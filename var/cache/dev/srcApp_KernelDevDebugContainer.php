<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGgXYlS4\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGgXYlS4/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGgXYlS4.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGgXYlS4\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerGgXYlS4\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'GgXYlS4',
    'container.build_id' => '32f3ee3f',
    'container.build_time' => 1561618013,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGgXYlS4');
