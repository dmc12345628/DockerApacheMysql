<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTyxzpxi\appTestDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTyxzpxi/appTestDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerTyxzpxi.legacy');

    return;
}

if (!\class_exists(appTestDebugProjectContainer::class, false)) {
    \class_alias(\ContainerTyxzpxi\appTestDebugProjectContainer::class, appTestDebugProjectContainer::class, false);
}

return new \ContainerTyxzpxi\appTestDebugProjectContainer(array(
    'container.build_hash' => 'Tyxzpxi',
    'container.build_id' => '2f2b789e',
    'container.build_time' => 1519824469,
));