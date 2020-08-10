<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddMatricula extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id' => [
				'type'           => 'INT',
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'id_aluno' => [
				'type'           => 'INT',
				'unsigned'       => true,
			],
			'id_curso' => [
				'type'           => 'INT',
				'unsigned'       => true,
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('matricula');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('matricula');
	}
}
