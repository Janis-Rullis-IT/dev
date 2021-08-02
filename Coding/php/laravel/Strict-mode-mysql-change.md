# Change-MYSQLs-Strict-mode.md

* https://github.com/Janis-Rullis-IT/sql/blob/4651cd55f766dfdb50b501286cbfe68412975b1d/mysql/Strict-disable.md

```php
$sql = "SELECT @@sql_mode as sql_mode;";
$result = \DB::select(\DB::raw($sql));
$currentMode = $result[0]->sql_mode;
//   "@@sql_mode": "ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION"

\DB::statement("SET sql_mode='STRICT_TRANS_TABLES'");
$sql = "SELECT @@sql_mode;";
// +"@@sql_mode": "STRICT_TRANS_TABLES"
\DB::statement("SET sql_mode=?",[$currentMode]);
$sql = "SELECT @@sql_mode;";

$result = \DB::select(\DB::raw($sql));
dd($result);
//   "@@sql_mode": "ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION"
```
