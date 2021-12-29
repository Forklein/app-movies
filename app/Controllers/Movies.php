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
        // if ($query) dd($query);
        /*         if (isset($_GET['search'])) {
            $query = $_GET['search'];
            dd($query);
        } else {
            $db = \Config\Database::connect();
            $builder = $db->table('movies');
            $movies = $builder->get()->getResultArray();
            dd($movies);
        } */
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
        $new_movie = new MovieModel();
        $new_movie->insert($data);
        return redirect('movies');
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
        $model = model(MovieModel::class);
        $movie = $model->where('id', $id)->findAll();
        $movie->replace($data);
        return redirect()->route('movies');
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
        return redirect()->back();
    }
}
