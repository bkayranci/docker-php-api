<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class ContainersCreatePostBodyNetworkingConfig
{
    /**
     * A mapping of network name to endpoint configuration for that network.
     *
     * @var EndpointSettings[]
     */
    protected $endpointsConfig;

    /**
     * A mapping of network name to endpoint configuration for that network.
     *
     * @return EndpointSettings[]
     */
    public function getEndpointsConfig(): ?\ArrayObject
    {
        return $this->endpointsConfig;
    }

    /**
     * A mapping of network name to endpoint configuration for that network.
     *
     * @param EndpointSettings[] $endpointsConfig
     *
     * @return self
     */
    public function setEndpointsConfig(?\ArrayObject $endpointsConfig): self
    {
        $this->endpointsConfig = $endpointsConfig;

        return $this;
    }
}
