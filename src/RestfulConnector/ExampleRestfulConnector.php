<?php

/**
 * @file
 * Contains \RestfulConnector\Connector\ExampleRestfulConnector.
 *
 * (c) Ryan Armstrong <jenova49@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RestfulConnector;

use RestfulConnector\RestfulConnectorInterface;

/**
 * Interface that all Restful Connectors must implement.
 *
 * @author Ryan Armstrong <jenova49@gmail.com>
 */
class ExampleRestfulConnector implements RestfulConnectorInterface
{
    /**
     * @todo Write the documentation.
     */
    public function collection(array $filters) {
        return 'This is a collection connection';
    }

    /**
     * @todo Write the documentation.
     */
    public function create() {
        return 'This is a creation connection';
    }

    /**
     * @todo Write the documentation.
     */
    public function retrieve($id) {
        return 'This is a retrieval connection';
    }

    /**
     * @todo Write the documentation.
     */
    public function update($id, array $fields) {
        return 'This is a update connection';
    }

    /**
     * @todo Write the documentation.
     */
    public function delete($id) {
        return 'This is a delete connection';
    }    
}
