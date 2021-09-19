<?php

namespace App\Http\Controllers;
use Illuminate\Notifications\DatabaseNotification as Notification;
use App\Helper;
use \Exception;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function all(){
    	try {
			$page = request()->query('page', 1);
			$pageSize = request()->query('pageSize', 10000000);
			$data = auth()->user()->notifications()
				->paginate($pageSize);
			$builtData = Helper::buildData($data);
			return Helper::validRequest($builtData, 'All notifications fetched successfully', 200);
		} catch (Exception $bug) {
			return $this->exception($bug, 'unknown error', 500);
		}
    }
    public function unread(){
    	try {
			$page = request()->query('page', 1);
			$pageSize = request()->query('pageSize', 10000000);
			$data = auth()->user()->unreadNotifications()
				->paginate($pageSize);
			$builtData = Helper::buildData($data);
			return Helper::validRequest($builtData, 'All unread notifications fetched successfully', 200);
		} catch (Exception $bug) {
			return $this->exception($bug, 'unknown error', 500);
		}
    }
    public function markAllAsRead(){
		try {
			auth()->user()->unreadNotifications->markAsRead();
			return Helper::validRequest(["action" => true], 'All unread notifications marked as read successfully.', 200);
		} catch (Exception $bug) {
			return $this->exception($bug, 'unknown error', 500);
		}
    }
    public function markAsRead(Notification $NotificationID){
    	try {
			$NotificationID->markAsRead();
			return Helper::validRequest(["action" => true], 'Specific notification marked as read successfully.', 200);
		} catch (Exception $bug) {
			return $this->exception($bug, 'unknown error', 500);
		}
    }
    public function deleteAll(){
    	try {
			auth()->user()->notifications()->delete();
			return Helper::validRequest(["action" => true], 'All notifications deleted successfully.', 200);
		} catch (Exception $bug) {
			return $this->exception($bug, 'unknown error', 500);
		}
    }
    public function delete(Notification $NotificationID){
    	try {
			$NotificationID->delete();
			return Helper::validRequest(["action" => true], 'Specific notification deleted successfully.', 200);
		} catch (Exception $bug) {
			return $this->exception($bug, 'unknown error', 500);
		}
    }
}
