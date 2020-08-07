<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCurso extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id'          => [
					'type'           => 'INT',
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'titulo'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
			],
			'descricao'       => [
				'type'           => 'TEXT',
			],
			'id_area'       => [
				'type'           => 'INT',
				'unsigned'       => true,
				'auto_increment' => true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('curso');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//curso
		$this->forge->dropTable('curso');
	}
}
