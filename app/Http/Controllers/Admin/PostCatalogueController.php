<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\PostCatalogueRepositoryInterface;
use App\Services\Interfaces\PostCatalogueServiceInterface;

class PostCatalogueController extends Controller
{

    protected $postCatalogueRepository;
    protected $postCatalogueService;

    public function __construct(
        PostCatalogueRepositoryInterface $postCatalogueRepository,
        PostCatalogueServiceInterface $postCatalogueService
    ) {
        $this->postCatalogueRepository = $postCatalogueRepository;
        $this->postCatalogueService = $postCatalogueService;
    }

    public function index(Request $request)
    {
        $post_catalogues = $this->postCatalogueService->paginate($request);
        // $model = 'PostCatalogue';
        return view('admin.post.catalogue.index', compact('model'));
    }

    public function create()
    {
        $model = 'PostCatalogue';
        return view('admin.post.catalogue.store', compact('model'));
    }
}