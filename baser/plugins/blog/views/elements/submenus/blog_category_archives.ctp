<?php
/* SVN FILE: $Id$ */
/**
 * ブログカテゴリー一覧
 *
 * TODO 前バージョンとの互換用に残しているので不要になったら削除する
 * 
 * PHP versions 4 and 5
 *
 * BaserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2010, Catchup, Inc.
 *								9-5 nagao 3-chome, fukuoka-shi 
 *								fukuoka, Japan 814-0123
 *
 * @copyright		Copyright 2008 - 2010, Catchup, Inc.
 * @link			http://basercms.net BaserCMS Project
 * @package			baser.plugins.blog.views
 * @since			Baser v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
if(isset($blogContent)){
	$id = $blogContent['BlogContent']['id'];
}else{
	$id = $blog_content_id;
}
$data = $this->requestAction('/blog/get_categories/'.$id);
$categories = $data['categories'];
$this->viewVars['blogContent'] = $data['blogContent'];
App::import('Helper','Blog.Blog');
$blog = new BlogHelper();
?>

<div class="side-navi blog-categories-archives">
	<h2><?php echo $blogContent['BlogContent']['title'] ?>カテゴリー</h2>
	<?php echo $blog->getCategoryList($categories) ?> </div>