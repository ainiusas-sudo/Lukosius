<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class ProgressController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        $userRole = session('user_role', 'viewer');
        
        // Calculate overall progress
        $totalTasks = $tasks->count();
        $completedTasks = $tasks->where('status', 'completed')->count();
        
        // Calculate percentage
        $overallPercentage = $totalTasks > 0 ? round(($completedTasks / $totalTasks) * 100) : 0;
        
        // Get award based on percentage
        $award = $this->getAward($overallPercentage);
        
        // Calculate tasks needed for next award
        $tasksToNextAward = $this->getTasksToNextAward($completedTasks, $totalTasks);
        $nextAwardName = $this->getNextAwardName($overallPercentage);
        
        return view('progress.index', compact(
            'tasks', 
            'userRole', 
            'totalTasks', 
            'completedTasks', 
            'overallPercentage', 
            'award',
            'tasksToNextAward',
            'nextAwardName'
        ));
    }
    
    private function getAward($percentage)
    {
        if ($percentage == 0) return ['name' => 'Razzie Award', 'emoji' => '🍅', 'description' => 'Worst Director'];
        if ($percentage <= 20) return ['name' => 'Student Film Festival', 'emoji' => '📱', 'description' => 'First Time Director'];
        if ($percentage <= 40) return ['name' => 'Independent Spirit Award', 'emoji' => '🎬', 'description' => 'Best First Feature'];
        if ($percentage <= 60) return ['name' => 'Golden Globe', 'emoji' => '🌍', 'description' => 'Best Director'];
        if ($percentage <= 80) return ['name' => 'Directors Guild Award', 'emoji' => '🎭', 'description' => 'Outstanding Directing'];
        if ($percentage < 100) return ['name' => 'Critics Choice Award', 'emoji' => '⭐', 'description' => 'Best Director'];
        return ['name' => 'Academy Award (Oscar)', 'emoji' => '🏆', 'description' => 'Best Director'];
    }
    
    private function getTasksToNextAward($completedTasks, $totalTasks)
    {
        if ($totalTasks === 0) return 0;
        
        $percentage = ($completedTasks / $totalTasks) * 100;
        
        // Define award thresholds
        if ($percentage < 20) {
            $targetPercentage = 20;
        } elseif ($percentage < 40) {
            $targetPercentage = 40;
        } elseif ($percentage < 60) {
            $targetPercentage = 60;
        } elseif ($percentage < 80) {
            $targetPercentage = 80;
        } elseif ($percentage < 100) {
            $targetPercentage = 100;
        } else {
            return 0; // Already at 100%
        }
        
        $targetCompleted = ceil(($targetPercentage / 100) * $totalTasks);
        return max(0, $targetCompleted - $completedTasks);
    }
    
    private function getNextAwardName($percentage)
    {
        if ($percentage < 20) return 'Student Film Festival';
        if ($percentage < 40) return 'Independent Spirit Award';
        if ($percentage < 60) return 'Golden Globe';
        if ($percentage < 80) return 'Directors Guild Award';
        if ($percentage < 100) return 'Oscaro';
        return null;
    }
}
