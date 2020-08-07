<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Aluno extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id'          => [
					'type'           => 'INT',
					'unsigned'       => true,
					'auto_increment' => true,
					'not_null' => true,
			],
			'nome'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
			],
			'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '250'
			],
			'data_nasc'       => [
				'type'           => 'Date',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('aluno');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('aluno');
	}
}
