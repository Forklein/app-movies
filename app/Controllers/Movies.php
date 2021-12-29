<?php

namespace App\Controllers;

use App\Models\MovieModel;
use CodeIgniter\RESTful\ResourceController;

class Movies extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $model = model(MovieModel::class);
        $request = \Config\Services::request();
        $query = $request->getGet();
        if (isset($query['search'])) {
            $movies = $model->like('name', $query['search'])->findAll();
        } else {
            $movies = $model->findAll();
        }
        return view('movies/index', compact('movies'));
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $model = model(MovieModel::class);
        $movie = $model->where('id', $id)->findAll();
        if (!$movie) {
            return view('errors/html/error_404');
        } else {
            return view('movies/show', compact('movie'));
        }
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        return view('movies/create');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $request = \Config\Services::request();
        $data = $request->getPost();

        helper(['form', 'url']);

        $error = $this->validate([
            'name' => 'required|min_length[5]',
            'description' => 'required|min_length[10]',
            'genre' => 'required'
        ]);

        if (!$error) {
            return view('movies/create', [
                'error'     => $this->validator
            ]);
        } else {
            $new_movie = new MovieModel();
            $new_movie->insert($data);
            return redirect()->route('movies')->with('alert', 'alert-success')->with('message', 'Movie created successfully');
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $model = model(MovieModel::class);
        $movie = $model->where('id', $id)->findAll();
        if (!$movie) {
            return view('errors/html/error_404');
        } else {
            return view('movies/edit', compact('movie'));
        }
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $request = \Config\Services::request();
        $data = $request->getPost();

        $data_update = [
            'name' => $data['name'],
            'description' => $data['description'],
            'genre' => $data['genre'],
        ];
        $model = model(MovieModel::class);
        $model->update($id, $data_update);
        return redirect()->route('movies')->with('alert', 'alert-warning')->with('message', 'Movie edited successfully');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = model(MovieModel::class);
        $model->where('id', $id)->delete();
        return redirect()->back()->with('alert', 'alert-danger')->with('message', 'Movie deleted successfully');
    }
}
