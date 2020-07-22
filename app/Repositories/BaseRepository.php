<?php
namespace App\Repositories;
use Illuminate\Support\Facades\Validator;
abstract class BaseRepository
{
    protected $model;

    public function __construct(\Model $model)
    {
        $this->model = $model;
    }
    public function create(array $data)
    {
        return $this->model->create($data);
    }
    public function getAll()
    {
        return $this->model->orderBy('id','DESC')->get();
    }
    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }


    // public function taskassign($id,$status)
    // {

    //     $model = $this->getById($id);

    //     $data = [];

    //     $data['status_id'] = $status;
    //     $data['user_id'] = 1;
    //     $model->fill($data);
    //     return $model->push();
        
    // }
    // public function delete($id)
    // {
    //     return $this->model->destroy($id);
    // }
    // public function validator(array $data)
    // {
    //     $validator = Validator::make($data,[
    //         'name' => 'required',
    //     ]);
    //     return $validator;
    // }


}

?>
