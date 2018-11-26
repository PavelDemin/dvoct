<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * phpbb_url_generator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class phpbb_url_generator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'phpbb_feed_forums' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'phpbb.feed.controller:forums',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/feed/forums',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_feed_news' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'phpbb.feed.controller:news',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/feed/news',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_feed_topics' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'phpbb.feed.controller:topics',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/feed/topics',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_feed_topics_active' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'phpbb.feed.controller:topics_active',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/feed/topics_active',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_feed_topics_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'phpbb.feed.controller:topics_new',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/feed/topics_new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_feed_forum' => array (  0 =>   array (    0 => 'forum_id',  ),  1 =>   array (    '_controller' => 'phpbb.feed.controller:forum',  ),  2 =>   array (    'forum_id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'forum_id',    ),    1 =>     array (      0 => 'text',      1 => '/feed/forum',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_feed_topic' => array (  0 =>   array (    0 => 'topic_id',  ),  1 =>   array (    '_controller' => 'phpbb.feed.controller:topic',  ),  2 =>   array (    'topic_id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'topic_id',    ),    1 =>     array (      0 => 'text',      1 => '/feed/topic',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_feed_overall' => array (  0 =>   array (    0 => 'mode',  ),  1 =>   array (    '_controller' => 'phpbb.feed.controller:overall',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'mode',    ),    1 =>     array (      0 => 'text',      1 => '/feed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_feed_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'phpbb.feed.controller:overall',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/feed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_help_bbcode_controller' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'phpbb.help.controller.bbcode:handle',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/help/bbcode',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_help_faq_controller' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'phpbb.help.controller.faq:handle',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/help/faq',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_report_pm_controller' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'phpbb.report.controller:handle',    'mode' => 'pm',  ),  2 =>   array (    'id' => '\\d+',    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/report',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/pm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_report_post_controller' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'phpbb.report.controller:handle',    'mode' => 'post',  ),  2 =>   array (    'id' => '\\d+',    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/report',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/post',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gfksx_ThanksForPosts_thankslist_controller_user' => array (  0 =>   array (    0 => 'mode',    1 => 'author_id',    2 => 'give',    3 => 'tslash',  ),  1 =>   array (    '_controller' => 'gfksx.ThanksForPosts.controller.thankslist:main',    'top' => 0,    'start' => 0,    'sort_key' => 'a',    'sort_dir' => 'd',    'topic_id' => 0,    'return_chars' => 300,  ),  2 =>   array (    'mode' => '\\w+',    'author_id' => '\\d+',    'give' => 'true|false',    'tslash' => '/?',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '/?',      3 => 'tslash',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'true|false',      3 => 'give',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'author_id',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '\\w+',      3 => 'mode',    ),    4 =>     array (      0 => 'text',      1 => '/thankslist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gfksx_ThanksForPosts_thankslist_controller' => array (  0 =>   array (    0 => 'tslash',  ),  1 =>   array (    '_controller' => 'gfksx.ThanksForPosts.controller.thankslist:main',    'mode' => '',    'author_id' => 1,    'give' => '',    'top' => 0,    'start' => 0,    'sort_key' => 'a',    'sort_dir' => 'd',    'topic_id' => 0,    'return_chars' => 300,  ),  2 =>   array (    'tslash' => '/?',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '/?',      3 => 'tslash',    ),    1 =>     array (      0 => 'text',      1 => '/thankslist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gfksx_ThanksForPosts_toplist_controller' => array (  0 =>   array (    0 => 'tslash',  ),  1 =>   array (    '_controller' => 'gfksx.ThanksForPosts.controller.toplist:main',    'mode' => '',    'start' => 0,    'topic_id' => 0,    'return_chars' => 300,  ),  2 =>   array (    'tslash' => '/?',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '/?',      3 => 'tslash',    ),    1 =>     array (      0 => 'text',      1 => '/toplist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sheer_postbookmark_controller' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sheer.postbookmark.controller:main',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/postbookmark',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}