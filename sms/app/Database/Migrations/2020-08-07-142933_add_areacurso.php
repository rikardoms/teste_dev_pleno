<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAreacurso extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'desc'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('area_curso');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('area_curso');
	}
}
