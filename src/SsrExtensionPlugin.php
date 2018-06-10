<?php namespace Defr\SsrExtension;

use Anomaly\Streams\Platform\Addon\Plugin\Plugin;

/**
 * Class SsrExtensionPlugin
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Denis Efremov <efremov.a.denis@gmail.com>
 */
class SsrExtensionPlugin extends Plugin
{

    /**
     * Return plugin functions.
     *
     * @return array
     */
    public function getFunctions()
    {
        $this->functions[] = new \Twig_SimpleFunction(
            'ssr',
            function (string $entry = null) {
                return func_num_args() === 0
                  ? app('ssr')
                  : app('ssr')->entry($entry);
            }
        );

        return $this->functions;
    }
}
