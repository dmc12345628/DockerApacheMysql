<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHx43dz3\appProdDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHx43dz3/appProdDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerHx43dz3.legacy');

    return;
}

if (!\class_exists(appProdDebugProjectContainer::class, false)) {
    \class_alias(\ContainerHx43dz3\appProdDebugProjectContainer::class, appProdDebugProjectContainer::class, false);
}

return new \ContainerHx43dz3\appProdDebugProjectContainer(array(
    'container.build_hash' => 'Hx43dz3',
    'container.build_id' => '4982d69a',
    'container.build_time' => 1519823026,
));
