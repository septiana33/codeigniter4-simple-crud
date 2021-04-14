<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PostsTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'BIGINT',
				'constraint' => 20,
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
			],
			'title' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
				'null' => FALSE,
			],
			'content' => [
				'type' => 'LONGTEXT',
				'null' => TRUE,
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => TRUE,
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => TRUE,
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('posts');
	}

	public function down()
	{
		$this->forge->dropTable('posts');
	}
}
