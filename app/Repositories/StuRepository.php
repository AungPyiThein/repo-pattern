<?php
namespace App\Repositories;
use App\Student;

Class StuRepository extends BaseRepository
{
    protected $model;

	public function __construct(Student $model)
	{
		$this->model = $model;
    }
    public function studentAll()
    {
        return $this->model->get();
    }


}

?>
