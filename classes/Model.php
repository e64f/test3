<?php


class Model {
    private $db;
    private $config;

    function __construct()
    {
        include_once("config.php");
        $this->config = $config;

        require_once('lib/go-db/goDB/autoload.php');
        \go\DB\autoloadRegister();

        $this->db = go\DB\DB::create($mysqlConfig, 'mysql');
    }

    public function getData($page = 1, $sort)
	{
        $total = $this->db->query('SELECT count(*) cnt FROM tbl_tasks', [], 'assoc');
        $start = $page * 3 - 3;
        $taskOnPage = 3;


        $tasks = $this->db->query('SELECT id, email, user, txt, isEdit, isDone FROM tbl_tasks ORDER BY '.$sort['by'].' '.$sort['order'].' limit ?, ?', [$start, $taskOnPage], 'assoc');
	    return array('total' => $total[0]['cnt'], 'tasks' => $tasks);
	}

	public function getTask($id) {
        return $this->db->query('SELECT id, email, user, txt, isEdit, isDone FROM tbl_tasks where id = ?', [$id], 'assoc');
    }

	public function saveTask($data) {
        $this->db->query('INSERT INTO tbl_tasks (email, user, txt) VALUES (?, ?, ?);', [$data['email'], $data['user'], $data['task']]);
    }

    public function updateTask($data) {
        if ( $data['task'] != $data['task2']) {
            $this->db->query('UPDATE tbl_tasks SET txt = ?, isEdit = 1, isDone = ? WHERE id = ?;', [$data['task'], $data['isdone'], $data['id']]);
        } else {
            $this->db->query('UPDATE tbl_tasks SET isDone = ? WHERE id = ?;', [$data['isdone'], $data['id']]);
        }
    }
}