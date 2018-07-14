<?php
namespace App\Services;
use Exception;
use Illuminate\Auth\AuthManager;
use Illuminate\Database\DatabaseManager;
use Illuminate\Events\Dispatcher;
use App\Repositories\TaskInterface;
use Illuminate\Http\Request;
use App\Task;
class TaskServices
{

    private $taskRepository;
    public function __construct(TaskInterface $taskRepository) {

        $this->taskRepository = $taskRepository;
    }

    public function create(Request $request)
    {
        $data = $request->all();
        return $this->taskRepository->create($data);

    }
    public function update(Request $request,Task $task)
    {
        $data = $request->all();
        $response = $this->taskRepository->update($task, $data);
return $response;

    }

}