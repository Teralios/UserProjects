<?php

namespace wcf\data\task;

// imports
use wcf\data\DatabaseObject;

/**
 * Class        Task
 * @package     TaskList
 * @subpackage  wcf\data\task
 * @author      Karsten (Teralios) Achterrath
 * @copyright   ©2020 Teralios.de
 * @license     GNU General Public License <https://www.gnu.org/licenses/gpl-3.0.txt>
 *
 * @property-read int $taskID
 * @property-read int $userID
 * @property-read int $created
 * @property-read int $deadline
 * @property-read int $updated
 * @property-read int $visibility
 * @property-read int $priority
 * @property-read int $status
 * @property-read string $title
 * @property-read string $message
 * @property-read int $subtask
 * @property-read int $completed
 */
class Task extends DatabaseObject
{
    // inherit var
    protected static $databaseTableName = 'task';
    protected static $databaseTableIndexName = 'taskID';

    // visible status
    const VISIBLE_PRIVATE = 0;
    const VISIBLE_FOLLOWER = 1;
    const VISIBLE_PUBLIC = 2;

    // task status
    const STATUS_OPEN = 0;
    const STATUS_IN_PROCESS = 1;
    const STATUS_FINISHED = 2;

    // priority
    const PRIORITY_LOW = 0;
    const PRIORITY_NORMAL = 1;
    const PRIORITY_HIGH = 2;
    const PRIORITY_ALERT = 3;
}