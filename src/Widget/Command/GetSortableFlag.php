<?php namespace Anomaly\DashboardModule\Widget\Command;

use Anomaly\DashboardModule\Widget\Contract\WidgetInterface;
use Anomaly\Streams\Platform\Support\Authorizer;
use Illuminate\Contracts\Bus\SelfHandling;

/**
 * Class GetSortableFlag
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DashboardModule\Widget\Command
 */
class GetSortableFlag implements SelfHandling
{

    /**
     * The widget instance.
     *
     * @var WidgetInterface
     */
    protected $widget;

    /**
     * Create a new GetSortableFlag instance.
     *
     * @param WidgetInterface $widget
     */
    public function __construct(WidgetInterface $widget)
    {
        $this->widget = $widget;
    }

    /**
     * Handle the command.
     *
     * @param Authorizer $authorizer
     * @return bool
     */
    public function handle(Authorizer $authorizer)
    {
        return $authorizer->authorize('anomaly.module.dashboard::dashboard.write');
    }
}
