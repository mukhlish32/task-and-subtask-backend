<?php

namespace App\Services;

use App\Repositories\TaskRepository;

class TaskService {
	private TaskRepository $taskRepository;

	public function __construct() {
		$this->taskRepository = new TaskRepository();
	}

	/**
	 * NOTE: untuk mengambil semua tasks di collection task
	 */
	public function getTasks()
	{
		$tasks = $this->taskRepository->getAll();
		return $tasks;
	}

	/**
	 * NOTE: menambahkan task
	 */
	public function addTask(array $data)
	{
		$taskId = $this->taskRepository->create($data);
		return $taskId;
	}

	/**
	 * NOTE: UNTUK mengambil data task
	 */
	public function getById(string $taskId)
	{
		$task = $this->taskRepository->getById($taskId);
		return $task;
	}

	/**
	 * NOTE: untuk update task
	 */
	public function updateTask(array $editTask, array $formData)
	{
		if(isset($formData['title']))
		{
			$editTask['title'] = $formData['title'];
		}

		if(isset($formData['description']))
		{
			$editTask['description'] = $formData['description'];
		}

		$id = $this->taskRepository->save($editTask);
		return $id;
	}

	/**
	 * NOTE: untuk delete task
	 */
	public function deleteTask(string $taskId)
	{
		$this->taskRepository->deleteTask($taskId);
	}

	public function assignTask(array $editTask, string $assigned)
	{
		$editTask['assigned'] = $assigned;

		$id = $this->taskRepository->save($editTask);
		return $id;
	}

	// TODO: unassignTask()
	public function unassignTask(array $editTask)
	{
		$editTask['assigned'] = null;

		$id = $this->taskRepository->save($editTask);
		return $id;
	}

	// TODO: createSubtask()
	public function createSubtask(array $editTask, array $subTask)
	{
		if(isset($subTask))
		{
			$editTask['subtasks'][] = $subTask;
		}

		$id = $this->taskRepository->save($editTask);
		return $id;
	}

	// TODO deleteSubTask()
	public function deleteSubtask(array $editTask, string $subTaskId)
	{
		if(isset($subTaskId))
		{
			$editTask['subtasks'] = array_filter($editTask['subtasks'], function($subtask) use($subTaskId) {
				if($subtask['_id'] == $subTaskId)
				{
					return false;
				} else {
					return true;
				}
			});
		}

		$id = $this->taskRepository->save($editTask);
		return $id;
	}
}