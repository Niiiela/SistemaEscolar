<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SistemaEscolarTable extends Migration
{
    public function up()
    {
        // Create Sistema Escolar table

$this->forge->addField([
	'id' => [
	'type' => 'INT',
	'constraint' => 11,
	'auto_increment' => true
	],
	'name' => [
	'type' => 'VARCHAR',
	'constraint' => 50,
	],
	'address' => [
	'type' => 'VARCHAR',
	'constraint' => 250,
	],
	'phone' => [
	'type' => 'VARCHAR',
	'constraint' => 20,
	],
	'email' => [
	'type' => 'VARCHAR',
	'constraint' => 50,
	],
	'created_at' => [
		'type' => 'DATETIME',
		'null' => true
	],
	'update_at' => [
		'type' => 'DATETIME',
		'null' => true
	],
	'deleted_at' => [
		'type' => 'DATETIME',
		'null' => true
	]
]);
$this->forge->addKey('id', true);
$this->forge->createTable('sistemaescolar');
    }

    public function down()
    {
        //
    }
}
