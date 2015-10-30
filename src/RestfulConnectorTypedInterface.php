<?php

/**
 * @file
 * Contains \RestfulConnector\RestfulConnectorTypedInterface.
 *
 * (c) Ryan Armstrong <jenova49@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RestfulConnector;

/**
 * Interface that all Restful Typed Connectors must implement.
 *
 * @author Ryan Armstrong <jenova49@gmail.com>
 */
interface RestfulConnectorTypedInterface
{
    /**
     * @todo Write the documentation.
     */
    public function collection($type, array $filters);

    /**
     * @todo Write the documentation.
     */
    public function create($type);

    /**
     * @todo Write the documentation.
     */
    public function retrieve($type, $id);

    /**
     * @todo Write the documentation.
     */
    public function update($type, $id, array $fields);

    /**
     * @todo Write the documentation.
     */
    public function delete($type, $id);
}
