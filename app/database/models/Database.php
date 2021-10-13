<?php

namespace app\database\models;

use app\traits\Read;
use app\traits\Connection;

abstract class Database
{
    use Read, Connection;
}
