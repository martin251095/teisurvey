<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9q0Chgx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9q0Chgx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9q0Chgx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9q0Chgx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container9q0Chgx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '9q0Chgx',
    'container.build_id' => 'eae5a60e',
    'container.build_time' => 1561607179,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9q0Chgx');
