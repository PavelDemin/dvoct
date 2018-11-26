<?php namespace Xeor\Comments\Classes;

use DB;
use Log;

class Helper {

    private function getOneLevel($id)
    {
        $results = Db::select('select id from xeor_comments_comments where parent_id = ?', [$id]);

        $ids = array();
        if ($results) {
            foreach ($results as $result) {
                $ids[] = $result->id;
            }
        }
        return $ids;
    }

    public function getChildren($parent_id)
    {
        $tree = Array();
        if (!empty($parent_id)) {
            $tree = $this->getOneLevel($parent_id);
            foreach ($tree as $key => $val) {
                $ids = $this->getChildren($val);
                $tree = array_merge($tree, $ids);
            }
        }
        return $tree;
    }

    public static function getTotal($commentId) {
        $total = 0;
        $res = Db::select('select id from xeor_comments_votes where comment_id = ?', [$commentId]);
        if (isset($res) && !empty($res)) {
            $total = count($res);
        }
        return $total;
    }

    public static function getScore($commentId, $rateType) {
        $score = 0;
        $res = Db::select('select value from xeor_comments_votes where comment_id = ?', [$commentId]);
        $totalArr = array();
        if (isset($res) && !empty($res)) {
            foreach ($res as $val) {
                $totalArr[] = (int) $val->value;
            }
        }
        if (!empty($totalArr)) {
            switch ($rateType) {
                case 'stars':
                    $score = round(array_sum($totalArr) / count($totalArr));
                    break;
                case 'number':
                    $score = array_sum($totalArr);
                    break;
                default:
                    $score = 0;
            }
        }
        return $score;
    }
}