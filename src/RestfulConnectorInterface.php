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
     * Retrieve a collection of resources based on a set of filters.
     * 
     * @param  array|null $filters Optional filters to use. An array of 
     *                             field_key => value.
     * 
     * @return Response
     */
    public function collection(array $filters);

    /**
     * Create a resource.
     * 
     * @param  object $resource The full resource object to create.
     * 
     * @return Response
     */
    public function create($resource);

    /**
     * Retrieve a resource.
     * 
     * @param  mixed  $id   The ID of the resource to retrieve.
     * 
     * @return Response
     */
    public function retrieve($id);

    /**
     * Replace a resource.
     * 
     * @param  mixed  $id       The ID of the resource to update.
     * @param  object $resource The full resource object to create.
     * 
     * @return Response
     */
    public function replace($id, array $resource);

    /**
     * Update a resource.
     * 
     * @param  mixed  $id     The ID of the resource to update.
     * @param  array  $fields An array of field_key => value to update via PATCH.
     * 
     * @return Response
     */
    public function update($id, array $fields);

    /**
     * Delete a resource.
     * 
     * @param  mixed  $id   The ID of the resource to delete.
     * 
     * @return Response
     */
    public function delete($id);
}
