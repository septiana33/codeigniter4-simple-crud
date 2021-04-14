<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'posts';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'object';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['title', 'content'];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField      	= 'deleted_at';

	// Validation
	protected $validationRules      = [
		'title' => 'required|min_length[3]|max_length[100]',
		'content' => 'required',
	];
	protected $validationMessages   = [
		'title' => [
			'required' => 'Judul postingan diperlukan',
			'min_length' => 'Panjang judul postingan minimal 3 karakter', 
			'max_length' => 'Panjang judul postingan maksimal 100 karakter',
		],
		'content' => [
			'required' => 'Konten postingan diperlukan',
		],
	];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];
}
