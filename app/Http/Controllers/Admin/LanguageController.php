<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LanguagePostRequest;
use App\Http\Requests\Admin\LanguageUpdateRequest;
use App\Services\Interfaces\LanguageServiceInterface;
use App\Repositories\Interfaces\LanguageRepositoryInterface;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    protected $languageService;
    protected $languageRepository;

    public function __construct(
        LanguageServiceInterface $languageService,
        LanguageRepositoryInterface $languageRepository
    ) {
        $this->languageService = $languageService;
        $this->languageRepository = $languageRepository;
    }

    public function index(Request $request)
    {
        $languages = $this->languageService->paginate($request);
        $model = 'Language';
        return view('admin.languages.index', compact('languages', 'model'));
    }

    public function create()
    {
        $type = 'create';
        return view('admin.languages.store', compact('type'));
    }

    public function store(LanguagePostRequest $request)
    {
        $this->languageService->create($request);
        notyf()->success('Thêm ngôn ngữ mới thành công');
        return redirect()->route('admin.language.index');
    }

    public function edit($id)
    {
        $language = $this->languageRepository->findById($id);
        $type = 'edit';
        return view('admin.languages.store', compact('language', 'type'));
    }

    public function update($id, LanguageUpdateRequest $request)
    {
        $this->languageService->update($id, $request);
        notyf()->success('Cập nhật ngôn ngữ thành công');
        return redirect()->route('admin.language.index');
    }

    public function destroy($id)
    {
        $this->languageRepository->delete($id);
        notyf()->success('Xóa ngôn ngữ thành công');
        return response()->json(['status' => 'success']);
    }
}