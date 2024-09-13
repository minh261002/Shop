<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserStoreRequest;
use App\Http\Requests\Admin\UserUpdateRequest;
use App\Services\Interfaces\UserServiceInterface;
use App\Repositories\Interfaces\ProvinceRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;
    protected $provinceRepository;
    protected $userRepository;

    public function __construct(
        UserServiceInterface $userService,
        ProvinceRepositoryInterface $provinceRepository,
        UserRepositoryInterface $userRepository
    ) {
        $this->userService = $userService;
        $this->provinceRepository = $provinceRepository;
        $this->userRepository = $userRepository;
    }

    public function index(Request $request)
    {
        $users = $this->userService->paginate($request);
        $model = 'User';
        return view('admin.user.user.index', compact('users', 'model'));
    }

    public function create()
    {
        $type = 'create';
        $provinces = $this->provinceRepository->all();
        return view('admin.user.user.store', compact('type', 'provinces'));
    }

    public function store(UserStoreRequest $request)
    {
        $this->userService->create($request);
        notyf()->success(message: 'Thêm mới thành công');
        return redirect()->route('admin.user.index');
    }

    public function edit($id)
    {
        $type = 'edit';
        $provinces = $this->provinceRepository->all();
        $user = $this->userRepository->findById($id);
        return view('admin.user.user.store', compact('type', 'user', 'provinces'));
    }

    public function update($id, UserUpdateRequest $request)
    {
        $this->userService->update($id, $request);
        notyf()->success(message: 'Cập nhật thành công');
        return redirect()->back();
    }

    public function destroy($id)
    {
        if ($this->userService->destroy($id)) {
            notyf()->success(message: 'Xóa bản ghi thành công');
            return response()->json(['message' => 'Xóa bản ghi thành công'], 200);
        }

        notyf()->error(message: 'Xóa bản ghi thất bại');
        return response()->json(['message' => 'Xóa bản ghi thất bại'], 500);
    }
}