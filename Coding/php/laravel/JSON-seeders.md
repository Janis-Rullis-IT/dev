# JSON-seeders.md

* Export table in mysql workbench as JSON.
* In the testing env (parent or the test) read a specific kind of seed. You can have users seeder but pass only males or females.
* Pass the seed to the Seeder stored in database/seeds which accepts this JSON, decodes and then passes to the model creator like User::create[$name, $surname].
