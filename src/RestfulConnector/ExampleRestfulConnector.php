<?php

/**
 * @file
 * Contains \RestfulConnector\ConnectorInterface.
 *
 * (c) Ryan Armstrong <jenova49@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RestfulConnector

use RestfulConnector\RestfulConnectorInterface

/**
 * Interface that all Restful Connectors must implement.
 *
 * @author Ryan Armstrong <jenova49@gmail.com>
 */
class ConnectorInterface implements ConnectorInterface
{
    /**
     * @todo Write the documentation.
     */
    public function collection(array $filters);

    /**
     * @todo Write the documentation.
     */
    public function create();

    /**
     * @todo Write the documentation.
     */
    public function retrieve($id);

    /**
     * @todo Write the documentation.
     */
    public function update($id, array $fields);

    /**
     * @todo Write the documentation.
     */
    public function delete($id);
}
