<?php

/**
 * @file
 * Contains \RestfulConnector\RestfulConnectorInterface.
 *
 * (c) Ryan Armstrong <jenova49@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RestfulConnector;

/**
 * Interface that all Restful Connectors must implement.
 *
 * @author Ryan Armstrong <jenova49@gmail.com>
 */
interface RestfulConnectorInterface
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
