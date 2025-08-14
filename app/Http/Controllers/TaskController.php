<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        $userRole = session('user_role', 'viewer');
        return view('tasks.index', compact('tasks', 'userRole'));
    }

    public function show(Task $task)
    {
        $userRole = session('user_role', 'viewer');
        return view('tasks.show', compact('task', 'userRole'));
    }

    public function increment(Request $request, Task $task)
    {
        // Only Lukosius can edit tasks
        if (session('user_role') !== 'admin') {
            return redirect()->back()->with('error', 'You do not have permission to edit tasks.');
        }

        if ($task->goal !== null) {
            $task->incrementCount();
        } else {
            // For tasks without goals, just mark as completed
            $task->update(['status' => Task::STATUS_COMPLETED]);
        }

        return redirect()->back()->with('success', 'Task updated successfully!');
    }

    public function decrement(Request $request, Task $task)
    {
        // Only Lukosius can edit tasks
        if (session('user_role') !== 'admin') {
            return redirect()->back()->with('error', 'You do not have permission to edit tasks.');
        }

        if ($task->goal !== null && $task->count > 0) {
            $task->decrement('count');
            
            // If count goes below goal, set status back to in_progress
            if ($task->count < $task->goal) {
                $task->update(['status' => Task::STATUS_IN_PROGRESS]);
            }
        } else {
            // For tasks without goals, toggle between in_progress and completed
            $newStatus = $task->status === Task::STATUS_COMPLETED 
                ? Task::STATUS_IN_PROGRESS 
                : Task::STATUS_COMPLETED;
            $task->update(['status' => $newStatus]);
        }

        return redirect()->back()->with('success', 'Task updated successfully!');
    }
}
