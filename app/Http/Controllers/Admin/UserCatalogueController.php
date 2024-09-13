<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserCatalogueStoreRequest;
use App\Http\Requests\Admin\UserCatalogueUpdateRequest;
use Illuminate\Http\Request;
use App\Services\Interfaces\UserCatalogueServiceInterface;
use App\Repositories\Interfaces\UserCatalogueRepositoryInterface;

class UserCatalogueController extends Controller
{
    protected $userCatalogueService;
    protected $userCatalogueRepository;

    public function __construct(
        UserCatalogueServiceInterface $userCatalogueService,
        UserCatalogueRepositoryInterface $userCatalogueRepository
    ) {
        $this->userCatalogueService = $userCatalogueService;
        $this->userCatalogueRepository = $userCatalogueRepository;
    }

    public function index(Request $request)
    {
        $user_catalogues = $this->userCatalogueService->paginate($request);
        $model = 'UserCatalogue';
        return view('admin.user.catalogue.index', compact('user_catalogues', 'model'));
    }

    public function create()
    {
        $type = 'create';
        return view('admin.user.catalogue.store', compact('type'));
    }

    public function store(UserCatalogueStoreRequest $request)
    {
        $this->userCatalogueService->create($request);
        notyf()->success(message: 'Thêm mới thành công');
        return redirect()->route('admin.user.catalogue.index');
    }

    public function edit($id)
    {
        $type = 'edit';
        $user_catalogue = $this->userCatalogueRepository->findById($id);
        return view('admin.user.catalogue.store', compact('type', 'user_catalogue'));
    }

    public function update($id, UserCatalogueUpdateRequest $request)
    {
        $this->userCatalogueService->update($id, $request);
        notyf()->success(message: 'Cập nhật thành công');
        return redirect()->route('admin.user.catalogue.edit', $id);
    }

    public function destroy($id)
    {
        if ($this->userCatalogueRepository->delete($id)) {
            notyf()->success(message: 'Xóa bản ghi thành công');
            return response()->json(['message' => 'Xóa bản ghi thành công'], 200);
        }

        notyf()->error(message: 'Xóa bản ghi thất bại');
        return response()->json(['message' => 'Xóa bản ghi thất bại'], 500);
    }
}