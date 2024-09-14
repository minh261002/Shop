<?php

namespace App\Services;

use App\Services\Interfaces\LanguageServiceInterface;
use App\Repositories\Interfaces\LanguageRepositoryInterface;
use App\Services\BaseService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LanguageService extends BaseService implements LanguageServiceInterface
{
    protected $languageRepository;

    public function __construct(
        LanguageRepositoryInterface $languageRepository
    ) {
        $this->languageRepository = $languageRepository;
    }

    public function paginate($request)
    {
        $condition['keyword'] = $request->input('keyword', '');

        $publish = $request->input('publish');
        if (!is_null($publish) && $publish !== '') {
            $condition['publish'] = (int) $publish;
        } else {
            $condition['publish'] = 0;
        }

        $perPage = $request->integer('perpage', 10);

        $languages = $this->languageRepository->languagePagination(
            $this->paginateSelect(),
            $condition,
            $perPage
        );

        return $languages;
    }


    public function create($request)
    {
        DB::beginTransaction();
        try {
            $payload = $request->except(['_token']);
            $payload['user_id'] = Auth::id();

            $this->languageRepository->create($payload);
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            echo $e->getMessage();
            return false;
        }
    }

    public function update($id, $request)
    {
        DB::beginTransaction();
        try {
            $payload = $request->except(['_token', '_method']);

            $this->languageRepository->update($id, $payload);
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            echo $e->getMessage();
            return false;
        }
    }

    public function delete($id)
    {
        DB::beginTransaction();
        try {
            $this->languageRepository->delete($id);
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            echo $e->getMessage();
            return false;
        }
    }


    public function paginateSelect()
    {
        return [
            'id',
            'name',
            'canonical',
            'publish',
            'image'
        ];
    }
}