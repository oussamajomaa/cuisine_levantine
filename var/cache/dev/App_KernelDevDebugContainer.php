<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRXo9p5f\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRXo9p5f/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRXo9p5f.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRXo9p5f\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRXo9p5f\App_KernelDevDebugContainer([
    'container.build_hash' => 'RXo9p5f',
    'container.build_id' => '7925a349',
    'container.build_time' => 1605866691,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRXo9p5f');
