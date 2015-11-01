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
     * Retrieve a collection of resources based on a set of filters.
     * 
     * @param  string     $type    The resource types to collect.
     * @param  array|null $filters Optional filters to use. An array of 
     *                             field_key => value.
     * 
     * @return Response
     */
    public function collection($type, array $filters);

    /**
     * Create a resource.
     * 
     * @param  string $type     The resource type to create.
     * @param  object $resource The full resource object to create.
     * 
     * @return Response
     */
    public function create($type, $resource);

    /**
     * Retrieve a resource.
     * 
     * @param  string $type The resource type to retrieve.
     * @param  mixed  $id   The ID of the resource to retrieve.
     * 
     * @return Response
     */
    public function retrieve($type, $id);

    /**
     * Replace a resource.
     * 
     * @param  string $type     The resource type to update.
     * @param  mixed  $id       The ID of the resource to update.
     * @param  object $resource The full resource object to create.
     * 
     * @return Response
     */
    public function replace($type, $id, $resource);

    /**
     * Update a resource.
     * 
     * @param  string $type   The resource type to update.
     * @param  mixed  $id     The ID of the resource to update.
     * @param  array  $fields An array of field_key => value to update via PATCH.
     * 
     * @return Response
     */
    public function update($type, $id, array $fields);

    /**
     * Delete a resource.
     * 
     * @param  string $type The resource type to delete.
     * @param  mixed  $id   The ID of the resource to delete.
     * 
     * @return Response
     */
    public function delete($type, $id);
}
