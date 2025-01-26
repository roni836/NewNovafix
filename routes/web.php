<?php

use App\Http\Controllers\DecisionTreeController;
use Illuminate\Support\Facades\Route;


Route::get('/decision-tree/start', [DecisionTreeController::class, 'start'])->name('decision_tree.start');
Route::post('/decision-tree/problems', [DecisionTreeController::class, 'getProblems'])->name('decision_tree.get_problems');
Route::post('/decision-tree/show', [DecisionTreeController::class, 'show'])->name('decision_tree.show');
Route::get('/decision-tree/question/{id}', [DecisionTreeController::class, 'showQuestion'])->name('decision_tree.show_question');
Route::post('/decision-tree/question/{id}/answer', [DecisionTreeController::class, 'answer'])->name('decision_tree.answer');

Route::post('/decision-tree/add-question', [DecisionTreeController::class, 'addQuestion'])->name('decision_tree.add_question');