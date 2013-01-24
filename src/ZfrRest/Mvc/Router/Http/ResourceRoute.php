<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

namespace ZfrRest\Mvc;

use Zend\Stdlib\RequestInterface;
use Zend\Mvc\Router\Http\RouteInterface;
use ZfrRest\Resource\ResourceLoaderManagerInterface;
use ZfrRest\Resource\ResourceManagerInterface;

/**
 * HttpExceptionListener
 *
 * @license MIT
 * @author  Marco Pivetta <ocramius@gmail.com>
 */
class ResourceRoute implements RouteInterface
{
    /**
     * @var \ZfrRest\Resource\ResourceManagerInterface
     */
    protected $resourceManager;

    /**
     * @var \ZfrRest\Resource\ResourceLoaderManagerInterface
     */
    protected $resourceLoaderManager;

    /**
     * @var mixed
     */
    protected $resource;

    /**
     * @var string
     */
    protected $resourceName;

    /**
     * @param \ZfrRest\Resource\ResourceManagerInterface       $resourceManager
     * @param \ZfrRest\Resource\ResourceLoaderManagerInterface $resourceLoaderManager
     * @param                                                  $resource
     * @param                                                  $resourceName
     */
    public function __construct(
        ResourceManagerInterface $resourceManager,
        ResourceLoaderManagerInterface $resourceLoaderManager,
        $resource,
        $resourceName
    ) {
        $this->resourceManager = $resourceManager;
        $this->resourceLoaderManager = $resourceLoaderManager;
        $this->resource = $resource;
        $this->resourceName = (string) $resourceName;
    }

    /**
     * {@inheritDoc}
     */
    public function assemble(array $params = array(), array $options = array())
    {
        throw new \BadMethodCallException('Not yet implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getAssembledParams()
    {
        throw new \BadMethodCallException('Not yet implemented');
    }

    /**
     * {@inheritDoc}
     */
    public static function factory($options = array())
    {
        throw new \BadMethodCallException('Not yet implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function match(RequestInterface $request)
    {
        throw new \BadMethodCallException('Not yet implemented');

        // @todo match first segment (configured in options)
        // @todo match subsequent segments by using the segments themselves as association and indexes of collections
    }
}