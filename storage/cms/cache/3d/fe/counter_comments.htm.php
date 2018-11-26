<?php 
class Cms5bec12cfb925b848290746_d91e427f09cc3bc0f4cfb83a609b9084Class extends Cms\Classes\PartialCode
{
public function onEnd() {
    $this['qty'] = Db::table('xeor_comments_comments')->where('cid', $this['cid'])->count();

}
}
