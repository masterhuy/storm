<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4bsdsyu\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4bsdsyu/appProdProjectContainer.php') {
    touch(__DIR__.'/Container4bsdsyu.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container4bsdsyu\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container4bsdsyu\appProdProjectContainer(array(
    'container.build_hash' => '4bsdsyu',
    'container.build_id' => 'dd60a9a0',
    'container.build_time' => 1537323635,
), __DIR__.\DIRECTORY_SEPARATOR.'Container4bsdsyu');
