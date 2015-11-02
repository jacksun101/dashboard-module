<?php namespace Anomaly\DashboardModule\Widget\Contract;

use Anomaly\DashboardModule\Widget\Extension\Contract\WidgetExtensionInterface;
use Anomaly\DashboardModule\Widget\WidgetData;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Anomaly\UsersModule\Role\RoleCollection;

/**
 * Interface WidgetInterface
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\DashboardModule\Widget\Contract
 */
interface WidgetInterface extends EntryInterface
{

    /**
     * Get the pinned flag.
     *
     * @return bool
     */
    public function isPinned();

    /**
     * Get the column.
     *
     * @return int
     */
    public function getColumn();

    /**
     * Get the extension.
     *
     * @return WidgetExtensionInterface
     */
    public function getExtension();

    /**
     * Get the allowed roles.
     *
     * @return RoleCollection
     */
    public function getAllowedRoles();

    /**
     * Get the content.
     *
     * @return string
     */
    public function getContent();

    /**
     * Set the content.
     *
     * @param $content
     * @return $this
     */
    public function setContent($content);

    /**
     * Get the data.
     *
     * @return WidgetData
     */
    public function getData();

    /**
     * Add to the widget data.
     *
     * @param $key
     * @param $data
     * @return $this
     */
    public function addData($key, $data);

    /**
     * Return the widget output.
     *
     * @return string
     */
    public function output();
}
