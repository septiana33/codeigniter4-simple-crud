<?php

namespace App\Controllers;

use App\Models\PostModel;
use App\Controllers\BaseController;

class Posts extends BaseController
{
	public function __construct()
	{
		$this->pager = \Config\Services::pager();
		$this->session = \Config\Services::session();
		$this->request = \Config\Services::request();
	}

	public function index()
	{
		$postModel = new PostModel;

		$postData = $postModel->orderBy('created_at', 'DESC')->paginate(4);

		$data = [
			'title' => 'Daftar Postingan',
			'posts' => $postData,
			'pager' => $postModel->pager,
			'session' => $this->session,
		];

		return view('post_index', $data);
	}

	public function add()
	{
		$data = [
			'title' => 'Tambah Postingan',
			'session' => $this->session,
		];

		return view('post_add', $data);
	}

	public function store()
	{
		$postModel = new PostModel;

		$data = [
			'title' => $this->request->getPost('title'),
			'content' => $this->request->getPost('content'),
		];

		if ($postModel->save($data) === TRUE) {

			$this->session->setFlashdata('success', 'Postingan berhasil ditambahkan.');

			return redirect()->back();
		} else {

			$this->session->setFlashdata('failed', $postModel->errors());

			return redirect()->back()->withInput();
		}
	}

	public function detail()
	{
		$id = $this->request->getGet('id');

		if (!empty($id)) {

			$postModel = new PostModel;

			if ($postModel->find($id) !== NULL) {

				$postData = $postModel->where('id', $id)->findAll();

				$data = [
					'id' => $id,
					'title' => 'Detail Postingan',
					'posts' => $postData,
					'session' => $this->session,
				];

				return view('post_detail', $data);
			} else {

				return redirect('posts');
			}
		} else {

			return redirect('posts');
		}
	}

	public function delete()
	{
		$id = $this->request->getGet('id');

		if (!empty($id)) {

			$postModel = new PostModel;

			if ($postModel->find($id) !== NULL) {

				$postModel->where('id', $id)->delete();

				$this->session->setFlashdata('success', 'Postingan berhasil dihapus.');

				return redirect('posts');
			} else {

				return redirect('posts');
			}
		} else {

			return redirect('posts');
		}
	}

	public function edit()
	{
		$id = $this->request->getGet('id');

		if (!empty($id)) {

			$postModel = new PostModel;

			if ($postModel->find($id) !== NULL) {

				$postData = $postModel->where('id', $id)->findAll();

				$data = [
					'id' => $id,
					'title' => 'Ubah Postingan',
					'posts' => $postData,
					'session' => $this->session,
				];

				return view('post_edit', $data);
			} else {

				return redirect('posts');
			}
		} else {

			return redirect('posts');
		}
	}

	public function update()
	{
		$id = $this->request->getGet('id');

		if (!empty($id)) {

			$postModel = new PostModel;

			if ($postModel->find($id) !== NULL) {

				$data = [
					'title' => $this->request->getPost('title'),
					'content' => $this->request->getPost('content'),
				];

				if ($postModel->update($id, $data) === TRUE) {

					$this->session->setFlashdata('success', 'Postingan berhasil diperbarui.');

					return redirect()->to('detail?id=' . $id);
				} else {

					$this->session->setFlashdata('failed', $postModel->errors());

					return redirect()->back();
				}
			} else {

				return redirect('posts');
			}
		} else {

			return redirect('posts');
		}
	}
}
