<?php

use Security\UUID;

echo Uuid::generate();

echo "<br /><br />";

echo (new Uuid)->createGUID();

echo "<br /><br />";

echo (new Uuid)->uuid();