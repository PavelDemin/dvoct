<?php
/**
*
* Thanks For Posts extension for the phpBB Forum Software package.
*
* @copyright (c) 2013 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace gfksx\ThanksForPosts\acp;

class acp_thanks_truncate_info
{
	function module()
	{
		return array(
			'filename'	=> '\gfksx\ThanksForPosts\acp\acp_thanks_truncate_module',
			'title'		=> 'ACP_THANKS_TRUNCATE',
			'version'	=> '1.3.4',
			'modes'		=> array(
				'thanks'			=> array('title' => 'ACP_THANKS_TRUNCATE', 'auth' => 'ext_gfksx/ThanksForPosts && acl_a_board', 'cat' => array('ACP_THANKS')),
			),
		);
	}
}
