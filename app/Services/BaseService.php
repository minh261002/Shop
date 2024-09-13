<?php

namespace App\Services;
use App\Services\Interfaces\BaseServiceInterface;
use Illuminate\Support\Facades\DB;

class BaseService implements BaseServiceInterface
{
    public function updateStatus($post = []){
        DB::beginTransaction();
        try{
            $model = lcfirst($post['model']).'Repository';
            $payload[$post['field']] = (($post['value'] == 1)?2:1);
            $post = $this->{$model}->update($post['modelId'], $payload);

            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            echo $e->getMessage();
            return false;
        }
    }

    public function updateStatusAll($post){
        DB::beginTransaction();
        try{
            $model = lcfirst($post['model']).'Repository';
            $payload[$post['field']] = $post['value'];
            $flag = $this->{$model}->updateByWhereIn('id', $post['id'], $payload);

            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            echo $e->getMessage();
            return false;
        }
    }
}